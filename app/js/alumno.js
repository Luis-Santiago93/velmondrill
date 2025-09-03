function getContenido() {
    $("#contenido").empty();
    $('#example').DataTable().clear().destroy();
    Pace.track(function () {$.ajax({
        type: "GET",
        dataType: "json",
        url: `${CONFIG.apiBaseUrl}/sacvel/person`
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
                            var deleteBtn = canDelete ? "<button class='btn btn-danger btn-sm' type='button' onclick='inactiveAlumno(this)'><i class='fas fa-trash'></i></button>" : "";
        
                            var btn = `<div class='btn-toolbar' style='justify-content: center; display: flex;' role='toolbar'>
                                            <div class='btn-group mr-2' role='group'>
                                                <button class='btn btn-primary btn-sm' title='Editar' type='button' onclick='editAlumno(this)'>
                                                    <i class='fas fa-edit'></i>
                                                </button>
                                            </div>
                                            <div class='btn-group mr-2' role='group'>
                                                ${deleteBtn}
                                            </div>
                                        </div>`;
                            var tr = $("<tr valign='middle'><td align='center' style='color:red;''><b>" + listado.PersonaID + "</b></td><td align='center'>" + listado.Nombre + "</td><td align='center'>" + listado.Telefono + "</td><td align='center'>" + listado.Correo + "</td><td align='center'>" + listado.TipoPersona + "</td><td align='center'>"+btn+"</td></tr>");

                            tr[0]["infoAlumnos"] = listado;

                            tablaDatos.append(tr);
                        }
                        $('#cantidadAlumnos').text(json.length);
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

function Initializtable(element){
    table = $(element).DataTable({
        "paging": true,
        "destroy": true,
        "ordering": true,
        "info": false,
        "processing": true,
        "lengthMenu": [10,20],
        "stateSave": true,
        "deferRender": true,
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

function cargarTiposPersona(valorSeleccionar = null, defaultText = 'Seleccione un tipo') {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: `${CONFIG.apiBaseUrl}/sacvel/type_person`,
        beforeSend: function() {
            $("#tipo").html('<option value="" disabled>Cargando...</option>');
        },
        success: function(response) {
            const $select = $("#tipo").empty().append(`<option value="" disabled>${defaultText}</option>`);
            
            if (response.data && response.data.length) {
                $.each(response.data, function(index, item) {
                    $select.append(new Option(item.Nombre, item.TipoPersonaID));
                });
                
                if (valorSeleccionar !== null) {
                    setTimeout(() => {
                        $select.val(valorSeleccionar).trigger('change');
                    }, 100);
                }
            } else {
                $select.append('<option value="" disabled>No hay datos</option>');
            }
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
            $(selectId).html('<option value="" disabled>Error al cargar</option>');
        }
    });
}

$(document).ready(function () { 

    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const isAdmin = userInfo && userInfo.Rol === "Admin";

    if (!isAdmin) {
        $("#btnAlumno").css("visibility", "hidden");
    }

    $("#btnAlumno").click(function (e) {
        e.preventDefault();
        $("#frmAlumno")[0].reset();
        $("#idAlumno").val(0);
        cargarTiposPersona();
        $("#modalAlumno").modal("show");
    });

    $("#btnEliminarAlumno").click(function (e) {
        e.preventDefault();
        DeleteAlumno();
    });

    $("#btnGuardarAlumno").click(function (e) {

        var formulario = document.getElementById('frmAlumno');
        if (formulario.checkValidity()) {
            setAlumno();
        }
        else{
            formulario.classList.add('was-validated');
            toastr.warning('Datos requeridos');
        }
    });

    getContenido();
    
});


function editAlumno(element) {
    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const isAdmin = userInfo.Rol === 'Admin';

    var nodoTr = $(element).parent().parent().parent().parent();
    var info = nodoTr[0].infoAlumnos;
    $("#idAlumno").val(info.PersonaID);
    $("#nombre").val(info.Nombre);
    $("#telefono").val(info.Telefono);
    $("#correo").val(info.Correo);
    cargarTiposPersona(info.TipoPersonaID);

    $("#frmAlumno :input:not(#idAlumno)").prop("disabled", !isAdmin);
    $("#btnGuardarAlumno").prop("disabled", !isAdmin);

    $("#modalAlumno").modal("show");
}

function inactiveAlumno(element) {
    var nodoTr = $(element).parent().parent().parent().parent();
    var info = nodoTr[0].infoAlumnos;
    
    $("#idEliminarAlumno").val(info.PersonaID);
    $("#idAlumnoEliminar").val(info.PersonaID);
    $("#nombreAlumnoEliminar").val(info.Nombre);
    
    $("#modalEliminarAlumno").modal("show");
    
}

function DeleteAlumno() {
    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const usuario = userInfo ? userInfo.Usuario : "desconocido";

    var payload = {
        persona_id:$("#idEliminarAlumno").val(),
        usuario:usuario
    }

    $.ajax({
        data: JSON.stringify(payload),
        type: "DELETE",
        contentType: 'application/json',
        url: `${CONFIG.apiBaseUrl}/sacvel/person`
    })
        .done(function (data, textStatus, jqXHR) {
            if (console && console.log) {
                if (data.error) {
                    toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                }
                else {
                    toastr.success("Operación correcta" + " " + data.message);
                    getContenido();
                    $('#modalEliminarAlumno').modal('hide');
                }
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                toastr.error("La solicitud a fallado" + " " + textStatus + " " + "error");
            }
        });
}

function setAlumno() {
    if ($("#idAlumno").val() > 0) {

        var data_form_update = {
            PersonaID: $("#idAlumno").val(),
            Nombre: $("#nombre").val(),
            Correo: $("#correo").val(),
            Telefono: $("#telefono").val(),
            TipoPersonaID: $("#tipo").val()
        }

        $.ajax({
            data: JSON.stringify(data_form_update),
            type: "PUT",
            contentType: 'application/json',
            url: `${CONFIG.apiBaseUrl}/sacvel/person`
        })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    if (data.error) {
                        toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                    }
                    else {
                        toastr.success("Operación correcta" + " " + data.message);
                        getContenido();
                        $('#modalAlumno').modal('hide');

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
            Nombre: $("#nombre").val(),
            Correo: $("#correo").val(),
            Telefono: $("#telefono").val(),
            TipoPersonaID: $("#tipo").val()
        }

        $.ajax({
            data: JSON.stringify(data_form_insert),
            type: "POST",
            contentType: "application/json",
            url: `${CONFIG.apiBaseUrl}/sacvel/person`
        })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    if (data.error) {
                        toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                    }
                    else {
                        toastr.success("Operación correcta" + " " + data.message);
                        getContenido();
                        $('#modalAlumno').modal('hide');

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