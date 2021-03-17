<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Orion supermercado. El especialista de precios bajos">
    <meta name="author" content="Hidalgo">
    <title>Orion Supermercado</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('images/fav.png')}}">

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
    {{--    <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">--}}
    {{--    <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">--}}
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="{{mix("css/app.css")}}">--}}
{{--    <link rel="stylesheet" href="{{mix("css/library.css")}}">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<div id="app">

<!-- Body Start -->
{{--<div class="wrapper">--}}
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
                        <li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>-- -- -- --</a></li>
                        <li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i>info@orion.com.pe</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="social-links-footer">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
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
                            <li><a href="#">Lacteos</a></li>
                            <li><a href="#">Conservas</a></li>
                            <li><a href="#">Embutidos</a></li>
                            <li><a href="#">Limpieza</a></li>
                            <li><a href="#">Aceites</a></li>
                            <li><a href="#">Desayunos</a></li>
                            <li><a href="#">Cafe para pasar</a></li>
                            <li><a href="#">Abarrotes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="second-row-item">
                        <h4>Links útiles</h4>
                        <ul>
                            <li><a href="about_us.html">Sobre Nosotros</a></li>
                            <li><a href="shop_grid.html">Top Productos</a></li>
                            <li><a href="shop_grid.html">Productos Nuevos</a></li>
                            <li><a href="shop_grid.html">Preguntas Frecuentes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="second-row-item">
                        <h4>Locales</h4>
                        <ul>
                            <li><a href="#">Orion Marcavalle</a></li>
                            <li><a href="#">Orion Garcilazo</a></li>
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
                    <div class="second-row-item-payment">
                        <h4>Subscribete</h4>
                        <div class="newsletter-input">
                            <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
                            <button class="newsletter-btn hover-btn" type="submit"><i class="uil uil-telegram-alt"></i></button>
                        </div>
                    </div>
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
                            <li><a href="#">Sobre Nosotros</a></li>
                            <li><a href="#">Contáctenos</a></li>
                            <li><a href="#">Politicas de Privacidad</a></li>
                            <li><a href="#">Terminos y Condiciones</a></li>
                            <li><a href="#">Política de reembolso y devolución</a></li>
                        </ul>
                    </div>
                    <div class="copyright-text">
                        <i class="uil uil-copyright"></i>Copyright 2021 <b>Nebula</b> . All rights reserved
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
</div>
<!-- Javascripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/plugins.js")}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('vendor/semantic/semantic.min.css')}}">
{{--<script src="/js/jquery-3.3.1.min.js"></script>--}}
{{--<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
{{--<script src="vendor/OwlCarousel/owl.carousel.js"></script>--}}
{{--<script src="vendor/semantic/semantic.min.js"></script>--}}
{{--<script src="js/jquery.countdown.min.js"></script>--}}
{{--<script src="js/custom.js"></script>--}}
{{--<script src="js/offset_overlay.js"></script>--}}
{{--<script src="js/night-mode.js"></script>--}}

</body>
</html>
