@extends('layouts.default')
@section('content')
    <div class="wrapper">
        <div class="bg-gradient-orion">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 bg-dark d-none d-md-block positive">


                        <div class="owl-carousel owl-carousel-head owl-theme">
                            <div class="owl-slide d-flex align-items-center cover" style="background-image: url({{asset('images/banners/banner-madre.jpg')}});">
                                <div class="container">
                                    <div class="row justify-content-center justify-content-md-end">
                                        <div class="col-10 col-md-5 static">
                                            <div class="owl-slide-text rgba-black-6 p-5 rounded shadow">
                                                <h2 class="owl-slide-animated owl-slide-title h1 font-weight-bold text-white">Ofertas Especiales por tu día Mamá</h2>
{{--                                                <div class="owl-slide-animated owl-slide-subtitle mb-3">--}}
{{--                                                    Seleccionamos productos par tu día--}}
{{--                                                </div>--}}
{{--                                                <h2 class="owl-slide-animated owl-slide-title text-white">Feliz Dia Mamá</h2>--}}
                                                <a class="btn btn-danger btn-lg mt-2 owl-slide-animated owl-slide-cta" href="{{asset('encartes/encarte-orion-dia-de-la-madre.pdf')}}" role="button" target="_blank">Ver Productos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/owl-slide-->

                        </div>




{{--                        <div class="owl-carousel cate-banners owl-theme">--}}
{{--                            <div class="item position-relative">--}}
{{--                                --}}{{--                    <a href="#" class="">--}}
{{--                                --}}{{--                        <img src="/images/banners/beneficios-galaxy.jpg" alt="" class="w-100">--}}
{{--                                --}}{{--                    </a>--}}
{{--                                --}}{{--                    <video class="hero-vid-home" id="hero-vid"  autoplay loop muted>--}}
{{--                                --}}{{--                        <source src="{{asset('images/banners/WhatsApp Video 2021-03-19 at 13.09.01.mp4')}}" />--}}
{{--                                --}}{{--                        <source src="{{asset('images/banners/WhatsApp Video 2021-03-19 at 13.09.01.mp4')}}" type="video/mp4" />--}}
{{--                                --}}{{--                        <source src="{{asset('images/banners/WhatsApp Video 2021-03-19 at 13.09.01.mp4')}}" type="video/webm" />--}}
{{--                                --}}{{--                        <source  src="{{asset('images/banners/WhatsApp Video 2021-03-19 at 13.09.01.mp4')}}" type="video/ogg" />--}}
{{--                                --}}{{--                    </video>--}}
{{--                                <video autoplay muted loop class="w-100" poster="/images/banners/beneficios-galaxy.jpg">--}}
{{--                                    <source src="{{asset('images/banners/ecommerce-web.mp4')}}" type="video/mp4" class="w-100">--}}
{{--                                </video>--}}
{{--                                <img src="{{asset('images/banners/banner-madre.jpg')}}" alt="">--}}
{{--                                <div class="position-absolute">--}}
{{--                                    <span class="h1 font-weight-bold">hola</span>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--    --}}{{--                        <div class="item">--}}
{{--    --}}{{--                            --}}{{----}}{{--                    <video autoplay muted loop class="w-100">--}}
{{--    --}}{{--                            --}}{{----}}{{--                        <source src="{{asset('images/banners/WhatsApp Video 2021-03-20 at 12.06.09.mp4')}}" type="video/mp4" class="w-100">--}}
{{--    --}}{{--                            --}}{{----}}{{--                    </video>--}}
{{--    --}}{{--                            --}}{{----}}{{--                    <img src="{{asset('images/banners/ecommerce.gif')}}" alt="">--}}
{{--    --}}{{--                            <img src="{{asset('images/banners/galaxy.gif')}}" alt="">--}}
{{--    --}}{{--                        </div>--}}
{{--                        </div>--}}
{{--                        <div class="row justify-content-center">--}}
{{--                            <div class="col-12 col-md-8">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-sm-6 col-md-6 col-lg-3">--}}
{{--                                        <div class="about-step">--}}
{{--                                            <div class="about-step-img">--}}
{{--                                                <img src="/images/about/icon-1.svg" alt="">--}}
{{--                                            </div>--}}
{{--                                            <h5 class="text-white mt-2 font-weight-normal" data-toggle="tooltip" data-placement="top" title="Sirviendo a la comunidad Cusqueña">10 años!</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6 col-md-6 col-lg-3">--}}
{{--                                        <div class="about-step">--}}
{{--                                            <div class="about-step-img">--}}
{{--                                                <img src="/images/about/icon-2.svg" alt="">--}}
{{--                                            </div>--}}
{{--                                            <h5 class="text-white mt-2 font-weight-normal" data-toggle="tooltip" data-placement="top" title="Somos numero uno en descuentos">#1</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6 col-md-6 col-lg-3">--}}
{{--                                        <div class="about-step">--}}
{{--                                            <div class="about-step-img">--}}
{{--                                                <img src="/images/about/icon-3.svg" alt="">--}}
{{--                                            </div>--}}
{{--                                            <h5 class="text-white mt-2 font-weight-normal" data-toggle="tooltip" data-placement="top" title="Siempre habrá un Orion cerca de ti">6 Locales</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6 col-md-6 col-lg-3">--}}
{{--                                        <div class="about-step">--}}
{{--                                            <div class="about-step-img">--}}
{{--                                                <img src="/images/about/icon-4.svg" alt="">--}}
{{--                                            </div>--}}
{{--                                            <h5 class="text-white mt-2 font-weight-normal" data-toggle="tooltip" data-placement="top" title="El programa número uno de Descuentos en Cusco">Galaxy Card</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                    </div>
{{--                    <div class="col-12 col-md-6 col-lg-4 bg-danger">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <a href="/products/category/panaderia"><img src="{{asset('images/banners/tortas-2048.jpg')}}" alt="" class="w-100"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>

{{--        <slider-home></slider-home>--}}
{{--        <category-component></category-component>--}}
        <section class="mt-4 d-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="offer-item">
                            <div class="offer-item-img">
                                <div class="gambo-overlay"></div>
                                <!--                                        <img src="images/banners/offer-1.jpg" alt="">-->
                                <img src="{{asset('images/banners/banner-pollos.jpg')}}" alt="" class="w-100 rounded shadow">
                            </div>
                            <div class="offer-text-dt">
                                <div class="offer-top-text-banner">
                                    <p>SUPER OFERTAS</p>
                                    <div class="top-text-1">Ofertas en Pollos</div>
                                    <span>Precios especiales en combos</span>
                                </div>
                                <a href="/products/category/pollo a la brasa" class="Offer-shop-btn hover-btn">Ver Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="offer-item">
                            <div class="offer-item-img">
                                <div class="gambo-overlay"></div>
                                <!--                                        <img src="images/banners/offer-1.jpg" alt="">-->
                                <img src="{{asset('images/banners/banner-torta.jpg')}}" alt="" class="w-100 rounded shadow">
                            </div>
                            <div class="offer-text-dt">
                                <div class="offer-top-text-banner">
                                    <p>SUPER OFERTAS</p>
                                    <div class="top-text-1">Ofertas en tortas</div>
                                    <span>Para ocaciones especiales</span>
                                </div>
                                <a href="/products/category/panaderia" class="Offer-shop-btn hover-btn">Ver Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section145">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel cate-slider owl-theme">
                            @foreach($category as $categories)
                            <div class="item">
                                <a href="{{route('product.category', [strtolower($categories->name)])}}" class="category-item">
                                    <div class="cate-img">
                                        <img src="https://sistemaorion.nebulaperu.com/api/v1/categories/imagen/{{$categories->photo}}" alt="">
                                    </div>
                                    <h4 class="capitalize">{{ucwords(strtolower($categories->name))}}</h4>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <index-component :user="{{$user}}"></index-component>
    </div>
    <!-- Modal -->
    <!-- Modal -->
    <div class="header-cate-model main-gambo-model modal fade" id="beneficio-g" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">Beneficios Galaxy Cart</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
                <div class="modal-body">
                    <img src="{{asset('images/banners/beneficios-galaxy-card-5x4m.jpg')}}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
@endsection
