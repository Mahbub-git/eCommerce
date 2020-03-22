<template>
    <div>
        <section class="home_banner_area mb-40">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content row">
                        <div class="col-lg-12">
                            <p class="sub text-uppercase">men Collection</p>
                            <h3><span>Show</span> Your <br />Personal <span>Style</span></h3>
                            <h4>Fowl saw dry which a above together place.</h4>
                            <a class="main_btn mt-40" href="#">View Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!-- Start feature Area -->
        <section class="feature-area section_gap_bottom_custom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <a href="#" class="title">
                                <i class="flaticon-money"></i>
                                <h3>Money back gurantee</h3>
                            </a>
                            <p>Shall open divide a one</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <a href="#" class="title">
                                <i class="flaticon-truck"></i>
                                <h3>Free Delivery</h3>
                            </a>
                            <p>Shall open divide a one</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <a href="#" class="title">
                                <i class="flaticon-support"></i>
                                <h3>Alway support</h3>
                            </a>
                            <p>Shall open divide a one</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-feature">
                            <a href="#" class="title">
                                <i class="flaticon-blockchain"></i>
                                <h3>Secure payment</h3>
                            </a>
                            <p>Shall open divide a one</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End feature Area -->

        <!--================ Feature Product Area =================-->
        <section class="feature_product_area section_gap_bottom_custom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main_title">
                            <h2><span>Featured product</span></h2>
                            <p>Bring called seed first of third give itself now ment</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6" v-for="featureProduct in getFeaturedProduct">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" :src="`${featureProduct.product_image}`" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <button @click="addToCart(item)">
                                        <i class="ti-shopping-cart"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="product-btm">
                                <router-link :to="`/product-details/${featureProduct.id}`" class="d-block">
                                    <h4>{{featureProduct.product_name}}</h4>
                                </router-link>
                                <div class="mt-3">
                                    <span class="mr-4">Tk. {{featureProduct.discount_price}}</span>
                                    <del v-if="featureProduct.discount_price">Tk. {{featureProduct.product_price}}</del>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--================ End Feature Product Area =================-->

        <!--================ Offer Area =================-->
        <section class="offer_area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="offset-lg-4 col-lg-6 text-center">
                        <div class="offer_content">
                            <h3 class="text-uppercase mb-40">all men’s collection</h3>
                            <h2 class="text-uppercase">50% off</h2>
                            <a href="#" class="main_btn mb-20 mt-5">Discover Now</a>
                            <p>Limited Time Offer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Offer Area =================-->

        <!--================ New Product Area =================-->
        <section class="new_product_area section_gap_top section_gap_bottom_custom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main_title">
                            <h2><span>new products</span></h2>
                            <p>{{getAllProduct}}</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="new_product">
                            <h5 class="text-uppercase">collection of 2019</h5>
                            <h3 class="text-uppercase">Men’s summer t-shirt</h3>
                            <div class="product-img">
                                <img class="img-fluid" src="img/product/new-product/new-product1.png" alt="" />
                            </div>
                            <h4>$120.70</h4>
                            <a href="#" class="main_btn">Add to cart</a>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="row">
                            <div class="col-lg-6 col-md-6" v-for="newProduct in getNewProduct">
                                <div class="single-product">
                                    <div class="product-img">
                                        <img class="img-fluid w-100" :src="`${newProduct.product_image}`" alt="" />
                                        <div class="p_icon">
                                            <a href="#">
                                                <i class="ti-eye"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-btm">
                                        <a href="#" class="d-block">
                                            <h4>{{newProduct.product_name}}</h4>
                                        </a>
                                        <div class="mt-3">
                                            <span class="mr-4">Tk. {{newProduct.discount_price}}</span>
                                            <del>Tk. {{newProduct.product_price}}</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End New Product Area =================-->

        <!--================ Inspired Product Area =================-->
        <section class="inspired_product_area section_gap_bottom_custom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main_title">
                            <h2><span>Inspired products</span></h2>
                            <p>Bring called seed first of third give itself now ment</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="img/product/inspired-product/i1.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Latest men’s sneaker</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="img/product/inspired-product/i2.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Latest men’s sneaker</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="img/product/inspired-product/i3.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Latest men’s sneaker</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="img/product/inspired-product/i4.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Latest men’s sneaker</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="img/product/inspired-product/i5.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Latest men’s sneaker</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="img/product/inspired-product/i6.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Latest men’s sneaker</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="img/product/inspired-product/i7.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Latest men’s sneaker</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <div class="product-img">
                                <img class="img-fluid w-100" src="img/product/inspired-product/i8.jpg" alt="" />
                                <div class="p_icon">
                                    <a href="#">
                                        <i class="ti-eye"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-heart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="ti-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-btm">
                                <a href="#" class="d-block">
                                    <h4>Latest men’s sneaker</h4>
                                </a>
                                <div class="mt-3">
                                    <span class="mr-4">$25.00</span>
                                    <del>$35.00</del>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ End Inspired Product Area =================-->

        <!--================ Start Blog Area =================-->
        <section class="blog-area section-gap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="main_title">
                            <h2><span>latest blog</span></h2>
                            <p>Bring called seed first of third give itself now ment</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="thumb">
                                <img class="img-fluid" src="img/b1.jpg" alt="">
                            </div>
                            <div class="short_details">
                                <div class="meta-top d-flex">
                                    <a href="#">By Admin</a>
                                    <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                                </div>
                                <a class="d-block" href="single-blog.html">
                                    <h4>Ford clever bed stops your sleeping
                                        partner hogging the whole</h4>
                                </a>
                                <div class="text-wrap">
                                    <p>
                                        Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                                        Forth.
                                    </p>
                                </div>
                                <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="thumb">
                                <img class="img-fluid" src="img/b2.jpg" alt="">
                            </div>
                            <div class="short_details">
                                <div class="meta-top d-flex">
                                    <a href="#">By Admin</a>
                                    <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                                </div>
                                <a class="d-block" href="single-blog.html">
                                    <h4>Ford clever bed stops your sleeping
                                        partner hogging the whole</h4>
                                </a>
                                <div class="text-wrap">
                                    <p>
                                        Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                                        Forth.
                                    </p>
                                </div>
                                <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="thumb">
                                <img class="img-fluid" src="img/b3.jpg" alt="">
                            </div>
                            <div class="short_details">
                                <div class="meta-top d-flex">
                                    <a href="#">By Admin</a>
                                    <a href="#"><i class="ti-comments-smiley"></i>2 Comments</a>
                                </div>
                                <a class="d-block" href="single-blog.html">
                                    <h4>Ford clever bed stops your sleeping
                                        partner hogging the whole</h4>
                                </a>
                                <div class="text-wrap">
                                    <p>
                                        Let one fifth i bring fly to divided face for bearing the divide unto seed winged divided light
                                        Forth.
                                    </p>
                                </div>
                                <a href="#" class="blog_btn">Learn More <span class="ml-2 ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cart</h4>
                    </div>
                    <div class="modal-body">
                        <shopping-cart inline-template :items="cartItems">
                            <div>
                                <table class="table table-cart">
                                    <tr v-for="(item, index) in items">
                                        <td>{{item.title}}</td>
                                        <td style="width:120px">QTY:
                                            <input v-model="item.qty" class="form-control input-qty" type="number">
                                        </td>
                                        <td class="text-right">${{item.price | formatCurrency}}</td>
                                        <td>
                                            <button @click="removeItem(index)"><span class="glyphicon glyphicon-trash"></span></button>
                                        </td>
                                    </tr>
                                    <tr v-show="items.length === 0">
                                        <td colspan="4" class="text-center">Cart is empty</td>
                                    </tr>
                                    <tr v-show="items.length > 0">
                                        <td></td>
                                        <td class="text-right">Cart Total</td>
                                        <td class="text-right">${{Total | formatCurrency}}</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.container -->
                        </shopping-cart>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "home",
        mounted(){
            this.$store.dispatch("allProducts")
            this.$store.dispatch("newProducts")
            // this.$store.dispatch("singleProductbyId",this.$route.params.id)
        },
        computed:{
            getFeaturedProduct(){
                return this.$store.getters.getProduct
            },
            getNewProduct(){
                return this.$store.getters.newProduct
            }
        },
        methods: {
            // Add Items to cart
            addToCart(itemToAdd) {
                let found = false;

                // Add the item or increase qty
                let itemInCart = this.cartItems.filter(item => item.id===itemToAdd.id);
                let isItemInCart = itemInCart.length > 0;

                if (isItemInCart === false) {
                    this.cartItems.push(Vue.util.extend({}, itemToAdd));
                } else {
                    itemInCart[0].qty += itemToAdd.qty;
                }

                itemToAdd.qty = 1;
            }
        }

    }




</script>

<style scoped>

</style>