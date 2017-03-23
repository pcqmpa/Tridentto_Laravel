@extends('layouts.adm')
@section('content')

    <div class="container white ">
        <h1>Nuevo Producto</h1>
        {!! Form::open(['url' => '/productos','method' => 'POST']) !!}

        <div class="form-group">
            {{Form::text('referencia','',['class' => 'form-control','placeholder' => 'Referencia'])}}
        </div>
        <div class="form-group">
            {{Form::text('titulo','',['class' => 'form-control','placeholder' => 'Titulo'])}}
        </div>
        <div class="form-group">
            {{Form::textarea('descripcion','',['class' => 'form-control','placeholder' => 'Referencia'])}}
        </div>
        <div class="form-group">
            <select id="select111" class="form-control" name="categoria">
                <option value="0" disabled selected>Seleccione una Categoria</option>
               @foreach($categorias as $item)
                    <option value="{{$item->id}}" >{{$item->descripcion}}</option>
               @endforeach
            </select>
        </div>

        <div class="form-group label-floating">
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <label class="control-label" for="addon3a">Floating label w/2 addons</label>
                <input type="text" id="addon3a" class="form-control" name="precio">
                <p class="help-block">The label is inside the <code>input-group</code> so that it is positioned properly as a placeholder.</p>
            </div>
        </div>

        <div class="form-group">
            <input type="file" id="inputFile4" multiple="">
            <div class="input-group">
                <input type="text" readonly="" class="form-control" placeholder="Imagen del Producto">
                <span class="input-group-btn input-group-sm">
                    <button type="button" class="btn btn-fab btn-fab-mini">
                        <i class="material-icons">attach_file</i>
                    </button>
                 </span>
            </div>
        </div>

        <div class="form-group text-right regreso-lista">
            <a href="{{url('/productos')}}">Regresar a lalista de Productos</a>
            <input type="submit" class="btn btn-raised btn-success" value="Enviar" >
        </div>

        {!! Form::close() !!}
    </div>

@endsection