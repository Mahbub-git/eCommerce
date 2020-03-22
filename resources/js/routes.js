import AdminHomeComponent from './components/public/home'
import ProductCategoryComponent from './components/public/product-category'
import SingleProductComponent from './components/public/SingleProduct'
import CartComponent from './components/public/cart'
export const routes = [
    {
        path: '/',
        component: AdminHomeComponent
    },
    {
        path: '/product-category/:id',
        component: ProductCategoryComponent
    },
    {
        path: '/product-details/:id',
        component: SingleProductComponent
    },
    {
        path: '/cart',
        component: CartComponent
    },
]