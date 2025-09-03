<div class="modal fade" id="modalAlumno" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Agregar/Modificar Alumnos</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmAlumno" class="needs-validation was-validated" novalidate method="POST" onsubmit="return false;">
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="idAlumno" class="font-weight-bold">ID del alumno:</label>
                            <input type="number" class="form-control" value="0" id="idAlumno" disabled style="color: #dd3333;">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="nombre" class="font-weight-bold">Nombre*:</label>
                            <input type="text" class="form-control" id="nombre" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="telefono" class="font-weight-bold">Teléfono:</label>
                            <input type="tel" class="form-control" id="telefono">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="correo" class="font-weight-bold">Correo electrónico:</label>
                            <input type="email" class="form-control" id="correo">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="tipo" class="font-weight-bold">Tipo*:</label>
                            <select class="form-control" id="tipo" required>
                                <option value="" selected disabled>Cargando tipos...</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" form="frmAlumno" id="btnGuardarAlumno" class="btn" style="background-color: #dd3333; border-color: #dd3333; color: white;">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEliminarAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel"><i class="fas fa-exclamation-triangle"></i> ¿Eliminar Registro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" id="idEliminarAlumno" value="0">
                <div class="form-group">
                    <label for="idAlumnoEliminar" class="font-weight-bold">ID del Alumno:</label>
                    <input type="text" class="form-control" id="idAlumnoEliminar" disabled>
                </div>
                <div class="form-group">
                    <label for="nombreAlumnoEliminar" class="font-weight-bold">Nombre:</label>
                    <input type="text" class="form-control" id="nombreAlumnoEliminar" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" id="btnEliminarAlumno" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>