@extends('layouts.adm')
@section('content')


    {!! Form::open(['url' => '/facturacion','method' => 'POST','class' => 'add-to-factura']) !!}

    <div class="container panel">
        <div class="row">
            <div class="col-md-6">
                <h1>FACTURACION</h1>
            </div>
            <div class="col-md-6 text-right">
                <h2>Factura No <span name="consecutivo"  id="txt-consecutivo"></span></h2>
                <input type="hidden" name="consecutivo" id="txt-consecutivo-input">
            </div>
        </div>
        <div class="row">
            <span class="label label-info">Datos del Proveedor</span>
            <div class="col-md-12">
                <div class="row" >
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group label-floating col-md-8">
                            <label class="control-label"  for="txt-documento">Documento No</label>
                            <input  class="form-control"  id="txt-documento" value="" type="text">
                        </div>
                        <div class="form-group col-md-4">
                            <a href="#" id="btn-tercero" class="btn btn-raised btn-info">Buscar</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group col-md-6 col-sm-12">
                            <input type="date" id="txt-fecha" name="dtm_fecha_creacion" placeholder="Fecha" class="form-control" value="{{date('Y-m-d')}}">
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <input type="date" id="txt-fecha-ven" name="dtm_fecha_vencimiento" placeholder="Fecha de Vencimiento" class="form-control" value="{{date('Y-m-d')}}">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="col-md-12">
                        <div class="form-group" >
                            <input type="text" id="txt-nombre-tercero" placeholder="Nombre del cliente" class="form-control">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <span class="label label-info">Digite sus productos</span>
            <div class="col-md-12">
                <div class="form-group col-md-4 col-sm-12">
                    <input type="text" id="txt-codigo" placeholder="Codigo" class="form-control" disabled>
                </div>
                <div class="form-group col-md-1 col-sm-12">
                    <a href="#" onclick="BuscarProducto()"><i class="fa fa-search fa-2x" aria-hidden="true"></i></a>
                </div>

            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6 col-sm-12">
                    <input type="text" id="txt-descripcion" placeholder="Descripción" class="form-control" readonly>
                </div>
                <div class="form-group col-md-1 col-sm-12">
                    <input type="text" id="txt-cantidad" placeholder="Cantidad" class="form-control">
                </div>
                <div class="form-group col-md-1 col-sm-12">
                    <input type="text" id="txt-iva" placeholder="Iva" class="form-control">
                </div>
                <div class="form-group col-md-1 col-sm-12">
                    <input type="text" id="txt-valor-unit" placeholder="Valor Unit." class="form-control">
                </div>
                <div class="form-group col-md-2 col-sm-12">
                    <input type="text" id="txt-total-fila" placeholder="Valor Total" class="form-control" readonly>
                </div>
                <div class="form-group col-md-1 col-sm-12">
                    <a href="#" onclick="AddFila()" class="btn btn-raised btn-danger">Add</a>
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
                <tbody id="td-detalle">

                </tbody>

            </table>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="textArea" class="col-md-2 control-label">Observacion</label>
                            <textarea name="observacion" class="form-control" rows="3" id="textArea"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12" >
                      <ul class="ul-totales-uno">
                          <li class="col-md-6">Subtotal</li>
                          <li class="col-md-6"><span id="txt-subtotal-fac">0</span></li>
                          <li> <input type="hidden" name="subtotal" value="0" id="txt-subtotal"></li>
                      </ul>
                      <ul class="ul-totales-dos">
                            <li class="col-md-6">Flete</li>
                            <li class="col-md-6"><span id="txt-flete">0</span></li>
                            <li>
                                <input type="hidden" name="flete" value="0" id="txt-flete" >
                            </li>
                       </ul>
                        <ul class="ul-totales-dos">
                            <li class="col-md-6">Descuento</li>
                            <li class="col-md-6" id="txt-descuento">0</li>
                        </ul>
                        <ul class="ul-totales-dos">
                            <li class="col-md-6">Impuestos <span>19%</span></li>
                            <li class="col-md-6">
                                <span id="txt-total-iva">0</span>
                                <input type="hidden" name="impuesto" value="0" id="txt-impuesto">
                            </li>
                        </ul>
                        <ul class="ul-totales-uno">
                            <li class="col-md-6">Total</li>
                            <li class="col-md-6"><span id="txt-total-factura">0</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12 text-right">
                    <input id="btn-submit" type="submit"  class="btn btn-raised btn-danger" value="Guardar"/>
                </div>
            </div>
        </div>

    </div>
    {!! Form::close() !!}

@endsection
@section('js')


        <script src="{{asset('js/validCampoFranz.js')}}"></script>
        <script type="text/javascript" >

            $(document).ready(function () {

                $(".add-to-factura").on("submit",function (e) {

                    e.preventDefault();


                    var array_detalle=[];

                    for(var i =0;i < conteo_fila;i++){

                        var fila = i + 1;

                        var registro="Detalle-Factura" + fila.toString();

                        var xfila= JSON.parse(sessionStorage.getItem(registro));

                        if(xfila.LogEliminado==0){

                            array_detalle.push(xfila);
                        }

                    }

                    var datos = JSON.stringify(array_detalle);


                    var form = $(this);
                    var buttom= form.find("[type='submit']");
                    var _token = $('input[name="_token"]').val();
                    var consecutivo=$("#txt-consecutivo").html();
                    var _documento=$("#txt-documento").val();
                    var _fecha =$("#txt-fecha").val();
                    var _fechaven=$("#txt-fecha-ven").val();
                    var _subtotal = $("#txt-subtotal").html();
                    var _impuestos=$("#txt-impuesto").val();

                    $.ajax({
                        url:form.attr("action"),
                        data:{
                            _token:_token,
                            _data:datos,
                            _consecut:consecutivo,
                            documento:_documento},
                            fecha:_fecha,
                            fecha_ven:_fechaven,
                            subtotal:_subtotal,
                            impuestos:_impuestos,
                        type:"POST",
                        beforeSend:function(){
                            buttom.val("Cargando..")
                        },
                        success:function(res){
                            alert(res);
                        },
                        error:function(error){
                            alert(error.error);
                        }
                    });

                });
            })

            var conteo_fila=0;

            $(function(){



                $("#txt-cantidad").validCampoFranz('0123456789');
                $("#txt-descuento").validCampoFranz('0123456789');

                $("#txt-cantidad").keypress(function (e) {
                    if(e.which==13){

                        Operacione();
                        $("#txt-iva").focus();
                    }
                });


                $("#txt-iva").keypress(function (e) {

                    if(e.which==13){
                        $("#txt-valor-unit").focus();
                    }
                })

                $("#txt-codigo").keypress(function (e) {
                    if(e.which==13){

                        BuscarProducto();
                    }
                })



                var url_consecutivo="consecut/FAC";
                $.ajax({
                    url:url_consecutivo,
                    type:"GET"
                }).done(function(res){
                    if(res != undefined){

                        $("#txt-consecutivo").html(res);
                        $("#txt-consecutivo-input").val(res);
                    }
                });


                $("#btn-tercero").click(function(){
                    var documento=$("#txt-documento").val();
                    var url = 'tercero/' + documento;

                    $.ajax({
                       url:url,
                       type:"GET"
                    }).done(function(res){

                        if (res[0] != undefined)
                        {
                            var nombre=res[0].empresa;
                            $("#txt-nombre-tercero").val(nombre);
                            $("#txt-codigo").removeAttr('disabled');
                            $("#txt-codigo").focus();

                        }else{
                            alert("El cliente no existe");
                        }
                    });

                });
            })


            function BuscarProducto () {

                var codigo=$("#txt-codigo").val();

                 var url_consulta='producto/' + codigo;

                $.ajax({
                    url:url_consulta,
                    type:"GET"
                }).done(function(res){

                    if(res[0] != undefined){

                      $("#txt-descripcion").val(res[0].descripcion);
                      $("#txt-valor-unit").val(res[0].precio);
                      $("#txt-iva").val(19);
                      $("#txt-cantidad").focus();

                    }

                });
            }

            function Operacione(){
                var cantidad = $("#txt-cantidad").val();
                var val_unit=$("#txt-valor-unit").val();
                if(cantidad != undefined || val_unit != undefined){

                    var total =parseInt(cantidad) * parseInt(val_unit);

                    $("#txt-total-fila").val(total);

                }
            }

            function AddFila () {

                var codigo=$("#txt-codigo").val();
                var descripcion = $("#txt-descripcion").val();
                var cantidad = $("#txt-cantidad").val();
                var iva = $("#txt-iva").val();
                var valor_unit=$("#txt-valor-unit").val();
                var total =$("#txt-total-fila").val();

                var xfila=new cDetalle();

                xfila.Codigo=codigo;
                xfila.Descripcion=descripcion;
                xfila.Cantidad=cantidad;
                xfila.Iva=iva;
                xfila.ValorUnit=valor_unit;
                xfila.ValorTotal=total;
                xfila.LogEliminado=0;

                conteo_fila++;

                var identificador="Detalle-Factura" + conteo_fila.toString();

                sessionStorage.setItem(identificador,JSON.stringify(xfila));

                var dt = "<tr id=' "+ xfila.Codigo +"'>";
                dt += "<td>"+ xfila.Codigo +"</td>";
                dt += "<td>"+ xfila.Descripcion+"</td>";
                dt += "<td>"+ xfila.Cantidad +"</td>";
                dt += "<td>"+ xfila.Iva +"</td>";
                dt += "<td>"+ xfila.ValorUnit +"</td>";
                dt += "<td>"+ xfila.ValorTotal +"</td>";
                dt += "<td>";
                dt += "<a href='#'>Eliminar</a>";
                dt += "</td>";
                dt += "</tr>";

                $("#td-detalle").prepend(dt);

                Totales();

                LimpiarFila();

            }


            function LimpiarFila() {

                $("#txt-codigo").val("").focus();

                $("#txt-descripcion").val("");
                $("#txt-cantidad").val("");
                $("#txt-iva").val("");
                $("#txt-valor-unit").val("0");
                $("#txt-total-fila").val("0");

            }

            function Totales(){

                var valor_subtotal=0;
                var valor_total=0;
                var valor_iva=0;

                for(var i = 0; i < conteo_fila;i++){



                    var fila = i + 1;

                    var registro = "Detalle-Factura"+fila.toString();

                    var xfila=JSON.parse(sessionStorage.getItem(registro));

                    if(xfila.LogEliminado==0){

                        valor_iva=valor_iva + ((parseInt(xfila.ValorUnit) * parseInt(xfila.Cantidad)) * parseInt(xfila.Iva)) / 100;
                        valor_subtotal=valor_subtotal + parseInt(xfila.ValorTotal);
                    }


                }



                $("#txt-subtotal-fac").html(Formato_Moneda(valor_subtotal));

                $("#txt-subtotal").val(valor_subtotal);

                $("#txt-total-iva").html(Formato_Moneda( valor_iva));
                $("#txt-impuesto").val(valor_iva);

                var descuento = $("#txt-descuento").val();
                valor_total=(valor_subtotal - parseInt(descuento)) + valor_iva;

                sessionStorage.setItem('subtotal',valor_subtotal);
                sessionStorage.setItem('iva',valor_iva);
                sessionStorage.setItem('descuento',descuento);
                sessionStorage.setItem('total-factura',valor_total);

                $("#txt-total-factura").html(Formato_Moneda(valor_total));

            }

            function Guardarfactura () {
                var array_detalle=[];

                for(var i =0;i < conteo_fila;i++){

                    var fila = i + 1;

                    var registro="Detalle-Factura" + fila.toString();

                    var xfila= JSON.parse(sessionStorage.getItem(registro));

                    if(xfila.LogEliminado==0){

                        array_detalle.push(xfila);
                    }

                }

                var url_guardar='addfactura';
                var datos = JSON.stringify(array_detalle);

                $.ajax({
                    url:url_guardar,
                    type:"POST"
                }).done(function(res){
                        alert(res);
                }).fail(function(error){
                    alert(error.error);
                });

            }

            class cDetalle{

                constructor(Codigo,Descripcion,Cantidad,Iva,ValorUnit,ValorTotal,LogEliminado){
                    this.Codigo=Codigo;
                    this.Descripcion=Descripcion;
                    this.Cantidad=Cantidad;
                    this.Iva=Iva;
                    this.ValorUnit=ValorUnit;
                    this.ValorTotal=ValorTotal;
                    this.LogEliminado=LogEliminado;
                };

            }


        </script>
@endsection