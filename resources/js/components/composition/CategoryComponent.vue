<template>
    <div class="section145">
        <div class="container">
            <div class="row">
<!--                <div class="col-md-12">-->
<!--                    <div class="main-title-tt">-->
<!--                        <div class="main-title-left">-->
<!--                            <span>Comprar Por</span>-->
<!--                            <h2>Categorias</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-md-12">
                    <div class="owl-carousel cate-slider owl-theme">
                        <div class="item" v-for="category in is_category">
                            <a :href="'/products/category/'+category.name.toLowerCase()" class="category-item">
                                <div class="cate-img">
                                    <img :src="'https://sistemaorion.nebulaperu.com/api/v1/categories/imagen/'+category.photo" :alt="category.name" loading="lazy">
                                </div>
                                <h4 class="capitalize">{{ MaysPrimera(category.name.toLowerCase()) }}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {computed, nextTick, reactive, ref, toRefs} from "vue";

export default {
    setup(){
        const categories = ref([]);
        const categoryState = reactive({
            is_category : computed(() => {
                return categories.value.filter(category => category.state == 1)
            })
        })

        fetch("https://sistemaorion.nebulaperu.com/api/v1/categories")
            .then(res => res.json())
            .then(data => {
                // console.log("pre carga category")
                categories.value = data;

                nextTick(() => {
                    $('.cate-slider').owlCarousel({
                        items: 8,
                        loop:false,
                        margin:10,
                        nav:true,
                        dots:false,
                        navText: ["<i class='uil uil-angle-left'></i>", "<i class='uil uil-angle-right'></i>"],
                        responsive:{
                            0:{
                                items:2
                            },
                            600:{
                                items:2
                            },
                            1000:{
                                items:4
                            },
                            1200:{
                                items:6
                            },
                            1400:{
                                items:6
                            }
                        }
                    })
                })
            });

        function MaysPrimera(string){
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        return {
            ...toRefs(categoryState),
            categories,
            MaysPrimera
        }
    }
}
</script>
