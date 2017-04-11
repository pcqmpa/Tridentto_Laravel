@extends('layouts.adm')
@section('content')

    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Ingreso de Tercero</h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['url' => '/terceros','method' => 'POST']) !!}
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <select name="tipo_documento_id" class="form-control">
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
                            <select name="departamento_id" class="form-control">
                                <option class="">Seleccione un Departamento</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12" >
                        <div class="form-group" >
                            <select name="departamento_id" class="form-control">
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