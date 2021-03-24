<template>
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
                <!--                <div class="cart-total-dil pt-2">-->
                <!--                    <h4>Delivery</h4>-->
                <!--                    <span>S/{{tax}}</span>-->
                <!--                </div>-->
            </div>
            <div class="side-cart-items">
                <div class="cart-item"
                     v-for="(prodCart, index) in cart"
                     :key="prodCart.id"
                >
                    <div class="cart-product-img">
                        <template v-for="(photos, index) in prodCart.photos" :key="prodCart.name">
                            <img :src="'http://sistemaorion.green.com.pe/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                        </template>
                        <!--                        <div class="offer-badge">6% OFF</div>-->
                    </div>
                    <div class="cart-text">
                        <h4>{{ prodCart.name }}</h4>
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
                <span>S/{{ new Intl.NumberFormat("es-PE").format(total) }}</span>
            </div>
            <div class="checkout-cart">
                <!--                <a href="#" class="promo-code">Have a promocode?</a>-->
                <a href="/checkout" class="cart-checkout-btn hover-btn">Pasar por Caja</a>
            </div>
        </div>
    </div>
</template>

<script>
import {computed, reactive, toRefs} from "vue";
import mitt from "mitt";
export default {
    props: ['cart'],
    setup(props){
        // const products = ref([]);
        const emitter = mitt()
        const cartState = reactive({
            cartOpen: false,
            cart: props.cart,
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
                // // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }else{
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity += 1;
                } else {
                    cartState.cart.push(product);
                }
                // products.value[prodIndex].stock -= 1;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                // // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
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
                    // // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
                }
                else {
                    cartState.cart.splice(cartIndex, 1);
                    // products.value[prodIndex].stock += 1;
                    // products.value[prodIndex].quantity = 1;
                    sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                    // // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
                }

            }else{
                // console.log("si seufno");
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity -= 1;
                    cartState.cart[cartIndex].stock += 1;
                } else {
                    cartState.cart.push(product);
                }
                // products.value[prodIndex].stock += 1;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                // // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
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
                // // sessionStorage.setItem('local-prod', JSON.stringify(products.value));
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

        // let dataB = JSON.parse(sessionStorage.getItem('local-cart'));
        // if (dataB === null){
        //     cartState.cart = []
        // }else{
        //     cartState.cart = dataB
        //     // console.log(cartState.cart)
        //     // // console.log(products)
        // }

        return {
            ...toRefs(cartState),
            addToCart,
            removeToCart,
            deleteToCart,
        }
    }
}
</script>
