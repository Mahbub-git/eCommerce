<template>
    <div>
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content d-md-flex justify-content-between align-items-center">
                        <div class="mb-3 mb-md-0">
                            <h2>Shop Category</h2>
                            <p>Very us move be blessed multiply night</p>
                        </div>
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="category.html">Shop</a>
                            <a href="category.html">Women Fashion</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Category Product Area =================-->
        <section class="cat_product_area section_gap">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="product_top_bar">
                            <div class="left_dorp">
                                <select class="sorting">
                                    <option value="1">Default sorting</option>
                                    <option value="2">Default sorting 01</option>
                                    <option value="4">Default sorting 02</option>
                                </select>
                                <select class="show">
                                    <option value="1">Show 12</option>
                                    <option value="2">Show 14</option>
                                    <option value="4">Show 16</option>
                                </select>
                            </div>
                        </div>

                        <div class="latest_product_inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-6" v-for="products in getProductbycatid">
                                    <div class="single-product">
                                        <div class="product-img">
                                            <img
                                                    class="card-img"
                                                    :src="`${products.product_image}`"
                                                    alt=""
                                            />
                                            <div class="p_icon">
                                                <router-link :to="`/product-details/${products.id}`">
                                                    <i class="ti-eye"></i>
                                                </router-link>
                                                <a href="#">
                                                    <i class="ti-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="ti-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-btm">
                                            <router-link :to="`/product-details/${products.id}`" class="d-block">
                                                <h4>{{products.product_name}}</h4>
                                            </router-link>
                                            <div class="mt-3">
                                                <span class="mr-4">Tk. {{products.discount_price}}</span>
                                                <del>Tk. {{products.product_price}}</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<h1>{{this.$route.params.id}}</h1>-->

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="left_sidebar_area">
                            <aside class="left_widgets p_filter_widgets">
                                <div class="l_w_title">
                                    <h3>Browse Categories</h3>
                                </div>
                                <div class="widgets_inner">
                                    <ul class="list">
                                        <li>
                                            <a href="#">Frozen Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Dried Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Fresh Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Meat Alternatives</a>
                                        </li>
                                        <li>
                                            <a href="#">Fresh Fish</a>
                                        </li>
                                        <li>
                                            <a href="#">Meat Alternatives</a>
                                        </li>
                                        <li>
                                            <a href="#">Meat</a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                            <aside class="left_widgets p_filter_widgets">
                                <div class="l_w_title">
                                    <h3>Product Brand</h3>
                                </div>
                                <div class="widgets_inner">
                                    <ul class="list">
                                        <li>
                                            <a href="#">Apple</a>
                                        </li>
                                        <li>
                                            <a href="#">Asus</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">Gionee</a>
                                        </li>
                                        <li>
                                            <a href="#">Micromax</a>
                                        </li>
                                        <li>
                                            <a href="#">Samsung</a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                            <aside class="left_widgets p_filter_widgets">
                                <div class="l_w_title">
                                    <h3>Color Filter</h3>
                                </div>
                                <div class="widgets_inner">
                                    <ul class="list">
                                        <li>
                                            <a href="#">Black</a>
                                        </li>
                                        <li>
                                            <a href="#">Black Leather</a>
                                        </li>
                                        <li class="active">
                                            <a href="#">Black with red</a>
                                        </li>
                                        <li>
                                            <a href="#">Gold</a>
                                        </li>
                                        <li>
                                            <a href="#">Spacegrey</a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>

                            <aside class="left_widgets p_filter_widgets">
                                <div class="l_w_title">
                                    <h3>Price Filter</h3>
                                </div>
                                <div class="widgets_inner">
                                    <div class="range_item">
                                        <div id="slider-range"></div>
                                        <div class="">
                                            <label for="amount">Price : </label>
                                            <input type="text" id="amount" readonly />
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "product-category",
        mounted(){
            this.$store.dispatch("allProductsByCatId",this.$route.params.id)
        },
        computed:{
            getProductbycatid(){
                return this.$store.getters.getProductByCatId
            }
        },
        methods:{
            getProduct(){
                this.$store.dispatch("allProductsByCatId",this.$route.params.id)
            }
        },
        watch:{
            $route(to,from){
                this.getProduct();
            }
        }
    }
</script>

<style scoped>

</style>