<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class inShoppingCart extends Model
{
    protected $fillable=['shopping_cart_id','producto_id','cantidad'];



    public static function findOrCreateProdcuto($prodcuto_id,$shoppind_cart_id,$cantidad){

        return inShoppingCart::findProductoID($prodcuto_id,$cantidad,$shoppind_cart_id);
    }

    public static function findProductoID($producto_id,$cantidad,$shopping_cart_id){

      /*  $producto = inShoppingCart:: where('shopping_cart_id', '=', $shopping_cart_id)
            ->where('producto_id','=',$producto_id)
            ->select('id')->get();*/

        $query = DB::table('in_shopping_carts')
            ->where('in_shopping_carts.shopping_cart_id',$shopping_cart_id)
            ->where('in_shopping_carts.producto_id',$producto_id)
            ->select('in_shopping_carts.id')->get();


        /*dd($query);*/

         if($query->count() > 0) {

             inShoppingCart::destroy($producto->id);

             return inShoppingCart::createWithoutProducto($producto_id,$shopping_cart_id,$cantidad);
         }else{

             return inShoppingCart::createWithoutProducto($producto_id,$shopping_cart_id,$cantidad);

         }



    }

    public static function createWithoutProducto($prodcuto_id,$shoppind_cart_id,$cantidad){

        return inShoppingCart::create([
            'shopping_cart_id' => $shoppind_cart_id,
            'producto_id'=>$prodcuto_id,
            'cantidad' => $cantidad
        ]);
    }


}
