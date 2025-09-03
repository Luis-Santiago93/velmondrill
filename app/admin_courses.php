<?php include 'master/header.php'?>

<main role="main" class="container mt-5">
    <form>
        <div class="form-row">
            <div class="form-group col-md-12 d-flex justify-content-between align-items-center">
                <button type="button" id="btnCurso" class="btn" style="background-color: #dd3333; border-color: #dd3333; color: white; position: relative;">
                    <i class="fas fa-plus"></i>&nbsp;Nuevo Curso
                </button>
                <div id="contadorCursos" 
                    class="px-3 py-2 shadow-sm d-inline-block text-white fw-bold text-center" 
                    style="background-color: #212529; border-radius: 999px; min-width: 160px; display: inline-block;">
                    Total: <span id="cantidadCursos">0</span>
                </div>
            </div>
            <div class="form-group col-md-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
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

<?php include 'master/modal/admin_courses/modal_courses.php'?>

<script src="js/curso.js"></script> 
</body>

</html>