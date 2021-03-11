<template>
    <div class="item">
        <div class="product-item">
            <a :href="'/product/'+product.id" class="product-img">
                <template v-for="(photos, index) in product.photos" :key="photos.id">
                    <img :src="'http://sistemaorion.nebulaperu.com/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                </template>
                <div class="product-absolute-options">
                    <span class="offer-badge-1" v-if="badge_new">{{ cat }}</span>
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
                    S/{{ new Intl.NumberFormat("es-PE").format(product.price) }}
<!--                    <span>$15</span>-->
                </div>
                <div class="qty-cart">
                    <div class="quantity buttons_added">

<!--                        <input type="number" step="1" name="quantity" :value="product.quantity" class="input-text qty text">-->
                        <template v-for="carts in cart">
                            <template v-if="carts.id === product.id">
                                <button type="button" class="minus minus-btn" @click="sendToCartR()">-</button>
                                <span class="qty px-2 text">{{carts.quantity}}</span>
                                <button type="button" :disabled="product.stock === 0" class="plus plus-btn" @click="sendToCart()">+</button>
                            </template>
<!--                            <template v-else>-->
<!--                                <span class="qty px-2 text">{{product.quantity}}</span>-->
<!--                            </template>-->
                        </template>
                    </div>
<!--                    <button :disabled="product.stock === 0" @click="sendToCart()">-->
<!--                        Agregar al carrito-->
<!--                    </button>-->
                    <button type="button" class="cart-icon btn" :disabled="product.stock === 0" @click="sendToCart()"><i class="uil uil-shopping-cart-alt"></i></button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

import {computed, reactive, ref, toRefs} from "vue";

export default {
    props: ["product", "cart", "badge_new", 'cat'],
    emits: ["sendtocart","sendtocartr"],
    setup(props, context){

        function sendToCart(){
            context.emit("sendtocart", props.product);
        }
        function sendToCartR(){
            context.emit("sendtocartr", props.product);
        }
        return {
            sendToCart,
            sendToCartR,
        }
    }
}

</script>
