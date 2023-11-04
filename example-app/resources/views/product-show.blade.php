@extends('layouts.app')

@section('title' ,'Product details')

@section('header')
@parent
&gt;<a href="{{route('products.index');}}">Products</a>
&gt;{{$p->name}}
@endsection


@section('content')
<h1>{{$p->name}}</h1>
<a href="{{route('products.edit',['product'=>$p])}}" class="btn btn-success">Sữa</a><br>
<form method="post" action="{{route('products.destroy',['product'=>$p])}}">
    @csrf
    @method('DELETE')

    <input type="submit" value="xóa">

</form>
<img style=" width:500px;max-height:500px;object-fit:contain;" src=" {{$p->image}}">
<p>Loại: {{$p->Category->name}}</p>
<p>Giá: {{$p->price}}</p>
<div>
    <h3>Mô tả:</h3>
    {{$p->desc}}
</div>
<br>
@endsection