@extends('layouts.default')
@section('content')
    <order-component :user="{{$user}}"></order-component>
@endsection
