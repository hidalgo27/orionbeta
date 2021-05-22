<template>
    {{ len }}
</template>

<script>
import {inject, reactive, ref, toRefs} from "vue";

export default {
    setup(){
        // const cartState = reactive({
        //     cart: [],
        // });
        const len = ref(0);

        let dataB = JSON.parse(sessionStorage.getItem('local-cart'));
        if (dataB === null){
            len.value = 0
        }else{
            // len.value = dataB
            len.value = dataB.length;
        }

        const emitter = inject("emitter");   // Inject `emitter`
        emitter.on("myevent", (value) => {   // *Listen* for event
            console.log("myevent received!", `${value}`);
            // console.log()

            len.value = value;
        });

        return {
            // ...toRefs(cartState),
            emitter,
            len
        }
    }
}
</script>
