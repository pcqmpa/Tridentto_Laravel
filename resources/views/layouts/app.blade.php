<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tridentto') }}</title>

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/freelancer.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/ripples.css" />
    <link rel="stylesheet" href="{{asset('css/simple-sidebar.css')}}">
    <link href="{{asset('css/Style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body id="page-top" class="index">
   <div id="app">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">Tridentto</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll carrito-menu" >
                            <a href="{{url('/carrito')}}">Carrito<i class="fa fa-cart-arrow-down fa-2x" aria-hidden="true"> <span class="badge">{{$shopping_cart->productsSize()}}</span></i></a>
                        </li>
                        <li class="page-scroll">
                            <a href="#portfolio">Productos</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">Acerca de </a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact">Contactanos</a>
                        </li>
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @if(Auth::user()->perfil_id == 1)
                                        <li>
                                            <a href="{{url('/admin')}}">
                                                Administrador
                                            </a>
                                        </li>

                                    @endif

                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>


            @yield('content')


   <!-- Footer -->
   <footer class="text-center">
       <div class="footer-above">
           <div class="container">
               <div class="row">
                   <div class="footer-col col-md-4">
                       <h3>Locacion</h3>
                       <p>Medellin
                           <br>Antioquia</p>
                   </div>
                   <div class="footer-col col-md-4">
                       <h3>Nuestras Redes</h3>
                       <ul class="list-inline">
                           <li>
                               <a href="https://www.facebook.com/people/Tridentto-Denim/100010719362497" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                           </li>
                           <li>
                               <a href="https://www.instagram.com/tridentto.co/" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-instagram" aria-hidden="true"></i></a>
                           </li>
                       </ul>
                       <p><span>3012040419 <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></span></p>

                   </div>
                   <div class="footer-col col-md-4">
                       <h3>Desarrollada por</h3>
                       <p>La pagina de Tridentto es desarrollada por<a href="http://pauloquintero.com">pq</a>.</p>
                   </div>
               </div>
           </div>
       </div>
       <div class="footer-below">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       Copyright &copy; Tridentto {{date('Y')}}
                   </div>
               </div>
           </div>
       </div>
   </footer>

   <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
   <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
       <a class="btn btn-primary" href="#page-top">
           <i class="fa fa-chevron-up"></i>
       </a>
   </div>

   </div>

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{asset('js/contact_me.js')}}"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.js"></script>
    <!-- Theme JavaScript -->
    <script src="{{asset('js/freelancer.min.js')}}"></script>

   <script type="text/javascript">
       $.material.init();
       $(function(){
           $('.carousel').carousel();
       })

   </script>
   @yield('js')
    <!--<script src="{{ asset('js/app.js') }}"></script>-->
</body>
</html>
