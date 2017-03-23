@extends('layouts.adm')
@section('content')

    <div class="container white ">
        <h1>Nuevo Producto</h1>
        {!! Form::open(['url' => '/productos','method' => 'POST','files' => true]) !!}

        <div class="form-group">
            {{Form::text('referencia','',['class' => 'form-control','placeholder' => 'Referencia'])}}
        </div>
        <div class="form-group">
            {{Form::text('titulo','',['class' => 'form-control','placeholder' => 'Titulo'])}}
        </div>
        <div class="form-group">
            {{Form::textarea('descripcion','',['class' => 'form-control','placeholder' => 'Referencia','rows'=>'5'])}}
        </div>
        <div class="form-group">
            <select id="select111" class="form-control" name="categoria_id">
                <option value="0" disabled selected>Seleccione una Categoria</option>
               @foreach($categorias as $item)
                    <option value="{{$item->id}}" >{{$item->descripcion}}</option>
               @endforeach
            </select>
        </div>

        <div class="form-group">
            {{Form::number('precio','',['class' => 'form-control','placeholder' => 'Precio' ])}}
        </div>

            <div class="form-group">
                <input type="file" name="file" id="inputFile4" multiple="">
                <div class="input-group">
                    <input type="text" readonly="" class="form-control" placeholder="Imagen del Producto">
                    <span class="input-group-btn input-group-sm">
                        <button type="button" class="btn btn-fab btn-fab-mini">
                            <i class="fa fa-paperclip" aria-hidden="true"></i>
                        </button>
                     </span>
                </div>
            </div>

            <div class="form-group">
                {{Form::number('oferta','',['class' => 'form-control','placeholder' => 'Valor Ofertado' ])}}
            </div>
            <div class="form-group text-right regreso-lista">
                <a href="{{url('/productos')}}" class="regreso-lista">Regresar a lalista de Productos</a>
                <input type="submit" class="btn btn-raised btn-success" value="Enviar" >
            </div>

        {!! Form::close() !!}
    </div>

@endsection