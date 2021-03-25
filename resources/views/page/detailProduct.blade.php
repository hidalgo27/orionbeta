@extends('layouts.default')
@section('content')
    <detail-product-component :idproduct="{{$id}}" :user="{{$user}}"></detail-product-component>
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
