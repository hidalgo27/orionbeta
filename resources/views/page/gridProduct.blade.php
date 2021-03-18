@extends('layouts.default')
@section('content')
{{--    {{$name_category}}--}}
    <grid-product-component :namecategory="'{{strtolower($name_category)}}'" :user="{{$user}}"></grid-product-component>
@endsection
