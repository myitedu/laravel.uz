@extends('master')
@section('title', 'A list of Products')
@section('content')
    <div id="products">
        @foreach($products as $product)
        <a href="products?product_id={{$product->id}}"><div  style="background-image: url('{!!$product->icon !!}')" class="product">{{$product->name}}</div></a>
        @endforeach
    </div>
@endsection
