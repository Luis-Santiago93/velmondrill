function formatCursos(cursos) {
    cursos.sort((a, b) => a.CursoNombre.localeCompare(b.CursoNombre, undefined, { sensitivity: 'base' }));

    let table = `
        <table class="table table-sm table-bordered" style="width: 100%; margin-left: 0;">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Fecha</th>
                    <th>Vigencia</th>
                    <th>Estatus</th>
                </tr>
            </thead>
            <tbody>
    `;

    const hoy = new Date();

    for (let curso of cursos) {
        let claseFila = "";

        if (+curso.EstatusID === 3) {
            claseFila = "table-danger";
        } else if (curso.Vigencia && curso.Vigencia !== "0000-00-00") {
            const [year, month, day] = curso.Vigencia.split("-").map(Number);
            const fechaVigencia = new Date(year, month - 1, day); 
        
            const diffTime = fechaVigencia - hoy;
            const diffDays = diffTime / (1000 * 60 * 60 * 24);
          
            if (diffDays <= 31 && diffDays >= 0) {
                claseFila = "table-warning";
            }
        }

        table += `
            <tr class="small ${claseFila}">
                <td class="text-wrap" style="max-width:220px;">${curso.CursoNombre}</td>
                <td>${curso.Fecha}</td>
                <td>${curso.Vigencia}</td>
                <td>${curso.EstatusNombre}</td>
            </tr>
        `;
    }

    table += "</tbody></table>";
    return table;
}


function getContenido() {
    $("#contenido").empty();
    $('#example').DataTable().clear().destroy();

    $('#example').DataTable({
        serverSide: true,
        processing: true,
        responsive: true,
        paging: true,
        ordering: true,
        info: false,
        destroy: true,
        lengthMenu: [10, 20, 50],
        stateSave: true,
        ajax: {
            url: `${CONFIG.apiBaseUrl}/sacvel/programs/paginated`,
            type: 'POST',
            data: function (d) {
                return d;
            },
            dataSrc: function (json) {
                $('#cantidadProgramas').text(json.recordsTotal);
                return json.data;
            }
        },
        columns: [
            {
                data: null,
                orderable: false,
                className: 'details-control text-center',
                render: function () {
                    return `<i class="fas fa-plus-circle text-primary"></i>`;
                }
            },
            { data: "Programa" },
            {
                data: "NombreCompleto",
                render: function (data, type, row) {
                    const correo = row.Correo || 'No Asignado';
                    const telefono = row.Telefono || 'No Asignado';
                    return `
                        <span
                            data-toggle="tooltip"
                            data-html="true"
                            title="<b>Correo:</b> ${correo}<br><b>Teléfono:</b> ${telefono}">
                            ${data}
                        </span>`;
                }
            },
            { data: "Alta" },
            {
                data: "Cursos",
                orderable: false,
                render: function (data, type, row) {
                    const total = data.length;
                    const expirados = row.CursosNoVigentes;
                    return `
                        <span class="badge badge-secondary" title="Total de cursos">${total}</span>
                        <span class="badge badge-danger ml-1" title="No Vigentes">${expirados}</span>
                    `;
                }
            },
            {
                data: null,
                orderable: false,
                render: function (data, type, row) {
                    return `
                        <div class='btn-toolbar' style='justify-content: center; display: flex;' role='toolbar'>
                            <div class='btn-group mr-2' role='group'>
                                <button type="button" class='btn btn-sm btn-primary' title='Editar' onclick='editProgram(${JSON.stringify(data)})'>
                                    <i class='fas fa-edit'></i>
                                </button>
                            </div>
                            <div class='btn-group mr-2' role='group'>
                                <button type="button" class='btn btn-sm btn-danger' onclick='inactiveProgram(${JSON.stringify(data)})'>
                                    <i class='fas fa-trash'></i>
                                </button>
                            </div>
                        </div>
                    `;
                }
            },
            { data: "CursosTexto", visible: false, searchable: true }
        ],
        createdRow: function (row, data) {
            const expirados = data.Cursos.filter(c => +c.EstatusID === 3).length;
            if (expirados > 0) {
                $(row).addClass('table-danger');
            }
        },
        drawCallback: function () {
            $('[data-toggle="tooltip"]').each(function () {
                const $el = $(this);
                $el.tooltip('dispose');
                $el.tooltip({
                    html: true,
                    trigger: 'hover'
                });
            });
        },
        language: {
            search: "Buscar:",
            lengthMenu: "Filas por página _MENU_",
            zeroRecords: "Sin datos",
            infoEmpty: "Registros no disponibles",
            infoFiltered: "(filtrado de _MAX_ total registros)",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Previo"
            }
        }
    });
}

function loadAlumno(valorSeleccionar = null, defaultText = 'Seleccione un alumno') {
    const $select = $("#alumno");

    if ($select.hasClass("select2-hidden-accessible")) {
        $select.select2('destroy');
    }

    $select.empty();

    $select.select2({
        theme: 'bootstrap4',
        placeholder: defaultText,
        allowClear: true,
        width: '100%',
        ajax: {
            url: `${CONFIG.apiBaseUrl}/sacvel/person/search`,
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term
                };
            },
            processResults: function (data) {
                return {
                    results: data.data.map(function (item) {
                        return {
                            id: item.PersonaID,
                            text: item.Nombre
                        };
                    })
                };
            },
            cache: true
        },
        language: {
            inputTooShort: function () {
                return 'Por favor ingresa 4 o más caracteres';
            },
            searching: function () {
                return 'Buscando…';
            },
            noResults: function () {
                return 'No se encontraron resultados';
            },
            loadingMore: function () {
                return 'Cargando más resultados…';
            },
            errorLoading: function () {
                return 'Error al cargar resultados';
            }
        },
        minimumInputLength: 4
    });

    if (valorSeleccionar !== null) {
        var option = new Option(defaultText, valorSeleccionar, true, true);
        $select.append(option).trigger('change');
    }
}

function loadCourses(valorSeleccionar = null, defaultText = 'Seleccione un curso') {
    const $select = $("#curso");

    if ($select.hasClass("select2-hidden-accessible")) {
        $select.select2('destroy');
    }

    $select.empty();

    $select.select2({
        theme: 'bootstrap4',
        placeholder: defaultText,
        allowClear: true,
        width: '100%',
        ajax: {
            url: `${CONFIG.apiBaseUrl}/sacvel/courses/search`,
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                    q: params.term
                };
            },
            processResults: function (data) {
                return {
                    results: data.data.map(function (item) {
                        return {
                            id: item.CursoID,
                            text: item.Nombre
                        };
                    })
                };
            },
            cache: true
        },
        language: {
            inputTooShort: function () {
                return 'Por favor ingresa 2 o más caracteres';
            },
            searching: function () {
                return 'Buscando…';
            },
            noResults: function () {
                return 'No se encontraron resultados';
            },
            loadingMore: function () {
                return 'Cargando más resultados…';
            },
            errorLoading: function () {
                return 'Error al cargar resultados';
            }
        },
        minimumInputLength: 2
    });

    if (valorSeleccionar !== null) {
        var option = new Option(defaultText, valorSeleccionar, true, true);
        $select.append(option).trigger('change');
    }
}

function getCoursesToTable() {
    const cursos = [];

    $('#tablaCursos tbody tr').each(function () {
        const cursoId = $(this).data('curso-id');
        const nombre = $(this).find('td:eq(0)').text();
        const fecha = $(this).find('td:eq(1)').text();
        const vigencia = $(this).find('td:eq(2)').text();
        const estatusId = $(this).data('estatus-id')

        cursos.push({
            CursoID: cursoId,
            Nombre: nombre,
            Fecha: fecha,
            Vigencia: vigencia,
            EstatusID: estatusId
        });
    });

    return cursos;
}

$(document).ready(function () { 

    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const isAdmin = userInfo && userInfo.Rol === "Admin";

    if (!isAdmin) {
        $("#btnPrograma").css("visibility", "hidden");
    }

    $("#btnPrograma").click(function (e) {
        e.preventDefault();
        $("#frmPrograma")[0].reset();
        loadAlumno();
        loadCourses();
        $('#tablaCursos tbody').empty();
        $("#idPrograma").val(0);
        $("#modalPrograma").modal("show");
    });

    $("#btnEliminarPrograma").click(function (e) {
        e.preventDefault();
        DeleteProgram();
    });

    $("#btnGuardarPrograma").click(function (e) {
        const tablaTieneCursos = $('#tablaCursos tbody tr').length > 0;
        var form = document.getElementById('frmPrograma');
        if (!tablaTieneCursos) {
            toastr.warning('Debe agregar al menos un curso al programa');
            return;
        }
        form.classList.remove('was-validated');
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            toastr.warning('Complete los campos obligatorios del formulario');
            return;
        }
        SaveProgram();
    });

    $('#btnAgregarCurso').on('click', function () {

        $('#frmPrograma').removeClass('was-validated');
    
        const curso = $('#curso');
        const fecha = $('#fechaCurso');
        const vigencia = $('#vigenciaCurso');
    
        let valido = true;
    
        [curso, fecha].forEach(input => {
            if (!input.val()) {
                input.removeClass('is-valid').addClass('is-invalid');
                valido = false;
            } else {
                input.removeClass('is-invalid').removeClass('is-valid');
            }
        });
    
        if (!valido) {
            toastr.warning('Todos los campos del curso son requeridos');
            return;
        }
    
        const fechaVal = new Date(fecha.val());
        const vigenciaVal = new Date(vigencia.val());
    
        if (vigenciaVal < fechaVal) {
            toastr.warning('La fecha de vigencia no puede ser menor que la fecha del curso');
            vigencia.removeClass('is-valid').addClass('is-invalid');
            fecha.removeClass('is-invalid').addClass('is-valid');
            return;
        } else {
            vigencia.removeClass('is-invalid').addClass('is-valid');
            fecha.removeClass('is-invalid').addClass('is-valid');
        }
    
        let existe = false;
        $('#tablaCursos tbody tr').each(function () {
            const filaCursoId = $(this).data('curso-id');
    
            if (
                filaCursoId == curso.val()
            ) {
                existe = true;
                return false;
            }
        });
    
        if (existe) {
            toastr.warning('Este curso ya fue agregado');
            return;
        }
    
        addCourseToTable(curso.val(), fecha.val(), vigencia.val());
    });
    
    
    
    $('#tablaCursos tbody').on('click', '.btnEliminarCurso', function () {
        $(this).closest('tr').remove();
    });

    getContenido();

    $('#example tbody').on('click', 'td.details-control', function () {
        const tr = $(this).closest('tr');
        const row = $('#example').DataTable().row(tr);
    
        if (row.child.isShown()) {
            row.child.hide();
            tr.removeClass('shown');
            $(this).find('i').removeClass('fa-minus-circle text-danger').addClass('fa-plus-circle text-primary');
        } else {
            const rowData = row.data();
            const cursos = rowData.Cursos || [];
            row.child(formatCursos(cursos)).show();
            tr.addClass('shown');
            $(this).find('i').removeClass('fa-plus-circle text-primary').addClass('fa-minus-circle text-danger');
        }
    });
    

    $('#tablaCursos tbody').on('click', '.btnRenovarCurso', function () {
        const fila = $(this).closest('tr');
        const cursoId = fila.data('curso-id');

        const fecha = fila.find('td:eq(1)').text();
        const vigencia = fila.find('td:eq(2)').text();

        fila.find('td:eq(1)').html(`<input type="date" class="form-control form-control-sm nuevaFecha" value="${fecha}">`);
        fila.find('td:eq(2)').html(`<input type="date" class="form-control form-control-sm nuevaVigencia" value="${vigencia}">`);

        const botones = `
            <button type="button" class="btn btn-sm btn-success btnGuardarRenovacion mr-1">
                <i class="fas fa-check"></i>
            </button>
            <button type="button" class="btn btn-sm btn-secondary btnCancelarRenovacion">
                <i class="fas fa-times"></i>
            </button>
        `;
        fila.find('td:eq(4)').html(botones);
    });

    $('#tablaCursos tbody').on('click', '.btnGuardarRenovacion', function () {
        const fila = $(this).closest('tr');
        const nuevaFecha = fila.find('.nuevaFecha').val();
        const nuevaVigencia = fila.find('.nuevaVigencia').val();
    
        if (!nuevaFecha || !nuevaVigencia) {
            toastr.warning('Debe ingresar fechas válidas');
            return;
        }

        const añoActual = new Date().getFullYear();
        const añoCurso = new Date(nuevaFecha).getFullYear();
    
        if (añoCurso < añoActual) {
            toastr.warning('El año de la fecha del curso no puede ser menor al año actual');
            return;
        }
    
        if (nuevaVigencia < nuevaFecha) {
            toastr.warning('La vigencia no puede ser menor a la fecha');
            return;
        }
    
        fila.find('td:eq(1)').text(nuevaFecha);
        fila.find('td:eq(2)').text(nuevaVigencia);
    
        const botones = `
            <button type="button" class="btn btn-sm btn-danger btnEliminarCurso">
                <i class="fas fa-trash-alt"></i>
            </button>
        `;
        fila.find('td:eq(4)').html(botones);
    
        fila.removeClass('table-danger');
        fila.data('estatus-id', 1);
    
        toastr.success('Curso renovado correctamente');
    });
    
    $('#tablaCursos tbody').on('click', '.btnCancelarRenovacion', function () {
        const fila = $(this).closest('tr');
        const cursoId = fila.data('curso-id');
        const fecha = fila.find('.nuevaFecha').attr('value');
        const vigencia = fila.find('.nuevaVigencia').attr('value');
    
        fila.find('td:eq(1)').text(fecha);
        fila.find('td:eq(2)').text(vigencia);
    
        const botones = `
            <button type="button" class="btn btn-sm btn-primary btnRenovarCurso mr-1">
                <i class="fas fa-sync-alt"></i>
            </button>
            <button type="button" class="btn btn-sm btn-danger btnEliminarCurso">
                <i class="fas fa-trash-alt"></i>
            </button>
        `;
        fila.find('td:eq(4)').html(botones);
    });

});

function addCourseToTable(cursoId, fecha, vigencia, cursoNombre = null, estatusId = 1) {
    if (!cursoNombre) {
        cursoNombre = $('#curso option:selected').text();
    }

   let claseFila = "";
    const isExpirado = +estatusId === 3;

    if (isExpirado) {
        claseFila = "table-danger";
    } else if (vigencia && vigencia !== "0000-00-00") {
        const hoy = new Date();
        hoy.setHours(0, 0, 0, 0);

        const [year, month, day] = vigencia.split("-").map(Number);
        const fechaVigencia = new Date(year, month - 1, day);
        fechaVigencia.setHours(0, 0, 0, 0);

        const diffTime = fechaVigencia - hoy;
        const diffDays = diffTime / (1000 * 60 * 60 * 24);

        if (diffDays <= 31 && diffDays >= 0) {
            claseFila = "table-warning";
        }
    }

    const btnRenovar = isExpirado
        ? `<button type="button" class="btn btn-sm btn-primary btnRenovarCurso mr-1">
                <i class="fas fa-sync-alt"></i></button>`
        : '';

    const nuevaFila = `
        <tr class="${claseFila} small" data-curso-id="${cursoId}" data-estatus-id="${estatusId}">
            <td class="text-wrap" style="max-width:220px;">${cursoNombre}</td>
            <td>${fecha}</td>
            <td>${vigencia}</td>
            <td class="d-none">${estatusId}</td>
            <td class="text-center">
                ${btnRenovar}
                <button type="button" class="btn btn-sm btn-danger btnEliminarCurso">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </td>
        </tr>
    `;

    $('#tablaCursos tbody').append(nuevaFila);

    if (arguments.length < 4 || cursoNombre === null) {
        loadCourses();
        $('#fechaCurso').val('');
        $('#vigenciaCurso').val('');
    }
}

function editProgram(info) {
    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const isAdmin = userInfo.Rol === 'Admin';

    $("#idPrograma").val(info.ProgramaID);
    $("#programa").val(info.Programa);
    loadAlumno(info.PersonaID, info.NombreCompleto);
    loadCourses();

    $('#tablaCursos tbody').empty();

    if (Array.isArray(info.Cursos)) {
        info.Cursos
            .sort((a, b) => a.CursoNombre.localeCompare(b.CursoNombre))
            .forEach(curso => {
                addCourseToTable(
                    curso.CursoID,
                    curso.Fecha,
                    curso.Vigencia,
                    curso.CursoNombre,
                    curso.EstatusID
                );
            });
    }

    $("#btnGuardarPrograma").prop("disabled", !isAdmin);
    $("#modalPrograma").modal("show");
}

function inactiveProgram(data) {
    $("#idEliminarPrograma").val(data.ProgramaID);
    $("#nProgramaEliminar").val(data.Programa);
    $("#alumnoProgramaEliminar").val(data.NombreCompleto);

    $("#modalEliminarPrograma").modal("show");
}

function DeleteProgram() {
    const userInfo = JSON.parse(localStorage.getItem('user_info'));
    const usuario = userInfo ? userInfo.Usuario : "desconocido";

    var payload = {
        programa_id:$("#idEliminarPrograma").val(),
        usuario:usuario
    }

    $.ajax({
        data: JSON.stringify(payload),
        type: "DELETE",
        contentType: 'application/json',
        url: `${CONFIG.apiBaseUrl}/sacvel/programs`
    })
        .done(function (data, textStatus, jqXHR) {
            if (console && console.log) {
                if (data.error) {
                    toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                }
                else {
                    toastr.success("Operación correcta" + " " + data.message);
                    getContenido();
                    $('#modalEliminarPrograma').modal('hide');
                }
            }
        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                toastr.error("La solicitud a fallado" + " " + textStatus + " " + "error");
            }
        });
}

function SaveProgram() {
    if ($("#idPrograma").val() > 0) {

        var data_form_update = {
            ProgramaID: $("#idPrograma").val(),
            Programa: $("#programa").val(),
            PersonaID: $("#alumno").val(),
            Cursos: getCoursesToTable()
        }

        $.ajax({
            data: JSON.stringify(data_form_update),
            type: "PUT",
            contentType: 'application/json',
            url: `${CONFIG.apiBaseUrl}/sacvel/programs`
        })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    if (data.error) {
                        toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                    }
                    else {
                        toastr.success("Operación correcta" + " " + data.message);
                        getContenido();
                        $('#modalPrograma').modal('hide');

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
            Programa: $("#programa").val(),
            PersonaID: $("#alumno").val(),
            Cursos: getCoursesToTable()
        }

        $.ajax({
            data: JSON.stringify(data_form_insert),
            type: "POST",
            contentType: "application/json",
            url: `${CONFIG.apiBaseUrl}/sacvel/programs`
        })
            .done(function (data, textStatus, jqXHR) {
                if (console && console.log) {
                    if (data.error) {
                        toastr.error("Hubo un inconveniente" + " " + data.message + " " + "error");
                    }
                    else {
                        toastr.success("Operación correcta" + " " + data.message);
                        getContenido();
                        $('#modalPrograma').modal('hide');

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