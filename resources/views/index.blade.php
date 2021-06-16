@extends('base')
@section('title','Bienvenido')
@section('content')


        <!-- end header -->
        <section class="banner_section">
            <div class="banner-main">
                <img src="{{asset ('static/images/fondo.jpg')}}" />
                <div class="container">
        
                    <div class="text-bg relative">
                        <h1>BIENVENIDO<br><span class="Perfect">Tu musica preferida a un solo clic</span><br>ALL NIGHT
                        </h1>
                        <p>Solicita tus productos de consumo y
                            <br><img src="{{asset ('static/icon/celebracion.ico')}}" alt="icon" /> las canciones que
                            desees escuchar en esta noche! <img src="{{asset ('static/icon/celebracion.ico')}}"
                                alt="icon" />
                        </p>
                        <!-- <a href="#">Download Now</a> -->
                    </div>
        
                </div>
            </div>
        
        </section>

        <!-- Albums -->
        <div id="screenshot" class="Albums">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage"><br><br>
                            <h2>LA VIDA ES UNA FIESTA</h2>
                            <span>Eres tan fuerte como la bebida que mezclas, <br>
                            las mesas sobre las que bailas y los amigos con los que vas de fiesta! </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                        <div class="Albums-box">
                            <figure>
                                <a href="{{asset ('static/images/album1.jpg')}}" class="fancybox" rel="ligthbox">
                                    <img src="{{asset ('static/images/album1.jpg')}}" class="zoom img-fluid " alt="">
                                </a>
                                <span class="hoverle">
                                    <a href="images/album1.jpg" class="fancybox" rel="ligthbox"><img
                                            src="{{asset ('static/images/search.png')}}"></a>
                                </span>
                            </figure>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                        <div class="Albums-box">
                            <figure>
                                <a href="images/album2.jpg" class="fancybox" rel="ligthbox ">
                                    <img src="{{asset ('static/images/album2.jpg')}}" class="zoom img-fluid " alt="">
                                </a>
                                <span class="hoverle">
                                    <a href="images/album2.jpg" class="fancybox" rel="ligthbox"><img
                                            src="{{asset ('static/images/search.png')}}"></a>
                                </span>
                            </figure>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
        <!-- end Albums -->

    @endsection
       

    

    

    

 
