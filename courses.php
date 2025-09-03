<!DOCTYPE html>
	<html lang="es">
		<head>
			<title>Velmondrill- Cursos</title>
			<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
			<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
			<link rel="shortcut icon" href="images/logo.ico">
			<!-- meta tags -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="keywords" content="Velmondrill - Training Center, Empresa dedicada a brindar servicios de entrenamiento en el ambito de QHSE,  venta de productos y herramientas de Perforacion" />
			<script type="application/x-javascript">
				addEventListener("load", function(){
					setTimeout(hideURLbar, 0);
				}, false);
				function hideURLbar(){
					window.scrollTo(0,1);
				}
			</script>
			<!-- //meta tags -->
			<!--fonts-->
			<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
			<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
			<!--//fonts-->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<link rel="stylesheet" type="text/css" href="lib/footable/css/footable.bootstrap.min.css">
			<script type="text/javascript" charset="utf8" src="lib/footable/js/footable.js"></script>
			<script type="text/javascript" charset="utf8" src="lib/footable/js/footable.min.js"></script>
			<script src="js/controller/cursos.js"></script>
			<!-- Required-js -->
			<!-- scriptfor smooth drop down-nav -->
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
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
							  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conocenos <span class="caret">
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
										<!-- <li><a href="drilling-service.php">Drilling Service</a></li>
										<li><a href="qhse.php">QHSE</a></li> -->
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
				<!-- //navigation -->
			</header>
			<!-- //header -->
			<!-- banner -->
			<div class="agile-banner edit-height">
			</div>
			<!-- //banner -->
		<!-- about -->
			<div class="services-w3ls">
				<div class="container">
						<h2 class="w3ls_head">Cur<span>sos</span></h2>
						<div class="panel panel-danger">
						  <div class="panel-heading">&nbsp;&nbsp;</div>
						  <div class="panel-body">
							<table class="table table-hover" style="font-size: 120%" data-paging="true" data-sorting="true" data-filtering="true" id="cursos">
								<thead>
								  <tr>
									<th><strong>Nombre del curso</strong></th>
									<th><strong>Categoría</strong></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>ACIDO SULFHIDRICO(H2S)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>ANÁLISIS CAUSA RAIZ</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>ANEXO SSPA (SEGURIDAD, SALUD Y PROTECCIÓN AMBIENTAL)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>ANÁLISIS DE ACCIDENTES</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>ANÁLISIS Y EVALUACIÓN DE RIESGO</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>ANÁLISIS DE RIESGOS EN PROCESOS(ARP)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>ANÁLISIS DE SEGURIDAD EN EL TRABAJO(AST)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>AUDITORÍAS EFECTIVAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>BÁSICO DE SEGURIDAD EN PLATAFORMAS Y BARCAZAS(RMOU)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>BÁSICO DE SEGURIDAD INICIAL PARA INSTALACIONES PETROLERAS SIMILAR AL RIG PASS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>CAPACITACIÓN PARA LA FORMACIÓN DE SUPERVISOR DE SEGURIDAD QHSE</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>CAPACITACION PARA LA FORMACION DE BRIGADAS DE EMERGENCIAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>CONCEPTOS BÁSICOS DE PERFORACIÓN</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>CONTROL DE PÉRDIDAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>RIG PASS IADC</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>CURSO INTEGRAL LIBRETA DE MAR (CERTIFICADO MÉDICO, RMOU, LIBRETA TIPO D)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>CLASIFICACIÓN Y USO DE EQUIPO DE RESPIRACIÓN AUTÓNOMO(ERA)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>DISCIPLINA OPERATIVA</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>ESPECIALISTA DE INTEGRACIÓN, EJECUCIÓN Y SEGUIMIENTO AL ANEXO SSPA</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>EQUIPO DE PROTECCIÓN PERSONAL(EPP)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>INDUCCIÓN A LA SEGURIDAD INDUSTRIAL</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>INTEGRACIÓN DE BRIGADAS DE EMERGENCIAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>INTEGRAL DE RESCATE VERTICAL</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>INVESTIGACIÓN DE ACCIDENTES</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>MANEJO A LA DEFENSIVA</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>MANEJO COMENTADO</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>MONTAJE Y DESMONTAJE SEGURO DE ANDAMIOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>MANEJO Y SELECCIÓN DE USO ADECUADO DEL EPP</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>OPERACIÓN SEGURA DE MANIOBRAS DE IZAJE</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>PREVENCIÓN DE ACCIDENTES SIMILAR AL RIG-PASS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>PLAN DE RESPUESTA A EMERGENCIAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>PRIMEROS AUXILIOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>PRIMEROS AUXILIOS CON RCP Y DEA</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>PREVENCIÓN Y COMBATE DE INCENDIOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>PROGRAMA DE PREVENCION DE LESIONES (PML) PISAR, MANIPULAR Y LEVANTAR</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>RIESGOS EN ESPACIOS CONFINADOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SALUD EN EL TRABAJO</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SALVAMENTO Y SOCORRISMO INDUSTRIAL</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SEGURIDAD EN LA OPERACIÓN DE MONTACARGAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SEGURIDAD EN TRABAJOS CON RIESGO EN PRESENCIA DE ÁCIDO SULFHÍDRICO Y OXIGENOTERAPIA V</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SISTEMA DE PERMISOS PARA TRABAJOS CON RIESGO (SIGNATARIO)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SEGURIDAD EN LA OPERACIÓN DE CALDERAS INDUSTRIALES</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SEGURIDAD PARA TRABAJOS EN ALTURA</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SOPORTE BASICO DE VIDA</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SALUD EN EL TRABAJO</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>TRABAJOS EN ALTURAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>TRANSPORTE, MANEJO Y ALMACENAMIENTO DE MATERIALES, SUSTANCIAS QUÍMICAS Y RESIDUOS PELIGROSOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>TÉCNICAS DE RESCATE</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>USO DEL DETECTOR DE GASES MÚLTIPLES</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>USO Y MANEJO DE EXTINTORES</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>VERIFICADOR DE GAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>WELLCAP INTRODUCTORIO</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>WELLCAP FUNDAMENTAL</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>WELLCAP NIVEL SUPERVISOR</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>PROCEDIMIENTOS CRÍTICOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>POLITICA SSPA (SEGURIDAD, SALUD Y PROTECCION AMBIENTAL)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>ATLAS DE RIESGO A LA SALUD EN EL TRABAJO</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>AMBIENTE DE TRABAJO EN PLATAFORMAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>CONOCIMIENTO Y USO DE EQUIPOS Y HERRAMIENTAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>INGLÉS TÉCNICO PETROLERO NIVEL BÁSICO</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>INGLÉS TÉCNICO PETROLERO NIVEL INTERMEDIO</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>INGLÉS TÉCNICO PETROLERO NIVEL AVANZADO</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>PLAN DE RESPUESTA A EMERGENCIAS POR HURACANES(PREH)</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>PLAN DE CONTINGENCIA AMBIENTAL</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>TRANSPORTACIÓN A PLATAFORMAS MARINAS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>USO Y MANEJO DE EXPLOSIVOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>8 PROCEDIMIENTOS CRÍTICOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>DIPLOMADO EN FORMACIÓN DE SUPERVISOR DE SEGURIDAD QHSE</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>BASICO CONTRAINCENDIOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>BASICO DE AIRE ACONDICIONADO AUTOMOTRÍZ</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>ANEXOS</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>OPERACIÓN DE GRUAS HIAB</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>SALUD OCUPACIONAL</td>
									<td>No definido</td>
								  </tr>
								  <tr>
									<td>BASICO DE SEGURIDAD</td>
									<td>No definido</td>
								  </tr>
								</tbody>
							  </table>
						  </div>
						</div>
				</div>
			</div>
		<!-- //about -->
	<!-- footer -->
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
	<!-- //footer -->
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
			<script src="js/bootstrap.js"></script>
			<script type="text/javascript" src="js/numscroller-1.0.js"></script>
		</body>
	</html>
