<?php
/**
 * Created by PhpStorm.
 * User: pquintero
 * Date: 21/03/2017
 * Time: 1:03 PM
 */

namespace App\Http\Controllers;


use App\Producto;
use App\ShoppingCart;

class MainController {

        public function home(){

            $productos=Producto::where('estado',1)->get();
            return view('main.home',['productos'=> $productos]);

        }
}