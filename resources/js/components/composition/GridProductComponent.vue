<template>
    <!-- Share Icons Start-->
    <div class="icon-bar">
        <a href="https://www.facebook.com/OrionCusco" target="_blank" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>
<!--        <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>-->
<!--        <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>-->
<!--        <a href="#" class="linkedin" title="Share"><i class="fab fa-linkedin-in"></i></a>-->
        <a href="https://www.instagram.com/orioncusco" target="_blank" class="twitter" title="Share"><i class="fab fa-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=51946565500" target="_blank" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>
    </div>
    <!-- Share Icons End-->
    <!-- Cart Sidebar Offset Start-->
    <cart-component :cart="cart"></cart-component>
    <!-- Cart Sidebar Offsetl End-->
    <!-- Header Start -->
<!--    <header-component :cart = "cart.length" :user="user"></header-component>-->
    <div class="wrapper">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{MaysPrimera(namecategory.toLowerCase())}}</li>
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
                                <h2>{{MaysPrimera(namecategory.toLowerCase())}}</h2>
                            </div>
<!--                            <a href="#" class="filter-btn pull-bs-canvas-right">Filters</a>-->
                            <div class="product-sort">
                                <div class="ui selection dropdown vchrt-dropdown">
                                    <input name="gender" type="hidden" value="default">
                                    <i class="dropdown icon d-icon"></i>
                                    <div class="text">Ordenar por</div>
                                    <div class="menu">
<!--                                        <div class="item" data-value="0">Popularity</div>-->
                                        <div class="item" data-value="1" @click="OrderName('price', 'desc')">Precio - Menor a Mayor</div>
                                        <div class="item" data-value="2" @click="OrderName('price', 'asc')">Precio - Mayor a Menor</div>
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
                        <div class="col-lg-3 col-md-6 d-flex"
                             v-for="product in products_category"
                        >
                            <div class="product-item mb-30">
                                <a :href="'/product/'+product.id" class="product-img">
                                    <template v-for="(photos, index) in product.photos" :key="photos.name">
                                        <img :src="'https://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                                    </template>
                                    <div class="product-absolute-options">
                                        <span class="offer-badge-1">{{MaysPrimera(namecategory.toLowerCase())}}</span>
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
                                    <p v-else-if="product.stock === 0">
                                        Sin Stock
                                    </p>
                                    <h4>{{ product.name }}</h4>
                                    <div class="product-price">
                                        <template v-if="(product.price === 0)">
                                            Precio por kilo S/{{ new Intl.NumberFormat("es-PE").format(product.regular_price) }}
                                            <p class="small">Un asesor se contactara con ud. para fijar precio.</p>
                                        </template>
                                        <template v-else>
                                            S/{{ new Intl.NumberFormat("es-PE").format(product.price) }}
                                        </template>
                                        <!--                    <span>$15</span>-->
                                    </div>
                                    <template v-if="product.stock > 0">
                                    <div class="qty-cart">
                                        <template v-if="product.price > 0">
                                        <div class="quantity buttons_added">
                                            <template v-for="carts in cart">
                                                <template v-if="carts.id === product.id">
                                                    <button type="button" class="minus minus-btn" @click="removeToCart(product)">-</button>
                                                    <span class="qty px-2 text">{{carts.quantity}}</span>
                                                    <button type="button" :disabled="carts.stock === 0" class="plus plus-btn" @click="addToCart(product)">+</button>
                                                </template>
                                            </template>
                                        </div>
                                        </template>
                                        <template v-if="vs(product.id)">
                                            <template v-for="carts in cart">
                                                <template v-if="carts.id === product.id">
                                                    <button type="button" class="cart-icon btn btn-small btn-success" :disabled="carts.stock === 0" @click="addToCart(product)"><i class="uil uil-shopping-cart-alt"></i> Agregado</button>
                                                </template>
                                            </template>
                                        </template>
                                        <template v-else>
                                            <button type="button" class="cart-icon btn btn-small btn-danger" @click="addToCart(product)"><i class="uil uil-shopping-cart-alt"></i> Agregar</button>
                                        </template>

                                    </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import HeaderComponent from "./HeaderComponent";
import TopComponent from "./TopComponent";
import orderBy from 'lodash/orderBy';
import CartComponent from "./CartComponent";
import {ref, toRefs, nextTick, reactive, computed, inject} from "vue";
export default {
    components: { HeaderComponent, TopComponent, CartComponent },
    props: ["namecategory", "user"],
    setup(props){
        const products = ref([]);
        const featured_slider_top = ref(true);
        const featured_slider = ref(false);
        const categories = ref([]);
        const tax = ref(1);
        const emitter = inject("emitter");
        // const vs = ref(false);
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
                    const cat = product.categorias.filter(
                        ca => ca.name == props.namecategory.toUpperCase()
                    )
                    if (cat != "") {
                        return product.categorias.filter(ca => ca.name == props.namecategory.toUpperCase())
                    }
                }), cartState.o_x, cartState.o_ad)
            }),
            products_category_cp : computed(() => {
                return orderBy(products.value.filter((product) => {
                    const cat = product.categorias.filter(
                        ca => ca.name == props.namecategory.toUpperCase()
                    )
                    if (cat != "") {
                        return product.categorias.filter(ca => ca.name == props.namecategory.toUpperCase() && ca.name == 'Consultar precio')
                    }
                }), cartState.o_x, cartState.o_ad)
            }),
            is_category : computed(() => {
                return categories.value.filter(category => category.name == props.namecategory)
            }),

        });


        function vs(val){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === val);
            if (cartIndex >= 0){
                console.log(cartState.cart[cartIndex].id);
                // console.log(props.cart[cartIndex], '0')
                return true
            }
        }

        fetch("https://sistemaorion.nebulaperu.com/api/v1/categories")
            .then(res => res.json())
            .then(data => {
                // console.log("pre carga category")
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
            fetch("https://sistemaorion.nebulaperu.com/api/v1/products/others/listado/"+props.namecategory)
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

        function MaysPrimera(string){
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        return {
            ...toRefs(cartState),
            products,
            featured_slider_top,
            featured_slider,

            addToCart,
            removeToCart,
            deleteToCart,
            MaysPrimera,

            OrderName,
            tax,
            emitter,
            vs
        };
    }
}
</script>
