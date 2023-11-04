@extends('layouts.app')

@section('title' ,'Home')

@section('header')
    @parent
@endsection


@section('content')
<a href="{{route('products.index')}}">Danh sách sản phẩm</a>

@endsection
