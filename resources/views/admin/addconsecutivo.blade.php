@extends('layouts.adm')
@section('content')
    <div class="container panel">
        <div class="row">
            <div class="col-md-12">
                <h1>Ingresar Consecutivo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                @include('admin.partials.messages')

                {!! Form::open(['url' => '/consecutivos','method' => 'POST']) !!}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{Form::text('tipodcto','',['class' => 'form-control','placeholder' => 'Tipo de Documento'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{Form::text('descripcion','',['class' => 'form-control','placeholder' => 'Descripción'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{Form::text('consecutivo','',['class' => 'form-control','placeholder' => 'Consecutivo No'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <input type="submit" class="btn btn-raised btn-success" value="Guardar">
                        </div>
                    </div>
                </div>

                {!! Form::close()!!}
            </div>
        </div>
    </div>
@endsection