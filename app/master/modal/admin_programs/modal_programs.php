<div class="modal fade" id="modalPrograma" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="modalProgramaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="modalProgramaLabel">
                    <i class="fas fa-pencil-alt"></i> Agregar/Modificar Programa
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="frmPrograma" class="needs-validation was-validated" novalidate onsubmit="return false;">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <input type="hidden" id="idPrograma" value="0">
                            <label for="programa" class="font-weight-bold">N° de Programa*:</label>
                            <input type="text" class="form-control" id="programa" required>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="alumno" class="font-weight-bold">Alumno*:</label>
                            <select class="form-control" id="alumno" required></select>
                        </div>
                    </div>

                    <hr>

                    <h5 class="font-weight-bold">Cursos del Programa</h5>

                    <div class="form-row align-items-end">
                        <div class="col-md-4 mb-3">
                            <label for="curso" class="font-weight-bold">Curso*:</label>
                            <select class="form-control" id="curso">
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="fechaCurso" class="font-weight-bold">Fecha*:</label>
                            <input type="date" class="form-control" id="fechaCurso">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="vigenciaCurso" class="font-weight-bold">Vigencia*:</label>
                            <input type="date" class="form-control" id="vigenciaCurso">
                        </div>
                        <div class="col-md-2 mb-3">
                            <button type="button" class="btn btn-success w-100" id="btnAgregarCurso">
                                <i class="fas fa-plus"></i> Agregar
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive mt-3" style="max-height: 500px; overflow-y: auto;">
                        <table class="table table-bordered table-sm mb-0" id="tablaCursos">
                            <thead class="bg-danger text-white">
                                <tr>
                                    <th>Curso</th>
                                    <th>Fecha</th>
                                    <th>Vigencia</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" form="frmPrograma" id="btnGuardarPrograma" class="btn btn-danger">
                    Guardar Programa
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalEliminarPrograma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <input type="hidden" class="form-control" id="idEliminarPrograma" value="0">
                <div class="form-group">
                    <label for="idAlumnoEliminar" class="font-weight-bold">N° de Programa:</label>
                    <input type="text" class="form-control" id="nProgramaEliminar" disabled>
                </div>
                <div class="form-group">
                    <label for="nombreAlumnoEliminar" class="font-weight-bold">Alumno:</label>
                    <input type="text" class="form-control" id="alumnoProgramaEliminar" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" id="btnEliminarPrograma" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>