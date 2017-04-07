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

        $referencia = $shopping_cart_id.'-'.'testPayu';

        $total=$shopping_cart->total();
        $key = md5('4Vj8eK4rloUd272L48hsrarnUA'.'~'.'508029'.'~'.$referencia.'~'.$total.'~'.'COP');

        $user_id = Auth::user()->id;



        $datos_cliente=PerfilUsuario::Where('user_id','=',$user_id)->get();

        /*dd($datos_cliente->municipio->nombre_municipio);*/

        return view('shoping_carts.formpedido',['referencia'=>$referencia,'productos' => $productos,'total' => $total,'keypayu'=>$key,'datos' => $datos_cliente]);

    }
}
