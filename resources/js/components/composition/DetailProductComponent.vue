<template>
    <!-- Share Icons Start-->
    <div class="icon-bar">
        <a href="https://www.facebook.com/OrionCusco" target="_blank" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>
        <!--        <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>-->
        <!--        <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>-->
        <a href="https://www.instagram.com/orioncusco" target="_blank" class="twitter" title="Share"><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=51965642784" target="_blank" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>
    </div>
    <!-- Share Icons End-->
    <!-- Cart Sidebar Offset Start-->
    <cart-component :cart="cart"></cart-component>
    <!-- Cart Sidebar Offsetl End-->
    <!-- Header Start -->
<!--    <header-component :cart = "cart.length" :user="user"></header-component>-->
    <div class="wrapper">
        <template v-for="products in products_details" :key="products.id">
                <div class="gambo-Breadcrumb">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
<!--                                        <li class="breadcrumb-item"><a href="shop_grid.html">Vegetables & Fruits</a></li>-->
                                        <li class="breadcrumb-item active" aria-current="page">{{ products.name }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-product-grid">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-dt-view">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div id="sync1" class="owl-carousel owl-caro owl-theme">
                                                <template v-for="image in products.photos">
                                                    <template v-if="image.state === 0">
                                                        <div class="item">
                                                            <img :src="'https://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+image.photo" alt="">
                                                        </div>
                                                    </template>
                                                </template>
                                            </div>
                                            <div id="sync2" class="owl-carousel owl-caro owl-theme">
                                                <template v-for="image in products.photos">
                                                    <template v-if="image.state === 1">
                                                        <div class="item">
                                                            <img :src="'https://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+image.photo" alt="">
                                                        </div>
                                                    </template>
                                                </template>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="product-dt-right">
                                                <h2>{{ products.name }}</h2>
                                                <div class="no-stock">
                                                    <p class="pd-no">Codigo.<span>{{ products.code }}</span></p>
<!--                                                    <p class="stock-qty">Estado<span>(Instock)</span></p>-->

                                                    <p class="stock-qty" v-if="products.stock >= 3">Estado <span>(en stock)</span></p>
                                                    <p class="stock-qty" v-if="products.stock === 3">Quedan pocas unidades!<span>(In Stock)</span></p>
                                                    <p class="stock-qty" v-else-if="products.stock === 2">
                                                        El producto esta por terminarse!
                                                    </p>
                                                    <p class="stock-qty" v-else-if="products.stock === 1">
                                                        Ultima unidad disponible!
                                                    </p>
                                                    <p class="stock-qty" v-else-if="products.stock === 0">
                                                        Sin Stock
                                                    </p>
                                                </div>
                                                <p class="pp-descp">{{ products.description }}</p>
                                                <div class="product-group-dt">
                                                    <ul>
                                                        <li><div class="main-price color-discount">Precio<span>S/{{ products.price }}</span></div></li>
<!--                                                        <li><div class="main-price mrp-price">Price<span>S/{{ products.price }}</span></div></li>-->
                                                    </ul>
                                                    <ul class="gty-wish-share">
                                                        <li>
                                                            <div class="qty-product">
                                                                <div class="quantity buttons_added">
<!--                                                                    <button type="button"  class="minus minus-btn" @click="removeToCart(products)">-</button>-->
<!--                                                                    &lt;!&ndash;                                <input type="number" step="1" name="quantity" :value="prodCart.quantity" class="input-text qty text">&ndash;&gt;-->
<!--                                                                    <span class="qty text px-2">{{products.quantity}}</span>-->
<!--                                                                    <button type="button" value="+" class="plus plus-btn" :disabled="products.stock === 0" @click="addToCart(products)">+</button>-->

                                                                    <template v-for="carts in cart">
                                                                        <template v-if="carts.id === products.id">
                                                                            <button type="button" class="minus minus-btn" @click="removeToCart(products)">-</button>
                                                                            <span class="qty px-2 text">{{carts.quantity}}</span>
                                                                            <button type="button" :disabled="products.stock === 0" class="plus plus-btn" @click="addToCart(products)">+</button>
                                                                        </template>
                                                                        <!--                            <template v-else>-->
                                                                        <!--                                <span class="qty px-2 text">{{product.quantity}}</span>-->
                                                                        <!--                            </template>-->
                                                                    </template>

                                                                </div>
                                                            </div>
                                                        </li>
<!--                                                        <li><span class="like-icon save-icon" title="wishlist"></span></li>-->
                                                    </ul>
                                                    <ul class="ordr-crt-share">
                                                        <template v-if="products.stock > 0">
                                                        <li>
                                                            <template v-if="vs(products.id)">
                                                                <template v-for="carts in cart">
                                                                    <template v-if="carts.id === products.id">
                                                                        <button class="btn-success btn" :disabled="carts.stock === 0" @click="addToCart(products)"><i class="uil uil-shopping-cart-alt"></i>Agregar a Carro</button>
                                                                    </template>
                                                                </template>
                                                            </template>
                                                            <template v-else>
                                                                <button class="btn-danger btn" @click="addToCart(products)"><i class="uil uil-shopping-cart-alt"></i>Agregar a Carro </button>
                                                            </template>
                                                        </li>
                                                        </template>
                                                        <li><a href="/checkout" class="btn-primary btn">Pasar por Caja Ahora</a></li>
                                                    </ul>
                                                </div>
                                                <div class="pdp-details">
                                                    <ul>
                                                        <li>
                                                            <div class="pdp-group-dt">
                                                                <div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
                                                                <div class="pdp-text-dt">
                                                                    <span>Precio más bajo garantizado</span>
                                                                    <p>Obtén más descuentos con tu tarjeta
                                                                        <a href="#" data-toggle="modal" data-target="#beneficio-g">Galaxy Card.</a></p>

                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="pdp-group-dt">
                                                                <div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
                                                                <div class="pdp-text-dt">
                                                                    <span>Llevamos sus productos</span>
                                                                    <p>A su puerta de su casa.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="pdpt-bg">
                                    <div class="pdpt-title">
                                        <h4>De la misma familia</h4>
                                    </div>
                                    <div class="pdpt-body scrollstyle_4">
                                        <div class="cart-item border_radius"
                                             v-for="(pord_fam, index) in products_family"
                                             :key="pord_fam.id"
                                        >
                                            <a :href="'/product/'+pord_fam.id" class="cart-product-img">
                                                <template v-for="(photos, index) in pord_fam.photos" :key="photos.name">
                                                    <img :src="'https://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                                                </template>
<!--                                                <span class="offer-badge" v-for="categorias in pord_fam.categorias">{{ categorias.name }}</span>-->
<!--                                                <template v-for="(cate, index) in pord_fam.categorias">-->
<!--                                                    <span class="offer-badge" v-if="index === 0">{{ cate.name }}</span>-->
<!--                                                </template>-->
                                            </a>
                                            <div class="cart-text">
                                                <h4>{{ pord_fam.name }}</h4>
                                                <div class="qty-group">
                                                    <template v-if="pord_fam.stock > 0">
                                                    <div class="quantity buttons_added">
                                                        <template v-for="carts in cart">
                                                            <template v-if="carts.id === pord_fam.id">
                                                                <button type="button" class="minus minus-btn" @click="removeToCart(pord_fam)">-</button>
                                                                <span class="qty px-2 text">{{carts.quantity}}</span>
                                                                <button type="button" :disabled="pord_fam.stock === 0" class="plus plus-btn" @click="addToCart(pord_fam)">+</button>
                                                            </template>
                                                        </template>
                                                        <template v-if="vs(pord_fam.id)">
                                                            <template v-for="carts in cart">
                                                                <template v-if="carts.id === pord_fam.id">
                                                                    <button type="button" class="cart-icon btn btn-link text-success font-weight-bold" :disabled="carts.stock === 0" @click="addToCart(pord_fam)"><i class="uil uil-shopping-cart-alt"></i> Agregar</button>
                                                                </template>
                                                            </template>
                                                        </template>
                                                        <template v-else>
                                                            <button type="button" class="cart-icon btn btn-link text-primary font-weight-bold" @click="addToCart(pord_fam)"><i class="uil uil-shopping-cart-alt"></i> Agregar</button>
                                                        </template>
                                                    </div>
                                                    </template>
                                                    <template v-else>
                                                        <span class="font-weight-bold">Sin Stock</span>
                                                    </template>
                                                    <div class="cart-item-price">
                                                        S/{{ new Intl.NumberFormat("es-PE").format(pord_fam.price) }}
<!--                                                        <span>$15</span>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="pdpt-bg">
                                    <div class="pdpt-title">
                                        <h4>Detalle del Producto</h4>
                                    </div>
                                    <div class="pdpt-body scrollstyle_4">
                                        <div class="pdct-dts-1">
                                            <div class="pdct-dt-step">
                                                <h4>Descripción</h4>
                                                <p>
                                                    {{ products.detail }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </template>
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
                            <a href="/products/category/destacados" class="see-more-btn">Ver Todos</a>
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
    </div>

</template>

<script>
import HeaderComponent from "./HeaderComponent";
import TopComponent from "./TopComponent";
import CartComponent from "./CartComponent";
import 'vue3-carousel/dist/carousel.css';
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel';
import {ref, toRefs, nextTick, reactive, computed, inject} from "vue";
export default {
    components: { Carousel, Slide, Pagination, Navigation, HeaderComponent, TopComponent, CartComponent },
    props: ["idproduct", "user"],
    setup(props){
        const products = ref([]);
        const featured_slider_top = ref(true);
        const featured_slider = ref(false);
        const badge_new = ref(false);
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
            top_pro: {
                // 700px and up
                700: {
                    itemsToShow: 3,
                    snapAlign: 'center',
                },
                // 1024 and up
                1024: {
                    itemsToShow: 4,
                    snapAlign: 'start',
                },
            },

            total: computed(()=>{
                return  cartState.cart.reduce((prev, curr) => {
                    const prevPrice = prev.price || prev;
                    const prevQuantity = prev.quantity || 1;
                    return prevPrice * prevQuantity + curr.price * curr.quantity;
                }, 0);
            }),
            products_details : computed(() => {
                return products.value.filter(product => product.id == props.idproduct)
            }),

            products_family : computed(() => {
                return products.value.filter((product) => {
                    const p_d = cartState.products_details.filter(prod =>
                        {
                            return  prod.categorias.filter(ca => ca.name)
                        }
                    )
                    const cat = product.categorias.filter(ca => ca.name == p_d[0].categorias[0].name && ca.state == '1')
                    if (cat != "") {
                        badge_new.value = true
                        return product.categorias.filter(ca => ca.name == p_d[0].categorias[0].name && ca.state == '1')
                    }
                }).slice(0, 10)
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

        function vs(val){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === val);
            if (cartIndex >= 0){
                console.log(cartState.cart[cartIndex].id);
                // console.log(props.cart[cartIndex], '0')
                return true
            }
        }

        // const products_details = computed(() => {
        //     console.log("peru", props.idproduct);
        //
        //     return products.value.filter(product => product.id == props.idproduct)
        //     // return products.value.filter((product) =>
        //     //     product.name.toUpperCase().includes(filtro.value.toUpperCase())
        //     // );
        // });

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


        let dataP = JSON.parse(sessionStorage.getItem('local-prod'));
        if (dataP === null){
            // localStorage.removeItem('local-prod')
            fetch("https://sistemaorion.nebulaperu.com/api/v1/products")
                .then(res => res.json())
                .then(data => {
                    products.value = data;
                });
        }else{
            products.value = dataP;
            // localStorage.removeItem('local-prod');
            featured_slider_top.value = false
            featured_slider.value = true
        }



        return {
            ...toRefs(cartState),
            products,
            featured_slider_top,
            featured_slider,
            badge_new,

            addToCart,
            removeToCart,
            deleteToCart,

            tax,
            emitter,
            vs
        };
    }
}
</script>
