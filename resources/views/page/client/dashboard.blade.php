@extends('layouts.default')
@section('content')
    <dashboard-component :user="{{$user}}"></dashboard-component>
@endsection
