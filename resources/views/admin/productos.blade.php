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
                    <td>{{$item->Categoria}}</td>
                    <td>
                        @if($item->estado == 1)
                            Activo
                        @else
                            Inactivo
                        @endif
                    </td>
                    <td>Accion</td>
                </tr>

            @endforeach

            </tbody>
        </table>

        <br/>
        <a href="{{url('/productos/create')}}" class="btn btn-raised btn-info" >Agregar</a>
    </div>

@endsection