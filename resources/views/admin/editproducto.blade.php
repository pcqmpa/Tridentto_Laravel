@extends('layouts.adm')
@section('content')

    <div class="container white ">
        <h1>Editar Producto</h1>
        {!! Form::open(['url' => '/productos/'.$producto->id,'method' => 'PATCH','files' => true]) !!}

        <div class="form-group">
            {{Form::text('referencia',$producto->referencia,['class' => 'form-control','placeholder' => 'Referencia','readonly'])}}
        </div>
        <div class="form-group">
            {{Form::text('titulo',$producto->titulo,['class' => 'form-control','placeholder' => 'Titulo'])}}
        </div>
        <div class="form-group">
            {{Form::textarea('descripcion',$producto->descripcion,['class' => 'form-control','placeholder' => 'Referencia','rows'=>'5'])}}
        </div>
        <div class="form-group">
            <select id="select111" class="form-control" name="categoria_id">
                <option value="0" disabled>Seleccione una Categoria</option>

                @foreach($categorias as $item)
                    @if($producto->categoria_id == $item->id)
                        <option value="{{$item->id}}" selected >{{$item->descripcion}}</option>
                    @else
                        <option value="{{$item->id}}" >{{$item->descripcion}}</option>
                    @endif

                @endforeach

            </select>
        </div>

        <div class="form-group">
            {{Form::number('precio',$producto->precio,['class' => 'form-control','placeholder' => 'Precio' ])}}
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
            {{Form::number('oferta',$producto->oferta,['class' => 'form-control','placeholder' => 'Valor Ofertado' ])}}
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input name="estado" id="pestado" type="checkbox" value="{{$producto->estado}}"> Estado
                </label>
            </div>
            <p class="help-block">Activar o desactivar un producto</p>
        </div>

        <input type="hidden" value="{{$producto->estado}}" name="estado" id="estado">

        <div class="form-group text-right regreso-lista">
            <a href="{{url('/productos')}}" class="regreso-lista">Regresar a lalista de Productos</a>
            <input type="submit" class="btn btn-raised btn-success" value="Enviar" >
        </div>

        {!! Form::close() !!}
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        $(function(){

            var estado=$('#pestado').val();

            if (estado==1){

                $('#pestado').prop('checked',true);
            }


            $('#pestado').change(function(){

                if($(this).is(':checked')){

                    $('#estado').val("1");
                }else{
                    $('#estado').val("0");
                }

            });

        })
    </script>
@endsection