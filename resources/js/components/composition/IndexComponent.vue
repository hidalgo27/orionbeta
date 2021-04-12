<template>
    <div class="icon-bar">
        <a href="https://www.facebook.com/OrionCusco" target="_blank" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>
        <!--        <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>-->
        <!--        <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>-->
        <!--        <a href="#" class="linkedin" title="Share"><i class="fab fa-linkedin-in"></i></a>-->
        <a href="https://www.instagram.com/orioncusco" target="_blank" class="twitter" title="Share"><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=51965642784" target="_blank" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>
    </div>
    <!-- Cart Sidebar Offset Start-->
        <cart-component :cart="cart"></cart-component>
    <!-- Cart Sidebar Offsetl End-->
    <!-- Header Start -->
<!--    <header-component :cart = "cart.length" :user="user"></header-component>-->
    <!-- Header End -->

        <div class="main-banner-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <carousel :settings="settings" :breakpoints="breakpoints">
                            <slide v-for="prod_off in products_offers" :key="prod_off">
                                <div class="offer-item">
                                    <div class="offer-item-img">
                                        <div class="gambo-overlay"></div>
                                        <!--                                        <img src="images/banners/offer-1.jpg" alt="">-->
                                        <template v-for="(photos, index) in prod_off.photos" :key="photos.id">
                                            <img :src="'https://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                                        </template>
                                    </div>
                                    <div class="offer-text-dt">
                                        <div class="offer-top-text-banner">
                                            <p>OFERTAS</p>
                                            <div class="top-text-1">Precio oferta S/{{ new Intl.NumberFormat("es-PE").format(prod_off.price) }}</div>
                                            <span>{{ prod_off.name }}</span>
                                        </div>
                                        <a :href="'/product/'+prod_off.id" class="Offer-shop-btn hover-btn">Comprar Ahora</a>
                                    </div>
                                </div>
                            </slide>

                            <template #addons>
                                <Navigation />
                            </template>
                        </carousel>
                    </div>
                </div>
            </div>
        </div>




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
                            <a href="/products/category/destacados" class="see-more-btn">Ver todos</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <carousel :settings="settings" :breakpoints="top_pro">
                            <slide v-for="products in products_top" :key="products">
                                <top-component
                                    :product="products"
                                    @sendtocart="addToCart($event)"
                                    @sendtocartr="removeToCart($event)"
                                    :cart = "cart"
                                    :badge_new = "badge_new"
                                    :cat = "'Top'"
                                ></top-component>
                            </slide>

                            <template #addons>
                                <Navigation />
                            </template>
                        </carousel>
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
                            <a href="/products/category/nuevos" class="see-more-btn">Ver Todos</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <carousel :settings="settings" :breakpoints="new_pro">
                            <slide v-for="products in products_new" :key="products.id">
                                <top-component
                                    :product="products"
                                    @sendtocart="addToCart($event)"
                                    @sendtocartr="removeToCart($event)"
                                    :cart = "cart"
                                    :badge_new = "badge_new"
                                    :cat = "'Nuevo'"
                                ></top-component>
                            </slide>
                            <template #addons>
                                <Navigation />
                            </template>
                        </carousel>
                    </div>
                </div>
            </div>
        </div>
        <!-- End new-->
</template>
<script>
import TopComponent from "./TopComponent";
import BestComponent from "./BestComponent";
import CartComponent from "./CartComponent";
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import {ref, toRefs, nextTick, reactive, computed, inject} from "vue";
export default {
    components: { Carousel, Slide, Pagination, Navigation, TopComponent, BestComponent, CartComponent },
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

        const emitter = inject("emitter");

        const cartState = reactive({
            cartOpen: false,
            cart: [],
            settings: {
                itemsToShow: 1,
                snapAlign: 'center',
                // wrapAround: 'true'
            },
            // breakpoints are mobile first
            // any settings not specified will fallback to the carousel settings
            breakpoints: {
                // 700px and up
                700: {
                    itemsToShow: 2,
                    snapAlign: 'center',
                },
                // 1024 and up
                1024: {
                    itemsToShow: 3,
                    snapAlign: 'start',
                },
            },
            top_pro: {
                // 700px and up
                700: {
                    itemsToShow: 3,
                    snapAlign: 'center',
                },
                // 1024 and up
                1024: {
                    itemsToShow: 5,
                    snapAlign: 'start',
                },
            },
            new_pro: {
                // 700px and up
                700: {
                    itemsToShow: 3,
                    snapAlign: 'center',
                },
                // 1024 and up
                1024: {
                    itemsToShow: 5,
                    snapAlign: 'start',
                },
            },
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
                    const cat = product.categorias.filter(ca => ca.name == 'NUEVOS' && ca.state > '0')
                    if (cat != "") {
                        badge_new.value = true
                        return product.categorias.filter(ca => ca.name == 'NUEVOS' && ca.state > '0')
                    }
                })
            }),

            products_offers : computed(() => {
                return products.value.filter((product) => {
                    const cat = product.categorias.filter(ca => ca.name == 'OFERTAS' && ca.state > '0')
                    if (cat != "") {
                        badge_new.value = true
                        return product.categorias.filter(ca => ca.name == 'OFERTAS' && ca.state > '0')
                    }
                })
            }),

            products_top : computed(() => {
                return products.value.filter((product) => {
                    const cat = product.categorias.filter(ca => ca.name == 'DESTACADOS' && ca.state > '0')
                    if (cat != "") {
                        badge_new.value = true
                        return product.categorias.filter(ca => ca.name == 'DESTACADOS' && ca.state > '0')
                    }
                })
            })

        });


        fetch("https://sistemaorion.nebulaperu.com/api/v1/products/others/secciones")
            .then(res => res.json())
            .then(data => {
                // console.log("pre carga 2")
                products.value = data;
            });


        function addToCart(product){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === product.id);
            // const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length >= 1 && cartIndex >= 0) {
                // console.log("si");
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity += 1;
                    cartState.cart[cartIndex].stock -= 1;
                } else {
                    cartState.cart.push(product);
                }

                // products.value[prodIndex].stock -= 1;
                // cartState.cart[cartIndex].stock = products.value[prodIndex].stock;
                // products.value[prodIndex].quantity = cartState.cart[cartIndex].quantity;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }else{
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity += 1;
                    cartState.cart[cartIndex].stock -= 1;
                } else {
                    cartState.cart.push(product);

                }
                // products.value[prodIndex].stock -= 1;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }
            emitter.emit("myevent", cartState.cart.length);

        }
        function removeToCart(product){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === product.id);
            // const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length >= 1 && cartIndex >= 0) {
                if(cartState.cart[cartIndex].quantity > 1){
                    // console.log("si");
                    if (cartIndex >= 0) {
                        cartState.cart[cartIndex].quantity -= 1;
                        cartState.cart[cartIndex].stock += 1;
                    } else {
                        cartState.cart.push(product);
                    }
                    // products.value[prodIndex].stock += 1;
                    // cartState.cart[cartIndex].stock = products.value[prodIndex].stock;
                    // products.value[prodIndex].quantity = cartState.cart[cartIndex].quantity;
                    sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                    // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
                }
                else {
                    cartState.cart.splice(cartIndex, 1);
                    // products.value[prodIndex].stock += 1;
                    // products.value[prodIndex].quantity = 1;
                    sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                    // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
                }

            }else{
                // console.log("si seufno");
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity -= 1;
                    cartState.cart[cartIndex].quantity += 1;
                } else {
                    cartState.cart.push(product);
                }
                // products.value[prodIndex].stock += 1;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }
            emitter.emit("myevent", cartState.cart.length);
        }
        function deleteToCart(product){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === product.id);
            // const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length > 0){
                let qua = cartState.cart[cartIndex].quantity;
                // console.log(product.name);
                cartState.cart.splice(cartIndex, 1);
                // products.value[prodIndex].quantity = 1;
                // products.value[prodIndex].stock += qua;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }
            // else {
            //     axios.post('/session/remove')
            //         .then((res) =>{
            //             // console.log(res)
            //             // cartState.cart.push(res);
            //         });
            // }
            // console.log(prodIndex);

            emitter.emit("myevent", cartState.cart.length);
        }

        let dataB = JSON.parse(sessionStorage.getItem('local-cart'));
        if (dataB === null){
            cartState.cart = []
        }else{
            cartState.cart = dataB
            // console.log(cartState.cart)
            // console.log(products)
        }

        // let dataP = JSON.parse(sessionStorage.getItem('local-prod'));
        // if (dataP === null){
        //     // console.log("hola 1")
        //     // localStorage.removeItem('local-prod')
        //     fetch("https://sistemaorion.nebulaperu.com/api/v1/products/others/secciones")
        //         .then(res => res.json())
        //         .then(data => {
        //             // console.log("pre carga 2")
        //             products.value = data;
        //             nextTick(() => {
        //
        //                 $('.featured-slider-top').owlCarousel({
        //                     items: 8,
        //                     loop:false,
        //                     margin:10,
        //                     nav:true,
        //                     dots:false,
        //                     navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
        //                     responsive:{
        //                         0:{
        //                             items:1
        //                         },
        //                         600:{
        //                             items:2
        //                         },
        //
        //                         1000:{
        //                             items:3
        //                         },
        //                         1200:{
        //                             items:4
        //                         },
        //                         1400:{
        //                             items:4
        //                         }
        //                     }
        //                 })
        //
        //                 $('.offers-banner-top').owlCarousel({
        //                     loop:true,
        //                     margin:30,
        //                     nav:false,
        //                     dots:false,
        //                     autoplay:true,
        //                     autoplayTimeout: 3000,
        //                     autoplayHoverPause:true,
        //                     responsive:{
        //                         0:{
        //                             items:1
        //                         },
        //                         600:{
        //                             items:2
        //                         },
        //                         1000:{
        //                             items:2
        //                         },
        //                         1200:{
        //                             items:3
        //                         },
        //                         1400:{
        //                             items:3
        //                         }
        //                     }
        //                 })
        //             })
        //         });
        // }else{
        //     products.value = dataP;
        //     // localStorage.removeItem('local-prod');
        //     featured_slider_top.value = false
        //     featured_slider.value = true
        //     offers_banner_top.value = false
        //     offers_banner.value = true
        // }


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
            emitter

        };
    }
}
</script>
<style>
.carousel__item {
    min-height: 200px;
    width: 100%;
    /*background-color: #ee2342;*/
    color:  var(--carousel-color-white);
    font-size: 20px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel__slide {
    padding: 5px;
}

.carousel__prev,
.carousel__next {
    box-sizing: content-box;
    border: 3px solid white;
    background-color: #ee2342;
}

</style>
