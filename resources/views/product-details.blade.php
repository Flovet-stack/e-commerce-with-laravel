@extends('layouts.layout')

@section('content')
<!--breadcrumb starts here-->
<div class="breadcrumb">
    <h1>Products</h1>
    <div class="breadcrumb-sub">
        <a href="/" class="breadcrumb-item">home <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        <a href="/" class="breadcrumb-item">products <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        <a class="breadcrumb-item active">{{$details['name']}}</a>
    </div>
</div>
<!--breadcrumb ends here-->
<section class="product-details-section">
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="product-images">
                        <div class="main-img-slider">
                            <figure>
                                <a href="#" data-size="1400x1400"> <img src="{{$details['gallery']}}" alt="" /> </a>
                            </figure>
                            <figure>
                                <a href="#" data-size="1400x1400"> <img src="{{$details['gallery']}}" data-lazy="{{$details['gallery']}}" alt="" /> </a>
                            </figure>
                            <figure>
                                <a href="#" data-size="1400x1400"> <img src="{{$details['gallery']}}" data-lazy="{{$details['gallery']}}" alt="" /> </a>
                            </figure>
                            <figure>
                                <a href="#" data-size="1400x1400"> <img src="{{$details['gallery']}}" data-lazy="{{$details['gallery']}}" alt="" /> </a>
                            </figure>
                        </div>
                        <ul class="thumb-nav">
                            <li><img src="{{$details['gallery']}}" alt="product-thumb" /></li>
                            <li><img src="{{$details['gallery']}}" alt="product-thumb" /></li>
                            <li><img src="{{$details['gallery']}}" alt="product-thumb" /></li>
                            <li><img src="{{$details['gallery']}}" alt="product-thumb" /></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-12">
                    <div class="single-product">
                        <h2>{{$details['name']}}</h2>
                        <div class="product-review-area"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i>                            <span>(1 customer review)</span> </div>
                        <div class="single-product-price">
                            <h4>${{$details['price']}}</h4>
                        </div>
                        <p>{{$details['description']}}</p>
                        <div class="quantity mt-30">
                            <form method="POST" action="/add_to_cart"> 
                                @csrf
                                <input type="number" class="cart-amount" name="quantity" min="1" max="9" step="1" value="1"> 
                                <input type="hidden" name="product_id" value="{{$details['id']}}"> 
                                <button type="submit" class="add-to-cart-button">Buy Now</button> 
                            </form>
                        </div>
                        <div class="product-categories">
                            <div class="display-b"> <span>Category: </span>
                                <ul>
                                    <li><a href="#">{{$details['category']}}</a></li>
                                </ul>
                            </div>
                            <div class="display-b"> <span>Product ID: </span>
                                <ul>
                                    <li>789654</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-tags">
                            <div class="display-b"> <span>Product Tags: </span>
                                <ul>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Screen</a></li>
                                    <li><a href="#">Electronics</a></li>
                                    <li><a href="#">Planning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-share mt-20"> <span>Share: </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="shop-tabs">
                        <div class='tabs tabs_animate mt-70'>
                            <ul class="tab-menu left-holder">
                                <li><a href="#tab-1">Description</a></li>
                                <li><a href="#tab-2">Additional Information</a></li>
                                <li><a href="#tab-3">Reviews (1)</a></li>
                            </ul>
                            <div id='tab-1' class="clearfix product-tab-body">
                                <h3>Product Description</h3>
                                <p>{{$details['description']}}</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                            <div id='tab-2' class="clearfix product-tab-body">
                                <h3>Product Features</h3>
                                <ul>
                                    <li><span>Name:</span>{{$details['name']}}</li>
                                    <li><span>Category:</span>{{$details['category']}}</li>
                                    <li><span>Size:</span>15x20 cm</li>
                                    <li><span>Weight:</span>0.5 5 kg</li>
                                    <li><span>Material:</span>Paper</li>
                                    <li><span>Color:</span>White & Red</li>
                                </ul>
                            </div>
                            <div id='tab-3' class="clearfix product-tab-body">
                                <h3>Customer Reviews</h3>
                                <div class="customer-review">
                                    <div class="row">
                                        <div class="col-md-1 pr-0 hidden-sm-down"> <img src="img/blog/user2.png" alt="member">
                                            <div class="customer-review-stars"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o"
                                                    aria-hidden="true"></i> </div>
                                        </div>
                                        <div class="col-md-11 col-12">
                                            <div class="customer-review-block">
                                                <h5>Alexander PoppinsEmily Hills</h5> <strong> April 01, 2018</strong>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form method="get" action="#" class="mt-60">
                                    <div class="row">
                                        <div class="col-md-2 col-12">
                                            <h3>Your Review</h3>
                                        </div>
                                        <div class="col-md-10 col-12 mt-5">
                                            <div class="rating"> <label> <input type="radio" name="stars" value="1"/> <span class="icon">★</span> </label> <label> <input type="radio" name="stars" value="2"/> <span class="icon">★</span> <span class="icon">★</span> </label>                                                <label> <input type="radio" name="stars" value="3"/> <span class="icon">★</span> <span class="icon">★</span> <span class="icon">★</span> </label> <label> <input type="radio" name="stars" value="4"/> <span class="icon">★</span> <span class="icon">★</span> <span class="icon">★</span> <span class="icon">★</span> </label>                                                <label> <input type="radio" name="stars" value="5"/> <span class="icon">★</span> <span class="icon">★</span> <span class="icon">★</span> <span class="icon">★</span> <span class="icon">★</span> </label> </div>
                                            <div class="row">
                                                <div class="review-input">
                                                    <div class="col-md-6"> <input type="text" name="name" placeholder="Your Name"> </div>
                                                    <div class="col-md-6"> <input type="email" name="email" placeholder="Your Email"> </div>
                                                    <div class="col-md-12"> <textarea name="review" placeholder="Your Review"></textarea>
                                                        <div class="right-holder"> <button type="submit">Send</button> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection