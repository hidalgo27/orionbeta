<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Orion supermercado. El especialista de precios bajos">
    <meta name="author" content="Hidalgo">
    <title>Orion Supermercados | Cusco</title>

    <!-- Stylesheets -->
{{--    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">--}}
    {{--    <link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>--}}
    <link href="{{asset('unicons-2.0.1/css/unicons.css')}}" rel="stylesheet">
{{--        <link href="{{asset('css/style.css')}}" rel="stylesheet">--}}
{{--        <link href="{{asset('css/responsive.css')}}" rel="stylesheet">--}}
{{--        <link href="{{asset('css/night-mode.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{mix("css/plugins.css")}}">
<!-- Vendor Stylesheets -->
    {{--    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">--}}
    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/OwlCarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
{{--        <link href="{{asset('vendor/OwlCarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">--}}
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="{{mix("css/app.css")}}">--}}
{{--    <link rel="stylesheet" href="{{mix("css/library.css")}}">--}}
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/semantic/semantic.min.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon Icon -->
{{--    <link rel="icon" type="image/png" href="{{asset('images/fav.png')}}">--}}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/manifest.json')}}">
{{--    <meta name="msapplication-TileColor" content="#ffffff">--}}
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
{{--    <meta name="theme-color" content="#ffffff">--}}
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4KPNCWLFL1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-4KPNCWLFL1');
    </script>
</head>

<body>
<div id="app" class="position-relative">


{{--    <table class="table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">Codigo</th>--}}
{{--            <th scope="col">Categoria</th>--}}
{{--            <th scope="col">Producto</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($productos as $product)--}}
{{--        <tr>--}}
{{--            <th scope="row">{{$product->code}}</th>--}}
{{--            <td>--}}
{{--            @foreach($product->categorias as $cat)--}}
{{--            {{$cat->name}},--}}
{{--            @endforeach--}}
{{--            </td>--}}
{{--            <td>{{$product->name}}</td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
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
                        @foreach($category as $categories)
                        <li>
                            <a href="{{route('product.category', [strtolower($categories->name)])}}" class="single-cat-item">
                                <div class="icon">
                                    <img src="https://sistemaorion.nebulaperu.com/api/v1/categories/imagen/{{$categories->photo}}" alt="">
                                </div>
                                <div class="text"> {{ucwords(strtolower($categories->name))}} </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <!--                    <a href="#" class="morecate-btn"><i class="uil uil-apps"></i>Más Categorias</a>-->
                </div>
            </div>
        </div>
    </div>
    <!-- Category Model End-->
    <!-- Search Model Start-->
    <search-component></search-component>
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


                <div class="search120">
                    <span class="text-muted">La estrella de los precios bajos</span>
                </div>

                <div class="mx-auto d-sm-none">
                    <ul>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=51946565500" class="offer-link" target="_blank"><i class="uil uil-whatsapp text-success"></i> 946 565 500</a>
                        </li>
                    </ul>
                </div>

                <div class="header_right">

                    <ul>
                        <li>
                            <a href="http://190.117.145.74/BSEFact.Orion/Account/Consult" class="offer-link" target="_blank"><i class="uil uil-check"></i>Consulte su factura electrónica</a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="{{asset('encarte-orion-abril-semana-santa.pdf')}}" class="offer-link" target="_blank"><i class="uil uil-file-alt"></i>Encarte Abril (Semana Santa)</a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=51946565500" class="offer-link" target="_blank"><i class="uil uil-whatsapp text-success"></i> 946 565 500</a>
                        </li>
                        <li>
                            <a href="/products/category/ofertas" class="offer-link"><i class="uil uil-gift"></i>Ofertas</a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="{{route('faq')}}" class="offer-link"><i class="uil uil-question-circle"></i>Preguntas Frecuentes</a>--}}
{{--                        </li>--}}
                        <!--                        <li>-->
                        <!--                            <a href="dashboard_my_wishlist.html" class="option_links" title="Wishlist"><i class='uil uil-heart icon_wishlist'></i><span class="noti_count1">3</span></a>-->
                        <!--                        </li>-->

                        @if(!Auth::user())
                            <li class="ui dropdown">
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
                        @else
                            <li class="ui dropdown" >
                            <a href="#" class="opts_account">
                                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                <span class="user__name">{{Auth::user()->name}}</span>
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
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="item channel_item p-3 w-100 text-left border-0"><i class="uil uil-lock-alt icon__1"></i> Cerrar sesion</button>
                                </form>
                                <!--                                <a href="/logout" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Logout</a>-->
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>
        <div class="sub-header-group">
            <div class="sub-header">
                <div class="ui dropdown">
                    <a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Seleccione Categoria</span></a>
                    <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light py-3">
                    <div class="container-fluid">
                        <button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
                        <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                            <ul class="navbar-nav main_nav align-self-stretch">
{{--                                <li class="nav-item"><a href="/" class="nav-link active" title="Home">Inicio</a></li>--}}
{{--                                <li class="nav-item"><a href="/products/category/nuevos" class="nav-link new_item" title="New Products">Nuevos Productos</a></li>--}}
                                <li class="nav-item"><a href="/products/category/destacados" class="nav-link" title="Featured Products">Top Productos</a></li>
                                <li class="nav-item"><a href="/products/category/fechas festivas" class="nav-link font-weight-bold" title="Featured Products">Productos por Campaña</a></li>
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
                                <li class="nav-item"><a href="{{route('about')}}" class="nav-link" title="Contact">Acerca de Nosotros</a></li>
                                <li class="nav-item"><a href="{{route('faq')}}" class="nav-link" title="Contact">Preguntas Frecuentes</a></li>
                                <li class="nav-item"><a href="{{route('contacto')}}" class="nav-link" title="Contact">Locales y Contacto</a></li>

                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="catey__icon">
                    <a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
                </div>
                <div class="header_cart order-1">
                    <a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Ver Carrito</span><ins> <cart-length></cart-length> </ins><i class="uil uil-angle-down"></i></a>
                </div>
{{--                <div class="search__icon order-1">--}}
{{--                    <a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </header>

    @yield('content')
{{--</div>--}}
<!-- Body End -->
<!-- Footer Start -->
<footer class="footer">
    <div class="footer-first-row">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <ul class="call-email-alt">
                        <li><a href="https://api.whatsapp.com/send?phone=51946565500" class="callemail" target="_blank"><i class="uil uil-dialpad-alt"></i>946 565 500</a></li>
                        <li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i>info@orion.com.pe</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="social-links-footer">
                        <ul>
                            <li><a href="https://www.facebook.com/OrionCusco" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
{{--                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
                            <li><a href="https://www.instagram.com/orioncusco" target="_blank"><i class="fab fa-instagram"></i></a></li>
{{--                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-second-row">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="second-row-item">
                        <h4>Categorias</h4>
                        <ul>
                            @foreach($category->take(5) as $categories)
                                <li><a href="{{route('product.category', [strtolower($categories->name)])}}">{{ucwords(strtolower($categories->name))}}</a></li>
                            @endforeach
                            <li>...</li>
                            <li><a href="#" data-toggle="modal" data-target="#category_model">Ver todas las categorias</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="second-row-item">
                        <h4>Links útiles</h4>
                        <ul>
                            <li><a href="{{route('about')}}">Sobre Nosotros</a></li>
                            <li><a href="/products/category/destacados">Top Productos</a></li>
                            <li><a href="/products/category/ofertas">Productos en Oferta</a></li>
                            <li><a href="{{route('faq')}}">Preguntas Frecuentes</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="second-row-item">
                        <h4>Locales</h4>
                        <ul>
                            <li><a href="{{route('contacto')}}">Locales y Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
{{--                    <div class="second-row-item-app">--}}
{{--                        <h4>Download App</h4>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><img class="download-btn" src="{{asset('images/download-1.svg')}}" alt=""></a></li>--}}
{{--                            <li><a href="#"><img class="download-btn" src="{{asset('images/download-2.svg')}}" alt=""></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="second-row-item-payment">
                        <h4>Metodos de pago</h4>
                        <div class="footer-payments">
                            <ul id="paypal-gateway" class="financial-institutes">
                                <li class="financial-institutes__logo">
                                    <img alt="Visa" title="Visa" src="{{asset('images/footer-icons/pyicon-6.svg')}}">
                                </li>
                                <li class="financial-institutes__logo">
                                    <img alt="Visa" title="Visa" src="{{asset('images/footer-icons/pyicon-1.svg')}}">
                                </li>
{{--                                <li class="financial-institutes__logo">--}}
{{--                                    <img alt="MasterCard" title="MasterCard" src="{{asset('images/footer-icons/pyicon-2.svg')}}">--}}
{{--                                </li>--}}
{{--                                <li class="financial-institutes__logo">--}}
{{--                                    <img alt="American Express" title="American Express" src="{{asset('images/footer-icons/pyicon-3.svg')}}">--}}
{{--                                </li>--}}
{{--                                <li class="financial-institutes__logo">--}}
{{--                                    <img alt="Discover" title="Discover" src="{{asset('images/footer-icons/pyicon-4.svg')}}">--}}
{{--                                </li>--}}
                            </ul>
                        </div>
                    </div>
{{--                    <div class="second-row-item-payment">--}}
{{--                        <h4>Subscribete</h4>--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="bg-primary text-white p-4 mt-4 rounded shadow-sm">--}}
{{--                                Gracias por su suscripción.--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        <div class="newsletter-input">--}}
{{--                            <form action="{{route('subscribete')}}" method="post">--}}
{{--                                @csrf--}}
{{--                                <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required>--}}
{{--                                <button type="submit" class="newsletter-btn hover-btn"><i class="uil uil-telegram-alt"></i></button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="footer-last-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-links">
                        <ul>
                            <li><a href="{{route('about')}}">Sobre Nosotros</a></li>
                            <li><a href="{{route('contacto')}}">Contáctenos</a></li>
{{--                            <li><a href="#">Politicas de Privacidad</a></li>--}}
                            <li><a href="{{asset('terminos-condiciones-orion.pdf')}}" target="_blank">Términos, Condiciones y Política de reembolso</a></li>
{{--                            <li><a href="#">Política de reembolso y devolución</a></li>--}}
                        </ul>
                    </div>
                    <div class="copyright-text">
                        <i class="uil uil-copyright"></i>Copyright 2021 <a href="http://nebulaperu.com/" target="_blank">Nebula Perú</a>. All rights reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
</div>


<!-- Javascripts -->
{{--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>--}}
<script src="{{asset("js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>
<script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.js")}}"></script>
<script src="{{asset("vendor/OwlCarousel/owl.carousel.min.js")}}"></script>
{{--<script src="/js/jquery-3.3.1.min.js"></script>--}}
{{--<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="/vendor/OwlCarousel/owl.carousel.js"></script>--}}
{{--<script src="vendor/semantic/semantic.min.js"></script>--}}
{{--<script src="js/jquery.countdown.min.js"></script>--}}
{{--<script src="{{asset('js/custom.js')}}"></script>--}}
{{--<script src="js/offset_overlay.js"></script>--}}
{{--<script src="js/night-mode.js"></script>--}}
<script>
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

    $('.cate-slider').owlCarousel({
        items: 1,
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
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $('.date-slider').owlCarousel({
        loop:false,
        margin:10,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:3
            },
            600:{
                items:4
            },
            1000:{
                items:5
            },
            1200:{
                items:6
            },
            1400:{
                items:7
            }
        }
    })



    $(".owl-carousel-head").on("initialized.owl.carousel", () => {
        setTimeout(() => {
            $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
            $("section").show();
        }, 200);
    });

    const $owlCarousel = $(".owl-carousel-head").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: [
            '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
            '<svg width="50" height="50" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>' /* icons from https://iconmonstr.com */
        ]
    });

    $owlCarousel.on("changed.owl.carousel", e => {
        $(".owl-slide-animated").removeClass("is-transitioned");

        const $currentOwlItem = $(".owl-item").eq(e.item.index);
        $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");

        const $target = $currentOwlItem.find(".owl-slide-text");
        doDotsCalculations($target);
    });

    $owlCarousel.on("resize.owl.carousel", () => {
        setTimeout(() => {
            setOwlDotsPosition();
        }, 50);
    });

    /*if there isn't content underneath the carousel*/
    //$owlCarousel.trigger("refresh.owl.carousel");

    setOwlDotsPosition();

    function setOwlDotsPosition() {
        const $target = $(".owl-item.active .owl-slide-text");
        doDotsCalculations($target);
    }

    function doDotsCalculations(el) {
        const height = el.height();
        const {top, left} = el.position();
        const res = height + top + 20;

        $(".owl-carousel-head .owl-dots").css({
            top: `${res}px`,
            left: `${left}px`
        });
    }


</script>
<!-- begin olark code -->
<script type="text/javascript">
    ;(function(o,l,a,r,k,y){if(o.olark)return;
        r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0];
        y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r);
        y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)};
        y.extend=function(i,j){y("extend",i,j)};
        y.identify=function(i){y("identify",k.i=i)};
        y.configure=function(i,j){y("configure",i,j);k.c[i]=j};
        k=y._={s:[],t:[+new Date],c:{},l:a};
    })(window,document,"static.olark.com/jsclient/loader.js");
    /* Add configuration calls below this comment */
    olark.identify('1517-423-10-2650');</script>
<!-- end olark code -->
</body>
</html>
<script>
    import CartLength from "../../js/components/composition/CartLength";
    import FixedComponent from "../../js/components/composition/FixedComponent";
    export default {
        components: {FixedComponent, CartLength}
    }
</script>
