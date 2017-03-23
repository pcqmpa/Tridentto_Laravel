@extends('layouts.app')
@section('content')
    <!-- Header -->
    <header>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{url('img/portada/1.jpg')}}" alt="Imagen Modelo1">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="{{url('img/portada/2.jpg')}}" alt="Imagen Modelo 2">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="{{url('img/portada/8.jpg')}}" alt="Imagen Modelo 2">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
            <!--<img src="img/8.jpg" style="max-width: 100%; max-height: 50% ">-->

            <!-- <div class="row">-->
               <!-- <div class="col-lg-12">-->
                   <!-- <img class="img-responsive" src="img/portada.jpeg" alt="" style="max-width: 100%">-->
                   <!-- <div class="intro-text">
                        <h1 class="name">Start Bootstrap</h1>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>-->
                <!--</div>-->
            <!--</div>-->
        </div>
    </header>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Productos</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <div class="card">
                        <img class="card-img-top" src="img/Productos/Camiseta1.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Camiseta Estampada</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 portfolio-item">
                    <div class="card">
                        <img class="card-img-top" src="img/Productos/Camiseta1.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Camiseta Estampada</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!--<a href="#" class="btn btn-raised btn-warning"><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i> <span style="margin-left: 5px">Agregar al carrito</span></a>-->
                            <a href="javascript:void(0)" class="btn btn-warning btn-fab"><i class="fa fa-cart-plus" aria-hidden="true" style="margin-top: 13px"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="card">
                        <img class="card-img-top" src="img/Productos/Camiseta1.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Camiseta Estampada</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <div class="card">
                        <img class="card-img-top" src="img/Productos/Camiseta1.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Camiseta Estampada</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a class="btn btn-primary">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Acerca de Tridentto</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4">
                    <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
                </div>
          <!--      <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>-->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contactanos</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Telefono Celular</label>
                                <input type="tel" class="form-control" placeholder="Telefono o Celular" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Mensaje</label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-info btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection