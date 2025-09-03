$(document).ready(inicializar);

function inicializar() {
    $("#BtnAceptar").click(function (e) {
        e.preventDefault();
        var formulario = document.getElementById('flogin');
        if (formulario.checkValidity()) {
            Login();
        } else {
            formulario.reportValidity();
        }
    });
}

function Login() {
    var Usuario = $("#usuario").val().trim();
    var Pass = $("#password").val().trim();

    if (!Usuario || !Pass) {
        swal("Error", "Por favor complete todos los campos", "error");
        return;
    }

    var button = document.getElementById('BtnAceptar');
    button.classList.add('loading');
    button.disabled = true;

    $.ajax({
        url: `${CONFIG.apiBaseUrl}/auth/login`,
        type: "POST",
        contentType: "application/json",
        dataType: "json",
        data: JSON.stringify({
            username: Usuario,
            password: Pass
        }),
    })
    .done(function (data, textStatus, jqXHR) {
        if (data.status === "success" && data.token) {
            localStorage.setItem("jwt_token", data.token);
            
            if (data.user) {
                localStorage.setItem("user_info", JSON.stringify(data.user));
            }
            
            document.cookie = `jwt_token=${data.token}; path=/; samesite=strict`;
            window.location.href = "admin_courses.php";
            
        } else if (data.status === "error") {
            swal({
                title: "Error de autenticación",
                text: data.message || "Credenciales incorrectas",
                icon: "error",
                button: "Entendido",
            });
        } else {
            swal("Error", "Respuesta inesperada del servidor", "error");
        }
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
        var errorTitle = "Error";
        var errorText = "Ocurrió un problema al intentar autenticarse";
    
        if (jqXHR.status === 401) {
            errorTitle = "No autorizado";
            errorText = jqXHR.responseJSON?.message || "Usuario o contraseña incorrectos";
        } else if (jqXHR.status === 0) {
            errorTitle = "Sin conexión";
            errorText = "No se pudo conectar al servidor. Verifique su conexión a internet.";
        } else if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
            errorText = jqXHR.responseJSON.message;
        }
    
        swal({
            title: errorTitle,
            text: errorText,
            icon: "error",
            button: "Entendido",
        });
    })
    .always(function() {
        button.classList.remove('loading');
        button.disabled = false;
    });
}