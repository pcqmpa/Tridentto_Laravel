<?php

namespace App\Http\Controllers;

use App\inShoppingCart;
use Illuminate\Http\Request;
use App\ShoppingCart;

class InShoppingCartsController extends Controller
{

    public function store(Request $request)
    {
        $shopping_cart_id=\Session::get('shopping_cart_id');
        $shopping_cart=ShoppingCart::findOrCreateBySessionID($shopping_cart_id);

        $response=inShoppingCart::findOrCreateProdcuto($request->producto_id,$shopping_cart_id,$request->cantidad);

       /* $response=inShoppingCart::create([
           'shopping_cart_id' => $shopping_cart->id,
            'producto_id'=>$request->producto_id,
            'cantidad' => $request->cantidad
        ]);*/

        if($response){
            return redirect('/carrito');
        }else{
            return back();
        }
    }

    public function update(Request $request,$id){



    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
