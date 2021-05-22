<template>
    <div class="z-index-9999 fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="alert bg-dark shadow-sm alert-dismissible fade show  text-white p-4  w-100" role="alert">
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col">
                                    <strong>Tiene!</strong> {{ len }} productos seleccionados S/{{ new Intl.NumberFormat("es-PE").format(total) }}
                                    <a href="/hola" class="btn btn-danger">Pagar</a>
                                </div>
                                <button type="button" class="close " data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {inject, reactive, ref, toRefs} from "vue";

export default {
    setup(){
        // const cartState = reactive({
        //     cart: [],
        // });
        const len = ref(0);
        const total = ref(0);

        let dataB = JSON.parse(sessionStorage.getItem('local-cart'));
        if (dataB === null){
            len.value = 0
        }else{
            // len.value = dataB
            len.value = dataB.length;
        }

        let dataT = JSON.parse(sessionStorage.getItem('total_s'));
        if (dataB === null){
            total.value = 0
        }else{
            // len.value = dataB
            total.value = dataT;
        }

        const emitter = inject("emitter");   // Inject `emitter`
        emitter.on("myevent", (value) => {   // *Listen* for event
            console.log("myevent received!", `${value}`);
            // console.log()

            len.value = value;
        });

        emitter.on("myeventTotal", (value) => {   // *Listen* for event
            console.log("myevent received!", `${value}`);
            // console.log()

            total.value = value;
        });

        return {
            // ...toRefs(cartState),
            emitter,
            len,
            total
        }
    }
}
</script>
