<template>
    <!-- Cart Sidebar Offset Start-->
    <div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
        <div class="bs-canvas-header side-cart-header p-3 ">
            <div class="d-inline-block  main-cart-title">Carro <span>({{ cart.length }} Items)</span></div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body">
            <div class="cart-top-total">
                <div class="cart-total-dil">
                    <h4>Orion Super Mercado</h4>
                    <span>S/.{{ new Intl.NumberFormat("es-PE").format(total) }}</span>
                </div>
                <div class="cart-total-dil pt-2">
                    <h4>Delivery</h4>
                    <span>S/{{tax}}</span>
                </div>
            </div>
            <div class="side-cart-items">
                <div class="cart-item"
                     v-for="(prodCart, index) in cart"
                     :key="prodCart.id"
                >
                    <div class="cart-product-img">
                        <template v-for="(photos, index) in prodCart.photos" :key="prodCart.name">
                            <img :src="'http://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                        </template>
<!--                        <div class="offer-badge">6% OFF</div>-->
                    </div>
                    <div class="cart-text">
                        <h4>{{ prodCart.name }} | {{prodCart.stock}} | {{prodCart.quantity}}</h4>
<!--                        <div class="cart-radio">-->
<!--                            <ul class="kggrm-now">-->
<!--                                <li>-->
<!--                                    <input type="radio" id="a1" name="cart1">-->
<!--                                    <label for="a1">0.50</label>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <input type="radio" id="a2" name="cart1">-->
<!--                                    <label for="a2">1kg</label>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <input type="radio" id="a3" name="cart1">-->
<!--                                    <label for="a3">2kg</label>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <input type="radio" id="a4" name="cart1">-->
<!--                                    <label for="a4">3kg</label>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <div class="qty-group">
                            <div class="quantity buttons_added">
                                <button type="button"  class="minus minus-btn" @click="removeToCart(prodCart)">-</button>
<!--                                <input type="number" step="1" name="quantity" :value="prodCart.quantity" class="input-text qty text">-->
                                <span class="qty text px-2">{{prodCart.quantity}}</span>
                                <button type="button" value="+" class="plus plus-btn" :disabled="prodCart.stock === 0" @click="addToCart(prodCart)">+</button>
                            </div>
                            <div class="cart-item-price">S/{{ new Intl.NumberFormat("es-PE").format(prodCart.price) }}</div>
                        </div>

                        <button type="button" class="cart-close-btn" @click="deleteToCart(prodCart)"><i class="uil uil-multiply"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bs-canvas-footer">
<!--            <div class="cart-total-dil saving-total ">-->
<!--                <h4>Total Saving</h4>-->
<!--                <span>S/.{{ new Intl.NumberFormat("es-PE").format(total) }}</span>-->
<!--            </div>-->
            <div class="main-total-cart">
                <h2>Total</h2>
                <span>S/.{{ new Intl.NumberFormat("es-PE").format(total + tax) }}</span>
            </div>
            <div class="checkout-cart">
<!--                <a href="#" class="promo-code">Have a promocode?</a>-->
                <a href="/checkout" class="cart-checkout-btn hover-btn">Pasar por Caja</a>
            </div>
        </div>
    </div>
    <!-- Cart Sidebar Offsetl End-->
    <!-- Header Start -->
    <header-component :cart = "cart.length" :user="user"></header-component>
    <!-- Header End -->
    <div class="wrapper">
        <div class="col-lg-12">
            <a href="#" class="best-offer-item">
                <img src="/images/banners/carnavales.jpeg" alt="" class="w-100">
            </a>
        </div>
        <div class="main-banner-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme" :class="{ 'offers-banner-top': offers_banner_top, 'offers-banner': offers_banner }">
                            <div class="item"
                                 v-for="prod_off in products_offers"
                            >
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <img src="images/banners/offer-1.jpg" alt="">
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>6% Descuento</p>
                                            <div class="top-text-1">Compre Más y Ahorre Más</div>
                                            <span>{{ prod_off.name }}</span>
                                        </div>
                                        <a :href="'/product/'+prod_off.id" class="Offer-shop-btn hover-btn">Comprar Ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <category-component></category-component>

        <!-- Top productos-->
        <div class="section145">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title-tt">
                            <div class="main-title-left">
                                <span>Para Ti</span>
                                <h2>Top Productos Destacados</h2>
                            </div>
                            <a href="#" class="see-more-btn">See All</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme" :class="{ 'featured-slider-top': featured_slider_top, 'featured-slider': featured_slider }">
                            <top-component
                                v-for="products in products_top"
                                :key="products.id"
                                :product="products"
                                @sendtocart="addToCart($event)"
                                @sendtocartr="removeToCart($event)"
                                :cart = "cart"
                                :badge_new = "badge_new"
                                :cat = "'Top'"
                            ></top-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end productos-->

        <!-- Best-->
        <best-component></best-component>
        <!-- End best-->

        <!-- New-->
        <div class="section145">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title-tt">
                            <div class="main-title-left">
                                <span>Para Ti</span>
                                <h2>Nuevos Productos Agregados</h2>
                            </div>
                            <a href="#" class="see-more-btn">See All</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme" :class="{ 'featured-slider-top': featured_slider_top, 'featured-slider': featured_slider }">
                            <top-component
                                v-for="products in products_new"
                                :key="products.id"
                                :product="products"
                                @sendtocart="addToCart($event)"
                                @sendtocartr="removeToCart($event)"
                                :cart = "cart"
                                :badge_new = "badge_new"
                                :cat = "'Nuevo'"
                            ></top-component>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End new-->

    </div>
</template>
<script>
import HeaderComponent from "./HeaderComponent";
import OfferComponent from "./OfferComponent";
import CategoryComponent from "./CategoryComponent";
import TopComponent from "./TopComponent";
import BestComponent from "./BestComponent";
import NewComponent from "./NewComponent";
import {ref, toRefs, nextTick, reactive, computed} from "vue";
export default {
    components: { OfferComponent, CategoryComponent, TopComponent, BestComponent, NewComponent, HeaderComponent },
    props: ['user'],
    setup(props){
        const products = ref([]);
        const products_cat = ref([]);
        const badge_new = ref(false);
        const featured_slider_top = ref(true);
        const featured_slider = ref(false);

        const offers_banner_top = ref(true);
        const offers_banner = ref(false);

        const tax = ref(1);

        const cartState = reactive({
            cartOpen: false,
            cart: [],
            total: computed(()=>{
                return  cartState.cart.reduce((prev, curr) => {
                    const prevPrice = prev.price || prev;
                    const prevQuantity = prev.quantity || 1;
                    // const hoy = 5;
                    // console.log('sdsd'+prevQuantity);
                    const  p_total = prevPrice * prevQuantity + curr.price * curr.quantity;
                    return p_total
                }, 0);
            }),

            products_new : computed(() => {
                return products.value.filter((product) => {
                    const cat = product.categorias.filter(ca => ca.name == 'NUEVO' && ca.state > '0')
                    if (cat != "") {
                        badge_new.value = true
                        return product.categorias.filter(ca => ca.name == 'NUEVO' && ca.state > '0')
                    }
                })
            }),

            products_offers : computed(() => {
                return products.value.filter((product) => {
                    const cat = product.categorias.filter(ca => ca.name == 'NUEVO' && ca.state > '0')
                    if (cat != "") {
                        badge_new.value = true
                        return product.categorias.filter(ca => ca.name == 'NUEVO' && ca.state > '0')
                    }
                })
            }),

            products_top : computed(() => {
                return products.value.filter((product) => {
                    const cat = product.categorias.filter(ca => ca.name == 'TOP' && ca.state > '0')
                    if (cat != "") {
                        badge_new.value = true
                        return product.categorias.filter(ca => ca.name == 'TOP' && ca.state > '0')
                    }
                })
            })

        });

        function addToCart(product){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === product.id);
            const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length >= 1 && cartIndex >= 0) {
                // console.log("si");
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity += 1;
                } else {
                    cartState.cart.push(product);
                }
                products.value[prodIndex].stock -= 1;
                cartState.cart[cartIndex].stock = products.value[prodIndex].stock;
                products.value[prodIndex].quantity = cartState.cart[cartIndex].quantity;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }else{
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity += 1;
                } else {
                    cartState.cart.push(product);
                }
                products.value[prodIndex].stock -= 1;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }
        }
        function removeToCart(product){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === product.id);
            const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length >= 1 && cartIndex >= 0) {
                if(cartState.cart[cartIndex].quantity > 1){
                    // console.log("si");
                    if (cartIndex >= 0) {
                        cartState.cart[cartIndex].quantity -= 1;
                    } else {
                        cartState.cart.push(product);
                    }
                    products.value[prodIndex].stock += 1;
                    cartState.cart[cartIndex].stock = products.value[prodIndex].stock;
                    products.value[prodIndex].quantity = cartState.cart[cartIndex].quantity;
                    sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                    sessionStorage.setItem('local-prod', JSON.stringify(products.value));
                }
                else {
                    cartState.cart.splice(cartIndex, 1);
                    products.value[prodIndex].stock += 1;
                    products.value[prodIndex].quantity = 1;
                    sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                    sessionStorage.setItem('local-prod', JSON.stringify(products.value));
                }

            }else{
                // console.log("si seufno");
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity -= 1;
                } else {
                    cartState.cart.push(product);
                }
                products.value[prodIndex].stock += 1;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }

        }
        function deleteToCart(product){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === product.id);
            const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length > 0){
                let qua = cartState.cart[cartIndex].quantity;
                // console.log(product.name);
                cartState.cart.splice(cartIndex, 1);
                products.value[prodIndex].quantity = 1;
                products.value[prodIndex].stock += qua;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }
            // else {
            //     axios.post('/session/remove')
            //         .then((res) =>{
            //             // console.log(res)
            //             // cartState.cart.push(res);
            //         });
            // }
            // console.log(prodIndex);
            // console.log(prodIndex);
        }

        let dataB = JSON.parse(sessionStorage.getItem('local-cart'));
        if (dataB === null){
            cartState.cart = []
        }else{
            cartState.cart = dataB
            // console.log(cartState.cart)
            // console.log(products)
        }

        let dataP = JSON.parse(sessionStorage.getItem('local-prod'));
        if (dataP === null){

            // console.log("hola 1")
            // localStorage.removeItem('local-prod')
            fetch("http://sistemaorion.nebulaperu.com/api/v1/products")
                .then(res => res.json())
                .then(data => {
                    // console.log("pre carga 2")
                    products.value = data;
                    nextTick(() => {
                        $('.featured-slider-top').owlCarousel({
                            items: 8,
                            loop:false,
                            margin:10,
                            nav:true,
                            dots:false,
                            navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
                            responsive:{
                                0:{
                                    items:3
                                },
                                600:{
                                    items:2
                                },
                                1000:{
                                    items:3
                                },
                                1200:{
                                    items:4
                                },
                                1400:{
                                    items:4
                                }
                            }
                        })

                        $('.offers-banner-top').owlCarousel({
                            loop:true,
                            margin:30,
                            nav:false,
                            dots:false,
                            autoplay:true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause:true,
                            responsive:{
                                0:{
                                    items:1
                                },
                                600:{
                                    items:2
                                },
                                1000:{
                                    items:2
                                },
                                1200:{
                                    items:3
                                },
                                1400:{
                                    items:3
                                }
                            }
                        })

                    })
                });
        }else{
            products.value = dataP;
            // localStorage.removeItem('local-prod');
            featured_slider_top.value = false
            featured_slider.value = true
            offers_banner_top.value = false
            offers_banner.value = true
        }


        return {
            ...toRefs(cartState),
            products,
            products_cat,
            featured_slider_top,
            featured_slider,
            offers_banner_top,
            offers_banner,

            addToCart,
            removeToCart,
            deleteToCart,
            badge_new,
            tax,

        };
    }
}
</script>
