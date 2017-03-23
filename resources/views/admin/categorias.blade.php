@extends('layouts.adm')
@section('content')
    <div class="container" >
        <h1>Categorias</h1>
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>Id</td>
                <td>Descripcion</td>
                <td>Estado</td>
                <td>Accion</td>
            </tr>
            </thead>
            <tbody>
                @foreach($categorias as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>
                            @if($item->estado==true)
                                Activo
                            @else
                                Inactivo
                            @endif
                        </td>
                        <td>
                            <a href="{{url('/categorias/'.$item->id.'/edit')}}" title="Editar"><i class="fa fa-pencil-square-o fa-1x" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <br/>
        <a href="{{url('/categorias/create')}}" class="btn btn-info">Agregar</a>
    </div>
@endsection