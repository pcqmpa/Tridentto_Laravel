@extends('layouts.adm')
@section('content')
    <div class="container panel">
        <div class="row">
            <div class="col-md-12">
                <h1>Consecutivos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Tipo de Documento</td>
                            <td>descripcion</td>
                            <td>Consecutivo</td>
                            <td>Estado</td>
                            <td>Acción</td>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($consecutivos as $item)
                            <tr>
                                <td>{{$item->tipodcto}}</td>
                                <td>{{$item->descripcion}}</td>
                                <td>{{$item->consecutivo}}</td>
                                <td>{{$item->logestado}}</td>
                                <td>
                                    <a href="{{url('/consecutivos/'.$item->id.'/edit')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12" style="margin-left: 15px">
                    <a href="{{url('/consecutivos/create')}}" class="btn btn-raised btn-info">Agregar</a>
                </div>
            </div>
        </div>
    </div>
@endsection