<template>

    <div class="main-banner-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme" :class="{ 'offers-banner-top': offers_banner_top, 'offers-banner': offers_banner }">
                        <div class="item"
                             v-for="prod_off in products_offers"
                        >
                            <div class="offer-item">
                                <div class="offer-item-img">
                                    <div class="gambo-overlay"></div>
                                    <img src="images/banners/offer-1.jpg" alt="">
                                </div>
                                <div class="offer-text-dt">
                                    <div class="offer-top-text-banner">
                                        <p>6% Off</p>
                                        <div class="top-text-1">Buy More & Save More</div>
                                        <span>{{ prod_off.name }}</span>
                                    </div>
                                    <a href="#" class="Offer-shop-btn hover-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
export default {

}
</script>
