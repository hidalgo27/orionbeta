<template>
    <!-- Cart Sidebar Offset Start-->
    <div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
        <div class="bs-canvas-header side-cart-header p-3 ">
            <div class="d-inline-block  main-cart-title">Carro <span>({{ cart.length }} Items)</span></div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body">
            <div class="cart-top-total">
                <div class="cart-total-dil">
                    <h4>Orion Super Mercado</h4>
                    <span>S/.{{ new Intl.NumberFormat("es-PE").format(total) }}</span>
                </div>
                <div class="cart-total-dil pt-2">
                    <h4>Delivery</h4>
                    <span>S/.1</span>
                </div>
            </div>
            <div class="side-cart-items">
                <div class="cart-item"
                     v-for="(prodCart, index) in cart"
                     :key="prodCart.id"
                >
                    <div class="cart-product-img">
                        <img src="images/product/img-1.jpg" alt="">
                        <div class="offer-badge">6% OFF</div>
                    </div>
                    <div class="cart-text">
                        <h4>{{ prodCart.name }} | {{prodCart.stock}} | {{prodCart.quantity}}</h4>
                        <!--                        <div class="cart-radio">-->
                        <!--                            <ul class="kggrm-now">-->
                        <!--                                <li>-->
                        <!--                                    <input type="radio" id="a1" name="cart1">-->
                        <!--                                    <label for="a1">0.50</label>-->
                        <!--                                </li>-->
                        <!--                                <li>-->
                        <!--                                    <input type="radio" id="a2" name="cart1">-->
                        <!--                                    <label for="a2">1kg</label>-->
                        <!--                                </li>-->
                        <!--                                <li>-->
                        <!--                                    <input type="radio" id="a3" name="cart1">-->
                        <!--                                    <label for="a3">2kg</label>-->
                        <!--                                </li>-->
                        <!--                                <li>-->
                        <!--                                    <input type="radio" id="a4" name="cart1">-->
                        <!--                                    <label for="a4">3kg</label>-->
                        <!--                                </li>-->
                        <!--                            </ul>-->
                        <!--                        </div>-->
                        <div class="qty-group">
                            <div class="quantity buttons_added">
                                <button type="button"  class="minus minus-btn" @click="removeToCart(prodCart)">-</button>
                                <!--                                <input type="number" step="1" name="quantity" :value="prodCart.quantity" class="input-text qty text">-->
                                <span class="qty text px-2">{{prodCart.quantity}}</span>
                                <button type="button" value="+" class="plus plus-btn" :disabled="prodCart.stock === 0" @click="addToCart(prodCart)">+</button>
                            </div>
                            <div class="cart-item-price">S/.{{ new Intl.NumberFormat("es-PE").format(prodCart.price) }}</div>
                        </div>

                        <button type="button" class="cart-close-btn" @click="deleteToCart(prodCart)"><i class="uil uil-multiply"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bs-canvas-footer">
            <!--            <div class="cart-total-dil saving-total ">-->
            <!--                <h4>Total Saving</h4>-->
            <!--                <span>S/.{{ new Intl.NumberFormat("es-PE").format(total) }}</span>-->
            <!--            </div>-->
            <div class="main-total-cart">
                <h2>Total</h2>
                <span>S/.{{ new Intl.NumberFormat("es-PE").format(total) + 1 }}</span>
            </div>
            <div class="checkout-cart">
                <!--                <a href="#" class="promo-code">Have a promocode?</a>-->
                <a href="#" class="cart-checkout-btn hover-btn">Pasar por Caja</a>
            </div>
        </div>
    </div>
    <!-- Cart Sidebar Offsetl End-->
    <!-- Header Start -->
    <header-component></header-component>
    <!-- Header End -->
    <div class="wrapper">
        <offer-component></offer-component>
        <category-component></category-component>

        <!-- Top productos-->
        <index-component></index-component>
        <!-- end productos-->

        <!-- Best-->
        <best-component></best-component>
        <!-- End best-->

        <!-- New-->
        <div class="section145">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title-tt">
                            <div class="main-title-left">
                                <span>Para Ti</span>
                                <h2>Top Productos Destacados</h2>
                            </div>
                            <a href="#" class="see-more-btn">See All</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel featured-slider featured-slider-new owl-theme">
                            <template
                                v-for="product in products"
                                :key="product.name"
                            >
                                <template v-if="product.id === '1'">
                                    <top-component
                                        :cart = "cart"
                                        :product="product"
                                        @sendtocart="addToCart($event)"
                                        @sendtocartr="removeToCart($event)"
                                    ></top-component>
                                </template>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End new-->

    </div>
</template>
<script>
import HeaderComponent from "./HeaderComponent";
import OfferComponent from "./OfferComponent";
import CategoryComponent from "./CategoryComponent";
import TopComponent from "./TopComponent";
import BestComponent from "./BestComponent";
import NewComponent from "./NewComponent";
import {ref, toRefs, nextTick, reactive, computed} from "vue";
export default {
    components: { OfferComponent, CategoryComponent, TopComponent, BestComponent, NewComponent, HeaderComponent },
    setup(){

    }
}
</script>
