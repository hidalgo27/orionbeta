<template>
    <header>
        <h3>Commerce</h3>

        <button class="cart" v-on:click="cartOpen = !cartOpen">Carro ({{ cart.length }})</button>
        <div class="cart-content" v-show="cartOpen">
            <div
                v-for="(prodCart, index) in cart"
                :key="prodCart.name"
                class="cart-content__product"
                :class="{ 'bg-gray': index & 1 }"
            >
                <img v-bind:src="prodCart.images[0].thumbnail" :alt="prodCart.name.toUpperCase()" />
                <span>
                    {{ prodCart.name }} - $ {{ new Intl.NumberFormat("es-PE").format(prodCart.price) }}
                    ({{ prodCart.quantity }})
                </span>
            </div>
            <p>Total: $ {{ new Intl.NumberFormat("es-PE").format(total) }}</p>
        </div>
    </header>
    <main>
        <product-component
            v-for="product in products"
            :key="product.name"
            :product="product"
            @sendtocart="addToCart($event)"
        ></product-component>
    </main>
</template>

<script>
import ProductComponent from "./ProductComponent";
export default {
    components: { ProductComponent },
    data() {
        return {
            products: [],
            cartOpen: false,

            // total: 0,

            cart: []
        };
    },
    methods: {
        addToCart(product) {
            const prodIndex = this.cart.findIndex(prod => prod.name === product.name);
            if (prodIndex >= 0) {
                this.cart[prodIndex].quantity += 1;
            } else {
                this.cart.push(product);
            }
            product.stock -= 1;
        }
    },
    watch: {
        // Observar cambios sobre cart que tiene productos
        // cart: {
        //     handler(cart){
        //         // Generaar total mediante reduce
        //         this.total = cart.reduce((prev, curr) => {
        //             const prevPrice = prev.price || prev;
        //             const prevQuantity = prev.quantity || 1;
        //             return prevPrice * prevQuantity + curr.price * curr.quantity;
        //         }, 0);
        //     },
        //     // Autorizar la búsqueda más profunda
        //     deep: true
        // }
    },
    computed: {
        total(){
            return this.cart.reduce((prev, curr) => {
                const prevPrice = prev.price || prev;
                const prevQuantity = prev.quantity || 1;
                return prevPrice * prevQuantity + curr.price * curr.quantity;
            }, 0);
        }
    },
    // beforeCreate() {
    //     console.log("before create")
    // },
    created() {
        fetch("https://my-json-server.typicode.com/iosamuel/demo/products")
            .then(res => res.json())
            .then(data => {
                this.products = data;
            });
    }
}
</script>
