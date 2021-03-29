<?php 
    use App\Http\Controllers\ProductController;
    $total = 0;
    if(Session::has('user')) {
        $total = ProductController::cartItem();
    }
?>
<header>
<div class="con">   
    <nav>
        <div class="logo"><a href="/">E-COMM</a></div>
        <ul>
            <li><a href="/">Home</a></li>
            @if(Session::has('user'))
            <li><a href="/cart">Orders</a></li>
            @endif
        </ul>
        <form class="search-form">
            <input name="search" id="" class="" type="Search" placeholder="Search here">
            <button type="submit"><img src="{{asset('img/search.svg')}}"> </button>
        </form>
    </nav>
    <div class="header-sub">
        @if(!Session::has('user'))
        <li><a class="register-link" href="/register">Register</a></li>
        <li><a class="login-link" href="/login">login</a></li>
        @endif
        @if(Session::has('user'))
        <div class="cart">
            <a href="/cart">Cart<span>{{$total}}</span></a>
        </div>
        <div class="user-btn">
            <div>{{Session::get('user')['name']}} <img src="{{asset('img/icon-arrow-down.svg')}}"></div>
            <ul>
                <li><a href="/logout"><img src="{{asset('img/logout.svg')}}"> Logout</a></li>
            </ul>
        </div>
        @endif
    </div>
</div>
    <!-- <img src="{{asset('img/search.svg')}}">  -->
</header>