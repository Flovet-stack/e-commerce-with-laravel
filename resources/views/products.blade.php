@extends('layouts.layout')

@section('content')
<!--breadcrumb starts here-->
<div class="breadcrumb">
    <h1>Products</h1>
    <div class="breadcrumb-sub">
        <a href="/" class="breadcrumb-item">home <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        <a class="breadcrumb-item active">Products</a>
    </div>
</div>
<!--breadcrumb ends here-->
<section class="products-section">
    <div class="con">
        <div class="heading left">
            <h5>Our Products</h5>
            <h1>Best Products from around the world</h1>
        </div>
        <div class="products">
        @foreach ($products as $product)
            <div class="product-card">
                <img src="{{$product['gallery']}}" alt="">
                <div class="product-info">
                    <div class="flex">
                        <div class="price">{{$product['price']}}<span>$</span></div>
                        <div class="category">{{$product['category']}}</div>
                    </div>
                    <div class="product-name">{{$product['name']}}</div>
                    <div class="flex btn-flex">
                        <a href="/details/{{$product['id']}}" class="btn">More Info</a>
                        <!-- <form method="POST" action="/">
                            @csrf
                            <button type="submit" class="btn">Add to Cart</button>
                        </form> -->
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
@endsection