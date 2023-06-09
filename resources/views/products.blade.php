@extends('jonmaster')
@section('title', 'Jon Template')
@section('content')
    <div class="page-wrapper">
        <h1 class="d-none">About Us</h1>
        <!-- Start of Header -->
    @include("header")
    <!-- End of Header -->
        <main class="main">
            <div class="page-content">

                @foreach($products as $product)
                    <a href="products?product_id={{$product->id}}"><div  style="background-image: url('{!!$product->icon !!}')" class="product">{{$product->name}}</div></a>
                @endforeach


            </div>
        </main>
        <!-- End of Main -->
    @include("footer")
    <!-- End of Footer -->
    </div>
@endsection

