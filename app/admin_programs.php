<?php include 'master/header.php'?>

<main role="main" class="container mt-5">
    <form>
        <div class="form-row">
            <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                <button type="button" id="btnPrograma" class="btn" style="background-color: #dd3333; border-color: #dd3333; color: white; position: relative;">
                    <i class="fas fa-plus"></i>&nbsp;Nuevo N° Programa
                </button>
                <div id="contadorProgramas" 
                    class="px-3 py-2 shadow-sm d-inline-block text-white fw-bold text-center" 
                    style="background-color: #212529; border-radius: 999px; min-width: 160px; display: inline-block;">
                    Total: <span id="cantidadProgramas">0</span>
                </div>
            </div>
            <div class="form-group col-md-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="details-control collapsed" style="text-align: center;"></th>
                            <th>Programa</th>
                            <th>Alumno</th>
                            <th>Alta</th>
                            <th>Cursos</th>
                            <th>Acciones</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id='contenido'>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</main>

<?php include 'master/modal/admin_programs/modal_programs.php'?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $.fn.modal.Constructor.prototype._enforceFocus = function () {};
</script>
<script src="js/programas.js"></script> 
</body>

</html>