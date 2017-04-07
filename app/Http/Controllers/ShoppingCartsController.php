<?php

namespace App\Http\Controllers;

use App\PerfilUsuario;
use Illuminate\Http\Request;
use App\ShoppingCart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

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

    public function direccion(){

        $usuario_id=Auth::user()->id;
        $datos_usaurio=PerfilUsuario::where('user_id','=',$usuario_id)->get();
        return view('shoping_carts.confirmardireccion',['datos' => $datos_usaurio]);

    }

    public function pagarpedido(){

        $shopping_cart_id=\Session::get('shopping_cart_id');
        $shopping_cart=ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        $productos = $shopping_cart->productos();

        $total=$shopping_cart->total();
        $key = md5('LYrZ3ETFroQi2bLC4r3B5RveQy'.'~'.'574600'.'~'.$shopping_cart_id.'~'.$total.'~'.'COP');


        return view('shoping_carts.formpedido',['referencia'=>$shopping_cart_id,'productos' => $productos,'total' => $total,'keypayu'=>$key]);

    }
}
