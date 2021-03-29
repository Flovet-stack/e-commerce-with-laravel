<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function index() {
        $products = Product::all();
        return view('products', ['products' => $products]);
    }

    function details($id) {
        $details = Product::find($id);
        return view('product-details', ['details' => $details]);
    }

    function addToCart(Request $req) {
        if($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            // return "Hello";
            return redirect('/');
        } else {
            return redirect('login');
        }
    }

    // function addToCartFromHome(Request $req, $id) {
    //     $product = Product::find($id);
    //     $cart = new Cart;
    //     $cart->user_id = $req->session()->get('user')['id'];
    //     $cart->product_id = $product['id'];
    //     $cart->save();
    // }

    static function cartItem() {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cart() {
        $userId=Session::get('user')['id'];
        $cart = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*', 'cart.id as cart_id')
        ->get();
        $cart_total = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');
        return view('cart-list', ['cart' => $cart, 'cart_total' => $cart_total]);
    }

    function removeCart($id) {
        Cart::destroy($id);
        return redirect('cart');
    }
}
