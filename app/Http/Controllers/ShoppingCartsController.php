<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class ShoppingCartsController extends Controller
{
    public function index(){

        $shopping_cart_id=\Session::get('shopping_cart_id');
        $shopping_cart=ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        $productos = $shopping_cart->productos();

        $total=$shopping_cart->total();

        return view('shoping_carts.index',['productos' => $productos,'total' => $total]);


    }

    public function pedido(){

        if (Auth::guest()){
            return view('');
        }

    }
}
