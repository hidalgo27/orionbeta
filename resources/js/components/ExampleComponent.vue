<template>

        <div class="owl-carousel owl-theme">
            <div class="item" v-for="video in videos">
                <img v-bind:src="video.url">
            </div>
        </div>

</template>

<script>
export default {
    data(){
        return {
            videos: [],
        }
    },
    created() {
        fetch("https://jsonplaceholder.typicode.com/photos?_start=10&_limit=10")
            .then(res => res.json())
            .then(data => {
                this.videos = data;
                this.$nextTick(() => {
                    var owl = $('.owl-carousel');
                    owl.owlCarousel({
                        items: 4,
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        autoplayTimeout: 900,
                        autoplayHoverPause: true,
                        responsiveClass: true,
                        responsive: {
                            0: {
                                items: 1,
                                nav: true
                            },
                            600: {
                                items: 3,
                                nav: false
                            },
                            1000: {
                                items: 5,
                                nav: true,
                                loop: false,
                                margin: 20
                            }
                        }
                    });
                })
            });
    },

}
</script>
