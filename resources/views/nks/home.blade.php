<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <title>NK Studios</title>
   <link rel="canonical" href="index.html">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- AMP -->
  <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('nkstyle/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('nkstyle/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="{{asset('nkstyle/lib/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('nkstyle/lib/animate/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('nkstyle/lib/owlcarousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('nkstyle/lib/lightbox/css/lightbox.min.css')}}">
  <link rel="stylesheet" href="{{asset('nkstyle/lib/ionicons/css/ionicons.min.css')}}">
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!-- Main Stylesheet File -->
  <link href="{{asset('nkstyle/css/style.css')}}" rel="stylesheet">


</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
<!--         <h1><a href="#intro" class="scrollto">NKStudios</a></h1> -->
              <a href="#intro"><img src="img/logo.png" alt="" title="NK Studios" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Inicio</a></li>
          <li><a href="#about">Institucional</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
         <!--  <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contactenos</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
			

			  @foreach($slider as $sli) <!-- slider images -->
	            @if ($loop->first)
	            <div class="carousel-item active">
	            @else
	            <div class="carousel-item">
	            @endif
              <div style="background-image: url('nkstyle/img/{{$sli->imagen_slider}}');">
	            
	                <div class="carousel-container">
	                    <div class="carousel-content">
          							<h2>{{$sli->titulo}}</h2>
          							<p>{{$sli->texto}}</p>
	                    </div>
	                </div>
                  </div>
	            </div>
        @endforeach <!-- slider images -->

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

  <!--==========================
    About Us Section
  ============================-->
  <section id="about">
    <div class="container">
	@foreach ($institucional as $cat)
      <header class="section-header">
        <h3>{{$cat->titulo}}</h3>
      </header>
     
      <div class="row about-col">
      
      <iframe id="iframe_container" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="550" height="400" src="{{$cat->prezi}}"></iframe>
      

      </div>
	@endforeach
    </div>
  </section><!-- #about -->


    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          
          <h3>Servicios</h3>
          <p>Brindamos una amplia gama de servicios y asesoramiento adaptandonos a la medida y exigencias de nuestros clientes:</p>

        </header>

        <div class="row">
		@foreach ($subservicios as $sub)
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-android-done-all"></i></div>
            <h4 class="title">{{ $sub->subtitulo }}</h4>
            <p class="description">{{ $sub->subtexto }}</p>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Portfolio</h3>
        </header>
        
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todo</li>
              <li data-filter=".filter-dp">Diseño y Programación Web</li>
              <li data-filter=".filter-cm">Community Manager</li>
              <li data-filter=".filter-h">Hosting</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
   		@foreach ($portfolio as $folio)
          <div class="col-lg-4 col-md-6 portfolio-item {{$folio->filtro1}} {{$folio->filtro2}} {{$folio->filtro3}} wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{url('/')}}/img/{{$folio->imagen_portfolio}}" class="img-fluid" alt="">
                <a href="{{url('/')}}/img/{{$folio->imagen_portfolio}}" data-lightbox="portfolio" data-title="{{$folio->subtitulo}}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <!-- <a href="" class="link-details" title="Más detalles"><i class="ion ion-android-open"></i></a> -->
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{$folio->pagina}}" target="_blank">{{$folio->subtitulo}}</a></h4>
                <p>{{$folio->separadores}}</p>
              </div>
            </div>
          </div>
		@endforeach
        </div>

      </div>
    </section><!-- #portfolio -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
    	<div class="container">
		@foreach ($contactenos as $zet)
	        <div class="section-header">
	          <h3>{{$zet->titulo}}</h3>
	        </div>

	        <div class="row contact-info">

	          <div class="col-md-3">
	            <div class="contact-address">
	              <i class="ion-ios-location-outline"></i>
	              <h3>Dirección</h3>
	              <address>{{$zet->direccion}}</address>
	            </div>
	          </div>

	          <div class="col-md-3">
	            <div class="contact-phone">
	              <i class="ion-ios-telephone-outline"></i>
	              <h3>Número Telefónico</h3>
	              <p>{{$zet->numtel}}</p>
	            </div>
	          </div>

	          <div class="col-md-3">
	            <div class="contact-email">
	              <i class="ion-ios-email-outline"></i>
	              <h3>Correo</h3>
	              <p><a href="mailto:info@example.com">{{$zet->correo}}</a></p>
	            </div>
	          </div>

	          <div class="col-md-3">
	            <div id="map_container">
	              <div id="map responsive">
	                <div class="google-maps">
	                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.7130576672!2d-60.70548578484646!3d-31.64170598132959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b5a9bc6fd3f7e1%3A0x7eebc91aa69d281!2sNKstudios+SRL!5e0!3m2!1ses-419!2sar!4v1517582759365" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	                </div>
	              </div>
	            </div>
	          </div>
		@endforeach
	        </div>

	        <div class="form">
	          <div id="sendmessage">Tu mensaje fue enviado. !Muchas Gracias!</div>
	          <div id="errormessage"></div>
	          <form action="" method="post" role="form" class="contactForm">
	            <div class="form-row">
	              <div class="form-group col-md-6">
	                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingrese 4 o más caracteres." />
	                <div class="validation"></div>
	              </div>
	              <div class="form-group col-md-6">
	                <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Ingrese un correo valido." />
	                <div class="validation"></div>
	              </div>
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" data-rule="minlen:8" data-msg="Ingrese 8 o más caracteres." />
	              <div class="validation"></div>
	            </div>
	            <div class="form-group">
	              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escriba algo." placeholder="Mensaje"></textarea>
	              <div class="validation"></div>
	            </div>
	            <div class="row">
	              <div class="text-center col-md-6"><button type="submit">Enviar</button></div><br>
	              <div class="g-recaptcha col-md-6" data-sitekey="6Lf7Nj4UAAAAAEiLC30e08wJlrzxu1ngXSdUR_TC"></div>
	            </div>
	          </form>
	        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-sm-push-12 footer-contact">
            
            <div class="icon"><marquee width="20%" scrollamount="5" ><i class="ion-social-rss"></i>Contactenos vía...</marquee></div>
            <br>
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://es-la.facebook.com/NKstudiosS/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('nkstyle/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('nkstyle/lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('nkstyle/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('nkstyle/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('nkstyle/js/main.js')}}"></script>

</body>
</html>
