<?php

namespace App\Http\Controllers;

use App\factura_encabezado;
use App\tercero;
use App\consecutivo;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.facturacion.factura');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*Consultamos el consecutivo*/

        $consecutivo=consecutivo::where('tipodcto','=','FAC')->get();

        $consecut= intval($consecutivo[0]->consecutivo)  + 1 ;

        $documento=$request->documento;


        $terecero= tercero::where('identificacion','=',$documento)->get();

        $_encabezado= new factura_encabezado();


        $_encabezado->num_factura=intval($consecut);
        $_encabezado->dtm_fecha_creacion=$request->fecha;
        $_encabezado->dtm_fecha_vencimineto=$request->fecha_ven;
        $_encabezado->tercero_is=intval($terecero->id);
        $_encabezado->cur_bruto=$request->subtotal;
        $_encabezado->cur_iva=$request->impuesto;
        $_encabezado->observacion=$request->observacion;

        return $_encabezado;

        /*if($_encabezado->save()){
            return $_encabezado->id;
        }else{
            return "Error";
        }*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

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
