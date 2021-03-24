<template>
    <!-- Share Icons Start-->
    <div class="icon-bar">
        <a href="#" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>
        <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>
        <a href="#" class="linkedin" title="Share"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>
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
                                                            <img :src="'http://sistemaorion.green.com.pe/api/v1/products/imagen/'+image.photo" alt="">
                                                        </div>
                                                    </template>
                                                </template>
                                            </div>
                                            <div id="sync2" class="owl-carousel owl-caro owl-theme">
                                                <template v-for="image in products.photos">
                                                    <template v-if="image.state === 1">
                                                        <div class="item">
                                                            <img :src="'http://sistemaorion.green.com.pe/api/v1/products/imagen/'+image.photo" alt="">
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
                                                </div>
                                                <!--                                        <div class="product-radio">-->
                                                <!--                                            <ul class="product-now">-->
                                                <!--                                                <li>-->
                                                <!--                                                    <input type="radio" id="p1" name="product1">-->
                                                <!--                                                    <label for="p1">500g</label>-->
                                                <!--                                                </li>-->
                                                <!--                                                <li>-->
                                                <!--                                                    <input type="radio" id="p2" name="product1">-->
                                                <!--                                                    <label for="p2">1kg</label>-->
                                                <!--                                                </li>-->
                                                <!--                                                <li>-->
                                                <!--                                                    <input type="radio" id="p3" name="product1">-->
                                                <!--                                                    <label for="p3">2kg</label>-->
                                                <!--                                                </li>-->
                                                <!--                                                <li>-->
                                                <!--                                                    <input type="radio" id="p4" name="product1">-->
                                                <!--                                                    <label for="p4">3kg</label>-->
                                                <!--                                                </li>-->
                                                <!--                                            </ul>-->
                                                <!--                                        </div>-->
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
                                                        <li><a href="/checkout" class="btn-primary btn">Comprar Ahora</a></li>
                                                    </ul>
                                                </div>
                                                <div class="pdp-details">
                                                    <ul>
                                                        <li>
                                                            <div class="pdp-group-dt">
                                                                <div class="pdp-icon"><i class="uil uil-usd-circle"></i></div>
                                                                <div class="pdp-text-dt">
                                                                    <span>Precio más bajo garantizado</span>
                                                                    <p>Obtenga el reembolso de la diferencia si lo encuentra más barato en cualquier otro lugar.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="pdp-group-dt">
                                                                <div class="pdp-icon"><i class="uil uil-cloud-redo"></i></div>
                                                                <div class="pdp-text-dt">
                                                                    <span>Devoluciones y reembolsos fáciles</span>
                                                                    <p>Devuelva los productos y obtenga un reembolso en segundos.</p>
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
                                                    <img :src="'http://sistemaorion.green.com.pe/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                                                </template>
<!--                                                <span class="offer-badge" v-for="categorias in pord_fam.categorias">{{ categorias.name }}</span>-->
<!--                                                <template v-for="(cate, index) in pord_fam.categorias">-->
<!--                                                    <span class="offer-badge" v-if="index === 0">{{ cate.name }}</span>-->
<!--                                                </template>-->
                                            </a>
                                            <div class="cart-text">
                                                <h4>{{ pord_fam.name }}</h4>
                                                <div class="qty-group">
                                                    <div class="quantity buttons_added">
<!--                                                        <button type="button"  class="minus minus-btn" @click="removeToCart(pord_fam)">-</button>-->
<!--                                                        &lt;!&ndash;                                <input type="number" step="1" name="quantity" :value="prodCart.quantity" class="input-text qty text">&ndash;&gt;-->
<!--                                                        <span class="qty text px-2">{{pord_fam.quantity}}</span>-->
<!--                                                        <button type="button" value="+" class="plus plus-btn" :disabled="pord_fam.stock === 0" @click="addToCart(pord_fam)">+</button>-->

                                                        <template v-for="carts in cart">
                                                            <template v-if="carts.id === pord_fam.id">
                                                                <button type="button" class="minus minus-btn" @click="removeToCart(pord_fam)">-</button>
                                                                <span class="qty px-2 text">{{carts.quantity}}</span>
                                                                <button type="button" :disabled="pord_fam.stock === 0" class="plus plus-btn" @click="addToCart(pord_fam)">+</button>
                                                            </template>
                                                            <!--                            <template v-else>-->
                                                            <!--                                <span class="qty px-2 text">{{product.quantity}}</span>-->
                                                            <!--                            </template>-->
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
                        <div class="owl-carousel owl-theme" :class="{ 'featured-slider-top': featured_slider_top, 'featured-slider': featured_slider }">

                            <top-component
                                v-for="product in products_top"
                                :key="product.name"
                                :product="product"
                                @sendtocart="addToCart($event)"
                                @sendtocartr="removeToCart($event)"
                                :cart = "cart"
                            ></top-component>
                        </div>
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
import {ref, toRefs, nextTick, reactive, computed, inject} from "vue";
export default {
    components: { HeaderComponent, TopComponent, CartComponent },
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
            fetch("http://sistemaorion.green.com.pe/api/v1/products")
                .then(res => res.json())
                .then(data => {
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

                        var sync1 = $("#sync1");
                        var sync2 = $("#sync2");
                        var slidesPerPage = 4; //globaly define number of elements per page
                        var syncedSecondary = true;

                        sync1.owlCarousel({
                            items: 1,
                            slideSpeed: 2000,
                            nav: true,
                            autoplay: false,
                            dots: false,
                            loop: true,
                            responsiveRefreshRate: 200,
                            navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
                        }).on('changed.owl.carousel', syncPosition);

                        sync2
                            .on('initialized.owl.carousel', function() {
                                sync2.find(".owl-item").eq(0).addClass("current");
                            })
                            .owlCarousel({
                                items: slidesPerPage,
                                dots: false,
                                nav: true,
                                smartSpeed: 200,
                                slideSpeed: 500,
                                slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
                                responsiveRefreshRate: 100,
                            }).on('changed.owl.carousel', syncPosition2);

                        function syncPosition(el) {
                            //if you set loop to false, you have to restore this next line
                            //var current = el.item.index;

                            //if you disable loop you have to comment this block
                            var count = el.item.count - 1;
                            var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                            if (current < 0) {
                                current = count;
                            }
                            if (current > count) {
                                current = 0;
                            }

                            //end block

                            sync2
                                .find(".owl-item")
                                .removeClass("current")
                                .eq(current)
                                .addClass("current");
                            var onscreen = sync2.find('.owl-item.active').length - 1;
                            var start = sync2.find('.owl-item.active').first().index();
                            var end = sync2.find('.owl-item.active').last().index();

                            if (current > end) {
                                sync2.data('owl.carousel').to(current, 100, true);
                            }
                            if (current < start) {
                                sync2.data('owl.carousel').to(current - onscreen, 100, true);
                            }
                        }

                        function syncPosition2(el) {
                            if (syncedSecondary) {
                                var number = el.item.index;
                                sync1.data('owl.carousel').to(number, 100, true);
                            }
                        }

                        sync2.on("click", ".owl-item", function(e) {
                            e.preventDefault();
                            var number = $(this).index();
                            sync1.data('owl.carousel').to(number, 300, true);
                        });
                    })
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
