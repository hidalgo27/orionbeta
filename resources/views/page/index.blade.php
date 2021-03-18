@extends('layouts.default')
@section('content')
    <div class="wrapper">
        <div class="col p-0">
            <div class="owl-carousel cate-banners owl-theme">
                <div class="item">
                    <a href="#" class="">
                        <img src="/images/banners/beneficios-galaxy.jpg" alt="" class="w-100">
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="">
                        <img src="/images/banners/sabor-peruano.jpg" alt="" class="w-100">
                    </a>
                </div>
            </div>
        </div>
{{--        <category-component></category-component>--}}
        <div class="section145">
            <div class="container">
                <div class="row">
                    <!--                <div class="col-md-12">-->
                    <!--                    <div class="main-title-tt">-->
                    <!--                        <div class="main-title-left">-->
                    <!--                            <span>Comprar Por</span>-->
                    <!--                            <h2>Categorias</h2>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <div class="col-md-12">
                        <div class="owl-carousel cate-slider owl-theme">
                            @foreach($category as $categories)
                            <div class="item">
                                <a href="{{route('product.category', [strtolower($categories->name)])}}" class="category-item">
                                    <div class="cate-img">
                                        <img src="http://sistemaorion.green.com.pe/api/v1/categories/imagen/{{$categories->photo}}" alt="">
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
@endsection
