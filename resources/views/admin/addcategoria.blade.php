@extends('layouts.adm')
@section('content')

    <div class="container white">

        <h1>Nueva Categoria</h1>

        {!! Form::open(['url' => '/categorias', 'method' => 'POST'])!!}

        <div class="form-group">
            {{ Form::text('descripcion','',['class' => 'form-control','placeholder' => 'Descripcion'])}}
        </div>
        <div class="form-group text-right" >
            <a href="{{url('/categorias')}}" class="regreso-lista" >Regresar al listado de categorias</a>
            <input type="submit" class="btn btn-raised btn-success">
        </div>

        {!! Form::close()!!}
    </div>

@endsection