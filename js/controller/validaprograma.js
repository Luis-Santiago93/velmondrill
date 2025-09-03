$(document).ready(inicializar);
function inicializar() {
	$('#validacion').footable({
		"filtering": {
			"enabled": true
		}
	});
	
	
	 $("#btnConsultar").click(function (e) {
        var formulario = document.getElementById('formconsulta');
        if (formulario.checkValidity()) {
            SetTabla();
			/* console.log($('#programa').val()); */
        }
    });
}



function SetTabla() {
  $("#validacion tbody").empty();
    $.ajax({
        data: {pPrograma:$('#programa').val()},
        type: "POST",
        dataType: "json",
        url: "model/consulta.php",
    })
 .done(function (data, textStatus, jqXHR) {
     if (console && console.log) {
         var Listado = data;
		 /*console.log(Listado);*/
         SetDateTable(Listado);
		 $('.nav-tabs a[href="#menu1"]').tab('show');
     }
 })
 .fail(function (jqXHR, textStatus, errorThrown) {
     if (console && console.log) {
         swal("Problema con su internet o la solicitud a fallado: " + textStatus,"", "error");
     }
 });

}

function SetDateTable(pDatos) {
	 var tablaDatos = $("#content");

    for (var i = 0; i < pDatos.length; i++) {
      var listado = pDatos[i];
      
		var tr = $("<tr valign='middle'><td style='text-align: left'><font size='2'>" + listado.programa + "</font></td><td style='text-align: left'>" + listado.nombre + "</td><td style='text-align: left'><font size='2'>" + listado.curso + "</font></td><td style='text-align: left'><font size='2'>" + listado.fecha + "</font></td><td style='text-align: left'><font size='2'>" + listado.vigencia + "</font></td><td style='text-align: left'><font size='2'>"+listado.estatus+"</font></td></tr>");
        tr[0]["info"] = listado;
        tablaDatos.append(tr);
    }
    $('#validacion').footable({
		"filtering": {
			"enabled": true
		}
	});
}
