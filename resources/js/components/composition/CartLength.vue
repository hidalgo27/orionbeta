<template>
    {{ cart.length }}
</template>

<script>
import {reactive, toRefs} from "vue";

export default {
    setup(){
        const cartState = reactive({
            cart: [],
        });

        let dataB = JSON.parse(sessionStorage.getItem('local-cart'));
        if (dataB === null){
            cartState.cart = []
        }else{
            cartState.cart = dataB
        }



        return {
            ...toRefs(cartState)
        }
    }
}
</script>

<style scoped>

</style>
