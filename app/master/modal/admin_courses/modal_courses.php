<div class="modal fade" id="modalCurso" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Agregar/Modificar Curso</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmcurso" class="needs-validation was-validated" novalidate method="POST"
                    onsubmit="return false;">
                    <div class="form-row">
                        
                        <div class="col-md-6">
                            <label for="idCurso" class="col-form-label">Id del curso:</label>
                            <input type="number" class="form-control" value="0" id="idCurso" disabled style="color: #dd3333;">
                        </div>
                        <div class="col-md-12">
                            <label for="nombreCurso" class="col-form-label">Nombre*:</label>
                            <textarea class="form-control form-control-sm mb-3" rows="3" id="nombreCurso" required></textarea>
                        </div>
                        <br />
                        
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" form="frmcurso" id="btnGuardarCurso" class="btn" style="background-color: #dd3333; border-color: #dd3333; color: white;">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEliminarCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <input type="hidden" class="form-control" id="idEliminarCurso" value="0">
                <div class="form-group">
                    <label for="idCursoEliminar" class="col-form-label">ID del Curso:</label>
                    <input type="text" class="form-control" id="idCursoEliminar" disabled>
                </div>
                <div class="form-group">
                    <label for="nombreCursoEliminar" class="col-form-label">Nombre del Curso:</label>
                    <input type="text" class="form-control" id="nombreCursoEliminar" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" id="btnEliminarCurso" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>