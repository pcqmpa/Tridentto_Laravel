{!! Form::open(['url' => '/in_shopping_carts','method' => 'POST','class'=>'inline-block']) !!}
    <input type="hidden" name="producto_id" value="{{$producto->id}}" >
    <input type="number" name="cantidad" value="1" class="detalle-producto-descricion" style="width: 90px;"><br/>
    <input type="submit" value="Agregar al carrito" class="btn btn-raised btn-info">
{!! Form::close() !!}