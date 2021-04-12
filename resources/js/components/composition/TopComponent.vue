<template>

        <div class="product-item">
            <a :href="'/product/'+product.id" class="product-img">
                <template v-for="(photos, index) in product.photos" :key="photos.id">
                    <img :src="'https://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1" loading="lazy">
                </template>
                <div class="product-absolute-options">
                    <span class="offer-badge-1 bg-black" v-if="badge_new">{{ cat }}</span>
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
                    S/{{ new Intl.NumberFormat("es-PE").format(product.price) }}
<!--                    <span>$15</span>-->
                </div>
                <template v-if="product.stock > 0">
                <div class="qty-cart">
                    <div class="quantity buttons_added">
                        <template v-if="vs(product.id)">
                            <template v-for="carts in cart">
                                <template v-if="carts.id === product.id">
                                    <button type="button" class="minus minus-btn" @click="sendToCartR()">-</button>
                                    <span class="qty px-2 text">{{carts.quantity}}</span>
                                    <button type="button" :disabled="carts.stock === 0" class="plus plus-btn" @click="sendToCart()">+</button>
                                </template>
                            </template>
                        </template>
                    </div>

                    <template v-if="vs(product.id)">
                        <template v-for="carts in cart">
                            <template v-if="carts.id === product.id">
                                <button type="button" class="cart-icon btn btn-small btn-success" :disabled="carts.stock === 0" @click="sendToCart()"><i class="uil uil-shopping-cart-alt"></i> Agregado</button>
                            </template>
                        </template>
                    </template>
                    <template v-else>
                        <button type="button" class="cart-icon btn btn-small btn-danger" @click="sendToCart()"><i class="uil uil-shopping-cart-alt"></i> Agregar</button>
                    </template>

                </div>
                </template>
            </div>
        </div>

</template>
<script>

import {computed, reactive, ref, toRefs} from "vue";

export default {
    props: ["product", "cart", "badge_new", 'cat'],
    emits: ["sendtocart","sendtocartr"],
    setup(props, context){
        // const v_no = ref(false);
        const productState = reactive({
            activeImage: 0,
            // price_color: "rgb(104 104 209)",
            // price_color: computed(()=>
            //     props.cart.stock = 0 ? "rgb(188 30 67)" : "rgb(188 30 67)"
            // ),
            // products_top : computed(() => {
            //     return props.cart.value.filter((cart) => cart.id == props.product.id)
            // })
            // v_s : computed(()=>{
            //     const cartIndex = props.cart.findIndex(prod => prod.id === props.product.id);
            //     if (cartIndex >= 0){
            //         console.log(props.cart[cartIndex].id);
            //         // console.log(props.cart[cartIndex], '0')
            //         return true
            //     }
            // })
        });

        function vs(val){
            const cartIndex = props.cart.findIndex(prod => prod.id === val);
            if (cartIndex >= 0){
                console.log(props.cart[cartIndex].id);
                // console.log(props.cart[cartIndex], '0')
                return true
            }
        }
        function sendToCart(){
            context.emit("sendtocart", props.product);
        }
        function sendToCartR(){
            context.emit("sendtocartr", props.product);
        }
        return {
            ...toRefs(productState),
            sendToCart,
            sendToCartR,

            vs
        }
    }
}

</script>
