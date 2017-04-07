@extends('layouts.app')
@section('content')

    <section style="margin-top: 100px">
        <div class="container">

            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Dirección de envio</h3>
                </div>
                <div class="panel-body">
                   <h4>{{$datos[0]->address}}</h4>
                </div>
                <div class="panel-footer">
                    <p>
                        <a class="btn btn-raised btn-warning" href="{{url('\miperfil')}}">Modificar</a>
                        <a class="btn btn-raised btn-primary" href="{{url('\pagar')}}">Confirmar</a>
                    </p>
                </div>

            </div>

        </div>

    </section>

@endsection