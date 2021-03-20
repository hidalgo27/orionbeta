<template>
    <!-- Filter Right Sidebar Offset Start-->
    <div class="bs-canvas bs-canvas-right position-fixed bg-cart h-100">
        <div class="bs-canvas-header side-cart-header p-3 ">
            <div class="d-inline-block  main-cart-title">Filters</div>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
        </div>
        <div class="bs-canvas-body filter-body">
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Categories</h4>
                </div>
                <div class="filter-item-body scrollstyle_4">
                    <div class="cart-radio">
                        <ul class="cte-select">
                            <li>
                                <input type="radio" id="c1" name="category1">
                                <label for="c1">All</label>
                            </li>
                            <li>
                                <input type="radio" id="c2" name="category1" checked>
                                <label for="c2">Vegetables & Fruits</label>
                            </li>
                            <li>
                                <input type="radio" id="c3" name="category1">
                                <label for="c3">Grocery & Staples</label>
                            </li>
                            <li>
                                <input type="radio" id="c4" name="category1">
                                <label for="c4">Dairy & Eggs</label>
                            </li>
                            <li>
                                <input type="radio" id="c5" name="category1">
                                <label for="c5">Beverages</label>
                            </li>
                            <li>
                                <input type="radio" id="c6" name="category1">
                                <label for="c6">Snacks</label>
                            </li>
                            <li>
                                <input type="radio" id="c7" name="category1">
                                <label for="c7">Home Care</label>
                            </li>
                            <li>
                                <input type="radio" id="c8" name="category1">
                                <label for="c8">Noodles & Sauces</label>
                            </li>
                            <li>
                                <input type="radio" id="c9" name="category1">
                                <label for="c9">Personal Care</label>
                            </li>
                            <li>
                                <input type="radio" id="c10" name="category1">
                                <label for="c10">Pat Care</label>
                            </li>
                            <li>
                                <input type="radio" id="c11" name="category1">
                                <label for="c11">Mea & Seafood</label>
                            </li>
                            <li>
                                <input type="radio" id="c12" name="category1">
                                <label for="c12">Electronics</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Brand</h4>
                </div>
                <div class="other-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="search-by-catgory">
                            <div class="ui search">
                                <div class="ui left icon input swdh10">
                                    <input class="prompt srch10" type="text" placeholder="Search by brand..">
                                    <i class="uil uil-search-alt icon icon1"></i>
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_1">
                            <label class="custom-control-label" for="brand_1">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_2">
                            <label class="custom-control-label" for="brand_2">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_3">
                            <label class="custom-control-label" for="brand_3">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_4">
                            <label class="custom-control-label" for="brand_4">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_5">
                            <label class="custom-control-label" for="brand_5">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_6">
                            <label class="custom-control-label" for="brand_6">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_7">
                            <label class="custom-control-label" for="brand_7">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_8">
                            <label class="custom-control-label" for="brand_8">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_9">
                            <label class="custom-control-label" for="brand_9">Brand Name</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="brand_10">
                            <label class="custom-control-label" for="brand_10">Brand Name</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Price</h4>
                </div>
                <div class="price-pack-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_1">
                            <label class="custom-control-label" for="price_1">Less than $2 <span class="webproduct">(9)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_2">
                            <label class="custom-control-label" for="price_2">$2 to $5 <span class="webproduct">(8)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_3">
                            <label class="custom-control-label" for="price_3">$6 to $10 <span class="webproduct">(12)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_4">
                            <label class="custom-control-label" for="price_4">$11 to $15 <span class="webproduct">(4)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_5">
                            <label class="custom-control-label" for="price_5">$15 to $20 <span class="webproduct">(16)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_6">
                            <label class="custom-control-label" for="price_6">$21 to $25 <span class="webproduct">(18)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="price_7">
                            <label class="custom-control-label" for="price_7">More than $25 <span class="webproduct">(25)</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Discount</h4>
                </div>
                <div class="offer-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_1">
                            <label class="custom-control-label" for="offer_1">2% - 5% <span class="webproduct">(9)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_2">
                            <label class="custom-control-label" for="offer_2">6% - 10% <span class="webproduct">(5)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_3">
                            <label class="custom-control-label" for="offer_3">11% - 15% <span class="webproduct">(11)</span></label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="offer_4">
                            <label class="custom-control-label" for="offer_4">16% - 25% <span class="webproduct">(27)</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-items">
                <div class="filtr-cate-title">
                    <h4>Pack Size</h4>
                </div>
                <div class="price-pack-item-body scrollstyle_4">
                    <div class="brand-list">
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_1">
                            <label class="custom-control-label" for="pack_1">1 pc</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_2">
                            <label class="custom-control-label" for="pack_2">1 pc approx. 400 to 600 gm</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_3">
                            <label class="custom-control-label" for="pack_3">1 pc approx. 500 to 800 gm</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_4">
                            <label class="custom-control-label" for="pack_4">Combo 3 Items</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_5">
                            <label class="custom-control-label" for="pack_5">Combo 4 Items</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_6">
                            <label class="custom-control-label" for="pack_6">Combo 5 Items</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_7">
                            <label class="custom-control-label" for="pack_7">2 pcs</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_8">
                            <label class="custom-control-label" for="pack_8">100 g</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_9">
                            <label class="custom-control-label" for="pack_9">200 g</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_10">
                            <label class="custom-control-label" for="pack_10">250 g</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_11">
                            <label class="custom-control-label" for="pack_11">500g</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_12">
                            <label class="custom-control-label" for="pack_12">1kg</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_13">
                            <label class="custom-control-label" for="pack_13">2kg</label>
                        </div>
                        <div class="custom-control custom-checkbox pb2">
                            <input type="checkbox" class="custom-control-input" id="pack_14">
                            <label class="custom-control-label" for="pack_14">3kg</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Filter Right Sidebar Offsetl End-->
    <!-- Share Icons Start-->
    <div class="icon-bar">
        <a href="#" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="twitter" title="Share"><i class="fab fa-twitter"></i></a>
        <a href="#" class="google" title="Share"><i class="fab fa-google"></i></a>
        <a href="#" class="linkedin" title="Share"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>
    </div>
    <!-- Share Icons End-->
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
                    <span>S/{{ new Intl.NumberFormat("es-PE").format(total) }}</span>
                </div>
                <div class="cart-total-dil pt-2">
                    <h4>Delivery</h4>
                    <span>S/{{tax}}</span>
                </div>
            </div>
            <div class="side-cart-items">
                <div class="cart-item"
                     v-for="(prodCart, index) in cart"
                     :key="prodCart.id"
                >
                    <div class="cart-product-img">
                        <template v-for="(photos, index) in prodCart.photos" :key="prodCart.name">
                            <img :src="'http://sistemaorion.green.com.pe/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                        </template>
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
                            <div class="cart-item-price">S/{{ new Intl.NumberFormat("es-PE").format(prodCart.price) }}</div>
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
                <span>S/{{ new Intl.NumberFormat("es-PE").format(total + tax) }}</span>
            </div>
            <div class="checkout-cart">
                <!--                <a href="#" class="promo-code">Have a promocode?</a>-->
                <a href="/checkout" class="cart-checkout-btn hover-btn">Pasar por Caja</a>
            </div>
        </div>
    </div>
    <!-- Cart Sidebar Offsetl End-->

    <!-- Login Model Start-->
    <div id="session_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="true"
         v-if="modalShow"
    >
        <div class="modal-dialog category-area" role="document">
            <div class="category-area-inner">
                <div class="modal-header">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                        <i class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="category-model-content modal-content">
                    <div class="cate-header">
                        <h4>Inicie Sesión</h4>
                    </div>

                    <div class="sign-form">
                        <div class="sign-inner">
                            <div class="sign-logo mt-5">
                                <a href="index.html"><img src="/images/logo-orion.png" alt=""></a>
                                <a href="index.html"><img class="logo-inverse" src="/images/logo-orion-white.png" alt=""></a>
                            </div>
                            <div class="form-dt">
                                <div class="form-inpts checout-address-step">
                                    <div v-if="error">
                                        <p class="h5 text-danger">¡Ups! Algo salió mal.</p>
                                        <ul class="mb-4">
                                            <li class="text-danger">
                                                <i class="fas fa-circle"></i> {{ error.message }}
                                            </li>
                                        </ul>
                                    </div>
                                    <form method="post" @submit.prevent="onSubmit">
                                        <input type="hidden" name="_token" v-model="token">
                                        <div class="form-title"><h6>Iniciar sesión</h6></div>
                                        <div class="form-group pos_rel">
                                            <input name="email" v-model="email" type="text" placeholder="Enter Phone Number" class="form-control lgn_input" required>
                                            <i class="uil uil-mobile-android-alt lgn_icon"></i>
                                        </div>
                                        <div class="form-group pos_rel">
                                            <input name="password" v-model="password" type="password" placeholder="Enter Password" class="form-control lgn_input" required>
                                            <i class="uil uil-padlock lgn_icon"></i>
                                        </div>
                                        <button class="login-btn hover-btn mb-21" type="submit">Iniciar Sesión Ahora</button>
                                    </form>
                                </div>
<!--                                <div class="password-forgor">-->
<!--                                    <a href="forgot_password.html">Forgot Password?</a>-->
<!--                                </div>-->
<!--                                <div class="signup-link">-->
<!--                                    <p>¿No tiene una cuenta? - <a href="sign_up.html">Registrarse</a></p>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Model End-->

    <!-- Login Model Start-->
    <div id="register_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="true"
         v-if="modalShow"
    >
        <div class="modal-dialog category-area" role="document">
            <div class="category-area-inner">
                <div class="modal-header">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                        <i class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="category-model-content modal-content">
                    <div class="cate-header">
                        <h4>Registro</h4>
                    </div>

                    <div class="sign-form">
                        <div class="sign-inner">
                            <div class="sign-logo mt-5" id="logo">
                                <a href="/"><img class="logo-inverse" src="/images/logo-orion-white.png" alt=""></a>
                                <a href="/"><img src="/images/logo-orion.png" alt=""></a>
                            </div>
                            <div class="form-dt">
                                <div class="form-inpts checout-address-step">
                                    <div v-if="error">
                                        <p class="h5 text-danger">¡Ups! Algo salió mal.</p>
                                        <ul class="mb-4">

                                            <li class="text-danger">
                                                <i class="fas fa-circle"></i> {{ error.message }}
                                            </li>
                                            <li class="text-danger" v-for="(er, index) in error.errors.email">
                                                <i class="fas fa-circle"></i> {{ er }}
                                            </li>
                                            <li class="text-danger" v-for="(er, index) in error.errors.password">
                                                <i class="fas fa-circle"></i> {{ er }}
                                            </li>
                                        </ul>
                                    </div>
                                    <form method="post" @submit.prevent="onSubmitReg">
                                        <input type="hidden" name="_token" v-model="token">
                                        <div class="form-title"><h6>Nuevo Registro</h6></div>
                                        <div class="form-group pos_rel">
                                            <input id="full[name]" name="name" type="text" v-model="name" placeholder="Full name" class="form-control lgn_input" required="">
                                            <i class="uil uil-user-circle lgn_icon"></i>
                                        </div>
                                        <div class="form-group pos_rel">
                                            <input id="email[address]" name="email" v-model="email" type="email" placeholder="Email Address" class="form-control lgn_input" required="">
                                            <i class="uil uil-envelope lgn_icon"></i>
                                        </div>
                                        <div class="form-group pos_rel">
                                            <input name="password" v-model="password" type="password" placeholder="New Password" class="form-control lgn_input" required="">
                                            <i class="uil uil-padlock lgn_icon"></i>
                                        </div>
                                        <div class="form-group pos_rel">
                                            <input name="password_confirmation" v-model="password_confirmation" type="password" placeholder="New Password" class="form-control lgn_input" required="">
                                            <i class="uil uil-padlock lgn_icon"></i>
                                        </div>
                                        <button class="login-btn hover-btn mb-21" type="submit">Registarme Ahora</button>
                                    </form>
                                </div>
<!--                                <div class="signup-link">-->
<!--                                    <p>I have an account? - <button type="button" data-toggle="modal" data-target="#session_model" title="Session">Sign In Now</button></p>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Model End-->

    <!-- Header Start -->
<!--    <header-component :cart = "cart.length" :user="user"></header-component>-->
    <div class="wrapper">
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div id="checkout_wizard" class="checkout accordion left-chck145">
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingOne">
                                    <span class="checkout-step-number">1</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Verificación de cuenta</button>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="collapse in" data-parent="#checkout_wizard"
                                     :class="{ show: user === 0 ? true : false  }"
                                >
                                    <div class="checkout-step-body" v-if="user === 0">
                                        <p>Para poder proceder con la compra se requiere que acceda a su cuenta de Orion donde podrá hacer seguimiento a su pedido.</p>
                                        <button class="hover-btn next-btn16 mr-3" data-toggle="modal" data-target="#session_model" title="Session">Iniciar Sesion</button>
                                        <button class="hover-btn save-btn14" data-toggle="modal" data-target="#register_model" title="Register">Crear cuenta</button>
                                    </div>
                                    <div class="checkout-step-body" v-else>
                                        <p>Estas en tu cuenta de Orion <b>{{user.name}}</b>. Continua con el proceso de compra de su producto</p>
                                    </div>
                                </div>
                            </div>

                            <div class="checkout-step">
                                <div class="checkout-card" id="headingTwo">
                                    <span class="checkout-step-number">2</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Dirección de entrega</button>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#checkout_wizard"
                                     :class="{ show: user === 0 ? false : true  }"
                                >
                                    <div class="checkout-step-body">
                                        <div class="checout-address-step">
                                            <div class="row">
                                                <div class="col-12 mb-21">
                                                    <p class="font-weight-bold mb-21">Envié su pedido a un familiar, amigos...etc. Llevaremos su pedido a la dirección que proporcione previa validación de nuestros asesores de ventas.</p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <form class="">
                                                        <!-- Multiple Radios (inline) -->
<!--                                                        <div class="form-group">-->
<!--                                                            <div class="product-radio">-->
<!--                                                                <ul class="product-now">-->
<!--                                                                    <li>-->
<!--                                                                        <input type="radio" id="ad1" name="address1" checked>-->
<!--                                                                        <label for="ad1">A una casa</label>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <input type="radio" id="ad2" name="address1">-->
<!--                                                                        <label for="ad2">A una oficina</label>-->
<!--                                                                    </li>-->
<!--                                                                    <li>-->
<!--                                                                        <input type="radio" id="ad3" name="address1">-->
<!--                                                                        <label for="ad3">Otros</label>-->
<!--                                                                    </li>-->
<!--                                                                </ul>-->
<!--                                                            </div>-->
<!--                                                        </div>-->
                                                        <div class="address-fieldset">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Nombre*</label>
                                                                        <input id="name" name="name" type="text" placeholder="Nombre Completo" class="form-control input-md" required  v-model="d_name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Email*</label>
                                                                        <input id="email1" name="email1" type="text" placeholder="Email" class="form-control input-md" required v-model="d_email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Dirección de entrega*</label>
                                                                        <input id="flat" name="flat" type="text" placeholder="Dirección" class="form-control input-md" required v-model="direccion">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Referencia*</label>
                                                                        <input id="referencia" name="flat" type="text" placeholder="Referencia" class="form-control input-md" required v-model="referencia">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Cusco/ <span class="text-muted">Distrito</span> *</label>
<!--                                                                        <input id="street" name="distrito" v-model="distrito" type="text" placeholder="Ejm: Wanchaq" class="form-control input-md">-->
                                                                        <select class="form-select form-control" aria-label="Default select example" v-model="distrito">
                                                                            <option disabled value="">Seleccione un distrito</option>
                                                                            <option value="Cusco">Cusco</option>
                                                                            <option value="Santiago">Santiago</option>
                                                                            <option value="San Sebastian">San Sebastian</option>
                                                                            <option value="San Jeronimo">San Jeronimo</option>
                                                                            <option value="Wanchaq">Wanchaq</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Numero de Celular*</label>
                                                                        <input id="pincode" name="celular" v-model="celular" type="text" placeholder="Teléfono" class="form-control input-md" required=""

                                                                        >
                                                                    </div>
                                                                </div>
<!--                                                                <div class="col-lg-6 col-md-12">-->
<!--                                                                    <div class="form-group">-->
<!--                                                                        <label class="control-label">Locality*</label>-->
<!--                                                                        <input id="Locality" name="locality" type="text" placeholder="Enter City" class="form-control input-md" required="">-->
<!--                                                                    </div>-->
<!--                                                                </div>-->
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <div class="address-btns">
<!--                                                                            <button class="save-btn14 hover-btn">Guardar</button>-->
                                                                            <a class="collapsed ml-auto next-btn16 hover-btn" role="button" data-toggle="collapse" data-parent="#checkout_wizard" href="#collapseThree"> Siguiente </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingThree">
                                    <span class="checkout-step-number">3</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Fecha y hora de entrega </button>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label font-weight-bold">Seleccione la Fecha y Hora que enviaremos su pedido.</label>
                                                    <div class="date-slider-group">
                                                        <div class="owl-carousel date-slider owl-theme">
                                                            <div class="item">
<!--                                                                {{picked_fecha}}-->
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd1" name="address1" :value="today" v-model="picked_fecha">
                                                                    <label for="dd1">Hoy</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd2" name="address1" :value="tomorrow" v-model="picked_fecha">
                                                                    <label for="dd2">Mañana</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd3" name="address1" :value="today_3" v-model="picked_fecha">
                                                                    <label for="dd3">{{ today_3 }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd4" name="address1" :value="today_4" v-model="picked_fecha">
                                                                    <label for="dd4">{{ today_4 }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd5" name="address1" :value="today_5" v-model="picked_fecha">
                                                                    <label for="dd5">{{ today_5 }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd6" name="address1" :value="today_6" v-model="picked_fecha">
                                                                    <label for="dd6">{{ today_6 }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd7" name="address1" :value="today_7" v-model="picked_fecha">
                                                                    <label for="dd7">{{ today_7 }}</label>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="date-now">
                                                                    <input type="radio" id="dd8" name="address1" :value="today_8" v-model="picked_fecha">
                                                                    <label for="dd8">{{ today_8 }}</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="time-radio">
                                                        <div class="ui form">
                                                            <div class="grouped fields">
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden" value="8.00AM - 10.00AM" v-model="picked_hora">
                                                                        <label>8.00AM - 10.00AM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden" value="10.00AM - 12.00PM" v-model="picked_hora">
                                                                        <label>10.00AM - 12.00PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden" value="12.00PM - 2.00PM" v-model="picked_hora">
                                                                        <label>12.00PM - 2.00PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden" value="2.00PM - 4.00PM" v-model="picked_hora">
                                                                        <label>2.00PM - 4.00PM</label>
                                                                    </div>
                                                                </div>
                                                                <div class="field">
                                                                    <div class="ui radio checkbox chck-rdio">
                                                                        <input type="radio" name="fruit" tabindex="0" class="hidden" value="4.00PM - 6.00PM" v-model="picked_hora">
                                                                        <label>4.00PM - 6.00PM</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="collapsed next-btn16 hover-btn" role="button" data-toggle="collapse"  href="#collapseFour"> Proceso de pago </a>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-step">
                                <div class="checkout-card" id="headingFour">
                                    <span class="checkout-step-number">4</span>
                                    <h4 class="checkout-step-title">
                                        <button class="wizard-btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Pago</button>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#checkout_wizard">
                                    <div class="checkout-step-body">
                                        <div class="payment_method-checkout">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p>Por le momento solo contamos con servicio contra entrega.</p>
                                                    <div class="rpt100">
                                                        <ul class="radio--group-inline-container_1">
                                                            <li>
                                                                <div class="radio-item_1">
                                                                    <input id="cashondelivery1" value="contraentrega" name="paymentmethod" type="radio" v-model="picked_metodo" data-minimum="50.0">
                                                                    <label for="cashondelivery1" class="radio-label_1">Pago Contra entrega</label>
                                                                </div>
                                                            </li>
<!--                                                            <li>-->
<!--                                                                <div class="radio-item_1">-->
<!--                                                                    <input id="card1" value="pagotarjeta" name="paymentmethod" type="radio" data-minimum="50.0" v-model="picked_metodo">-->
<!--                                                                    <label  for="card1" class="radio-label_1">Tarjeta de crédito / Tarjeta de débito </label>-->
<!--                                                                </div>-->
<!--                                                            </li>-->
                                                        </ul>
                                                    </div>
                                                    <div class="form-group return-departure-dts" data-method="cashondelivery">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="pymnt_title">
                                                                    <h4>Pago Contraentrega</h4>
                                                                    <p>El pago contra entrega no estará disponible si el valor de su pedido supera los S/50.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group return-departure-dts" data-method="card">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="pymnt_title mb-4">
                                                                    <h4>Tarjeta de crédito / Tarjeta de débito</h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">Nombre del Titular*</label>
                                                                    <div class="ui search focus">
                                                                        <div class="ui left icon input swdh11 swdh19">
                                                                            <input class="prompt srch_explore" type="text" name="holdername" value="" id="holder[name]" required="" maxlength="64" placeholder="Holder Name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">Numero de tarjeta*</label>
                                                                    <div class="ui search focus">
                                                                        <div class="ui left icon input swdh11 swdh19">
                                                                            <input class="prompt srch_explore" type="text" name="cardnumber" value="" id="card[number]" required="" maxlength="64" placeholder="Card Number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">Mes de Expiración*</label>
                                                                    <select class="ui fluid search dropdown form-dropdown" name="card[expire-month]">
                                                                        <option value="">Month</option>
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">Año de expiración*</label>
                                                                    <div class="ui search focus">
                                                                        <div class="ui left icon input swdh11 swdh19">
                                                                            <input class="prompt srch_explore" type="text" name="card[expire-year]" maxlength="4" placeholder="Year">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group mt-1">
                                                                    <label class="control-label">CVV*</label>
                                                                    <div class="ui search focus">
                                                                        <div class="ui left icon input swdh11 swdh19">
                                                                            <input class="prompt srch_explore" name="card[cvc]" maxlength="3" placeholder="CVV">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="next-btn16 hover-btn" @click="onSubmitAll()">Realizar Pedido</button>
                                                    <div class="alert alert-danger mt-21" v-if="error_v.length > 0">
                                                        <ul>
                                                            <li v-for="er in error_v" :key="er">
                                                                - {{er}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <li v-for="errores in error_v">{{ errores }}</li>-->
<!--                    <button @click="veri()">sd</button>-->
                    <div class="col-lg-4 col-md-5">
                        <div class="pdpt-bg mt-0">
                            <div class="pdpt-title">
                                <h4>Resumen de pedido</h4>
                            </div>
                            <div class="right-cart-dt-body"
                                 v-for="(prodCart, index) in cart"
                                 :key="prodCart.id"

                            >
                                <div class="cart-item border_radius">
                                    <div class="cart-product-img">
<!--                                        <template v-for="(photos, index) in prodCart.photos" :key="prodCart.name">-->
<!--                                            <img :src="photos.photo" alt="" v-if="index === 0">-->
<!--                                        </template>-->
                                        <template v-for="(photos, index) in prodCart.photos" :key="prodCart.name">
                                            <img :src="'http://sistemaorion.green.com.pe/api/v1/products/imagen/'+photos.photo" alt="" v-if="photos.state === 1">
                                        </template>
<!--                                        <div class="offer-badge">4% OFF</div>-->
                                    </div>
                                    <div class="cart-text">
                                        <h4>{{ prodCart.name }} | {{prodCart.stock}} | {{prodCart.quantity}}</h4>
                                        <div class="cart-item-price">S/.{{ new Intl.NumberFormat("es-PE").format(prodCart.price) }}
<!--                                            <span>$18</span>-->
                                        </div>
                                        <button type="button" class="cart-close-btn" @click="deleteToCart(prodCart)"><i class="uil uil-multiply"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="total-checkout-group">
<!--                                <div class="cart-total-dil">-->
<!--                                    <h4>Gambo Super Market</h4>-->
<!--                                    <span>$15</span>-->
<!--                                </div>-->
                                <div class="cart-total-dil pt-3">
                                    <h4>Delivery</h4>
                                    <span>S/{{tax}}</span>
                                </div>
                            </div>
<!--                            <div class="cart-total-dil saving-total ">-->
<!--                                <h4>Total Saving</h4>-->
<!--                                <span>$3</span>-->
<!--                            </div>-->
                            <div class="main-total-cart">
                                <h2>Total</h2>
                                <span>S/{{ new Intl.NumberFormat("es-PE").format(total + tax) }}</span>
                            </div>
                            <div class="payment-secure">
                                <i class="uil uil-padlock"></i>Pago seguro
                            </div>
                        </div>

<!--                        <a href="#" class="promo-link45">Have a promocode?</a>-->
                        <div class="checkout-safety-alerts">
                            <p><i class="uil uil-sync"></i>Reemplazo 100% garantizado</p>
                            <p><i class="uil uil-check-square"></i>Productos 100% originales</p>
                            <p><i class="uil uil-shield-check"></i>Pagos seguros</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
import HeaderComponent from "./HeaderComponent";
import TopComponent from "./TopComponent";
import moment from "moment"
// import { useField, useForm } from "vee-validate"

import {ref, toRefs, reactive, computed} from "vue";
import axios from "axios";
export default {
    components: { HeaderComponent, TopComponent },
    props: ['user'],
    setup(props){
        const products = ref([]);
        const user = ref(props.user)
        const name = ref("");
        const email = ref("");
        const password = ref("");
        const password_confirmation = ref("");
        const csrf= ref(document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
        const token = ref(csrf);

        const modalShow= ref(true);
        const error = ref("");

        const today = moment().locale("es").format("DD MMMM YYYY");
        const tomorrow = moment().locale("es").add(1, 'd').format("DD MMMM YYYY");
        const today_3 = moment().locale("es").add(2, 'd').format("DD MMMM YYYY");
        const today_4 = moment().locale("es").add(3, 'd').format("DD MMMM YYYY");
        const today_5 = moment().locale("es").add(4, 'd').format("DD MMMM YYYY");
        const today_6 = moment().locale("es").add(5, 'd').format("DD MMMM YYYY");
        const today_7 = moment().locale("es").add(6, 'd').format("DD MMMM YYYY");
        const today_8 = moment().locale("es").add(7, 'd').format("DD MMMM YYYY");

        const d_name = ref(props.user.name);
        const d_email = ref(props.user.email);
        const direccion = ref([]);
        const referencia = ref([]);
        const distrito = ref([]);
        const celular = ref([]);
        const picked_fecha = ref("");
        const picked_hora = ref("");
        const picked_metodo = ref("");
        const tax = ref(1);

        const cartState = reactive({
            cartOpen: false,
            cart: [],
            tax: 1,
            o_ad: 'asc',
            o_x: 'name',
            error_v: [],
            total: computed(()=>{
                return  cartState.cart.reduce((prev, curr) => {
                    const prevPrice = prev.price || prev;
                    const prevQuantity = prev.quantity || 1;

                    return prevPrice * prevQuantity + curr.price * curr.quantity;
                }, 0);
            }),
        });


        function onSubmitAll() {
                cartState.error_v = [];

            if (!props.user.id){
                cartState.error_v.push('Requiere iniciar sesión')
            }
                if (direccion.value.length === 0){
                    cartState.error_v.push('Dirección es obligatorio')
                }
                if (referencia.value.length === 0){
                    cartState.error_v.push('Referencia es obligatorio')
                }
                if (distrito.value.length === 0){
                    cartState.error_v.push('Distrito es obligatorio')
                }
                if (celular.value.length === 0){
                    cartState.error_v.push('Celular es obligatorio')
                }
                if (picked_fecha.value.length === 0){
                    cartState.error_v.push('Fecha de entrega es obligatorio')
                }
                if (picked_hora.value.length === 0){
                    cartState.error_v.push('Hora de entrega es obligatorio')
                }
                if (picked_metodo.value.length === 0){
                    cartState.error_v.push('Metodo de pago es obligatorio')
                }
                if (cartState.cart.length === 0){
                    cartState.error_v.push('Requiere agregar productos para proceder con el pago')
                }
            if (cartState.error_v.length === 0){
                let form = {
                    id_user: props.user.id,
                    direccion: direccion.value,
                    referencia: referencia.value,
                    distrito: distrito.value,
                    celular: celular.value,
                    picked_fecha: picked_fecha.value,
                    picked_hora: picked_hora.value,
                    picked_metodo: picked_metodo.value,
                    tax: tax.value,
                    total_price: cartState.total
                };

                axios.post('http://sistemaorion.green.com.pe/api/v1/orders', {form_data: form, cart: cartState.cart })
                    .then(function(response) {
                        console.log(response.data.status);
                        if(response.data.status > 0){
                            window.location = '/client/pedidos';
                            sessionStorage.clear();
                        }

                    }, function (er) {
                        error.value = er.response.data
                    });
            }
        }

        function onSubmit() {
            axios.post('/login', {email: email.value, password: password.value, _token: token.value })
                .then(function(res) {
                    modalShow.value = false
                    error.value = ""
                    window.location = '/checkout';
                }, function (er) {
                    error.value = er.response.data
                });
        }
        function onSubmitReg() {
            axios.post('/register', {name: name.value, email: email.value, password: password.value, password_confirmation: password_confirmation.value, _token: token.value })
                .then(function(res) {
                    modalShow.value = false
                    error.value = ""
                    window.location = '/checkout'
                }, function (er) {
                    console.log(er.response.data)
                    error.value = er.response.data
                });
        }

        function addToCart(product){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === product.id);
            const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length >= 1 && cartIndex >= 0) {
                console.log("si");
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity += 1;
                } else {
                    cartState.cart.push(product);
                }
                products.value[prodIndex].stock -= 1;
                cartState.cart[cartIndex].stock = products.value[prodIndex].stock;
                products.value[prodIndex].quantity = cartState.cart[cartIndex].quantity;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }else{
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity += 1;
                } else {
                    cartState.cart.push(product);
                }
                products.value[prodIndex].stock -= 1;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }
        }
        function removeToCart(product){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === product.id);
            const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length >= 1 && cartIndex >= 0) {
                if(cartState.cart[cartIndex].quantity > 1){
                    console.log("si");
                    if (cartIndex >= 0) {
                        cartState.cart[cartIndex].quantity -= 1;
                    } else {
                        cartState.cart.push(product);
                    }
                    products.value[prodIndex].stock += 1;
                    cartState.cart[cartIndex].stock = products.value[prodIndex].stock;
                    products.value[prodIndex].quantity = cartState.cart[cartIndex].quantity;
                    sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                    sessionStorage.setItem('local-prod', JSON.stringify(products.value));
                }
                else {
                    cartState.cart.splice(cartIndex, 1);
                    products.value[prodIndex].stock += 1;
                    products.value[prodIndex].quantity = 1;
                    sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                    sessionStorage.setItem('local-prod', JSON.stringify(products.value));
                }

            }else{
                console.log("si seufno");
                if (cartIndex >= 0) {
                    cartState.cart[cartIndex].quantity -= 1;
                } else {
                    cartState.cart.push(product);
                }
                products.value[prodIndex].stock += 1;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }

        }
        function deleteToCart(product){
            const cartIndex = cartState.cart.findIndex(prod => prod.id === product.id);
            const prodIndex = products.value.findIndex(p => p.id === product.id);
            if (cartState.cart.length > 0){
                let qua = cartState.cart[cartIndex].quantity;
                console.log(product.name);
                cartState.cart.splice(cartIndex, 1);
                products.value[prodIndex].quantity = 1;
                products.value[prodIndex].stock += qua;
                sessionStorage.setItem('local-cart', JSON.stringify(cartState.cart));
                sessionStorage.setItem('local-prod', JSON.stringify(products.value));
            }
            // else {
            //     axios.post('/session/remove')
            //         .then((res) =>{
            //             // console.log(res)
            //             // cartState.cart.push(res);
            //         });
            // }
            // console.log(prodIndex);
            // console.log(prodIndex);
        }

        let dataB = JSON.parse(sessionStorage.getItem('local-cart'));
        if (dataB === null){
            cartState.cart = []
        }else{
            cartState.cart = dataB
            // console.log(cartState.cart)
            // console.log(products)
        }


        let dataP = JSON.parse(sessionStorage.getItem('local-prod'));
        if (dataP === null){
            // localStorage.removeItem('local-prod')
            fetch("http://sistemaorion.green.com.pe/api/v1/products")
                .then(res => res.json())
                .then(data => {
                    products.value = data;
                });
        }else{
            products.value = dataP;
        }



        return {
            ...toRefs(cartState),
            products,
            csrf,
            user,

            addToCart,
            removeToCart,
            deleteToCart,

            onSubmit,
            onSubmitReg,
            onSubmitAll,

            name,
            email,
            password,
            password_confirmation,

            token,
            error,
            modalShow,

            today,
            tomorrow,
            today_3,
            today_4,
            today_5,
            today_6,
            today_7,
            today_8,


            d_name,
            d_email,
            direccion,
            referencia,
            distrito,
            celular,
            picked_fecha,
            picked_hora,
            picked_metodo,
            tax,
        };
    }
}
</script>
<style>
.modal-backdrop{
    display: none !important;
}
.checkout-wrapper {
    padding-top: 40px;
    padding-bottom:40px;
    background-color: #fafbfa;
}

.checkout {
    background-color: #fff;
    box-shadow: 0 1px 2px 0 #e9e9e9;
    font-size: 14px;
    border-radius: 5px;
}

.checkout-card {  }

.checkout-step {
    border-top: 1px solid #f3f3f3;
    color: #2b2f4c;
    font-size: 14px;
    padding: 30px;
    position: relative;
}

.checkout-step:first-child {
    border-top: 0;
}

.checkout-step-number {
    border-radius: 50%;
    border: 1px solid #f55d2c;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    height: 32px;
    margin-right: 20px;
    padding: 6px;
    text-align: center;
    width: 32px;
    color: #fff;
    background: #f55d2c;
}

.checkout-step-title{
    font-size: 18px;
    font-weight: 500;
    vertical-align: middle;
    display: inline-block;
    margin: 0px;
}

.wizard-btn {
    background: transparent;
    border: 0;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    font-size: 18px;
    color: #2b2f4c;
}

.checout-address-step { }

.checout-address-step .form-group{
    margin-bottom: 18px;
    display: inline-block;
    width: 100%;
}

.checkout-step-body{
    padding-left: 0;
    padding-top: 30px;
}

.checkout-step-active{
    display: block;
}

.checkout-step-disabled{
    display: none;
}

.checkout-login{}

.login-phone{
    display: inline-block;
}

.login-phone:after {
    content: '+91 - ';
    font-size: 14px;
    left: 36px;
    top: 18px;
    font-family: 'Rajdhani', sans-serif;
    font-weight: 600;
    color: #2b2f4c;
}

.login-phone:before {
    content: "";
    font-style: normal;
    color: #333;
    font-size: 18px;
    left: 12px;
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.login-phone:after, .login-phone:before {
    position: absolute;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.login-phone .form-control {
    padding-left: 68px;
    font-size: 14px;
    font-family: 'Rajdhani', sans-serif;
    font-weight: 600;
    color: #2b2f4c;
    border: 1px solid #efefef;
}

.checkout-login .btn {
    height: 42px;
    line-height: 1.8;
}

.otp-verifaction {
    margin-top: 20px;
}

.checkout-sidebar {
    background-color: #fff;
    border:1px solid #eaefe9;
    padding: 30px;
    margin-bottom: 30px;
}

.checkout-sidebar-merchant-box {
    background-color: #fff;
    border:1px solid #eaefe9;
    margin-bottom: 30px;
}

.checkout-total {
    border-bottom: 1px solid #eaefe9;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

.checkout-invoice {
    display: inline-block;
    width: 100%;
}

.checout-invoice-title {
    float: left;
    color: #30322f;
}

.checout-invoice-price {
    float: right;
    color: #30322f;
}

.checkout-charges {
    display: inline-block;
    width: 100%;
}

.checout-charges-title{
    float: left;
}

.checout-charges-price {
    float: right;
}

.charges-free {
    color: #43b02a;
    font-weight: 600;
}

.checkout-payable {
    display: inline-block;
    width: 100%;
    color: #333;
}

.checkout-payable-title {
    float: left;
}

.checkout-payable-price {
    float: right;
}

.checkout-cart-merchant-box {
    padding: 20px;
    display: inline-block;
    width: 100%;
    border-bottom: 1px solid #eaefe9;
    padding-bottom: 20px;
}

.checkout-cart-merchant-name {
    color: #30322f;
    float: left;
}

.checkout-cart-merchant-item {
    float: right;
    color: #30322f;
}

.checkout-cart-products {}

.checkout-cart-products .checkout-charges {
    padding: 10px 20px;
    color: #333;
}

.checkout-cart-item {
    border-bottom: 1px solid #eaefe9;
    box-sizing: border-box;
    display: table;
    font-size: 12px;
    padding: 22px 20px;
    width: 100%;
}
.checkout-item-list {}

.checkout-item-count {
    float: left;
}

.checkout-item-img {
    width: 60px;
    float: left;
}

.checkout-item-name-box {
    float: left;
}

.checkout-item-title {
    color: #30322f;
    font-size: 14px;
}

.checkout-item-unit {  }

.checkout-item-price {
    float: right;
    color: #30322f;
    font-size: 14px;
    font-weight: 600;
}


.checkout-viewmore-btn {
    padding: 10px;
    text-align: center;
}

.header-checkout-item {
    text-align: right;
    padding-top: 20px;
}

.checkout-promise-item {
    background-repeat: no-repeat;
    background-size: 14px;
    display: inline-block;
    margin-left: 20px;
    padding-left: 24px;
    color: #30322f;
}

.checkout-promise-item i{
    padding-right: 10px;
    color: #43b02a;
}
</style>
