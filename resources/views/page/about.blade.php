@extends('layouts.default')
@section('content')
    <cart-blade></cart-blade>
    <div class="wrapper">
{{--        <div class="default-dt">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12 col-md-12">--}}
{{--                        <div class="default_tabs">--}}
{{--                            <nav>--}}
{{--                                <div class="nav nav-tabs tab_default  justify-content-center">--}}
{{--                                    <a class="nav-item nav-link active" href="about_us.html">About</a>--}}
{{--                                    <a class="nav-item nav-link" href="our_blog.html">Blog</a>--}}
{{--                                    <a class="nav-item nav-link" href="career.html">Careers</a>--}}
{{--                                    <a class="nav-item nav-link" href="press.html">Press</a>--}}
{{--                                </div>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
{{--                        <div class="title129">--}}
{{--                            <h2>About Us</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="life-gambo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="default-title left-text">
                            <h2>Orion Supermercados</h2>
                            <p>La Estrella de los Precios Bajos</p>
                            <img src="images/line.svg" alt="">
                        </div>
                        <div class="about-content">
                            <p>A lo largo de la trayectoria de Supermercados ORION hemos sido protagonistas y testigos del crecimiento de una empresa que día a día ha confiado en las fortalezas y actitudes positivas de los Cuzqueños.</p>
                            <p>La perseverancia y constancia de sus fundadores, fueron y son en la actualidad un pilar firme donde se cimentan todas las virtudes y capacidades del personal.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{asset('images/about/about.png')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="about-steps-group white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="about-step">
                            <div class="about-step-img">
                                <img src="/images/about/icon-1.svg" alt="">
                            </div>
                            <h4>10 años!</h4>
                            <p>Sirviendo a la comunidad Cusqueña</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about-step">
                            <div class="about-step-img">
                                <img src="/images/about/icon-2.svg" alt="">
                            </div>
                            <h4>#1</h4>
                            <p>Somos numero uno en descuentos</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about-step">
                            <div class="about-step-img">
                                <img src="/images/about/icon-3.svg" alt="">
                            </div>
                            <h4>7 Locales</h4>
                            <p>Siempre habrá un Orion cerca de ti</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about-step">
                            <div class="about-step-img">
                                <img src="/images/about/icon-4.svg" alt="">
                            </div>
                            <h4>Galaxy Card</h4>
                            <p>El programa número uno de Descuentos en Cusco</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="life-gambo">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{asset('images/banners/ave-cultura.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="default-title left-text">
                            <h2>Nuestra Misión</h2>
                        </div>
                        <div class="about-content">
                            <p>Ser la cadena de supermercados más importante de región y tener el grupo más efectivo e innovador, ofreciendo la más amplia gama de productos a precios accesibles y con un excelente servicio.</p>
                        </div>
                        <div class="default-title left-text mt-5">
                            <h2>Nuestra Visión</h2>
                        </div>
                        <div class="about-content">
                            <p>Abastecer a las familias con la más alta variedad de productos, con la mejor relación- calidad, en un ambiente cordial higiénico y seguro. De igual manera, tenemos como objetivo el crecimiento sostenido de la empresa y el desarrollo de sus colaboradores.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="life-gambo bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="default-title">
                            <h2>Nuestro Equipo</h2>
                            <p>Un trabajo en equipo hace realidad nuestros sueños</p>
                            <img src="images/line.svg" alt="">
                        </div>
                        <div class="dd-content">
                            <div class="owl-carousel team-slider owl-theme">
                                <div class="item">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="images/team/img-1.jpg" alt="">
                                        </div>
                                        <h4>Jose Farfan</h4>
                                        <span>CEO & Fundador</span>
                                        <ul class="team-social">
{{--                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="images/team/img-2.jpg" alt="">
                                        </div>
                                        <h4>Joe Farfan</h4>
                                        <span>CEO</span>
                                        <ul class="team-social">
{{--                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="images/team/img-3.jpg" alt="">
                                        </div>
                                        <h4>Juan Farfan</h4>
                                        <span>Administrador</span>
                                        <ul class="team-social">
{{--                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="images/team/img-4.jpg" alt="">
                                        </div>
                                        <h4>Evelyn</h4>
                                        <span>Contadora</span>
                                        <ul class="team-social">
{{--                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                                            <li><a href="#" class="scl-btn hover-btn"><i class="fab fa-linkedin-in"></i></a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-order-gambo mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="default-title">
                            <h2>¿Cómo hago un pedido?</h2>
                            <p>¿Cómo hago un pedido en Orion?</p>
                            <img src="images/line.svg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-search"></i>
                            </div>
                            <h4>Busque productos en orion.com.pe o utilice la función de búsqueda</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-shopping-basket"></i>
                            </div>
                            <h4>Agregar artículo a su carrito de compras</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-stopwatch"></i>
                            </div>
                            <h4>Elija un tiempo de entrega conveniente</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-money-bill"></i>
                            </div>
                            <h4>Seleccione la opción de pago adecuada (Efectivo, Tarjeta de crédito)</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-truck"></i>
                            </div>
                            <h4>Sus productos serán entregados a domicilio según su pedido.</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="how-order-steps">
                            <div class="how-order-icon">
                                <i class="uil uil-smile"></i>
                            </div>
                            <h4>Clientes felices</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        <script>
            import CartBlade from "../../js/components/composition/CartBlade";
            export default {
                components: {CartBlade}
            }
        </script>
