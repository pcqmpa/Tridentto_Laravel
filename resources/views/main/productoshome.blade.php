<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Productos</h2>
                <hr class="star-primary">
            </div>
        </div>


        <div class="row">


         @foreach($productos as $item)

                <div class="col-sm-4 portfolio-item">
                    <div class="card">
                        <a href="{{url('/productos/'.$item->id)}}"><img class="card-img-top" src="{{url('img/Productos/'.$item->imagen)}}" alt="{{$item->imagen}}"></a>
                        <div class="card-block text-center">
                            <h2 class="card-title" style="color:#ff8100">$ {{number_format( $item->precio, 0, '.', ',' )}}</h2>
                            <br/>
                            <p class="card-text">Ref {{$item->referencia}}</p>
                            <p class="card-text">{{$item->titulo}}</p>
                            <a class="btn btn-raised btn-warning">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

         @endforeach

       </div>
    </div>
</section>