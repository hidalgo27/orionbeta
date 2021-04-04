<template>
    <div class="col p-0">
        <div class="owl-carousel cate-banners owl-theme">
            <div class="item">
                <video autoplay muted loop class="w-100">
                    <source src="/images/banners/ecommerce-web.mp4" type="video/mp4" class="w-100">
                </video>
            </div>
            <div class="item">
                <img src="/images/banners/galaxy.gif" alt="banners">
            </div>
        </div>
    </div>
</template>

<script>
import {nextTick} from "vue";

export default {

    setup(){
        nextTick(() => {
            $('.cate-banners').owlCarousel({
                loop:true,
                margin:30,
                nav:false,
                dots:false,
                autoplay:true,
                autoplayTimeout: 58000,
                autoplayHoverPause:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    },
                    1200:{
                        items:1
                    },
                    1400:{
                        items:1
                    }
                }
            })
        })

    }
}
</script>
