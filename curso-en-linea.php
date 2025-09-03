<!DOCTYPE html>
<html lang="es">

<head>
    <title>Velmondrill- Cursos en Línea</title>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
    <link href="css/bootstrap-social.css" rel="stylesheet" type="text/css" media="all" />
    <!--Estilos de Redes Sociales-->
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="shortcut icon" href="images/logo.ico">
    <!-- meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Velmondrill - Training Center, Empresa dedicada a brindar servicios de entrenamiento en el ambito de QHSE,  venta de productos y herramientas de Perforacion" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!-- //meta tags -->
    <!--fonts-->
    <link
        href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!--//fonts-->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/controller/catalog-courses.js"></script>
    <script type="text/javascript" src="js/controller/data-course.js"></script>
    <script type="text/javascript" src="js/controller/shopping-cart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Required-js -->
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
        ScrollReveal().reveal('.headline', {
            delay: 500
        });
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
                    <img src="images/logo.png" class="img-responsive" alt="Velmondrill" height="200" width="300" />
                </div>
                <div class="w3ls-social-icons">
                    <a class="facebook" target="_blank"
                        href="https://www.facebook.com/Velmondrill-1644934275809519/?fref=ts"><i
                            class="fa fa-facebook"></i></a>
                    <a class="twitter" target="_blank" href="https://twitter.com/Velmondrill_Mx"><i
                            class="fa fa-twitter"></i></a>
                    <a class="pinterest" target="_blank" href="https://www.instagram.com/velmondrillmx/"><i
                            class="fa fa-instagram"></i></a>
                    <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/velmondrill-qhse/"><i
                            class="fa fa-linkedin"></i></a>
                </div>
                <div class="agileits-contact-info text-right">
                    <ul>
                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a
                                href="mailto:operaciones@velmondrill.com">operaciones@velmondrill.com</a></li>
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
                        <li><a href="gallery.php">Galeria</a></li>
                        <li><a href="validation.php">Validación</a></li>
                        <li><a href="contact.php">Contáctanos</a></li>
                        <li><a class="active" href="curso-en-linea.php">Cursos en Línea</a></li>
                        <li><a href="cart-courses.php" alt="Ver carrito de cursos">
                                <h5><i class="ion-ios-cart" data-pack="ios"
                                        data-tags="shopping, money, items, commerce, $"></i></h5>
                            </a></li>

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
    <!--curso en linea-->
    <div class="contact w3l-2">
        <div class="container">
            <h2 class="w3ls_head">Cursos en Línea</h2>
            <!-- <center>
					<img src="images/logo.png" class="img-responsive" alt=""/>
				</center> -->

            <div class="row headline">
                <div class="col-xs-6 col-sm-4 w3l-abt-grid" id="Curso1">
                    <img src="images/course-online/B-ANEXO.png" class="img-responsive img-thumbnail hvr-grow"
                        alt="Responsive image" data-toggle="modal" data-target="#modal1">
                    <dl>
                        <dt>Anexo SSPA</dt>
                        <dd>Dar a conocer los requerimientos mínimos a cumplir en materia de seguridad salud en el trabajo y protección ambiental.</dd>
                    </dl>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <dt>Fácilidades de pago</dt>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <button type="button" class="btn btn-primary" onclick='_addCarrito(this)'><i
                                    class="fa fa-plus"></i> Agregar Curso</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 w3l-abt-grid" id="Curso2">
                    <img src="images/course-online/B-BASICO-DE-SEGURIDAD.png" class="img-responsive img-thumbnail hvr-grow"
                        alt="Responsive image" data-toggle="modal" data-target="#modal2">
                    <dl>
                        <dt>Básico de seguridad <small>(Para instalaciones de refinación, industriales y
                                petroleras)</small></dt>
                        <dd>Dar a conocer los lineamientos en seguridad e higiene en el trabajo para instalaciones industriales, petroleras y petroquímicas.</dd>
                    </dl>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <dt>Fácilidades de pago</dt>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <button type="button" class="btn btn-primary" onclick='_addCarrito(this)'><i
                                    class="fa fa-plus"></i> Agregar
                                Curso</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 w3l-abt-grid" id="Curso3">
                    <img src="images/course-online/B-H2S.png" class="img-responsive img-thumbnail hvr-grow"
                        alt="Responsive image" data-toggle="modal" data-target="#modal3">
                    <dl>
                        <dt>Ácido Sulfhídrico (H2S)</dt>
                        <dd>Medidas y limites maximos permisibles en presencia de h2s en instalaciones petroleras. Su origen y consecuencias.</dd>
                    </dl>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <dt>Fácilidades de pago</dt>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <button type="button" class="btn btn-primary" onclick='_addCarrito(this)'><i
                                    class="fa fa-plus"></i> Agregar
                                Curso</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row headline">
                <div class="col-xs-6 col-sm-4 w3l-abt-grid" id="Curso4">
                    <img src="images/course-online/B-NOM-018.png" class="img-responsive img-thumbnail hvr-grow"
                        alt="Responsive image" data-toggle="modal" data-target="#modal4">
                    <dl>
                        <dt>NOM-018 Sistema Armonizado</dt>
                        <dd>Identificacion de peligros para sustancias quimicas peligrosas, uso, clasificacion, etiquetado y señalizacion.</dd>
                    </dl>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <dt>Fácilidades de pago</dt>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <button type="button" class="btn btn-primary" onclick='_addCarrito(this)'><i
                                    class="fa fa-plus"></i> Agregar
                                Curso</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 w3l-abt-grid" id="Curso5">
                    <img src="images/course-online/B-CONTRA-INCENDIO.png" class="img-responsive img-thumbnail hvr-grow"
                        alt="Responsive image" data-toggle="modal" data-target="#modal5">
                    <dl>
                        <dt>Prevención de incendio y manejo de extintores</dt>
                        <dd>Dirigido a personal que trabaje en instalaciones industriales, petroleras y de refinacion</dd>
                    </dl>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <dt>Fácilidades de pago</dt>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <button type="button" class="btn btn-primary" onclick='_addCarrito(this)'><i
                                    class="fa fa-plus"></i> Agregar
                                Curso</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 w3l-abt-grid" id="Curso6">
                    <img src="images/course-online/B-RIG-PASS.png" class="img-responsive img-thumbnail hvr-grow"
                        alt="Responsive image" data-toggle="modal" data-target="#modal6">
                    <dl>
                        <dt>RIG PASS</dt>
                        <dd>El participante conocera los lineamientos principales de seguridad industrial y proteccion ambiental en instalaciones.</dd>
                    </dl>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <dt>Fácilidades de pago</dt>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <button type="button" class="btn btn-primary" onclick='_addCarrito(this)'><i
                                    class="fa fa-plus"></i> Agregar
                                Curso</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row headline">
                <div class="col-xs-6 col-sm-4 w3l-abt-grid" id="Curso7">
                    <img src="images/course-online/B-SIGNATARIO.png" class="img-responsive img-thumbnail hvr-grow"
                        alt="Responsive image" data-toggle="modal" data-target="#modal7">
                    <dl>
                        <dt>Sistema de permisos de trabajo con riesgo (SPPTR)</dt>
                        <dd>Capacitacion con fin de entrenar a personal que trabaje en compañias y trabajadores de pemex Exploracion y produccion.</dd>
                    </dl>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <dt>Fácilidades de pago</dt>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <button type="button" class="btn btn-primary" onclick='_addCarrito(this)'><i
                                    class="fa fa-plus"></i> Agregar
                                Curso</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 w3l-abt-grid" id="Curso8">
                    <img src="images/course-online/B-VERIFICADOR.png" class="img-responsive img-thumbnail hvr-grow"
                        alt="Responsive image" data-toggle="modal" data-target="#modal8">
                    <dl>
                        <dt>Verificador de gas</dt>
                        <dd>El participante conocera y dominara la tecnicas de monitoreo de gases.</dd>
                    </dl>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <dt>Fácilidades de pago</dt>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <button type="button" class="btn btn-primary" onclick='_addCarrito(this)'><i
                                    class="fa fa-plus"></i> Agregar
                                Curso</button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 w3l-abt-grid" id="Curso9">
                    <img src="images/course-online/B-ESPACIOS-CONFINADOS.png" class="img-responsive img-thumbnail hvr-grow"
                        alt="Responsive image" data-toggle="modal" data-target="#modal9">
                    <dl>
                        <dt>Espacios Confinados</dt>
                        <dd>Conocerá las medidas de control a entradas de espacios confinados conociendo los limites máximos permisibles en exposición.</dd>
                    </dl>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <dt>Fácilidades de pago</dt>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <button type="button" class="btn btn-primary" onclick='_addCarrito(this)'><i
                                    class="fa fa-plus"></i> Agregar
                                Curso</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row headline">
					<div class="col-xs-6 col-sm-4 w3l-abt-grid">
						<img src="images/11cursos/Diapositiva2.JPG" class="img-responsive img-thumbnail hvr-grow" alt="Responsive image" data-toggle="modal" data-target="#modal10">
						<dl>
							<dt>Nombre del Curso en Línea</dt>
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ducimus ut, accusamus perferendis.</dd>
						</dl>
						<div class="row">
							<div class="col-xs-6 col-sm-6"><dt>$00.00 MXN</dt></div>
							<div class="col-xs-6 col-sm-6">
								<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Curso</button>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 w3l-abt-grid">
						<img src="images/11cursos/Diapositiva2.JPG" class="img-responsive img-thumbnail hvr-grow" alt="Responsive image" data-toggle="modal" data-target="#modal11">
						<dl>
							<dt>Nombre del Curso en Línea</dt>
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ducimus ut, accusamus perferendis.</dd>
						</dl>
						<div class="row">
							<div class="col-xs-6 col-sm-6"><dt>$00.00 MXN</dt></div>
							<div class="col-xs-6 col-sm-6">
								<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Curso</button>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 w3l-abt-grid">
						<img src="images/11cursos/Diapositiva2.JPG" class="img-responsive img-thumbnail hvr-grow" alt="Responsive image" data-toggle="modal" data-target="#modal12">
						<dl>
							<dt>Nombre del Curso en Línea</dt>
							<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ducimus ut, accusamus perferendis.</dd>
						</dl>
						<div class="row">
							<div class="col-xs-6 col-sm-6"><dt>$00.00 MXN</dt></div>
							<div class="col-xs-6 col-sm-6">
								<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Curso</button>
							</div>
						</div>
					</div>
				</div> -->

            <!-- Modal descripción de cursos en linea-->
            <!-- Modal1 -->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <dt>Anexo SSPA</dt>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <img src="images/course-online/B-ANEXO.png" class="img-responsive img-thumbnail"
                                        alt="Responsive image">
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="panel-group" id="accordion1">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion1"
                                                        href="#collapse1">
                                                        <dt>Descripción del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <dd>Dar a conocer los requerimientos mínimos a cumplir en materia de seguridad salud en el trabajo y protección ambiental de todo el personal y compañías que trabajen en instalaciones de Pemex y UO. Alcances y deductivas por incumplimientos.</dd>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion1"
                                                        href="#collapse2">
                                                        <dt>Fortalezas del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
                                                        dolore nisi nostrum architecto est voluptatum voluptatibus
                                                        pariatur vero ullam. Facere consectetur veniam, ut quod officia
                                                        assumenda veritatis mollitia repellat illum?</dd>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer row">
                            <div class="col-xs-6 col-sm-4">
                                <dt>Fácilidades de pago</dt>
                            </div>
                            <div class="col-xs-5 col-sm-7">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar
                                    Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal2 -->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <dt>Básico de seguridad (Para instalaciones de refinación, industriales y petroleras)
                                </dt>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <img src="images/course-online/B-BASICO-DE-SEGURIDAD.png" class="img-responsive img-thumbnail"
                                        alt="Responsive image">
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="panel-group" id="accordion2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2"
                                                        href="#collapse3">
                                                        <dt>Descripción del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse3" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <dd>Dar a conocer los lineamientos en seguridad e higiene en el trabajo para instalaciones industriales, petroleras y petroquímicas como requerimiento mínimo para entrada a una instalación.</dd>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion2"
                                                        href="#collapse4">
                                                        <dt>Fortalezas del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse4" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
                                                        dolore nisi nostrum architecto est voluptatum voluptatibus
                                                        pariatur vero ullam. Facere consectetur veniam, ut quod officia
                                                        assumenda veritatis mollitia repellat illum?</dd>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer row">
                            <div class="col-xs-6 col-sm-4">
                                <dt>Fácilidades de pago</dt>
                            </div>
                            <div class="col-xs-5 col-sm-7">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar
                                    Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal3 -->
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <dt>Ácido Sulfhídrico (H2S)</dt>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <img src="images/course-online/B-H2S.png" class="img-responsive img-thumbnail"
                                        alt="Responsive image">
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="panel-group" id="accordion3">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion3"
                                                        href="#collapse5">
                                                        <dt>Descripción del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse5" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <dd>Curso de h2s en instalaciones petroleras en plataformas marinas y equipos terrestres, conociendo los límites máximos permisibles de exposición.</dd>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion3"
                                                        href="#collapse6">
                                                        <dt>Fortalezas del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse6" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
                                                        dolore nisi nostrum architecto est voluptatum voluptatibus
                                                        pariatur vero ullam. Facere consectetur veniam, ut quod officia
                                                        assumenda veritatis mollitia repellat illum?</dd>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer row">
                            <div class="col-xs-6 col-sm-4">
                                <dt>Fácilidades de pago</dt>
                            </div>
                            <div class="col-xs-5 col-sm-7">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar
                                    Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal4 -->
            <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <dt>NOM-018 Sistema Armonizado</dt>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <img src="images/course-online/B-NOM-018.png" class="img-responsive img-thumbnail"
                                        alt="Responsive image">
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="panel-group" id="accordion4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion4"
                                                        href="#collapse7">
                                                        <dt>Descripción del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse7" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <dd>Capacitación para interpretar el sistema armonizado de identificación de peligros de sustancias químicas peligrosas, sus cambios y pictogramas.</dd>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion4"
                                                        href="#collapse8">
                                                        <dt>Fortalezas del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse8" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
                                                        dolore nisi nostrum architecto est voluptatum voluptatibus
                                                        pariatur vero ullam. Facere consectetur veniam, ut quod officia
                                                        assumenda veritatis mollitia repellat illum?</dd>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer row">
                            <div class="col-xs-6 col-sm-4">
                                <dt>Fácilidades de pago</dt>
                            </div>
                            <div class="col-xs-5 col-sm-7">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar
                                    Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal5 -->
            <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <dt>Prevención de incendio y manejo de extintores</dt>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <img src="images/course-online/B-CONTRA-INCENDIO.png" class="img-responsive img-thumbnail"
                                        alt="Responsive image">
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="panel-group" id="accordion5">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion5"
                                                        href="#collapse9">
                                                        <dt>Descripción del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse9" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <dd>Conocer los métodos de mitigación de conatos de incendios, así como los equipos contra incendio, sus técnicas de uso, clasificación de acuerdo al tipo de fuego.</dd>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion5"
                                                        href="#collapse10">
                                                        <dt>Fortalezas del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse10" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
                                                        dolore nisi nostrum architecto est voluptatum voluptatibus
                                                        pariatur vero ullam. Facere consectetur veniam, ut quod officia
                                                        assumenda veritatis mollitia repellat illum?</dd>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer row">
                            <div class="col-xs-6 col-sm-4">
                                <dt>Fácilidades de pago</dt>
                            </div>
                            <div class="col-xs-5 col-sm-7">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar
                                    Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal6 -->
            <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <dt>RIG PASS</dt>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <img src="images/course-online/B-RIG-PASS.png" class="img-responsive img-thumbnail"
                                        alt="Responsive image">
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="panel-group" id="accordion6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion6"
                                                        href="#collapse11">
                                                        <dt>Descripción del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse11" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <dd>Capacitación en seguridad industrial y protección ambiental conociendo los lineamientos de seguridad básica en instalaciones petroleras en equipos de perforación, capacitación indispensable para ingreso a un equipo de perforación.</dd>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion6"
                                                        href="#collapse12">
                                                        <dt>Fortalezas del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse12" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
                                                        dolore nisi nostrum architecto est voluptatum voluptatibus
                                                        pariatur vero ullam. Facere consectetur veniam, ut quod officia
                                                        assumenda veritatis mollitia repellat illum?</dd>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer row">
                            <div class="col-xs-6 col-sm-4">
                                <dt>Fácilidades de pago</dt>
                            </div>
                            <div class="col-xs-5 col-sm-7">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar
                                    Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal7 -->
            <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <dt>Sistema de permisos de trabajo con riesgo (SPPTR)</dt>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <img src="images/course-online/B-SIGNATARIO.png" class="img-responsive img-thumbnail"
                                        alt="Responsive image">
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="panel-group" id="accordion7">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion7"
                                                        href="#collapse13">
                                                        <dt>Descripción del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse13" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <dd>Capacitar y entrenar a todo el personal que trabajé en instalaciones de Pemex, empresas y compañías en el manejo adecuado del sistema de permisos mitigando riesgos y controlando las actividades.</dd>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion7"
                                                        href="#collapse14">
                                                        <dt>Fortalezas del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse14" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
                                                        dolore nisi nostrum architecto est voluptatum voluptatibus
                                                        pariatur vero ullam. Facere consectetur veniam, ut quod officia
                                                        assumenda veritatis mollitia repellat illum?</dd>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer row">
                            <div class="col-xs-6 col-sm-4">
                                <dt>Fácilidades de pago</dt>
                            </div>
                            <div class="col-xs-5 col-sm-7">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar
                                    Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal8 -->
            <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <dt>Verificador de gas</dt>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <img src="images/course-online/B-VERIFICADOR.png" class="img-responsive img-thumbnail"
                                        alt="Responsive image">
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="panel-group" id="accordion8">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion8"
                                                        href="#collapse15">
                                                        <dt>Descripción del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse15" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <dd>Entrenamiento para realizar pruebas de gas efectivas en instalaciones petroleras en equipos terrestres y plataformas marinas, conociendo las lecturas de detectores de usos múltiples.</dd>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion8"
                                                        href="#collapse16">
                                                        <dt>Fortalezas del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse16" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
                                                        dolore nisi nostrum architecto est voluptatum voluptatibus
                                                        pariatur vero ullam. Facere consectetur veniam, ut quod officia
                                                        assumenda veritatis mollitia repellat illum?</dd>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer row">
                            <div class="col-xs-6 col-sm-4">
                                <dt>Fácilidades de pago</dt>
                            </div>
                            <div class="col-xs-5 col-sm-7">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar
                                    Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal9 -->
            <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">
                                <dt>Espacios Confinados</dt>
                            </h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-6">
                                    <img src="images/course-online/B-ESPACIOS-CONFINADOS.png" class="img-responsive img-thumbnail"
                                        alt="Responsive image">
                                </div>
                                <div class="col-xs-7 col-sm-6">
                                    <div class="panel-group" id="accordion9">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion8"
                                                        href="#collapse17">
                                                        <dt>Descripción del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse17" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <dd>Conocerá las medidas de control a entradas de espacios confinados conociendo los limites máximos permisibles en exposición, así como los parámetros y técnicas para realizar trabajos con riesgos.</dd>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion8"
                                                        href="#collapse18">
                                                        <dt>Fortalezas del curso</dt>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse18" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
                                                        dolore nisi nostrum architecto est voluptatum voluptatibus
                                                        pariatur vero ullam. Facere consectetur veniam, ut quod officia
                                                        assumenda veritatis mollitia repellat illum?</dd>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer row">
                            <div class="col-xs-6 col-sm-4">
                                <dt>Fácilidades de pago</dt>
                            </div>
                            <div class="col-xs-5 col-sm-7">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                <!-- <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar
                                    Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal10 -->
            <!-- <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        		<h4 class="modal-title" id="myModalLabel"><dt>Nombre del Curso en Línea</dt></h4>
		      		</div>
		      		<div class="modal-body">
		      			<div class="row">
				          <div class="col-xs-8 col-sm-6">
				          	<img src="images/11cursos/Diapositiva2.JPG" class="img-responsive img-thumbnail" alt="Responsive image">
				          </div>
				          <div class="col-xs-4 col-sm-6">
				          	<div class="panel-group" id="accordion">
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									<dt>Descripción del curso</dt></a>
								  </h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
								  <div class="panel-body"><dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aliquid perspiciatis molestias exercitationem tempore, adipisci? Velit voluptates porro dolor quasi dolorum, quas odio rerum blanditiis, aut eum illum dolores suscipit!</dd></div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><dt>¿Qué obtendré en el curso?</dt></a>
								  </h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
								  <div class="panel-body"><dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis dolore nisi nostrum architecto est voluptatum voluptatibus pariatur vero ullam. Facere consectetur veniam, ut quod officia assumenda veritatis mollitia repellat illum?</dd></div>
								</div>
							  </div>
							</div>
				          </div>
				        </div>
		      		</div>
		      		<div class="modal-footer row">
		      			<div class="col-xs-4 col-sm-4"><dt>$00.00 MXN</dt></div>
		      			<div class="col-xs-7 col-sm-7">	      				
			        		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        		<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Curso</button>
		      			</div>
		      		</div>
		    	</div>
		  	</div>
		</div> -->
            <!-- Modal11 -->
            <!-- <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        		<h4 class="modal-title" id="myModalLabel"><dt>Nombre del Curso en Línea</dt></h4>
		      		</div>
		      		<div class="modal-body">
		      			<div class="row">
				          <div class="col-xs-8 col-sm-6">
				          	<img src="images/11cursos/Diapositiva2.JPG" class="img-responsive img-thumbnail" alt="Responsive image">
				          </div>
				          <div class="col-xs-4 col-sm-6">
				          	<div class="panel-group" id="accordion">
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									<dt>Descripción del curso</dt></a>
								  </h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
								  <div class="panel-body"><dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aliquid perspiciatis molestias exercitationem tempore, adipisci? Velit voluptates porro dolor quasi dolorum, quas odio rerum blanditiis, aut eum illum dolores suscipit!</dd></div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><dt>¿Qué obtendré en el curso?</dt></a>
								  </h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
								  <div class="panel-body"><dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis dolore nisi nostrum architecto est voluptatum voluptatibus pariatur vero ullam. Facere consectetur veniam, ut quod officia assumenda veritatis mollitia repellat illum?</dd></div>
								</div>
							  </div>
							</div>
				          </div>
				        </div>
		      		</div>
		      		<div class="modal-footer row">
		      			<div class="col-xs-4 col-sm-4"><dt>$00.00 MXN</dt></div>
		      			<div class="col-xs-7 col-sm-7">	      				
			        		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        		<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Curso</button>
		      			</div>
		      		</div>
		    	</div>
		  	</div>
		</div> -->
            <!-- Modal12 -->
            <!-- <div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        		<h4 class="modal-title" id="myModalLabel"><dt>Nombre del Curso en Línea</dt></h4>
		      		</div>
		      		<div class="modal-body">
		      			<div class="row">
				          <div class="col-xs-8 col-sm-6">
				          	<img src="images/11cursos/Diapositiva2.JPG" class="img-responsive img-thumbnail" alt="Responsive image">
				          </div>
				          <div class="col-xs-4 col-sm-6">
				          	<div class="panel-group" id="accordion">
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									<dt>Descripción del curso</dt></a>
								  </h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
								  <div class="panel-body"><dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum aliquid perspiciatis molestias exercitationem tempore, adipisci? Velit voluptates porro dolor quasi dolorum, quas odio rerum blanditiis, aut eum illum dolores suscipit!</dd></div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading">
								  <h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><dt>¿Qué obtendré en el curso?</dt></a>
								  </h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
								  <div class="panel-body"><dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis dolore nisi nostrum architecto est voluptatum voluptatibus pariatur vero ullam. Facere consectetur veniam, ut quod officia assumenda veritatis mollitia repellat illum?</dd></div>
								</div>
							  </div>
							</div>
				          </div>
				        </div>
		      		</div>
		      		<div class="modal-footer row">
		      			<div class="col-xs-4 col-sm-4"><dt>$00.00 MXN</dt></div>
		      			<div class="col-xs-7 col-sm-7">	      				
			        		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        		<button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar Curso</button>
		      			</div>
		      		</div>
		    	</div>
		  	</div>
		</div> -->
	</div>
	</div>
            <!--curso en linea-->

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
                                <a class="facebook" target="_blank"
                                    href="https://www.facebook.com/Velmondrill-1644934275809519/?fref=ts"><i
                                        class="fa fa-facebook"></i></a>
                                <a class="twitter" target="_blank" href="https://twitter.com/Velmondrill_Mx"><i
                                        class="fa fa-twitter"></i></a>
                                <a class="pinterest" target="_blank" href="https://www.instagram.com/velmondrillmx/"><i
                                        class="fa fa-instagram"></i></a>
                                <a class="linkedin" target="_blank"
                                    href="https://www.linkedin.com/in/velmondrill-qhse/"><i
                                        class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4 wthree-footer-top contact-us">
                            <h3>Contá<span>ctanos</span></h3>
                            <ul>
                                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a
                                        href="mailto:operaciones@velmondrill.com">operaciones@velmondrill.com</a></li>
                                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a
                                        href="mailto:alejandra@velmondrill.com">alejandra@velmondrill.com</a></li>
                                <li>
                                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Tampico Oficina
                                    <ul>
                                        <li>833-189-4140 / 833-165-7751</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Villahermosa
                                    Oficina
                                    <ul>
                                        <li>(993) 3653579 <br />
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
                    <p>© 2018 Velmondrill. Todos los derechos reservados | Desarrollado por CDM DIGITAL 9932602429
                    </p>
                </div>
            </div>
            <!-- //footer -->
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="js/bootstrap.js"></script>
</body>

</html>