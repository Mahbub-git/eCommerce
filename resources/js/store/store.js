export default {
    state:{
        featured_product:[],
        new_product:[],
        getProductById:[],
        getproductbyid:[],
        cartproducts:[]
    },
    getters:{
        getProduct(state){
            return state.featured_product
        },
        newProduct(state){
            return state.new_product
        },
        getProductByCatId(state){
            return state.getProductById
        },
        getProductById(state){
            return state.getproductbyid
        },
        getCartProducts(state){
            return state.cartproducts
        },
    },
    actions:{
        allProducts(context){
            axios.get('/featured-products')
                .then((response)=>{
                    // console.log(response.data.featured)
                    context.commit('featuredProducts',response.data.featured)
                })
        },
        newProducts(context){
            axios.get('/new-products')
                .then((response)=>{
                    // console.log(response.data.featured)
                    context.commit('newproducts',response.data.newProducts)
                })
        },
        allProductsByCatId(context,payload){
            axios.get('/get-products-by-id/'+payload)
                .then((response)=>{
                     //console.log(response.data.catProducts)
                    context.commit('getproductsbycatid',response.data.catProducts)
                })
        },
        singleProductbyId(context,payload){
            axios.get('/getproduct-by-id/'+payload)
                .then((response)=>{
                    console.log(response.data.singleProduct)
                    context.commit('getproductsbyid',response.data.singleProduct)
                })
        },
        showCartProducts(context){
            axios.get('/show-cart')
                .then((response)=>{
                     console.log(response.data.cartProducts)
                    context.commit('getCartProduct',response.data.cartProducts)
                })
        },
    },
    mutations:{
        featuredProducts(state,data){
            return state.featured_product = data
        },
        newproducts(state,data){
            return state.new_product = data
        },
        getproductsbycatid(state,payload){
            return state.getProductById = payload
        },
        getproductsbyid(state,payload){
            return state.getproductbyid = payload
        },
        getCartProduct(state,data){
            return state.cartproducts = data
        },
    }
}