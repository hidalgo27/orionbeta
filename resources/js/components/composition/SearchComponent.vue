<template>
    <div id="search_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
        <div class="modal-dialog search-ground-area" role="document">
            <div class="category-area-inner">
                <div class="modal-header">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                        <i class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="category-model-content modal-content">
                    <div class="search-header">
                        <input
                            type="text"
                            placeholder="Buscar producto y enter..."
                            v-model="filtro"
                            @keyup.enter="searchStatus()"
                        />
                        <button type="button" @click="searchStatus()"><i class="uil uil-search"></i></button>
                    </div>
                    <div class="search-by-cat">
                        <a :href="'/product/'+product.id" class="single-cat" v-for="product in filteredProducts" :key="product.id">
                            <div class="icon">
                                <template v-for="(photos, index) in product.photos" :key="photos.id">
                                    <img :src="'http://sistemaorion.green.com.pe/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                                </template>
                            </div>
                            <div class="text text-capitalize">
                                {{ product.name.toLowerCase() }}
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {computed, ref} from "vue";

export default {
    setup(){
        const products = ref([]);
        const filtro = ref("");
        function searchStatus(){
            if (filtro.value.length > 0){
                fetch("http://sistemaorion.green.com.pe/api/v1/products")
                    .then(res => res.json())
                    .then(data => {
                        console.log("pre carga products")
                        products.value = data;
                    });
            }else{
                console.log("pre carga products elimi")
                products.value = [];
            }
        }
        const filteredProducts = computed(() => {
            if (filtro.value != "") {
                return products.value.filter((product) =>
                    product.name.toUpperCase().includes(filtro.value.toUpperCase())
                );
            }
            return products.value;
        });
        return{
            filtro,
            products,
            filteredProducts,
            searchStatus
        }
    }
}
</script>

