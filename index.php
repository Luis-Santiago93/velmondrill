<!DOCTYPE html>
<html lang="es">
<head>
	<title>Velmondrill- Seguridad Industrial y Perforación</title>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
	<link rel="shortcut icon" href="images/logo.ico">
	<!-- meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Velmondrill - Training Center, Empresa dedicada a brindar servicios de entrenamiento en el ambito de QHSE,  venta de productos y herramientas de Perforacion" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //meta tags -->
		<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!--//fonts-->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Required-js -->
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
   
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#demo1').skdslider({
            'delay': 5000,
            'animationSpeed': 2000,
            'showNextPrev': true,
            'showPlayButton': true,
            'autoSlide': true,
            'animationType': 'fading'
        });

        jQuery('#responsive').change(function() {
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
    </script>

    <script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
        ScrollReveal().reveal('.introduccion', {
            delay: 500,
            reset: true,
            distance: '50px'
        });
		ScrollReveal().reveal('.services', {
            delay: 600,
            reset: true,
            distance: '50px'
        });
		ScrollReveal().reveal('.lastevents', {
            delay: 700,
            reset: true,
            distance: '50px'
        });
    });
    </script>
	<style type="text/css">
		.drop { filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.7)); }
		.box {   box-shadow: 0 0 10px rgba(0, 0, 0, 0.7); }
	</style>
</head>

<body>
    <!-- header -->
	<header id="navbar">
		<div class="w3layouts-top-strip">
			<div class="container">
				<div class="logo">
					<!-- <h1><a href="index.html"><span>Solar </span>Panel</a></h1> -->
					<img src="images/logo.png" class="img-responsive" alt="Velmondrill" height="200" width="300"/>
				</div>
				<div class="w3ls-social-icons">
					<a class="facebook" target="_blank" href="https://www.facebook.com/Velmondrill-1644934275809519/?fref=ts"><i class="fa fa-facebook"></i></a>
					<a class="twitter" target="_blank" href="https://twitter.com/Velmondrill_Mx"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" target="_blank" href="https://www.instagram.com/velmondrillmx/"><i class="fa fa-instagram"></i></a>
					<a class="linkedin" target="_blank" href="https://www.linkedin.com/in/velmondrill-qhse/"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:operaciones@velmondrill.com">operaciones@velmondrill.com</a></li>
						<!-- <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>833-189-4140 Tampico</li><br>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>993-202-5092 Villahermosa </li> -->
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- navigation -->
		<nav class="navbar navbar-default">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				 </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse quieto" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a class="active" href="index.php">Inicio</a></li>
					<li class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conócenos <span class="caret">
					  <ul class="dropdown-menu">
					  	<li><a href="about-us.php">¿Quienes Somos?</a></li>
							<li><a href="mission-vision.php">Misión y Visión</a></li>
							<li><a href="history.php">Reseña Historica</a></li>
							<li><a href="certifications.php">Certificaciones</a></li>
							<li><a href="quality-objectives.php">Objetivos de Calidad</a></li>
							<li><a href="quality-policies.php">Políticas de Calidad</a></li>
					  </ul>
					  </span></a>
					</li>
					<li class="dropdown" >
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
					  	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
						  	<li><a href="consultancy.php">Consultoría</a></li>
						  	<li><a href="equipment-rental.php">Renta de Equipo</a></li>
								<li class="dropdown-submenu">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">Capacitación <span class="caret">
										<ul class="dropdown-menu">
											<li><a href="courses.php">Cursos</a></li>
											<li><a href="graduates.php">Diplomados</a></li>
										</ul>
									</span></a>
								</li>
							</ul>
						</li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="validation.php">Validación</a></li>
					<li><a href="contact.php">Contáctanos</a></li>
					<li><a href="curso-en-linea.php">Cursos en Línea</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
	</header>
   <div id="hero-wrapper" class="fade-carousel" style="margin-top: 19rem;">
    <div class="carousel-wrapper">
      <div id="hero-carousel" class="carousel slide carousel-fade">
        <div class="carousel-inner">
		<div class="item slides active">
                <img class="slide-1" src="images/banners/B-RIG PASS.png" alt="">
            </div>
          <div class="item slides">
				<img class="slide-2" src="images/banners/B-SIGNATARIO.png" alt="" />
            </div>
			<div class="item slides">
				<img class="slide-3" src="images/banners/B-VERIFICADOR DE GAS.png" alt="" />
			</div>
			<div class="item slides">
				<img class="slide-4" src="images/banners/B-BASICO DE SEGURIDAD.png" alt="" />
			</div>
			<div class="item slides">
				<img class="slide-5" src="images/banners/B-ESPACIOS CONFINADOS.png" alt="" />
            </div>
            <div class="item slides">
				<img class="slide-3" src="images/banners/B-NOM-018.png" alt="" />
            </div>
            <div class="item slides">
				<img class="slide-3" src="images/banners/B-H2S.png" alt="" />
            </div>
            <div class="item slides">
				<img class="slide-3" src="images/banners/B-ANEXO SSPA.png" alt="" />
            </div>
            <div class="item slides">
				<img class="slide-3" src="images/banners/B- PREVENCION DE INCENDIO.png" alt="" />
            </div>
            <!--<div class="item slides">
				<img class="slide-8" src="images/course-online/B-SIGNATARIO.jpg" alt="" />
            </div>
            <div class="item slides">
				<img class="slide-9" src="images/course-online/B-VERIFICADOR.jpg" alt="" />
            </div>-->
		</div>
		<ol class="carousel-indicators">
          <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#hero-carousel" data-slide-to="1"></li>
          <li data-target="#hero-carousel" data-slide-to="2"></li>
          <li data-target="#hero-carousel" data-slide-to="3"></li>
          <li data-target="#hero-carousel" data-slide-to="4"></li>
          <li data-target="#hero-carousel" data-slide-to="5"></li>
          <li data-target="#hero-carousel" data-slide-to="6"></li>
          <li data-target="#hero-carousel" data-slide-to="7"></li>
          <li data-target="#hero-carousel" data-slide-to="8"></li>
          <!--<li data-target="#hero-carousel" data-slide-to="6"></li>
          <li data-target="#hero-carousel" data-slide-to="7"></li>
          <li data-target="#hero-carousel" data-slide-to="8"></li>
          <li data-target="#hero-carousel" data-slide-to="9"></li>-->
        </ol>
        <a class="left carousel-control" href="#hero-carousel" data-slide="prev">
          <i class="fa fa-chevron-left left"></i>
        </a>
        <a class="right carousel-control" href="#hero-carousel" data-slide="next">
          <i class="fa fa-chevron-right right"></i>
        </a>
      </div>
    </div>
  </div>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- Specialize-section -->
	<div class="introduccion">
		<section class="w3-about text-center">
			<div class="container">
				<h2 class="w3ls_head head-margen">Bienve<span>nidos</span></h2>
				<p class="para">En Velmondrill S.A. de C.V. , somos un equipo de ingenieros petroleros, industriales,
					ambientales, mecatrónicos, mecánicos, y de sistemas en conjunto con personal en medicina laboral. Con
					más de 23 años de experiencia en el sector energético y del petróleo.</p>
				<div class="col-md-3 w3l-abt-grid">
					<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
						<a href="#" class="hi-icon icon1"><i class="fa fa-life-ring" aria-hidden="true"></i></a>
					</div>
					<h4>
						<font size="3">Seguridad Industrial y Protección Ambiental (QHSE)</font>
					</h4>
				</div>
				<div class="col-md-3 w3l-abt-grid">
					<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
						<a href="#" class="hi-icon icon2"><i class="fa fa-flask" aria-hidden="true"></i></a>
					</div>
					<h4>Geoservices</h4><br>
				</div>
				<div class="col-md-3 w3l-abt-grid">
					<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
						<a href="#" class="hi-icon icon3"><i class="fa fa-wrench" aria-hidden="true"></i></i></a>
					</div>
					<h4>Drilling Services</h4><br>
				</div>
				<div class="clearfix"></div>
			</div>
		</section>
	</div>
    <div class="w3layouts-clients">
        <div class="container">
            <h3><span>En</span> Velmondrill</h3>
            <p><strong>Tenemos experiencia laboral en países como Argentina, Venezuela, Chile, Estados Unidos y en Medio
                    Oriente como Arabia Saudita, Omán, Argelia, y por supuesto en México.</strong></p>
        </div>
    </div>
	<div class="services">
		<div class="what-w3ls">
			<div class="container">
				<h3 class="w3ls_head">Nuestros <span>Servicios</span></h3>
				<div class="what-grids">
					<div class="col-md-6 what-grid">
						<div class="list-img">
							<img src="images/seguridad.jpg" class="img-responsive drop" alt="" />
							<div class="textbox"></div>
						</div>
					</div>
					<div class="col-md-6 what-grid1">
						<div class="what-top">
							<div class="what-left">
								<i class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></i>
							</div>
							<div class="what-right">
								<h4>Protección Ambiental</h4>
								<p>En armonía con el ambiente. Medio Ambiente / QHSE </p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="what-top1">
							<div class="what-left">
								<i class="glyphicon glyphicon-tint" aria-hidden="true"></i>
							</div>
							<div class="what-right">
								<h4>Tecnología</h4>
								<p>Tecnología de vanguardia en sistemas de perforación</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="what-top1">
							<div class="what-left">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="what-right">
								<h4>Adiestramiento</h4>
								<p>Las mejores capacitaciones para los trabajadores costa fuera</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="what-top1">
							<div class="what-left">
								<i class="glyphicon glyphicon-headphones" aria-hidden="true"></i>
							</div>
							<div class="what-right">
								<h4>Seguridad</h4>
								<p>Seguridad Industrial</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
		</div>
	</div>
    <div class="stats" id="stats">
        <div class="container">
            <div class="stats-info">
                <div class="col-md-6 col-sm-3 stats-grid slideanim">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3000'
                        data-delay='.5' data-increment="1">3000</div>
                    <h4 class="stats-info">Proyectos</h4>
                </div>
                <div class="col-md-6 col-sm-3 stats-grid slideanim">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='9000'
                        data-delay='.5' data-increment="10">9000</div>
                    <h4 class="stats-info">Clientes</h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="lastevents">
		<div class="agileinfo-work-top">
			<div class="container">
				<div class="w3-agileits-rides-heading">
					<h3 class="w3ls_head">Últimos <span>Eventos</span></h3>
				</div>
				<div class="agileits-w3layouts-rides-grids">
					<div class="col-sm-4 rides-grid">
						<div class="agileinfo-work">
							<div class="list-img">
								<img src="images/Supervidor_seguridad/2.png" class="img-responsive" alt="">
								<div class="textbox"></div>
							</div>
							<h4>FORMADOR DE SUPERVISOR DE SEGURIDAD EN EQUIPOS DE PERFORACIÓN</h4>
							<p>
								Agradecemos a personal de PEMEX y compañias por 
								asistir a curso: "Formador de Supervisor de Seguridad en 
								Equipos de Perforación", Gracias totales.
							</p>
							<ul>
								<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="gallery.php">Leer mas.</a>
								</li>
						</div>
					</div>
					<div class="col-sm-4 rides-grid">
						<div class="agileinfo-work">
							<div class="list-img">
								<img src="images/plataformas_marinas/1.png" class="img-responsive" alt="">
								<div class="textbox"></div>
							</div>
							<h4>PETROLERO PLATAFORMAS MARINAS Y EQUIPOS TERRESTRES DE SEGURIDAD INDUSTRIAL OPERATIVA</h4>
							<p>
								Agradecemos a los alumnos de Ingenieria Petrolera por su participación. Muchas gracias.
							</p>
							<ul>
								<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="gallery.php">Leer mas.</a>
								</li>
							</ul>
						</div>
					</div>
						<div class="col-sm-4 rides-grid">
						<div class="agileinfo-work">
							<div class="list-img">
								<img src="images/Paquete4/3.png" class="img-responsive" alt="">
								<div class="textbox"></div>
							</div>
							<h4>PAQUETE DE 12 CURSOS APLICADA AL SECTOR ENERGÉTICO DEL PETROLEO</h4>
							<p>
							Agradecemos la confianza del personal de compañias y alumnos de Ingenieria Industrial, Petrolera, Ambiental...
							</p>
							<ul>
								<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="gallery.php">Leer mas.</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-3 w3ls-footer-top menu-fast">
					<h3>Menú <span>Rápido</span></h3>
						<ul>
							<li><i class="fa fa-arrow-right"></i><a href="index.php">Inicio</a></li>
							<li><i class="fa fa-arrow-right"></i><a href="about-us.php">¿Quiénes somos?</a></li>
							<li><i class="fa fa-arrow-right"></i><a href="courses.php">Cursos</a></li>
							<li><i class="fa fa-arrow-right"></i><a href="gallery.php">Galería</a></li>
							<li><i class="fa fa-arrow-right"></i><a href="validation.php">Validación</a></li>
							<li><i class="fa fa-arrow-right"></i><a href="contact.php">Contáctanos</a></li>
						</ul>
				</div>
				<div class="col-md-3 wthree-footer-top atetion-time">
					<h3>Horarios<span> de Atención</span></h3>
					<p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 08:00 a 20:00 hrs</p>
					<div class="social-footer">
						<h3>Redes<span>Sociales</span></h3>
						<a class="facebook" target="_blank" href="https://www.facebook.com/Velmondrill-1644934275809519/?fref=ts"><i class="fa fa-facebook"></i></a>
						<a class="twitter" target="_blank" href="https://twitter.com/Velmondrill_Mx"><i class="fa fa-twitter"></i></a>
						<a class="pinterest" target="_blank" href="https://www.instagram.com/velmondrillmx/"><i class="fa fa-instagram"></i></a>
						<a class="linkedin" target="_blank" href="https://www.linkedin.com/in/velmondrill-qhse/"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-md-4 wthree-footer-top contact-us">
				<h3>Contá<span>ctanos</span></h3>
					<ul>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:operaciones@velmondrill.com">operaciones@velmondrill.com</a></li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:alejandra@velmondrill.com">alejandra@velmondrill.com</a></li>
						<li>			    
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Tampico Oficina
							<ul>
								<li>833-189-4140 / 833-165-7751</li>
							</ul>
						</li>
						<li>
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Villahermosa Oficina
							<ul>
								<li>(993) 3653579 <br/>
									9932025092 / 9933439844
								</li>
							</ul>
						</li>
					</ul>
				</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="footer-w3layouts">
				<p>© 2018 Velmondrill. Todos los derechos reservados | Desarrollado por CDM DIGITAL 9932602429</p>
			</div>
		</div>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/numscroller-1.0.js"></script>
</body>
</html>