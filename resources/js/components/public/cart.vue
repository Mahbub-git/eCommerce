<template>
    <div>
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div
                            class="banner_content d-md-flex justify-content-between align-items-center"
                    >
                        <div class="mb-3 mb-md-0">
                            <h2>Cart</h2>
                            <p>Very us move be blessed multiply night</p>
                        </div>
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="cart.html">Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Cart Area =================-->
        <section class="cart_area">
            <div class="container">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{sum=0}}
                            {{total = 0}}
                            <tr v-for="cart in cartProducts">
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img
                                                    :src="`${cart.options.image}`"
                                                    alt=""
                                                    height="50px"
                                            />
                                        </div>
                                        <div class="media-body">
                                            <p>{{cart.name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>Tk. {{cart.price}}</h5>
                                </td>
                                <td>
                                    <form method="post" @submit.prevent="updateCart()">
                                    <div class="product_count">
                                        <input
                                                type="text"
                                                name="qty"
                                                id="sst"
                                                maxlength="12"
                                                v-model="cart.qty"
                                                title="Quantity:"
                                                class="input-text qty"
                                        />
                                    </div>
                                    </form>
                                </td>
                                <td>
                                    <h5>Tk. {{total = cart.price*cart.qty}}</h5>
                                </td>
                                <td>
                                    <button class="btn btn-danger" @click.prevent="deleteCart(cart.rowId)">X</button>
                                </td>

                                {{sum = sum+total}}

                            </tr>

                            <tr class="bottom_button">
                                <td>
                                    <a class="gray_btn" href="#">Update Cart</a>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cupon_text">
                                        <input type="text" placeholder="Coupon Code" />
                                        <a class="main_btn" href="#">Apply</a>
                                        <a class="gray_btn" href="#">Close Coupon</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>Tk. {{sum}}</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li>
                                                <a href="#">Flat Rate: $5.00</a>
                                            </li>
                                            <li>
                                                <a href="#">Free Shipping</a>
                                            </li>
                                            <li>
                                                <a href="#">Flat Rate: $10.00</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">Local Delivery: $2.00</a>
                                            </li>
                                        </ul>
                                        <h6>
                                            Calculate Shipping
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </h6>
                                        <select class="shipping_select">
                                            <option value="1">Bangladesh</option>
                                            <option value="2">India</option>
                                            <option value="4">Pakistan</option>
                                        </select>
                                        <select class="shipping_select">
                                            <option value="1">Select a State</option>
                                            <option value="2">Select a State</option>
                                            <option value="4">Select a State</option>
                                        </select>
                                        <input type="text" placeholder="Postcode/Zipcode" />
                                        <a class="gray_btn" href="#">Update Details</a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="checkout_btn_inner">
                                        <a class="gray_btn" href="#">Continue Shopping</a>

                                        <a class="main_btn" href="/checkout">Proceed to checkout</a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

</template>

<script>
    export default {
        name: "cart",
        data(){
            return{
                qty:'',
                rowId:''
            }
        },
        mounted(){
            this.$store.dispatch("showCartProducts")
        },
        computed:{
            cartProducts(){
                return this.$store.getters.getCartProducts
            }
        },
        methods:{
            deleteCart(rowId){
                axios.get('/delete-cart/'+rowId)
                    .then((response)=>{
                        console.log(response.data.cartDelete)
                        this.$store.dispatch("showCartProducts")
                    })
            },
            updateCart(){
                axios.post('`/update-cart/${this.$route.params.rowId}`')
                    .then((response)=>{
                        console.log(response.data)
                        this.$router.push('/cart')
                    })
            }
        },
        watch:{
            $click(to,from){
                this.deleteCart();
            }
        }
    }
</script>

<style scoped>

</style>