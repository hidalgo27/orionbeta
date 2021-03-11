@extends('layouts.default')
@section('content')
    <grid-product-component :idcategory="{{$id}}" :user="{{$user}}"></grid-product-component>
@endsection
