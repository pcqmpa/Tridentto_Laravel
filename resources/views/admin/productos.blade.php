@extends('layouts.adm')
@section('content')

    <div class="container">
        <h1>Productos</h1>
        <table class="table table-bordered" >
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Referencia</td>
                    <td>Titulo</td>
                    <td>Descripcion</td>
                    <td>Categoria</td>
                    <td>Precio</td>
                    <td>Estado</td>
                    <td>Accion</td>
                <tr/>
            </thead>
            <tbody>

            @foreach($productos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->referencia}}</td>
                    <td>{{$item->titulo}}</td>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->categoria->descripcion}}</td>
                    <td>{{$item->precio}}</td>
                    <td>
                        @if($item->estado == 1)
                            Activo
                        @else
                            Inactivo
                        @endif
                    </td>
                    <td>
                        <a href="{{url('/productos/'.$item->id.'/edit')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>

        <br/>
        <a href="{{url('/productos/create')}}" class="btn btn-raised btn-info" >Agregar</a>
    </div>

@endsection