<template>
    <!-- Filter Right Sidebar Offset Start-->
    <div class="bs-canvas bs-canvas-right position-fixed bg-cart h-100">
        <div class="bs-canvas-header side-cart-header p-3 ">
            <div class="d-inline-block  main-cart-title">Filters</div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body filter-body">
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Categories</h4>
                </div>
                <div class="filter-item-body scrollstyle_4">
                    <div class="cart-radio">
                        <ul class="cte-select">
                            <li>
                                <input type="radio" id="c1" name="category1">
                                <label for="c1">All</label>
                            </li>
                            <li>
                                <input type="radio" id="c2" name="category1" checked>
                                <label for="c2">Vegetables & Fruits</label>
                            </li>
                            <li>
                                <input type="radio" id="c3" name="category1">
                                <label for="c3">Grocery & Staples</label>
                            </li>
                            <li>
                                <input type="radio" id="c4" name="category1">
                                <label for="c4">Dairy & Eggs</label>
                            </li>
                            <li>
                                <input type="radio" id="c5" name="category1">
                                <label for="c5">Beverages</label>
                            </li>
                            <li>
                                <input type="radio" id="c6" name="category1">
                                <label for="c6">Snacks</label>
                            </li>
                            <li>
                                <input type="radio" id="c7" name="category1">
                                <label for="c7">Home Care</label>
                            </li>
                            <li>
                                <input type="radio" id="c8" name="category1">
                                <label for="c8">Noodles & Sauces</label>
                            </li>
                            <li>
                                <input type="radio" id="c9" name="category1">
                                <label for="c9">Personal Care</label>
                            </li>
                            <li>
                                <input type="radio" id="c10" name="category1">
                                <label for="c10">Pat Care</label>
                            </li>
                            <li>
                                <input type="radio" id="c11" name="category1">
                                <label for="c11">Mea & Seafood</label>
                            </li>
                            <li>
                                <input type="radio" id="c12" name="category1">
                                <label for="c12">Electronics</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Brand</h4>
                </div>
                <div class="other-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="search-by-catgory">
                            <div class="ui search">
                                <div class="ui left icon input swdh10">
                                    <input class="prompt srch10" type="text" placeholder="Search by brand..">
                                    <i class="uil uil-search-alt icon icon1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_1">
                            <label class="custom-control-label" for="brand_1">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_2">
                            <label class="custom-control-label" for="brand_2">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_3">
                            <label class="custom-control-label" for="brand_3">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_4">
                            <label class="custom-control-label" for="brand_4">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_5">
                            <label class="custom-control-label" for="brand_5">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_6">
                            <label class="custom-control-label" for="brand_6">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_7">
                            <label class="custom-control-label" for="brand_7">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_8">
                            <label class="custom-control-label" for="brand_8">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_9">
                            <label class="custom-control-label" for="brand_9">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_10">
                            <label class="custom-control-label" for="brand_10">Brand Name</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Price</h4>
                </div>
                <div class="price-pack-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_1">
                            <label class="custom-control-label" for="price_1">Less than $2 <span class="webproduct">(9)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_2">
                            <label class="custom-control-label" for="price_2">$2 to $5 <span class="webproduct">(8)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_3">
                            <label class="custom-control-label" for="price_3">$6 to $10 <span class="webproduct">(12)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_4">
                            <label class="custom-control-label" for="price_4">$11 to $15 <span class="webproduct">(4)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_5">
                            <label class="custom-control-label" for="price_5">$15 to $20 <span class="webproduct">(16)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_6">
                            <label class="custom-control-label" for="price_6">$21 to $25 <span class="webproduct">(18)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_7">
                            <label class="custom-control-label" for="price_7">More than $25 <span class="webproduct">(25)</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Discount</h4>
                </div>
                <div class="offer-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_1">
                            <label class="custom-control-label" for="offer_1">2% - 5% <span class="webproduct">(9)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_2">
                            <label class="custom-control-label" for="offer_2">6% - 10% <span class="webproduct">(5)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_3">
                            <label class="custom-control-label" for="offer_3">11% - 15% <span class="webproduct">(11)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_4">
                            <label class="custom-control-label" for="offer_4">16% - 25% <span class="webproduct">(27)</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Pack Size</h4>
                </div>
                <div class="price-pack-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_1">
                            <label class="custom-control-label" for="pack_1">1 pc</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_2">
                            <label class="custom-control-label" for="pack_2">1 pc approx. 400 to 600 gm</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_3">
                            <label class="custom-control-label" for="pack_3">1 pc approx. 500 to 800 gm</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_4">
                            <label class="custom-control-label" for="pack_4">Combo 3 Items</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_5">
                            <label class="custom-control-label" for="pack_5">Combo 4 Items</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_6">
                            <label class="custom-control-label" for="pack_6">Combo 5 Items</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_7">
                            <label class="custom-control-label" for="pack_7">2 pcs</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_8">
                            <label class="custom-control-label" for="pack_8">100 g</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_9">
                            <label class="custom-control-label" for="pack_9">200 g</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_10">
                            <label class="custom-control-label" for="pack_10">250 g</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_11">
                            <label class="custom-control-label" for="pack_11">500g</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_12">
                            <label class="custom-control-label" for="pack_12">1kg</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_13">
                            <label class="custom-control-label" for="pack_13">2kg</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_14">
                            <label class="custom-control-label" for="pack_14">3kg</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Filter Right Sidebar Offsetl End-->
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
    <div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
        <div class="bs-canvas-header side-cart-header p-3 ">
            <div class="d-inline-block  main-cart-title">Carro <span>({{ cart.length }} Items)</span></div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body">
            <div class="cart-top-total">
                <div class="cart-total-dil">
                    <h4>Orion Super Mercado</h4>
                    <span>S/{{ new Intl.NumberFormat("es-PE").format(total) }}</span>
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
                        <div class="offer-badge">6% OFF</div>
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
                            <div class="cart-item-price">S/.{{ new Intl.NumberFormat("es-PE").format(prodCart.price) }}</div>
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
    <div class="wrapper">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vegetables & Fruits</li>
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
                        <div class="product-top-dt">
                            <div class="product-left-title">
                                <h2 v-for="category in is_category">{{category.name}}</h2>
                            </div>
                            <a href="#" class="filter-btn pull-bs-canvas-right">Filters</a>
                            <div class="product-sort">
                                <div class="ui selection dropdown vchrt-dropdown">
                                    <input name="gender" type="hidden" value="default">
                                    <i class="dropdown icon d-icon"></i>
                                    <div class="text">Ordenar por</div>
                                    <div class="menu">
<!--                                        <div class="item" data-value="0">Popularity</div>-->
                                        <div class="item" data-value="1" @click="OrderName('price', 'desc')">Precio - Menor a Mayor</div>
                                        <div class="item" data-value="2" @click="OrderName('price', 'asc')">Pricio - Mayor a Menor</div>
                                        <div class="item" data-value="3" @click="OrderName('name', 'desc')">Alfabético (a - z)</div>
                                        <div class="item" data-value="3" @click="OrderName('name', 'asc')">Alfabético (z - a)</div>
<!--                                        <div class="item" data-value="4">Saving - High to Low</div>-->
<!--                                        <div class="item" data-value="5">Saving - Low to High</div>-->
<!--                                        <div class="item" data-value="6">% Off - High to Low</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-list-view">
                    <div class="row">
                        <div class="col-lg-3 col-md-6"
                             v-for="product in products_category"
                        >
                            <div class="product-item mb-30">
                                <a :href="'/product/'+product.id" class="product-img">
                                    <template v-for="(photos, index) in product.photos" :key="photos.name">
                                        <img :src="'http://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                                    </template>
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1" v-for="category in is_category">{{ category.name }}</span>
                                        <!--                    <span class="like-icon" title="wishlist"></span>-->
                                    </div>
                                </a>
                                <div class="product-text-dt">
                                    <p v-if="product.stock >= 3"><span>(en stock)</span></p>
                                    <p v-if="product.stock === 3">Quedan pocas unidades!<span>(In Stock)</span></p>
                                    <p v-else-if="product.stock === 2">
                                        El producto esta por terminarse!
                                    </p>
                                    <p v-else-if="product.stock === 1">
                                        Ultima unidad disponible!
                                    </p>
                                    <h4>{{ product.name }} | {{product.stock}} | {{product.quantity}}</h4>
                                    <div class="product-price">
                                        S/.{{ new Intl.NumberFormat("es-PE").format(product.price) }}
                                        <!--                    <span>$15</span>-->
                                    </div>
                                    <div class="qty-cart">
                                        <div class="quantity buttons_added">

                                            <!--                        <input type="number" step="1" name="quantity" :value="product.quantity" class="input-text qty text">-->
                                            <template v-for="carts in cart">
                                                <template v-if="carts.id === product.id">
                                                    <button type="button" class="minus minus-btn" @click="removeToCart(product)">-</button>
                                                    <span class="qty px-2 text">{{carts.quantity}}</span>
                                                    <button type="button" :disabled="product.stock === 0" class="plus plus-btn" @click="addToCart(product)">+</button>
                                                </template>
                                                <!--                            <template v-else>-->
                                                <!--                                <span class="qty px-2 text">{{product.quantity}}</span>-->
                                                <!--                            </template>-->
                                            </template>
                                        </div>
                                        <!--                    <button :disabled="product.stock === 0" @click="sendToCart()">-->
                                        <!--                        Agregar al carrito-->
                                        <!--                    </button>-->
                                        <button type="button" class="cart-icon btn" :disabled="product.stock === 0" @click="addToCart(product)"><i class="uil uil-shopping-cart-alt"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="col-md-12">-->
<!--                            <div class="more-product-btn">-->
<!--                                <button class="show-more-btn hover-btn" onclick="window.location.href = '#';">Show More</button>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import HeaderComponent from "./HeaderComponent";
import TopComponent from "./TopComponent";
import orderBy from 'lodash/orderBy'
import {ref, toRefs, nextTick, reactive, computed} from "vue";
export default {
    components: { HeaderComponent, TopComponent },
    props: ["idcategory", "user"],
    setup(props){
        const products = ref([]);
        const featured_slider_top = ref(true);
        const featured_slider = ref(false);
        const categories = ref([]);
        const tax = ref(1);
        const cartState = reactive({
            cartOpen: false,
            cart: [],
            o_ad: 'asc',
            o_x: 'name',
            total: computed(()=>{
                return  cartState.cart.reduce((prev, curr) => {
                    const prevPrice = prev.price || prev;
                    const prevQuantity = prev.quantity || 1;
                    return prevPrice * prevQuantity + curr.price * curr.quantity;
                }, 0);
            }),
            products_category : computed(() => {
                return orderBy(products.value.filter((product) => {
                    const cat = product.categorias.filter(ca => ca.id == props.idcategory)
                    // console.log(cat)
                    if (cat != "") {
                        // badge_new.value = true
                        return product.categorias.filter(ca => ca.id == props.idcategory)
                    }
                }), cartState.o_x, cartState.o_ad)
            }),
            is_category : computed(() => {
                return categories.value.filter(category => category.id == props.idcategory)
            })
        });

        fetch("http://sistemaorion.nebulaperu.com/api/v1/categories")
            .then(res => res.json())
            .then(data => {
                console.log("pre carga category")
                categories.value = data;
            });

        function OrderName(name, ad){
            console.log(name, ad)
            if (ad === 'desc'){
                cartState.o_x = name;
                cartState.o_ad = 'asc';
            }else{
                cartState.o_x = name;
                cartState.o_ad = 'desc';
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
            const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length >= 1 && cartIndex >= 0) {
                console.log("si");
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
                    console.log("si");
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
                console.log("si seufno");
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
                console.log(product.name);
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
            // localStorage.removeItem('local-prod')
            fetch("http://sistemaorion.nebulaperu.com/api/v1/products")
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

            addToCart,
            removeToCart,
            deleteToCart,

            OrderName,
            tax
        };
    }
}
</script>
