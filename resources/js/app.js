require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
Vue.use(VueRouter)

import Vuex from 'vuex'
Vue.use(Vuex)

import storeData from './store/store.js'
const store = new Vuex.Store(
    storeData
)

import Swal from 'sweetalert2'
window.Swal =  Swal;
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    // timerProgressBar: true,
    // onOpen: (toast) => {
    //     toast.addEventListener('mouseenter', Swal.stopTimer)
    //     toast.addEventListener('mouseleave', Swal.resumeTimer)
    // }
})
window.Toast = Toast;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('admin-main', require('./components/public/master.vue').default);
Vue.component('header-main', require('./components/public/include/header.vue').default);
Vue.component('footer-main', require('./components/public/include/footer.vue').default);



import {routes} from './routes.js';
const router = new VueRouter({
    routes, // short for `routes: routes`
    mode:'hash'
})

const app = new Vue({
    el: '#app',
    router,
    store
});
