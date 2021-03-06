@extends('layouts.adm')
@section('content')

    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Ingreso de Tercero</h3>
            </div>
            <div class="panel-body">

                @include('admin.partials.messages')

                {!! Form::open(['url' => '/terceros','method' => 'POST']) !!}
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <select name="tipo_ducumento_id" class="form-control">
                                <option value="0" selected disabled>Tipo de Documento</option>
                                <option value="1">Cedula de Ciudadania</option>
                                <option value="2">Nit</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            {{Form::text('identificacion','',['class' => 'form-control','placeholder' => 'Identificacion'])}}
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{Form::text('empresa','',['class' => 'form-control','placeholder' => 'Empresa'])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('nombre','',['class' => 'form-control','placeholder' => 'Nombres'])}}
                        </div>
                       <div class="form-group">
                           {{Form::text('apellido','',['class' => 'form-control','placeholder' => 'Apellidos'])}}
                       </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            {{Form::text('telefono','',['class' => 'form-control','placeholder' => 'Telefono'])}}
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            {{Form::text('celular','',['class' => 'form-control','placeholder' => 'Celular'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{Form::text('direccion','',['class' => 'form-control','placeholder' => 'Dirección'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12" >
                        <div class="form-group" >
                            <select name="departamento_id" id="state" class="form-control">
                                <option class="">Seleccione un Departamento</option>
                                @foreach($departamentos as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12" >
                        <div class="form-group" >
                            <select name="municipio_id" id="city" class="form-control">
                                <option class="">Seleccione un Municipio</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{Form::text('email','',['class' => 'form-control','placeholder' => 'Email'])}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-right">
                        <a href="#">Regresar al Listado</a>
                        <input type="submit" value="Agregar" class="btn btn-raised btn-info">
                    </div>
                </div>


                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection
@section('js')
    <script type="text/javascript">
        $(function(){


            $('#state').change(function(){

                var xid = $('#state').val();

                ciudades(xid);
            });



        });

        function ciudades(id){

            $.ajax({
                url:'../ciudades/' + id
            }).done(function(res){

                $('#city option').remove();

                var idCiudad = $('#id-ciudad').val();

                var lista = res;
                for(var i = 0; i < lista.length; i++){

                    var  xoption='<option value="'+ lista[i].id +'">'+ lista[i].nombre_municipio +'</option>';
                    $('#city').append(xoption);

                }
            });
        }
    </script>
@endsection