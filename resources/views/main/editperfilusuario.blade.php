@extends('layouts.app')
@section('content')

    <section class="form-app">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Mi Perfil</div>
                        <div class="panel-body">

                            {!! Form::open(['url'=>'/miperfil/'.$datos[0]->id,'method' => 'PATCH']) !!}

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group" >
                                        {{Form::text('identification',$datos[0]->identification,['class' => 'form-control','placeholder' => 'Identificación','readonly'])}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        {{Form::text('first_name',$datos[0]->first_name,['class' => 'form-control','placeholder' => 'Nombre'] )}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('last_name',$datos[0]->last_name,['class' => 'form-control','placeholder' => 'Apellido'] )}}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        {{Form::text('phone_number',$datos[0]->phone_number,['class' => 'form-control','placeholder' => 'Telefono'] )}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('mobil_number',$datos[0]->mobil_number,['class' => 'form-control','placeholder' => 'Celular'] )}}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        {{Form::text('address',$datos[0]->address,['class' => 'form-control','placeholder' => 'Direccion'] )}}
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <select name="departamento_id" id="state" class="form-control">
                                        <option value="0" disabled>Seleccione Un Departamento..</option>
                                        @foreach($departamentos as $item)

                                            @if($datos[0]->departamento_id == $item->id)

                                                <option value="{{$item->id}}" selected>{{$item->nombre}}</option>
                                            @else
                                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                                            @endif

                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <input type="hidden" id="id-ciudad" value="{{$datos[0]->municipio_id}}">
                                    <select name="municipio_id" id="city" class="form-control">
                                        <option value="0" disabled selected>Seleccione Una Ciudad..</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                <textarea name="commentary" class="form-control" placeholder="Comentarios">{{trim($datos[0]->commentary)}}</textarea>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group text-right">
                                        <a href="{{url('/')}}" class="regreso-lista">Regresar al Home</a>
                                        <input type="submit" value="Actualizar" class="btn btn-raised btn-success">
                                    </div>
                                </div>
                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script type="text/javascript">
        $(function(){

            var id_depart=$('#state').val();

            if(id_depart != 0){

                ciudades(id_depart);
            }

            $('#state').change(function(){

                var xid = $('#state').val();

                ciudades(xid);
            });



        });

        function ciudades(id){

            $.ajax({
                url:'ciudades/' + id
            }).done(function(res){

                $('#city option').remove();

                var idCiudad = $('#id-ciudad').val();

                var lista = res;
                for(var i = 0; i < lista.length; i++){

                    var xoption='';

                    if(idCiudad == lista[i].id){
                        xoption='<option value="'+ lista[i].id +'" selected>'+ lista[i].nombre_municipio +'</option>';
                    }
                    else
                    {
                        xoption='<option value="'+ lista[i].id +'">'+ lista[i].nombre_municipio +'</option>';
                    }

                    $('#city').append(xoption);
                }
            });
        }
    </script>
@endsection