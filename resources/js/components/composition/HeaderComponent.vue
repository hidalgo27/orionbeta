<template>
    <!-- Category Model Start-->
    <div id="category_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
        <div class="modal-dialog category-area" role="document">
            <div class="category-area-inner">
                <div class="modal-header">
                    <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                        <i class="uil uil-multiply"></i>
                    </button>
                </div>
                <div class="category-model-content modal-content">
                    <div class="cate-header">
                        <h4>Seleccione Categoria</h4>
                    </div>
                    <ul class="category-by-cat">
                        <li v-for="category in is_category">
                            <a :href="'/products/category/'+category.id" class="single-cat-item">
                                <div class="icon">
                                    <img :src="'http://sistemaorion.green.com.pe/api/v1/categories/imagen/'+category.photo" alt="">
                                </div>
                                <div class="text"> {{ MaysPrimera(category.name.toLowerCase()) }} </div>
                            </a>
                        </li>
                    </ul>
<!--                    <a href="#" class="morecate-btn"><i class="uil uil-apps"></i>Más Categorias</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Category Model End-->
    <!-- Search Model Start-->
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
                        <form action="#">
                            <input type="search" placeholder="Search for products...">
                            <button type="submit"><i class="uil uil-search"></i></button>
                        </form>
                    </div>
                    <div class="search-by-cat d-none">
<!--                        <a href="#" class="single-cat">-->
<!--                            <div class="icon">-->
<!--                                <img src="images/category/icon-1.svg" alt="">-->
<!--                            </div>-->
<!--                            <div class="text">-->
<!--                                Fruits and Vegetables-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <a href="#" class="single-cat">-->
<!--                            <div class="icon">-->
<!--                                <img src="images/category/icon-2.svg" alt="">-->
<!--                            </div>-->
<!--                            <div class="text"> Grocery & Staples </div>-->
<!--                        </a>-->
<!--                        <a href="#" class="single-cat">-->
<!--                            <div class="icon">-->
<!--                                <img src="images/category/icon-3.svg" alt="">-->
<!--                            </div>-->
<!--                            <div class="text"> Dairy & Eggs </div>-->
<!--                        </a>-->
<!--                        <a href="#" class="single-cat">-->
<!--                            <div class="icon">-->
<!--                                <img src="images/category/icon-4.svg" alt="">-->
<!--                            </div>-->
<!--                            <div class="text"> Beverages </div>-->
<!--                        </a>-->
<!--                        <a href="#" class="single-cat">-->
<!--                            <div class="icon">-->
<!--                                <img src="images/category/icon-5.svg" alt="">-->
<!--                            </div>-->
<!--                            <div class="text"> Snacks </div>-->
<!--                        </a>-->
<!--                        <a href="#" class="single-cat">-->
<!--                            <div class="icon">-->
<!--                                <img src="images/category/icon-6.svg" alt="">-->
<!--                            </div>-->
<!--                            <div class="text"> Home Care </div>-->
<!--                        </a>-->
<!--                        <a href="#" class="single-cat">-->
<!--                            <div class="icon">-->
<!--                                <img src="images/category/icon-7.svg" alt="">-->
<!--                            </div>-->
<!--                            <div class="text"> Noodles & Sauces </div>-->
<!--                        </a>-->
<!--                        <a href="#" class="single-cat">-->
<!--                            <div class="icon">-->
<!--                                <img src="images/category/icon-8.svg" alt="">-->
<!--                            </div>-->
<!--                            <div class="text"> Personal Care </div>-->
<!--                        </a>-->
<!--                        <a href="#" class="single-cat">-->
<!--                            <div class="icon">-->
<!--                                <img src="images/category/icon-9.svg" alt="">-->
<!--                            </div>-->
<!--                            <div class="text"> Pet Care </div>-->
<!--                        </a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Model End-->

    <header class="header clearfix">
        <div class="top-header-group">
            <div class="top-header">
                <div class="res_main_logo">
                    <a href="/"><img src="/images/logo-orion.png" alt=""></a>
                </div>
                <div class="main_logo" id="logo">
                    <a href="/"><img src="/images/logo-orion.png" alt="" class="p-4"></a>
                    <a href="/"><img class="logo-inverse p-4" src="/images/logo-orion-white.png" alt=""></a>
                </div>
<!--                <div class="select_location">-->
<!--                    <div class="ui inline dropdown loc-title">-->
<!--                        <div class="text">-->
<!--                            <i class="uil uil-location-point"></i>-->
<!--                            Gurugram-->
<!--                        </div>-->
<!--                        <i class="uil uil-angle-down icon__14"></i>-->
<!--                        <div class="menu dropdown_loc">-->
<!--                            <div class="item channel_item">-->
<!--                                <i class="uil uil-location-point"></i>-->
<!--                                Gurugram-->
<!--                            </div>-->
<!--                            <div class="item channel_item">-->
<!--                                <i class="uil uil-location-point"></i>-->
<!--                                New Delhi-->
<!--                            </div>-->
<!--                            <div class="item channel_item">-->
<!--                                <i class="uil uil-location-point"></i>-->
<!--                                Bangaluru-->
<!--                            </div>-->
<!--                            <div class="item channel_item">-->
<!--                                <i class="uil uil-location-point"></i>-->
<!--                                Mumbai-->
<!--                            </div>-->
<!--                            <div class="item channel_item">-->
<!--                                <i class="uil uil-location-point"></i>-->
<!--                                Hyderabad-->
<!--                            </div>-->
<!--                            <div class="item channel_item">-->
<!--                                <i class="uil uil-location-point"></i>-->
<!--                                Kolkata-->
<!--                            </div>-->
<!--                            <div class="item channel_item">-->
<!--                                <i class="uil uil-location-point"></i>-->
<!--                                Ludhiana-->
<!--                            </div>-->
<!--                            <div class="item channel_item">-->
<!--                                <i class="uil uil-location-point"></i>-->
<!--                                Chandigrah-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->


<!--                <div class="search120">-->
<!--                    <div class="ui search">-->
<!--                        <div class="ui left icon input swdh10">-->
<!--                            <input class="prompt srch10" type="text" placeholder="Search for products..">-->
<!--                            <i class='uil uil-search-alt icon icon1'></i>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="header_right">
                    <ul>
                        <li>
                            <a href="#" class="offer-link"><i class="uil uil-phone-alt"></i></a>
                        </li>
                        <li>
                            <a href="offers.html" class="offer-link"><i class="uil uil-gift"></i>Ofertas</a>
                        </li>
                        <li>
                            <a href="faq.html" class="offer-link"><i class="uil uil-question-circle"></i>Preguntas Frecuentes</a>
                        </li>
<!--                        <li>-->
<!--                            <a href="dashboard_my_wishlist.html" class="option_links" title="Wishlist"><i class='uil uil-heart icon_wishlist'></i><span class="noti_count1">3</span></a>-->
<!--                        </li>-->

                        <li class="ui dropdown" v-if="user === 0">
                            <a href="#" class="opts_account">
                                <img src="/images/avatar/img-21.jpg" alt="">
                                <span class="user__name">Mi cuenta</span>
                                <i class="uil uil-angle-down"></i>
                            </a>
                            <div class="menu dropdown_account">
                                <div class="night_mode_switch__btn">
                                    <a href="#" id="night-mode" class="btn-night-mode">
                                        <i class="uil uil-moon"></i> Modo Oscuro
                                        <span class="btn-night-mode-switch">
											<span class="uk-switch-button"></span>
										</span>
                                    </a>
                                </div>
                                <a href="/login" class="item channel_item"><i class="uil uil-sign-out-alt icon__1"></i>Iniciar Sesión</a>
                                <a href="/register" class="item channel_item"><i class="uil uil-user-plus icon__1"></i>Registrarse</a>
                            </div>
                        </li>
                        <li class="ui dropdown" v-else>
                            <a href="#" class="opts_account">
                                <img :src="user.profile_photo_url" alt="">
                                <span class="user__name">{{ user.name }}</span>
                                <i class="uil uil-angle-down"></i>
                            </a>
                            <div class="menu dropdown_account">
                                <div class="night_mode_switch__btn">
                                    <a href="#" id="night-mode" class="btn-night-mode">
                                        <i class="uil uil-moon"></i> Modo Oscuro
                                        <span class="btn-night-mode-switch">
											<span class="uk-switch-button"></span>
										</span>
                                    </a>
                                </div>
                                <a href="/client/dashboard" class="item channel_item"><i class="uil uil-apps icon__1"></i>Dashbaord</a>
                                <a href="/client/pedidos" class="item channel_item"><i class="uil uil-box icon__1"></i>Mis pedidos</a>
                                <a href="/client/history" class="item channel_item"><i class="uil uil-heart icon__1"></i>Mi historial</a>
<!--                                <a href="dashboard_my_wallet.html" class="item channel_item"><i class="uil uil-usd-circle icon__1"></i></a>-->
<!--                                <a href="dashboard_my_addresses.html" class="item channel_item"><i class="uil uil-location-point icon__1"></i>My Address</a>-->
<!--                                <a href="offers.html" class="item channel_item"><i class="uil uil-gift icon__1"></i>Offers</a>-->
<!--                                <a href="faq.html" class="item channel_item"><i class="uil uil-info-circle icon__1"></i>Faq</a>-->
                                <form id="logout-form" action="http://orion.nu/logout" method="POST">
                                    <input type="hidden" name="_token" v-model="token">
                                    <button type="submit" class="item channel_item p-3 w-100 text-left border-0"><i class="uil uil-lock-alt icon__1"></i> Cerrar sesion</button>
                                </form>
<!--                                <a href="/logout" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sub-header-group">
            <div class="sub-header">
                <div class="ui dropdown">
                    <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Seleccione Categoria</span></a>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light py-3">
                    <div class="container-fluid">
                        <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                        <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                            <ul class="navbar-nav main_nav align-self-stretch">
                                <li class="nav-item"><a href="/" class="nav-link active" title="Home">Inicio</a></li>
                                <li class="nav-item"><a href="/products/category/6" class="nav-link new_item" title="New Products">Nuevos Productos</a></li>
                                <li class="nav-item"><a href="/products/category/6" class="nav-link" title="Featured Products">Top Productos</a></li>
<!--                                <li class="nav-item">-->
<!--                                    <div class="ui icon top left dropdown nav__menu">-->
<!--                                        <a class="nav-link" title="Pages">Pages <i class="uil uil-angle-down"></i></a>-->
<!--                                        <div class="menu dropdown_page">-->
<!--                                            <a href="dashboard_overview.html" class="item channel_item page__links">Account</a>-->
<!--                                            <a href="about_us.html" class="item channel_item page__links">About Us</a>-->
<!--                                            <a href="shop_grid.html" class="item channel_item page__links">Shop Grid</a>-->
<!--                                            <a href="single_product_view.html" class="item channel_item page__links">Single Product View</a>-->
<!--                                            <a href="checkout.html" class="item channel_item page__links">Checkout</a>-->
<!--                                            <a href="request_product.html" class="item channel_item page__links">Product Request</a>-->
<!--                                            <a href="order_placed.html" class="item channel_item page__links">Order Placed</a>-->
<!--                                            <a href="bill.html" class="item channel_item page__links">Bill Slip</a>-->
<!--                                            <a href="sign_in.html" class="item channel_item page__links">Sign In</a>-->
<!--                                            <a href="sign_up.html" class="item channel_item page__links">Sign Up</a>-->
<!--                                            <a href="forgot_password.html" class="item channel_item page__links">Forgot Password</a>-->
<!--                                            <a href="contact_us.html" class="item channel_item page__links">Contact Us</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="nav-item">-->
<!--                                    <div class="ui icon top left dropdown nav__menu">-->
<!--                                        <a class="nav-link" title="Blog">Blog <i class="uil uil-angle-down"></i></a>-->
<!--                                        <div class="menu dropdown_page">-->
<!--                                            <a href="our_blog.html" class="item channel_item page__links">Our Blog</a>-->
<!--                                            <a href="blog_no_sidebar.html" class="item channel_item page__links">Our Blog Two No Sidebar</a>-->
<!--                                            <a href="blog_left_sidebar.html" class="item channel_item page__links">Our Blog with Left Sidebar</a>-->
<!--                                            <a href="blog_right_sidebar.html" class="item channel_item page__links">Our Blog with Right Sidebar</a>-->
<!--                                            <a href="blog_detail_view.html" class="item channel_item page__links">Blog Detail View</a>-->
<!--                                            <a href="blog_left_sidebar_single_view.html" class="item channel_item page__links">Blog Detail View with Sidebar</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
                                <li class="nav-item"><a href="contact_us.html" class="nav-link" title="Contact">Nuestros Locles</a></li>
                                <li class="nav-item"><a href="contact_us.html" class="nav-link" title="Contact">Acerca de Nosotros</a></li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="catey__icon">
                    <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
                </div>
                <div class="header_cart order-1">
                    <a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Carro</span><ins>{{ cart }} </ins><i class="uil uil-angle-down"></i></a>
                </div>
                <div class="search__icon order-1">
                    <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
                </div>
            </div>
        </div>
    </header>
</template>
<script>
import {computed, nextTick, reactive, ref, toRefs} from "vue";

export default {
    props: ["cart", "user"],
    setup(props){
        const categories = ref([]);
        const user = ref(props.user);
        const csrf= ref(document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
        const token = ref(csrf);

        const categoryState = reactive({
            is_category : computed(() => {
                return categories.value.filter(category => category.state == 1)
            })
        })

        fetch("http://sistemaorion.green.com.pe/api/v1/categories")
            .then(res => res.json())
            .then(data => {
                // console.log("pre carga category")
                categories.value = data;
            });
        function MaysPrimera(string){
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
        return {
            ...toRefs(categoryState),
            categories,
            MaysPrimera,
            user,
            csrf,
            token
        }
    }

}
</script>
