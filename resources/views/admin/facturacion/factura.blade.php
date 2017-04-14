@extends('layouts.adm')
@section('content')

    <div class="container panel">
        <div class="row">
            <div class="col-md-6">
                <h1>FACTURACION</h1>
            </div>
            <div class="col-md-6 text-right">
                <h2>Factura No <span style="color:#0000ed;">0001</span></h2>
            </div>
        </div>
        <div class="row">
            <span class="label label-info">Datos del Proveedor</span>
            <div class="col-md-12">
                <div class="row" >
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group label-floating col-md-8">
                            <label class="control-label" for="focusedInput1">Documento No</label>
                            <input class="form-control" id="focusedInput1" type="text">

                        </div>
                        <div class="form-group col-md-4">
                            <a href="javascript:void(0)" class="btn btn-raised btn-info">Buscar</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group col-md-6 col-sm-12">
                            <input type="date" placeholder="Fecha" class="form-control">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <input type="date" placeholder="Fecha de Vencimiento" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group" >
                            <input type="text" readonly placeholder="Nombre del cliente" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <span class="label label-info">Digite sus productos</span>
            <div class="col-md-12">
                <div class="form-group col-md-2 col-sm-12">
                    <input type="text" placeholder="Codigo" class="form-control">
                </div>
                <div class="form-group col-md-1 col-sm-12">
                    <a href="#"><i class="fa fa-search fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="form-group col-md-2 col-sm-12">
                    <input type="text" placeholder="Descripción" class="form-control" readonly>
                </div>
                <div class="form-group col-md-1 col-sm-12">
                    <input type="number" placeholder="Cantidad" class="form-control">
                </div>
                <div class="form-group col-md-1 col-sm-12">
                    <input type="number" placeholder="Iva" class="form-control">
                </div>
                <div class="form-group col-md-2 col-sm-12">
                    <input type="text" placeholder="Valor Unit." class="form-control">
                </div>
                <div class="form-group col-md-2 col-sm-12">
                    <input type="number" placeholder="Valor Total" class="form-control">
                </div>
                <div class="form-group col-md-1 col-sm-12">
                    <a href="javascript:void(0)" class="btn btn-raised btn-danger">Add</a>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Descripción</td>
                        <td>Cantidad</td>
                        <td>Iva</td>
                        <td>Valor Unit.</td>
                        <td>Valor Total</td>
                        <td>Accion</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>010101</td>
                        <td>Refef Blusa Blanca Estampada</td>
                        <td>1</td>
                        <td>19</td>
                        <td>$65.000</td>
                        <td>$65.000</td>
                        <td>
                            <a href="#">Eliminar</a>
                        </td>
                    </tr>
                </tbody>

            </table>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="textArea" class="col-md-2 control-label">Observacion</label>
                            <textarea class="form-control" rows="3" id="textArea"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12" >
                      <ul class="ul-totales-uno">
                          <li class="col-md-6">Subtotal</li>
                          <li class="col-md-6">$250.000</li>
                      </ul>
                      <ul class="ul-totales-dos">
                            <li class="col-md-6">Flete</li>
                            <li class="col-md-6">$9.500</li>
                       </ul>
                        <ul class="ul-totales-dos">
                            <li class="col-md-6">Descuento</li>
                            <li class="col-md-6">
                                <div class="form-group">
                                    <input type="text" value="$0" class="form-control text-right">
                                </div>
                            </li>
                        </ul>
                        <ul class="ul-totales-dos">
                            <li class="col-md-6">Impuestos <span>19%</span></li>
                            <li class="col-md-6">$16.000</li>
                        </ul>
                        <ul class="ul-totales-uno">
                            <li class="col-md-6">Total</li>
                            <li class="col-md-6">$266.000</li>
                        </ul>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-raised btn-danger">Guardar</button>
                </div>
            </div>
        </div>

    </div>

@endsection