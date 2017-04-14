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

                {!! Form::open(['url' => '/consecutivos/'.$consecutivo->id,'method' => 'PATCH']) !!}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{Form::text('tipodcto',$consecutivo->tipodcto,['class' => 'form-control','placeholder' => 'Tipo de Documento','readonly'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {{Form::text('descripcion',$consecutivo->descripcion,['class' => 'form-control','placeholder' => 'Descripción'])}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{Form::text('consecutivo',$consecutivo->consecutivo,['class' => 'form-control','placeholder' => 'Consecutivo No'])}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>
                                <input type="hidden" value="{{$consecutivo->logestado}}" id="txt-estado">
                                <input type="checkbox"> Estado Activo
                            </label>
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
@section('js')

@endsection