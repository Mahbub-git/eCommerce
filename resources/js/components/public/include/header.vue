<template>
    <div>
        <header class="header_area">
            <div class="top_menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="float-left">
                                <p>Phone: +01 256 25 235</p>
                                <p>email: info@eiser.com</p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="float-right">
                                <ul class="right_side">
                                    <li>
                                        <a href="cart.html">
                                            gift card
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tracking.html">
                                            track order
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light w-100">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="index.html">
                            <img src="img/logo.png" alt="" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                            <div class="row w-100 mr-0">
                                <div class="col-lg-7 pr-0">
                                    <ul class="nav navbar-nav center_nav pull-right">
                                        <li class="nav-item active">
                                            <router-link class="nav-link" to="/">Home</router-link>
                                        </li>
                                        <li class="nav-item" v-for="category in categories">
                                            <router-link class="nav-link" :to="`/product-category/${category.id}`">{{category.cat_name}}</router-link>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-5 pr-0">
                                    <ul class="nav navbar-nav navbar-right right_nav pull-right">
                                        <li class="nav-item">
                                            <a href="#" class="icons">
                                                <i class="ti-search" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="icons">
                                                <i class="ti-shopping-cart"></i>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="icons">
                                                <i class="ti-user" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="icons">
                                                <i class="ti-heart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
    </div>
</template>

<script>
    export default {
        name: "header",
        data(){
            return{
                categories:[]
            }
        },
        created(){
            axios.get('/get-categories')
                .then((response =>{
                    //console.log(response.data.categories)
                    this.categories = response.data.categories
                }))
        }

    }
</script>

<style scoped>

</style>