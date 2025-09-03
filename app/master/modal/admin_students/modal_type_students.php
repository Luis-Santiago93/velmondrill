<div class="modal fade" id="modalType" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title"><i class="fas fa-layer-group mr-2"></i> Tipos de Audiencias</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs mb-3" id="tabsType" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="form-tab" data-toggle="tab" href="#formTab" role="tab">
                            <i class="fas fa-edit mr-1"></i> Formulario
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="list-tab" data-toggle="tab" href="#listTab" role="tab">
                            <i class="fas fa-list mr-1"></i> Lista
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="tabsTypeContent">
                    <div class="tab-pane fade show active" id="formTab" role="tabpanel">
                        <form id="formNuevoTipo" class="needs-validation was-validated" novalidate method="POST" onsubmit="return false;">
                            <input type="hidden" id="idTipo" value="0">
                            <div class="form-group">
                                <label for="nuevoTipo" class="font-weight-bold">Nombre*:</label>
                                <input type="text" class="form-control" id="nuevoTipo" required>
                            </div>
                            <div class="form-group text-right">
                            <button type="button" class="btn btn-outline-secondary mr-2" id="btnLimpiar">
                                <i class="fas fa-times"></i> Limpiar
                            </button>
                                <button type="submit" form="formNuevoTipo" id="btnTipoAlumno" class="btn" style="background-color: #dd3333; border-color: #dd3333; color: white;">
                                    Guardar
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="tab-pane fade" id="listTab" role="tabpanel">
                        <div class="table-responsive">
                            <table id="tablaTiposAlumno" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th width="120px">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="contenidoTipos">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modalEliminarTipoAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <input type="hidden" class="form-control" id="idEliminarTipoAlumno" value="0">
                <div class="form-group">
                    <label for="nombreCursoEliminar" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombreTipoAlumnoEliminar" disabled>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" id="btnEliminarTipoAlumno" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>