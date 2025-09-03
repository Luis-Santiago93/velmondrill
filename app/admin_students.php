<?php include 'master/header.php'?>

<main role="main" class="container mt-5">
    <form>
        <div class="form-row">
            <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                <button type="button" id="btnAlumno" class="btn" style="background-color: #dd3333; border-color: #dd3333; color: white; position: relative;">
                    <i class="fas fa-plus"></i>&nbsp;Nuevo Alumno
                </button>
                <button type="button" id="btnTiposAlumnos" class="btn btn-secondary" data-toggle="modal" data-target="#modalTiposPersona">
                    <i class="fas fa-users-cog"></i>&nbsp;Tipos de Audiencias
                </button>
                <div id="contadorCursos" 
                    class="px-3 py-2 shadow-sm d-inline-block text-white fw-bold text-center" 
                    style="background-color: #212529; border-radius: 999px; min-width: 160px; display: inline-block;">
                    Total: <span id="cantidadAlumnos">0</span>
                </div>
            </div>
            <div class="form-group col-md-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Tipo de Audiencia</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id='contenido'>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</main>

<?php include 'master/modal/admin_students/modal_students.php'?>
<?php include 'master/modal/admin_students/modal_type_students.php'?>
<script src="js/alumno.js"></script> 
<script src="js/tipo_alumno.js"></script> 
</body>

</html>