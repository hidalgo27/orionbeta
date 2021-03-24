<template>
    <header>
        <h3>PlatziCommerce</h3>
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
                    {{ prodCart.name }} - $ {{ new Intl.NumberFormat("es-CO").format(prodCart.price) }}
                    ({{ prodCart.quantity }})
                </span>
            </div>
            <p>Total: $ {{ new Intl.NumberFormat("es-PE").format(total) }}</p>
        </div>
    </header>
    <div class="product-search">
        <input
            type="text"
            placeholder="Buscar producto..."
            v-model="filtro"
        />
    </div>
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
import { ref, reactive, toRefs, watch, computed, onMounted } from 'vue';
import ProductComponent from "./ProductComponent";
export default {
    components: { ProductComponent },
    setup() {
        const filtro = ref("");
        const products = ref([]);
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
        });



        // const total = computed(()=>{
        //     return  cartState.cart.reduce((prev, curr) => {
        //         const prevPrice = prev.price || prev;
        //         const prevQuantity = prev.quantity || 1;
        //         return prevPrice * prevQuantity + curr.price * curr.quantity;
        //     }, 0);
        // })

        function addToCart(product){
            const prodIndex = cartState.cart.findIndex(prod => prod.name === product.name);
            if (prodIndex >= 0) {
                cartState.cart[prodIndex].quantity += 1;
            } else {
                cartState.cart.push(product);
            }
            product.stock -= 1;
        }

        // setTimeout(()=> {
        //     activeImage.value = 1;
        // }, 2000);

        // watch(cartState.cart, (value, oldValue)=>{
        //     cartState.total = cartState.cart.reduce((prev, curr) => {
        //         const prevPrice = prev.price || prev;
        //         const prevQuantity = prev.quantity || 1;
        //         return prevPrice * prevQuantity + curr.price * curr.quantity;
        //     }, 0);
        // })

        //setup() = created()

        onMounted(()=> {
            console.log("mounted");
        })

        fetch("https://my-json-server.typicode.com/iosamuel/demo/products")
            .then(res => res.json())
            .then(data => {
                products.value = data;

            });

        const filteredProducts = computed(() => {
            console.log(filtro.value)
            if (filtro.value != "") {
                return products.value.filter((product) =>
                    product.name.toUpperCase().includes(filtro.value.toUpperCase())
                );
            }
            return products.value;
        });

        return {
            ...toRefs(cartState),
            filtro,
            filteredProducts,
            products,
            addToCart
        };
    }
}
</script>
