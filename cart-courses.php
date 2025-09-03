<!DOCTYPE html>
<html lang="es">

<head>
    <title>Velmondrill- Carrito de cursos</title>
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
    <script type="text/javascript" src="js/utilidades.js"></script>
    <script type="text/javascript" src="js/controller/cart.js"></script>
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
    <div class="container"><br /><br />
        <h2 class="w3ls_head"><i class="ion-ios-cart" data-pack="ios"
                data-tags="shopping, money, items, commerce, $"></i>&nbsp;Carrito de cursos</h2>
        <p id="MsjCarrito" class="text-muted"></p>
        <p id="MsjCarrito2">
        </p>
        <br /><br />
        <div id="contenedor-carrito">
            <div class="panel panel-danger">
                <div class="panel-heading text-center">Resumen de tu pedido</div>
                <div class="panel-body">
                    <div id="">
                        <table class="table table-hover" id="ListadoProductosP">
                            <thead>
                                <tr>
                                    <th class="active" style="text-align: center">
                                        <font size="3">Acción</font>
                                    </th>
                                    <th class="active" style="text-align: left">
                                        <font size="3">Curso</font>
                                    </th>
                                    <th class="active" style="text-align: right" width="180">
                                        <font size="3">Precio Unitario</font>
                                    </th>
                                    <th class="active" style="text-align: center" width="100">
                                        <font size="3">Cantidad</font>
                                    </th>
                                    <th class="active" style="text-align: right">
                                        <font size="3">Total</font>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="contenidoProductosP"></tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer" style="text-align: right"><strong id="pSubtotal"><b>Total:</b> $0.00</strong></div>
                <div class="panel-footer" style="text-align: right"><strong>*Precio sin IVA</strong>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="text-align: right">
                    <button type="button" id="BtnBorrarTodo" class="btn btn-default btn-lg"><i
                            class="ion-trash-a"></i>&nbsp;&nbsp;Vaciar carrito</button>
                    <button type="submit" id="BtnPedido" class="btn btn-danger btn-lg"><i
                            class="ion-forward"></i>Realizar Pedido</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal formulario de inscripción-->
    <div class="modal fade" id="modalFormIns" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        <dt>Formulario de inscripción</dt>
                    </h4>
                </div>
                <div class="modal-body"> 
                    <dd>Rellena los datos siguientes para acceder al curso</dd>
                    <form id="frmPedido" method="POST" onsubmit="return false;">
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputNombre" placeholder="Nombre(s)" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputApellidos" placeholder="Apellidos" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputCurp" placeholder="Curp" required="">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputCorreo" placeholder="Correo electrónico" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputCelular" placeholder="Celular" required="">
                        </div>
                        <div class="form-group">
                            <p>¿Requiere Factura?</p>
                            <select class="form-control" id="inputFactura" required="">
                                <option value>Seleccione..</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>Acepto los términos y condiciones</p>
                            <select class="form-control" id="inputTermino" required="">
                                <option value>Seleccione..</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                            <dd>Al envíar, acepta nuestros términos y Políticas de privacidad</dd>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" form="frmPedido" id="btnSolicitud" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Enviar</button>
                </div>
            </div>
        </div>
    </div>

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
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/in/velmondrill-qhse/"><i
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
                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Villahermosa Oficina
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
            <p>© 2018 Velmondrill. Todos los derechos reservados | Desarrollado por CDM DIGITAL 9932602429</p>
        </div>
    </div>
    <!-- //footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/bootstrap.js"></script>
</body>

</html>