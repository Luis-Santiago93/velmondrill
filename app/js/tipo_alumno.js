function getcontenidoTipos() {
    $("#contenidoTipos").empty();
    $('#tablaTiposAlumno').DataTable().clear().destroy();
    Pace.track(function () {$.ajax({
        type: "GET",
        dataType: "json",
        url: `${CONFIG.apiBaseUrl}/sacvel/type_person`
    })
        .done(function (data, textStatus, jqXHR) {
            if (console && console.log) {
                if (data.error) {
                    swal("Hubo un inconveniente", data.message, "error");
                }
                else {
                    var tablaDatos = $("#tablaTiposAlumno");
                    var json = data.data;
                    if(json){
                        const userInfo = JSON.parse(localStorage.getItem('user_info'));
                        const canDelete = userInfo.Rol === 'Admin';
                        for (var i in json) {

                            var listado = json[i];
                            var deleteBtn = canDelete ? "<button class='btn btn-danger btn-sm' type='button' onclick='inactiveTipoAlumno(this)'><i class='fas fa-trash'></i></button>" : "";
        
                            var btn = `<div class='btn-toolbar' style='justify-content: center; display: flex;' role='toolbar'>
                                            <div class='btn-group mr-2' role='group'>
                                                <button class='btn btn-primary btn-sm' title='Editar' type='button' onclick='editTipoAlumno(this)'>
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                            </div>
                                            <div class='btn-group mr-2' role='group'>
                                                ${deleteBtn}
                                            </div>
                                        </div>`;
                            var tr = $("<tr valign='middle'><td align='center'>" + listado.Nombre + "</td><td align='center'>"+btn+"</td></tr>");

                            tr[0]["infoTipoAlumnos"] = listado;

                            tablaDatos.append(tr);
                        }
                        Initializtable('#tablaTiposAlumno');
                    }
                    
                }

            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                swal("La solicitud a fallado", textStatus, "error");
            }
        });
    });
}

function Initializtable(element){
    table = $(element).DataTable({
        "paging": true,
        "destroy": true,
        "ordering": true,
        "info": false,
        "processing": true,
        "lengthMenu": [10,20],
        "stateSave": true,
        "language": {
            "search": "Buscar:",
            "lengthMenu": "Filas por página _MENU_",
            "zeroRecords": "Sin datos",
            "infoEmpty": "Registros no disponibles",
            "infoFiltered": "(filtrado de _MAX_ total registros)",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Previo"
            }
        }
    });

    return table
}


$(document).ready(function () { 

    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const isAdmin = userInfo && userInfo.Rol === "Admin";

    if (!isAdmin) {
        $("#btnTipoAlumno").css("visibility", "hidden");
    }

    $("#btnLimpiar").click(function() {
        $("#formNuevoTipo")[0].reset();
        $("#idTipo").val(0);
    });
    
    $("#btnTiposAlumnos").click(function (e) {
        e.preventDefault();
        $("#formNuevoTipo")[0].reset();
        $("#idTipo").val(0);
        $("#modalType").modal("show");
    });

    $("#btnEliminarTipoAlumno").click(function (e) {
        e.preventDefault();
        DeleteTipoAlumno();
    });

    $("#btnTipoAlumno").click(function (e) {

        var formulario = document.getElementById('formNuevoTipo');
        if (formulario.checkValidity()) {
            setTipoAlumno();
        }
        else{
            formulario.classList.add('was-validated');
            toastr.warning('Datos requeridos');
        }
    });

    getcontenidoTipos();
    
});


function editTipoAlumno(element) {
    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const isAdmin = userInfo.Rol === 'Admin';

    var nodoTr = $(element).parent().parent().parent().parent();
    var info = nodoTr[0].infoTipoAlumnos;
    $("#idTipo").val(info.TipoPersonaID);
    $("#nuevoTipo").val(info.Nombre);
    
    $("#btnTipoAlumno").prop("disabled", !isAdmin);

    $("#modalType").modal("show");

    $('#tabsTypeContent .tab-pane').removeClass('active show');
    $('#formTab').addClass('active show');
    
    $('.nav-tabs .nav-link').removeClass('active');
    $('.nav-tabs a[href="#formTab"]').addClass('active');

}

function inactiveTipoAlumno(element) {
    var nodoTr = $(element).parent().parent().parent().parent();
    var info = nodoTr[0].infoTipoAlumnos;
    
    $("#idEliminarTipoAlumno").val(info.TipoPersonaID);
    $("#nombreTipoAlumnoEliminar").val(info.Nombre);
    
    $("#modalEliminarTipoAlumno").modal("show");
    
}

function DeleteTipoAlumno() {

    var payload = {
        tipo_persona:$("#idEliminarTipoAlumno").val()
    }

    $.ajax({
        data: JSON.stringify(payload),
        type: "DELETE",
        contentType: 'application/json',
        url: `${CONFIG.apiBaseUrl}/sacvel/type_person`
    })
        .done(function (data, textStatus, jqXHR) {
            if (console && console.log) {
                if (data.error) {
                    toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                }
                else {
                    toastr.success("Operación correcta" + " " + data.message);
                    getcontenidoTipos();
                    $('#modalEliminarTipoAlumno').modal('hide');
                }
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                toastr.error("La solicitud a fallado" + " " + textStatus + " " + "error");
            }
        });
}

function setTipoAlumno() {
    if ($("#idTipo").val() > 0) {

        var data_form_update = {
            TipoPersonaID: $("#idTipo").val(),
            Nombre: $("#nuevoTipo").val()
        }

        $.ajax({
            data: JSON.stringify(data_form_update),
            type: "PUT",
            contentType: 'application/json',
            url: `${CONFIG.apiBaseUrl}/sacvel/type_person`
        })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    if (data.error) {
                        toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                    }
                    else {
                        toastr.success("Operación correcta" + " " + data.message);
                        getcontenidoTipos();
                        
                        $("#formNuevoTipo")[0].reset();
                        $("#idTipo").val(0);
                        $('#tabsTypeContent .tab-pane').removeClass('active show');
                        $('#listTab').addClass('active show');
                        
                        $('.nav-tabs .nav-link').removeClass('active');
                        $('.nav-tabs a[href="#listTab"]').addClass('active');
                    }

                }
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                if (console && console.log) {
                    toastr.error("La solicitud a fallado" + " " + textStatus + " " + "error");
                }
            });
    }
    else {

        var data_form_insert = {
            Nombre: $("#nuevoTipo").val()
        }

        $.ajax({
            data: JSON.stringify(data_form_insert),
            type: "POST",
            contentType: "application/json",
            url: `${CONFIG.apiBaseUrl}/sacvel/type_person`
        })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    if (data.error) {
                        toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                    }
                    else {
                        toastr.success("Operación correcta" + " " + data.message);
                        getcontenidoTipos();

                        $("#formNuevoTipo")[0].reset();
                        $("#idTipo").val(0);
                        $('#tabsTypeContent .tab-pane').removeClass('active show');
                        $('#listTab').addClass('active show');
                        
                        $('.nav-tabs .nav-link').removeClass('active');
                        $('.nav-tabs a[href="#listTab"]').addClass('active');

                    }

                }
            })
            .fail(function (jqXHR, textStatus, errorThrown) {
                if (console && console.log) {
                    toastr.error("La solicitud a fallado" + " " + textStatus + " " + "error");
                }
            });

    }
}