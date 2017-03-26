@extends('layouts.app')
@section('content')

    <section class="form-app">
        <div class="container">
            <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Mi Perfil</div>
            <div class="panel-body">
                {!! Form::open(['url'=>'/miperfil','method' => 'POST']) !!}
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                {{Form::text('first_name',Auth::user()->name,['class' => 'form-control','placeholder' => 'Nombre'] )}}
                            </div>
                            <div class="form-group">
                                {{Form::text('last_name','',['class' => 'form-control','placeholder' => 'Apellido'] )}}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                {{Form::text('phone_number','',['class' => 'form-control','placeholder' => 'Telefono'] )}}
                            </div>
                            <div class="form-group">
                                {{Form::text('mobil_number','',['class' => 'form-control','placeholder' => 'Celular'] )}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                {{Form::text('address','',['class' => 'form-control','placeholder' => 'Direccion'] )}}
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <select name="state" class="form-control">
                                <option value="0" disabled selected>Seleccione Un Departamento..</option>
                                @foreach($departamentos as $item)
                                    <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="state" class="form-control">
                                <option value="0" disabled selected>Seleccione Una Ciudad..</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group text-right">
                                <a href="{{url('/')}}" class="regreso-lista">Regresar al Home</a>
                                <input type="submit" value="Actualizar" class="btn btn-raised btn-success">
                            </div>
                        </div>
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
        </div>
            </div>
        </div>
    </section>

@endsection