@extends('layouts.adm')
@section('content')

    <div class="container white">
        <h1>Editar Categoria</h1>
        {!! Form::open(['url'=> '/categorias/'. $categoria->id,'method' => 'PATCH','class' => 'form-personal' ])!!}

        <div class="form-group">
            {{ Form::text('descripcion',$categoria->descripcion,['class' => 'form-control','placeholder' => 'Descripcion'])}}
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input name="estado" id="estado" type="checkbox" value="{{$categoria->estado}}"> Estado
                </label>
            </div>
            <p class="help-block">Activar o desactivar la categoria</p>
        </div>
        <div class="form-group text-right">
            <a href="{{url('/categorias')}}" class="regreso-lista">Regresar a la lista de Catefgorias</a>
            <input type="submit" class="btn btn-raised btn-success">
        </div>

        {!! Form::close()!!}

    </div>

@endsection
@section('js')
    <script type="text/javascript">
        $(function(){

            var estado=$('#estado').val();

            if (estado==1){

                $('#estado').prop('checked',true);
            }


            $('#estado').change(function(){

                if($(this).is(':checked')){

                   $('#estado').val("1");
                }else{
                    $('#estado').val("0");
                }

            });

        })
    </script>
@endsection