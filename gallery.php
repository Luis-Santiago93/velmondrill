<!DOCTYPE html>
<html lang="es">

<head>
    <title>Velmondrill- Galería</title>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
    <!-- <link href="css/stylegallery.css" rel="stylesheet" type="text/css" media="all"> -->
    <link rel="shortcut icon" href="images/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Velmondrill - Training Center, Empresa dedicada a brindar servicios de entrenamiento en el ambito de QHSE,  venta de productos y herramientas de Perforacion" />
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- fotorama -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <link href="fotorama/fotorama.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="fotorama/fotorama.js"></script>
	<script src="https://unpkg.com/scrollreveal"></script>
    <!-- //fotorama -->
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //meta tags -->

    <!-- scriptfor smooth drop down-nav -->
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
		ScrollReveal().reveal('.headline',{ delay: 500,reset: true,distance: '50px' });
		ScrollReveal().reveal('.headline2',{ delay: 600,reset: true,distance: '50px'  });
		ScrollReveal().reveal('.headline3',{ delay: 700,reset: true,distance: '50px'  });
		ScrollReveal().reveal('.headline4',{ delay: 800,reset: true,distance: '50px'  });
		ScrollReveal().reveal('.headline5',{ delay: 900,reset: true,distance: '50px'  });
    });
    </script>
    <!-- //script for smooth drop down-nav -->
    <script>
    	$(document).ready(function(){
    		$(".dropdown").hover(
    			function() {
    				$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
    				$(this).toggleClass('open');
    			},
    			function() {
				    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
				    $(this).toggleClass('open');
				}
				);
    	});
    </script>
			<!-- //script for smooth drop down-nav -->
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Conocenos <span class="caret">
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3">
                                <li><a href="consultancy.php">Consultoría</a></li>
                                <li><a href="equipment-rental.php">Renta de Equipo</a></li>
                                <!-- <li><a href="drilling-service.php">Drilling Service</a></li>
										<li><a href="qhse.php">QHSE</a></li> -->
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="false" aria-expanded="false">Capacitación <span class="caret">
                                            <ul class="dropdown-menu">
                                                <li><a href="courses.php">Cursos</a></li>
                                                <li><a href="graduates.php">Diplomados</a></li>
                                            </ul>
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="active" href="gallery.php">Galeria</a></li>
                        <li><a href="validation.php">Validación</a></li>
                        <li><a href="contact.php">Contáctanos</a></li>
                        <li><a href="curso-en-linea.php">Cursos en Línea</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- //navigation -->
    </header>
    <!-- //header -->
    <!-- banner -->
    <div class="agile-banner edit-height">
	</div>
    <!-- //banner -->
    <!-- about -->
    <div class="services-w3ls overview w3-2">
        <div class="container">
            <h2 class="w3ls_head">Gale<span>ria</span></h2>
        </div>
    </div>
    <br />
	<div class="headline">
		<div class="container">
			<div class="fotorama col-md-6" data-width="600" data-height="400" data-nav="thumbs" data-allowfullscreen="true"
				data-loop="true">
				<img src="images/plataformas_marinas/1.png">
				<img src="images/plataformas_marinas/2.png">
			</div>
			<div class="col-md-6 agile-prod1 para">
				<h4>Petrolero Plataformas Marinas y equipos terrestres de Seguridad Industrial Operativa Aplicada al Sector
					Energético del Petroleo</h4>
				<p style="color: black;">
					Agradecemos a los alumnos de Ingenieria Petrolera por su participación.
					Muchas gracias, Velmondrill con 26 años de experiencia de los instructores
					en plataformas marinas y equipos terrestres dentro y fuera de México.
				</p>
			</div>
		</div><br />
	</div>
	<div class="headline2">
		<div class="overview">
			<div class="container">
				<div class="col-md-6 agile-prod1 para">
					<h4>Formador de supervisor de seguridad en equipos de perforación </h4>
					<p style="color: black;">
						Agradecemos a personal de PEMEX y compañias por asistir a curso:
						"Formador de Supervisor de Seguridad en Equipos de Perforación",
						Gracias totales.
					</p>
				</div>
				<div class="fotorama col-md-6" data-width="600" data-height="400" data-nav="thumbs"
					data-allowfullscreen="true" data-loop="true">
					<img src="images/Supervidor_seguridad/1.png">
					<img src="images/Supervidor_seguridad/2.png">
					<img src="images/Supervidor_seguridad/3.png">
					<img src="images/Supervidor_seguridad/4.png">
					<img src="images/Supervidor_seguridad/5.png">
					<img src="images/Supervidor_seguridad/6.png">
					<img src="images/Supervidor_seguridad/7.png">
					<img src="images/Supervidor_seguridad/8.png">
					<img src="images/Supervidor_seguridad/9.png">
					<img src="images/Supervidor_seguridad/11.png">
				</div>
			</div>
		</div><br />
	</div>
	<div class="headline3">
		<div class="container">
			<div class="fotorama col-md-6" data-width="600" data-height="400" data-nav="thumbs" data-allowfullscreen="true"
				data-loop="true">
				<img src="images/Paquete4/1.png">
				<img src="images/Paquete4/3.png">
				<img src="images/Paquete4/4.png">
				<img src="images/Paquete4/5.png">
				<img src="images/Paquete4/6.png">
				<img src="images/Paquete4/7.png">
				<img src="images/Paquete4/8.png">
				<img src="images/Paquete4/9.png">
				<img src="images/Paquete4/10.png">
				<img src="images/Paquete4/11.png">
				<img src="images/Paquete4/12.png">
				<img src="images/Paquete4/13.png">
				<img src="images/Paquete4/14.png">
				<img src="images/Paquete4/15.png">
			</div>
			<div class="col-md-6 agile-prod1 para">
				<h4>Paquete de 12 cursos Aplicada al Sector Energético del Petroleo</h4>
				<p style="color: black;">
					Agradecemos la confianza del personal  de compañias y alumnos de Ingenieria Industrial, 
					Petrolera, Ambiental , TSU UT, Químicos , Mecatronicos, con su participación.
				</p>
			</div>
		</div><br />
	</div>
	<div class="headline4">
		<div class="overview">
			<div class="container">
				<div class="col-md-6 agile-prod1 para">
					<h4>11 Cursos de Seguridad Industrial Aplicada al Sector Energético</h4>
					<p style="color: black;">Gracias por la participacion de los ingenieros Industriales, Petroleros,
						Ambientales, Geólogos y Químicos por participar en este proyecto. ¡ Velmondrill como cada mes
						siempre bien !</p>
				</div>
				<div class="fotorama col-md-6" data-width="600" data-height="400" data-nav="thumbs"
					data-allowfullscreen="true" data-loop="true">
					<img src="images/11cursos/Diapositiva2.JPG">
					<img src="images/11cursos/Diapositiva3.JPG">
					<img src="images/11cursos/Diapositiva4.JPG">
					<img src="images/11cursos/Diapositiva6.JPG">
					<img src="images/11cursos/Diapositiva7.JPG">
					<img src="images/11cursos/Diapositiva8.JPG">
					<img src="images/11cursos/Diapositiva9.JPG">
					<img src="images/11cursos/Diapositiva10.JPG">
					<img src="images/11cursos/Diapositiva11.JPG">
					<img src="images/11cursos/Diapositiva12.JPG">
					<img src="images/11cursos/Diapositiva13.JPG">
					<img src="images/11cursos/Diapositiva14.JPG">
					<img src="images/11cursos/Diapositiva15.JPG">
					<img src="images/11cursos/Diapositiva17.JPG">
					<img src="images/11cursos/Diapositiva18.JPG">
					<img src="images/11cursos/Diapositiva19.JPG">
					<img src="images/11cursos/Diapositiva20.JPG">
					<img src="images/11cursos/Diapositiva21.JPG">
					<img src="images/11cursos/Diapositiva22.JPG">
					<img src="images/11cursos/Diapositiva23.JPG">
				</div>
			</div>
		</div><br />
	</div>
	<div class="headline5">
		<div class="container">
			<div class="fotorama col-md-6" data-width="600" data-height="400" data-nav="thumbs" data-allowfullscreen="true"
				data-loop="true">
				<img src="images/sasisopa/1.jpg">
				<img src="images/sasisopa/2.jpg">
				<img src="images/sasisopa/3.jpg">
				<img src="images/sasisopa/4.jpg">
				<img src="images/sasisopa/5.jpg">
				<img src="images/sasisopa/6.jpg">
				<img src="images/sasisopa/7.jpg">
				<img src="images/sasisopa/8.jpg">
			</div>
			<div class="col-md-6 agile-prod1 para">
				<h4>SASISOPA</h4>
				<p style="color: black;">Sistema de Administración de Seguridad Industrial, Seguridad Operativa y Protección
					Ambiental, bajo los requerimientos de ASEA. Muchas gracias a Weatherford por la confianza para llevar
					este proyecto a Weatherford Poza Rica. ¡ Velmondrill siempre bien !</p>
			</div>
		</div>
		<br />
		<br>
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