@extends('layouts.adm')
@section('content')

    <div class="container panel" style="padding: 35px;" >

        <div class="row">
            <h1>Terceros</h1>
        </div>
        <div class="row" >
            <table class="table table-striped ">
                <thead>
                <tr>
                    <td>Id</td>
                    <td>Documento</td>
                    <td>Empresa</td>
                    <td>Nombre</td>
                    <td>Apellido</td>
                    <td>Telefono</td>
                    <td>Celular</td>
                    <td>Email</td>
                    <td>Accion</td>
                </tr>
                </thead>
                <tbody>

                    @foreach($terceros as $item)

                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->identificacion}}</td>
                            <td>{{$item->empresa}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->apellido}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>{{$item->celular}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <a href="{{url('/terceros/'.$item->id.'/edit')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
            {!! $terceros->render() !!}
        </div>
        <div class="row" >
            <a href="{{url('/terceros/create')}}" class="btn btn-raised btn-info" >Agregar</a>
        </div>

    </div>

@endsection