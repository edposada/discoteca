<!DOCTYPE html>
<html lang="es">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>PartyTime - @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset ('static/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset ('static/css/style.css')}}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{asset ('static/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset ('static/images/partytime.png')}}" type="image/png" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset ('static/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout base">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset ('static/images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <div class="container container-base">
        <header>
            <!-- header inner -->
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="{{ url ('/')}}"><img src="{{asset ('static/images/partytime.png')}}"
                                                alt="logo" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active"> <a href="{{ url ('/')}}">Menú</a> </li>
                                            <li> <a href="{{ url ('/productos')}}">Productos</a> </li>
                                            <li> <a href="{{ url ('/')}}"> PENDIENTE</a> </li>
                                            <li> <a href="{{ url ('/')}}">PENDIENTE</a> </li>                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                            <form class="search">
                                <input class="form-control" type="text" placeholder="Buscar">
                                <button><img src="{{asset ('static/images/search_icon.png')}}"></button>
                            </form>
                            <br>
                            <a href="{{route('login')}}">INGRESAR</a> <a href="{{route('register')}}">REGISTRARSE</a>
                        </div>
                        
                    </div>
                </div>
                <!-- end header inner -->
        </header>
        <!-- end header -->

        @yield('content')
        

        <!--  footer -->
        <footer id="footer_with_contact">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 width">
                            <div class="address">
                                <h3>Contactanos</h3>
                                <ul class="locarion_icon">
                                    <li><img src="{{asset ('static/icon/1.png')}}" alt="icon" />Medellin , Colombia
                                    </li>
                                    <li><img src="{{asset ('static/icon/2.png')}}" alt="icon" />Telefono : ( PENDIENTE )</li>
                                    <li><img src="{{asset ('static/icon/3.png')}}" alt="icon" />Correo : ( PENDIENTE )</li>

                                </ul>

                                <ul class="contant_icon">
                                    <li><img src="{{asset ('static/icon/fb.png')}}" alt="icon" /></li>
                                    <li><img src="{{asset ('static/icon/tw.png')}}" alt="icon" /></li>
                                    <li><img src="{{asset ('static/icon/lin(2).png')}}" alt="icon" /></li>
                                    <li><img src="{{asset ('static/icon/instagram.png')}}" alt="icon" /></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 width">
                            <div class="address">
                                <h3>Te contactaremos</h3>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input class="contactus" placeholder="Nombre" type="text" name="Name">
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="contactus" placeholder="Telefono" type="text" name="Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="contactus" placeholder="Correo" type="text" name="Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea class="textarea" placeholder="Mensaje" type="text"
                                                name="Message"></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="send">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                            <div class="address">
                                <h3>Tu Musica </h3>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                        <figure><img src="{{asset ('static/images/music1.jpg')}}" /></figure>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                        <figure><img src="{{asset ('static/images/music2.jpg')}}" /></figure>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                        <figure><img src="{{asset ('static/images/music3.jpg')}}" /></figure>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                        <figure><img src="{{asset ('static/images/music4.jpg')}}" /></figure>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        
        <!-- Javascript files-->
        <script src="{{asset ('static/js/jquery.min.js')}}"></script>
        <script src="{{asset ('static/js/popper.min.js')}}"></script>
        <script src="{{asset ('static/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset ('static/js/jquery-3.0.0.min.js')}}"></script>
        <script src="{{asset ('static/js/plugin.js')}}"></script>
        <!-- sidebar -->
        <script src="{{asset ('static/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset ('static/js/custom.js')}}"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function () {

                    $(this).addClass('transition');
                }, function () {

                    $(this).removeClass('transition');
                });
            });
        </script>
</body>

</html>