<?php 
    use App\Http\Controllers\ProductController;
    $total = 0;
    if(Session::has('user')) {
        $total = ProductController::cartItem();
    }
?>
@extends('layouts.layout')

@section('content')
<!--breadcrumb starts here-->
<div class="breadcrumb">
    <h1>Sopping Cart</h1>
    <div class="breadcrumb-sub">
        <a href="/" class="breadcrumb-item">home <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        <a class="breadcrumb-item active">Shopping Cart</a>
    </div>
</div>
<!--breadcrumb ends here-->
<section class="cart-section mt-50 mb-100">
    <div class="con">
        <div class="row">
          <div class="col-md-8 col-sm-8 col-12">
            <div class="shop-cart-box">
                @foreach($cart as $cart_item)
                <div class="row bx" id="3">
                    <div class="col-md-1 col-sm-1 col-12 pr-0">
                        <div class="button-close">
                            <a href="/remove-cart/{{$cart_item->cart_id}}"><i class="icon-cancel"></i></a>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12">
                        <div class="shop-cart-box-img">
                            <img src="{{$cart_item->gallery}}" alt="img" />
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12">
                        <div class="shop-cart-box-info">
                            <h4>{{$cart_item->name}}</h4>
                            <span>{{$cart_item->category}}</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-12">
                        <div class="shop-cart-box-quantity">
                            <h6>Quantity</h6>
                            <input
                            class="form-control form-control-sm"
                            type="text"
                            placeholder="Quantity"
                            value="1"
                            />
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 col-12">
                        <div class="shop-cart-box-price"><h5>${{$cart_item->price}}</h5></div>
                    </div>
                </div>
                @endforeach
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-12">
            <div class="shop-cart-info-price clearfix">
              <ul class="right-info-price">
                <li>
                  Total Price:
                  <h6>${{$cart_total}}</h6>
                </li>
                <li>
                  Shipping Price:
                  <h6>${{($total)*3.05}}</h6>
                </li>
                <li>
                  Tax:
                  <h6>$30.00</h6>
                </li>
              </ul>
              <div class="total-price">
                <p>Total: <strong>${{ ($cart_total) + (($total)*3.05) + 30.00 }}</strong></p>
              </div>
            </div>
            <div class="mt-25 right-holder">
              <a href="#" class="primary-button button-md">Order Now</a>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection