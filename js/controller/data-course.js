$(document).ready(inicializar);
function inicializar() {
    setCursoSSPA();
    setCursoBasico();
    setCursoAcido();
    setCursoNom();
    setCursoExtintores();
    setCursoRigPass();
    setCursoSPPTR();
    setCursoVerificadorGas();
    setCursoEspacio();
}


function setCursoSSPA() {
    var datos = {
        "clave":1,
        "nombre":"Anexo SSPA",
        "precio": 450.00,
        "cantidad":1.00,
        "img" :"images/course-online/B-ANEXO.png"
    };

    var listaProducto = $("#Curso1");

    listaProducto[0]["infoCursos"] = datos;
}

function setCursoBasico() {
    var datos = {
        "clave":2,
        "nombre":"Básico de seguridad",
        "precio": 450.00,
        "cantidad":1.00,
        "img" :"images/course-online/B-BASICO-DE-SEGURIDAD.png"
    };

    var listaProducto = $("#Curso2");

    listaProducto[0]["infoCursos"] = datos;
}

function setCursoAcido() {
    var datos = {
        "clave":3,
        "nombre":"Ácido Sulfhídrico (H2S)",
        "precio": 450.00,
        "cantidad":1.00,
        "img" :"images/course-online/B-H2S.png"
    };

    var listaProducto = $("#Curso3");

    listaProducto[0]["infoCursos"] = datos;
}

function setCursoNom() {
    var datos = {
        "clave":4,
        "nombre":"NOM-018",
        "precio": 450.00,
        "cantidad":1.00,
        "img" :"images/course-online/B-NOM-018.png"
    };

    var listaProducto = $("#Curso4");

    listaProducto[0]["infoCursos"] = datos;
}

function setCursoExtintores() {
    var datos = {
        "clave":5,
        "nombre":"Prevención de incendio y manejo de extintores",
        "precio": 450.00,
        "cantidad":1.00,
        "img" :"images/course-online/B-CONTRA-INCENDIO.png"
    };

    var listaProducto = $("#Curso5");

    listaProducto[0]["infoCursos"] = datos;
}

function setCursoRigPass() {
    var datos = {
        "clave":6,
        "nombre":"RIG PASS",
        "precio": 1290.00,
        "cantidad":1.00,
        "img" :"images/course-online/B-RIG-PASS.png"
    };

    var listaProducto = $("#Curso6");

    listaProducto[0]["infoCursos"] = datos;
}

function setCursoSPPTR() {
    var datos = {
        "clave":7,
        "nombre":"Sistema de permisos de trabajo con riesgo (SPPTR)",
        "precio": 1100.00,
        "cantidad":1.00,
        "img" :"images/course-online/B-SIGNATARIO.png"
    };

    var listaProducto = $("#Curso7");

    listaProducto[0]["infoCursos"] = datos;
}

function setCursoVerificadorGas() {
    var datos = {
        "clave":8,
        "nombre":"Verificador de gas",
        "precio": 450.00,
        "cantidad":1.00,
        "img" :"images/course-online/B-VERIFICADOR.png"
    };

    var listaProducto = $("#Curso8");

    listaProducto[0]["infoCursos"] = datos;
}
function setCursoEspacio() {
    var datos = {
        "clave":9,
        "nombre":"Espacios confinados",
        "precio": 450.00,
        "cantidad":1.00,
        "img" :"images/course-online/B-ESPACIOS-CONFINADOS.png"
    };

    var listaProducto = $("#Curso9");

    listaProducto[0]["infoCursos"] = datos;
}