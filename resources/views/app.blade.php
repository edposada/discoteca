<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!-- Internet Explorer -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Contenido adaptable -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PartyTime - @yield('title')</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="{{asset('images/fav-icon/icon.png')}}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

		<!-- Vendor Styles -->

		<link rel="stylesheet" href="{{asset('vendor/bootstrap/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/Camera-master/css/camera.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.theme.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/WOW-master/css/libs/animate.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/fancybox/dist/jquery.fancybox.min.css')}}">


		<!-- Style -->
		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="fonts/icon/font/font/flaticon.css">
		<link rel="stylesheet" href="fonts/icon/font/2/flaticon.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
	</head>

	<body>
		<div class="main-page-wrapper home-page-two">

			<div class="html-top-content">
                
				
				<!-- Menú -->
				<header class="theme-main-header">
					<div class="container">
						<div class="menu-wrapper clearfix">
							<div class="logo float-left"><a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="Logo"></a></div>

							<ul class="button-group float-right">
								<li>
									<a href="{{url('/')}}">
										<i class="material-icons">home</i> Inicio
									</a>
								</li>
								<li>
									<a href="{{route('login')}}">
										<i class="material-icons">fingerprint</i> Ingresar
									</a>
								</li>
								<li>
									<a href="{{route('register')}}">
										<i class="material-icons">person_add</i> Registrarse
									</a>
								</li>
								<li>
									<a href="{{url('/blog')}}">
										<i class="material-icons">description</i> Blog
									</a>
								</li>
								<li>
									<a href="{{url('/contactos')}}">
										<i class="material-icons">contacts</i> Contacto
									</a>
								</li>
								<li>
									<a href="{{route('login')}}">
										<i class="material-icons">exit_to_app</i> Salir <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.pre-ventDefault(); document.getElementById('logout-form').submit();"></a> 

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> 
											@csrf 
										</form>
									</a>
								</li>												
							</ul>						
						</div> 
					</div> 
				</header> 

                @section('content')
                @show


                <!-- Footer -->
			<footer>
				<div class="container">
					<div class="footer-data-wrapper">

						<div class="bottom-footer">
							<div class="row">
								<div class="col-lg-6 col-md-7 col-xs-12 text-right pull-right">
									<ul class="footer-menu">
										<li><a href="blog.html" class="tran3s">Blog</a></li>
										<li><a href="#" class="tran3s">Nosotros</a></li>
										<li><a href="#" class="tran3s">Adopción </a></li>
										<li><a href="#" class="tran3s">Legal</a></li>
									</ul>
									
									<ul>
										<li class="search-form" style="margin-right: 40px;">
										<form action="">
												<input class="buscar" align="middle" type="text" name="" placeholder="¿Qué deseas buscar?">
												<button type="submit" >
													<i class="material-icons">search</i>
												</button>
											</form>
										</li>	
									</ul><br>

									<ul class="social-icon">
										<li><a href="#" class="tran3s"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-5 col-xs-12 footer-logo">
									<div class="logo"><a href="index.html"><img src="images/logo.png" alt="Logo"></a></div>
									<p>LA VIDA ES UNA FIESTA</strong></p>
								</div>
							</div> 
						</div> 
					</div>
				</div> 
			</footer>
			<!-- /Footer -->


	    <!-- Top Button -->
			<button class="scroll-top tran3s color-one-bg" style="background: black; color: white;">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>
			<!-- /Top Button -->


		<script type="text/javascript" src="{{asset('vendor/jquery.2.2.3.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/bootstrap/bootstrap.min.js')}}"></script>
		<script type='text/javascript' src="{{asset('vendor/Camera-master/scripts/jquery.mobile.customized.min.js')}}"></script>
		<script type='text/javascript' src="{{asset('vendor/Camera-master/scripts/jquery.easing.1.3.js')}}"></script> 
	  <script type='text/javascript' src="{{asset('vendor/Camera-master/scripts/camera.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/WOW-master/dist/wow.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/tilt.js/src/tilt.jquery.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/contact-form/validate.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/contact-form/jquery.form.js')}}"></script>
		<script type="text/javascript" src="{{asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/theme.js')}}"></script>

		</div> 
	</body>
</html>
                    
                
