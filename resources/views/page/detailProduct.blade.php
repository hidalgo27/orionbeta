@extends('layouts.default')
@section('content')
    <detail-product-component :idproduct="{{$id}}" :user="{{$user}}"></detail-product-component>
@endsection
