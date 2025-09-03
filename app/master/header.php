<?php include 'auth_check.php'?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>SACVEL de Velmondrill</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/offcanvas/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.css" rel="stylesheet">


    <link href="css/flash.css" rel="stylesheet" />
    <link href="css/checkbox-switch.css" rel="stylesheet" />

    <link href="css/toastr/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" href="util/Trumbowyg/dist/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="util/Trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        .pace .pace-progress {
            background: #dd3333 !important;
        }

        .pace .pace-progress-inner {
            box-shadow: 0 0 10px #dd3333, 0 0 5px #dd3333 !important;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="util/Trumbowyg/dist/trumbowyg.min.js"></script>
    <script src="util/Trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js"></script>
    <script src="util/Trumbowyg/dist/langs/es.min.js"></script>

    <script src="css/toastr/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>

    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/examples/offcanvas/offcanvas.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="js/user-profile-loader.js"></script>
    <script src="js/logout.js"></script>
    <script src="js/enviroment.js"></script>
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SACVEL v1.0.0</a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto" id="mainNav">
                <li class="nav-item">
                    <a class="nav-link" href="/app/admin_courses.php">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/app/admin_students.php">Alumnos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/app/admin_programs.php">N° Programas</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Switch account</a>
                </li> -->
                <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->
            </ul>
            <!-- Botón tipo avatar con dropdown -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase font-weight-bold d-flex align-items-center justify-content-center rounded-circle"
                    href="#" id="userMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="width: 40px; height: 40px; background-color: #dd3333; border: 2px solid #dd3333; color: white;">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="userMenuButton">
                        <h6 class="dropdown-header w-100"></h6>
                        <div class="dropdown-item-text small text-muted w-100"></div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item w-100" href="#" id="logoutButton">Cerrar sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>