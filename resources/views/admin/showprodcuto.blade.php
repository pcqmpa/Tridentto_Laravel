@extends('layouts.app')
@section('content')

    <section class="container white">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>{{$producto->titulo}}</small>
                </h1>
            </div>
        </div>

        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="{{url('img/Productos/'.$producto->imagen)}}" alt="">
            </div>

            <div class="col-md-4">
                <div class="row">
                    <h3>Description</h3>
                    <p>{{$producto->descripcion}}</p>
                    <h3>Detalle</h3>
                    <ul class="detalle-producto" >
                        <li class="detalle-producto-titulo">Precio</li>
                        <li class="detalle-producto-descricion">${{number_format($producto->precio,0,'.',',')}}</li>
                        <li class="detalle-producto-titulo" >Cantidad</li>
                        <li class="detalle-producto-descricion">
                            <input type="number" value="1" name="cantidad">
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <a href="#" class="btn btn-raised btn-info">Agregar al Carrito</a><br/>
                    <a href="{{url('/')}}">Regresar a la Pagina</a>
                </div>

            </div>

        </div>

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Productos Relacionados</h3>
            </div>


            @foreach($listado as $item)
                <div class="col-sm-3 col-xs-6">
                    <a href="{{url('/productos/'.$item->id)}}">
                        <img class="img-responsive portfolio-item" src="{{url('img/Productos/'.$item->imagen)}}" alt="">
                    </a>
                </div>
            @endforeach


        </div>

    </section>

@endsection