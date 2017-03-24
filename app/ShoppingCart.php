<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ShoppingCart extends Model
{
    protected $fillable=['status'];


    public function inShoppingCarts(){
        return $this->hasMany('App\InShoppingCart');
    }

    public function productos(){

        $query = DB::table('productos')
            ->join('in_shopping_carts', 'productos.id', '=', 'in_shopping_carts.producto_id')
            ->join('categorias','productos.categoria_id','=','categorias.id')
            ->where('in_shopping_carts.shopping_cart_id',$this->id)
            ->select('productos.*','in_shopping_carts.shopping_cart_id','in_shopping_carts.cantidad','categorias.descripcion as categoria',
                DB::raw('(productos.precio * in_shopping_carts.cantidad) as total'));



       return $query->get();
        /*
        return $this->belongsToMany('App\Producto','in_shopping_carts');*/
    }

    public function productsSize(){

        return $this->productos()->count();

    }

    public function total(){

       return $this->productos()->sum('total');


    }

    public static function findOrCreateBySessionID($shopping_cart_id){
        if($shopping_cart_id){
            return ShoppingCart::findBySession($shopping_cart_id);
        }else{
            return ShoppingCart::createWithoutSession();
        }
    }

    public static function findBySession($shopping_cart_id){
        return ShoppingCart::find($shopping_cart_id);
    }

    public static function createWithoutSession(){

        return ShoppingCart::create([
           'status' => 'Incompleta'
        ]);
    }
}
