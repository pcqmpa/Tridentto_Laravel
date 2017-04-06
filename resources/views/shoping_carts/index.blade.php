@extends('layouts.app')
@section('content')
    <section class="container white"  >

        <h1>Carrito de Compras</h1>

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
            <div class="col-lg-6 col-sm-12">
                <h2>Codigo de Cupon</h2>
                <input type="text" class="form-control">
                <input type="button" value="Aplica Cupon" class="btn btn-raised btn-info">
            </div>
            <div class="col-lg-6 col-sm-12 text-right">
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
                    <a href="{{url('/direccion')}}" class="btn btn-raised btn-warning" style="width: 229px;">Realizar Pedido</a><br/>
                    <a href="#" class="btn btn-default">Continue comprando</a>
                </div>

            </div>

        </div>

    </section>
@endsection
