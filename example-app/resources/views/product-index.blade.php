@extends('layouts.app')

@section('title' ,'Product list')

@section('header')
@parent
&gt;<a href="{{route('products.index');}}">Products</a>
@endsection


@section('content')
<h1>Danh sach san pham</h1>
<a href="{{route('products.create')}}" class="btn btn-info">Thêm</a><br>
@foreach($lst as $p)
<div class=product>
    <!--<img style="width:100px;max-height:100px;object-fit:contain;" src=" {{$p->image}}">
    <a href="{{route('products.show',['product'=>$p])}}">{{$p->name}}</a>-->
    <div class="col-sm-4" style="margin-top:15px">
        <div class="card">
            <div class="card-body">
                <img class="card-img-top" style=" width:100px;max-height:100px;object-fit:contain;"
                    src=" {{$p->image}}">
                <a href="{{route('products.show',['product'=>$p])}}">{{$p->name}}</a>
                <a href="#" class="btn btn-primary">Mua Ngay</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection