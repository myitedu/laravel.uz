@extends('master')
@section('title', 'A list of Products')
@section('content')
    <div id="products">
        <h3>{{$product->name}} Details</h3>
        <nav>
            <a href="products">All Products</a>
        </nav>

            <a href="products?product_id={{$product->id}}"><div style="background-image: url('{!!$product->icon !!}')" class="product">{{$product->name}}</div></a>
            <hr>
        <div class="stars">
            @for($i=1; $i<6; $i++)
            <a title="{{$i}} star" href="products?product_id={{$product->id}}&star={{$i}}"><img class="img_star" src="https://iconsplace.com/wp-content/uploads/_icons/ffa500/256/png/rating-star-icon-11-256.png"></a>
            @endfor
        </div>

        <div id="comment">
            <form method="get" action="products?product_id={{$product->id}}">
                <textarea class="inp_customer_comment" name="customer_comment" placeholder="Your Feedback"></textarea><hr>
                <button class="btn btn-success" type="submit">POST YOUR FEEDBACK</button>
            </form>
        </div>

    </div>
@endsection
