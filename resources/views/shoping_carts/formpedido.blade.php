@extends('layouts.app')
@section('content')
    <section class="white">
        <div class="container">
            <div class="panel">
        <h1>Carrito de Compras</h1>

        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Se confirmo la direccion</strong>
            <a href="javascript:void(0)" class="alert-link"></a>.
        </div>

        <table class="table">
            <thead>
            <tr class="encabezado-tabla-carrito" >
                <td>IMAGEN</td>
                <td>NOMBRE DEL PRODUCTO</td>
                <td>CATEGORIA</td>
                <td>CANTIDAD</td>
                <td>PRECIO UNITARIO</td>
                <td>TOTAL</td>
                <td>ACCION</td>
            </tr>
            </thead>
            <tbody>

            @foreach($productos as $item)
                <tr>
                    <td>
                        <img src="{{url('img/Productos/'.$item->imagen)}}" width="70" height="70" style="border: 1px solid #000">
                    </td>
                    <td class="detalle-carrito-row" >{{$item->titulo}}</td>
                    <td class="detalle-carrito">{{$item->categoria}}</td>
                    <td class="detalle-carrito">{{$item->cantidad}}</td>
                    <td class="detalle-carrito">${{number_format($item->precio,0,'.',',')}}</td>
                    <td class="detalle-carrito">${{$item->precio * $item->cantidad}}</td>
                    <td>
                        <a href="#" class="text-center btn"><i class="fa fa-times-circle-o fa-2x" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br/>
        <div class="row" style="width: 98%">
            <div class="col-lm-12 col-sm-12 text-right">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>Total Parcial:</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p><strong>${{number_format($total,0,',','.')}}</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <p>Total:</p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <p><strong>${{number_format($total,0,',','.')}}</strong></p>
                    </div>
                </div>
                <div class="row">

                    <a href="#" class="btn btn-raised btn-warning" style="width: 229px;"
                       onclick="event.preventDefault();
                       document.getElementById('pagar-form').submit();">Pagar
                    </a>

                    <form id="pagar-form" action="https://sandbox.gateway.payulatam.com/ppp-web-gateway/" method="POST" style="display: none;">
                        <input name="merchantId"      type="hidden"  value="508029">
                        <input name="accountId"       type="hidden"  value="512321" >
                        <input name="description"     type="hidden"  value="TestPayU"  >
                        <input name="referenceCode"   type="hidden"  value="{{$referencia}}" >
                        <input name="amount"          type="hidden"  value="{{$total}}">
                        <input name="tax"             type="hidden"  value="0"  >
                        <input name="taxReturnBase"   type="hidden"  value="{{$total}}" >
                        <input name="currency"        type="hidden"  value="COP" >
                        <input name="signature"       type="hidden"  value="{{$keypayu}}">
                        <input name="shippingAddress" type="hidden" value="{{$datos[0]->address}}">
                        <input name="buyerFullName" type="hidden" value="{{$datos[0]->first_name.' '.$datos[0]->last_name}}">
                        <input name="shippingCity" type="hidden" value="Medellin">
                        <input name="shippingCountry" type="hidden" value="CO">
                        <input name="test" type="hidden" value="1">
                        <input name="buyerEmail"      type="hidden"  value="{{Auth::user()->user}}" >
                        <input name="responseUrl"     type="hidden"  value="http://www.tridentto.com" >
                        <input name="confirmationUrl" type="hidden"  value="http://www.test.com/confirmation" >
                        <input name="Submit"        type="submit"  value="Enviar" >
                    </form>
                </div>

            </div>

        </div>
            </div>
        </div>
    </section>
@endsection