function getContenido() {
    $("#contenido").empty();
    $('#example').DataTable().clear().destroy();
    Pace.track(function () {$.ajax({
        type: "GET",
        dataType: "json",
        url: `${CONFIG.apiBaseUrl}/sacvel/courses`
    })
        .done(function (data, textStatus, jqXHR) {
            if (console && console.log) {
                if (data.error) {
                    swal("Hubo un inconveniente", data.message, "error");
                }
                else {
                    var tablaDatos = $("#example");
                    var json = data.data;
                    if(json){
                        const userInfo = JSON.parse(localStorage.getItem('user_info'));
                        const canDelete = userInfo.Rol === 'Admin';
                        for (var i in json) {

                            var listado = json[i];
                            var deleteBtn = canDelete ? "<button class='btn btn-danger btn-sm' type='button' onclick='inactiveCurso(this)'><i class='fas fa-trash'></i></button>" : "";
        
                            var btn = `<div class='btn-toolbar' style='justify-content: center; display: flex;' role='toolbar'>
                                            <div class='btn-group mr-2' role='group'>
                                                <button class='btn btn-primary btn-sm' title='Editar' type='button' onclick='editCurso(this)'>
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                            </div>
                                            <div class='btn-group mr-2' role='group'>
                                                ${deleteBtn}
                                            </div>
                                        </div>`;
                            var tr = $("<tr valign='middle'><td align='center' style='color:red;''><b>" + listado.CursoID + "</b></td><td align='center'>" + listado.Nombre + "</td><td align='center'>"+btn+"</td></tr>");

                            tr[0]["infoCursos"] = listado;

                            tablaDatos.append(tr);
                        }
                        $('#cantidadCursos').text(json.length);
                        Initializtable('#example');
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

function truncString(str, max, add){
    add = add || '...';
    return (typeof str === 'string' && str.length > max ? str.substring(0,max)+add : str);
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
        $("#btnCurso").css("visibility", "hidden");
    }

    $("#btnCurso").click(function (e) {
        e.preventDefault();
        $("#frmcurso")[0].reset();
        $("#idCurso").val(0);
        $("#modalCurso").modal("show");
    });

    $("#btnEliminarCurso").click(function (e) {
        e.preventDefault();
        DeleteCurso();
    });

    $("#btnGuardarCurso").click(function (e) {

        var formulario = document.getElementById('frmcurso');
        if (formulario.checkValidity()) {
            setCurso();
        }
        else{
            formulario.classList.add('was-validated');
            toastr.warning('Datos requeridos');
        }
    });

    getContenido();
    
});


function editCurso(element) {
    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const isAdmin = userInfo.Rol === 'Admin';

    var nodoTr = $(element).parent().parent().parent().parent();
    var info = nodoTr[0].infoCursos;
    $("#idCurso").val(info.CursoID);
    $("#nombreCurso").val(info.Nombre);

    $("#frmcurso :input:not(#idCurso)").prop("disabled", !isAdmin);
    $("#btnGuardarCurso").prop("disabled", !isAdmin);

    $("#modalCurso").modal("show");
}

function inactiveCurso(element) {
    var nodoTr = $(element).parent().parent().parent().parent();
    var info = nodoTr[0].infoCursos;
    
    $("#idEliminarCurso").val(info.CursoID);
    $("#idCursoEliminar").val(info.CursoID);
    $("#nombreCursoEliminar").val(info.Nombre);
    
    $("#modalEliminarCurso").modal("show");
    
}

function DeleteCurso() {
    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const usuario = userInfo ? userInfo.Usuario : "desconocido";

    var payload = {
        curso:$("#idCursoEliminar").val(),
        usuario:usuario
    }

    $.ajax({
        data: JSON.stringify(payload),
        type: "DELETE",
        contentType: 'application/json',
        url: `${CONFIG.apiBaseUrl}/sacvel/courses`
    })
        .done(function (data, textStatus, jqXHR) {
            if (console && console.log) {
                if (data.error) {
                    toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                }
                else {
                    toastr.success("Operación correcta" + " " + data.message);
                    getContenido();
                    $('#modalEliminarCurso').modal('hide');
                }
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                toastr.error("La solicitud a fallado" + " " + textStatus + " " + "error");
            }
        });
}

function setCurso() {
    if ($("#idCurso").val() > 0) {

        var data_form_update = {
            CursoID: $("#idCurso").val(),
            Nombre: $("#nombreCurso").val()
        }

        $.ajax({
            data: JSON.stringify(data_form_update),
            type: "PUT",
            contentType: 'application/json',
            url: `${CONFIG.apiBaseUrl}/sacvel/courses`
        })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    if (data.error) {
                        toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                    }
                    else {
                        toastr.success("Operación correcta" + " " + data.message);
                        getContenido();
                        $('#modalCurso').modal('hide');

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
            Nombre: $("#nombreCurso").val()
        }

        $.ajax({
            data: JSON.stringify(data_form_insert),
            type: "POST",
            contentType: "application/json",
            url: `${CONFIG.apiBaseUrl}/sacvel/courses`
        })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    if (data.error) {
                        toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                    }
                    else {
                        toastr.success("Operación correcta" + " " + data.message);
                        getContenido();
                        $('#modalCurso').modal('hide');

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