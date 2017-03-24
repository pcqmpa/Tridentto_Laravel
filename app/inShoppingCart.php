<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inShoppingCart extends Model
{
    protected $fillable=['shopping_cart_id','producto_id','cantidad'];



    public static function findOrCreateProdcuto($prodcuto_id,$shoppind_cart_id,$cantidad){
        if(!inShoppingCart::findProductoID($prodcuto_id,$cantidad,$shoppind_cart_id)){

            inShoppingCart::createWithoutProducto($prodcuto_id,$shoppind_cart_id,$cantidad);

        }else{
            return true;
        }
    }

    public static function findProductoID($producto_id,$cantidad,$shopping_cart_id){

        $producto = inShoppingCart:: where('shopping_cart_id', '=', $shopping_cart_id)
            ->where('producto_id','=',$producto_id)->get();
         if($producto != null){

             return inShoppingCart::update([
                'cantidad'=> $cantidad
             ]);

        }else{

            return false;
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
