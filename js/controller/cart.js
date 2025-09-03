$(document).ready(inicializar);
var iva;
function inicializar() {
    //localStorage.removeItem("PedidoCarrito");
    //resumenCarrito();
    //verificarCarrito();
    SetCarritoCliente();

    $("#BtnBorrarTodo").click(function (e) {

        e.preventDefault();

        BorradoTotal();
    });

    $("#BtnPedido").click(function (e) {
        e.preventDefault();
        $('#modalFormIns').modal('show');
    });

    $("#btnSolicitud").click(function (e) {
        var formulario = document.getElementById('frmPedido');
        if (formulario.checkValidity()) {
            solicitarPedido();
        }
    })


}

function ActualizarPedido() {

    var total = 0.0;
    var cantidades = 0;

    var items = [];

    $("#ListadoProductosP tbody tr").each(function () {

        var info = this.infoProductos;

        items.push(info);

        total += info.precio * info.cantidad;

        cantidades += info.cantidad;
    });

    if (items.length == 0) {

        localStorage.removeItem("PedidoCarrito");

        $("#MsjCarrito").html("<h4><b> Carrito Vacío</b>. Aún no tienes cursos en tu carrito, llénalo con los cursos disponibles en nuestro catálogo...</h3>");
        $("#MsjCarrito2").html("<h3>Pulse <a href='curso-en-linea.php'><i class='ion-ios-redo' data-pack='ios' data-tags='forward'></i>aquí</a> para empezar a comprar.</h3>");

        $("#contenedor-carrito").hide();


    } else {

        localStorage.setItem("PedidoCarrito", JSON.stringify(items));
    }

    // $("span.simpleCart_total").html(ParseToCurrency(total));

    // $("span.simpleCart_quantity").html(cantidades);

    return total;
}


function SetCarritoCliente() {

    var datoscarrito = [];

    var pedidoCarrito = JSON.parse(localStorage.getItem("PedidoCarrito"));

    if (pedidoCarrito) {

        var Listado = groupBy(pedidoCarrito, function (item) { return [item.id, item.nombre]; });

        for (var i in Listado) {

            var item = Listado[i][0];


            var li = item;
            cantidad = 0.0;
            li.total = 0.0;
            li.subtotal = 0.0;


            for (var j in Listado[i]) {

                cantidad += parseFloat(Listado[i][j].cantidad);
                li.subtotal += (parseFloat(Listado[i][j].cantidad) * parseFloat(Listado[i][j].precio));
                li.total += (parseFloat(Listado[i][j].cantidad) * parseFloat(Listado[i][j].precio));
            }

            li.cantidad = cantidad;

            datoscarrito.push(li);
        }

        for (var i in datoscarrito) {

            var li = datoscarrito[i];

            var html = "";
            html += "<tr valign='middle'>";
            html += "    <td align='center'>";
            html += "       <button class='btn btn-danger' type = 'button' onclick='Eliminar(this," + li.thumbnails + ")'><span class='ion-trash-a'></span></button>";
            html += "   </td>";
            html += "   <td align='left'>";
            html += "       <div class='hidden-xs hidden-sm col-md-3'><img class='img-responsive' src='" + li.img + "' height='90' width='90'/></div>    ";
            html += "       <div class='col-sm-12 col-md-9'>" + li.nombre + "</div>";
            html += "   </td>";
            html += "   <td align='right'>";
            html += "       <font size='2'>" + ParseToCurrency(li.precio) + "</font>";
            html += "   </td>";
            html += "   <td align='center'>";
            html += "             <font size='2'>" + li.cantidad + "</font>";
            html += "   </td>";
            html += "   <td align='right'>";
            html += "       <font size='2'>" + ParseToCurrency(li.total); + "</font>";
            html += "   </td>";
            html += "</tr>";

            var tr = $(html);

            tr[0]["infoProductos"] = li;

            $("#ListadoProductosP").append(tr);

        }
    }

    SetResumenTotales();
}


function SetResumenTotales() {


    var total = ActualizarPedido();

    $("#pSubtotal").html("<b>Total:</b>	" + ParseToCurrency(total));


}


function Calculo(elemento) {

    var tr = $(elemento).closest('tr');

    var infoProducto = tr[0].infoProductos;

    var cantidad = parseFloat(tr.find('input:eq(0)').val());

    if (cantidad > infoProducto.existencia) {

        $.BAlert({
            type: 'warning',
            html: 'Cantidad de productos no disponible'
        });

        return false;
    }

    infoProducto.cantidad = cantidad;
    infoProducto.subtotal = cantidad * infoProducto.neto;
    infoProducto.total = cantidad * infoProducto.precio;

    tr.find("td:eq(4)").html(ParseToCurrency(infoProducto.subtotal));

    SetResumenTotales();

}


function groupBy(array, f) {

    var groups = {};

    array.forEach(function (o) {
        var group = JSON.stringify(f(o));
        groups[group] = groups[group] || [];
        groups[group].push(o);
    });
    return Object.keys(groups).map(function (group) {
        return groups[group];
    })
}




function solicitarPedido() {

    var nombre = $("#inputNombre").val();
    var apellidos = $("#inputApellidos").val();
    var curp = $("#inputCurp").val();
    var correo = $("#inputCorreo").val();
    var celular = $("#inputCelular").val();
    var factura = $("#inputFactura").val();
    var termino = $("#inputTermino").val();
    var subtotal = ActualizarPedido();
    var iva=subtotal*0.16;
    
   

    if (curpValida(curp)) {
        
        var pedido = JSON.parse(localStorage.getItem("PedidoCarrito"));
       
        if (termino == 1) {

            if (factura == 1) {
                var ivaf = Number(iva.toFixed(2));
                var totalf=subtotal+ivaf;
                var rtotal=Number(totalf.toFixed(2));
                EnviarEmail(pedido,"De Velmondrill <operaciones@velmondrill.com>",correo,nombre,apellidos,curp,celular,subtotal,rtotal,ivaf)
                EnviarNotificacion(pedido,"De Velmondrill <operaciones@velmondrill.com>",correo,nombre,apellidos,curp,celular,subtotal,rtotal,ivaf)
            }
                var iva2 = 0.00;
                var totalf2=subtotal+iva2;
                var rtotal2=Number(totalf2.toFixed(2));
                EnviarEmail(pedido,"De Velmondrill <operaciones@velmondrill.com>",correo,nombre,apellidos,curp,celular,subtotal,rtotal2,iva2)
                EnviarNotificacion(pedido,"De Velmondrill <operaciones@velmondrill.com>",correo,nombre,apellidos,curp,celular,subtotal,rtotal2,iva2)
                $('#modalFormIns').modal('hide');
                $("#contenidoProductosP").empty();

                SetResumenTotales();
            


        }
        else {
            swal("Ocurrio un detalle!", "No acepto los terminos y condiciones", {
                icon: "warning",
            });
        }
    } else {
        swal("Ocurrio un detalle!", "La curp ingresada es incorrecta", {
            icon: "error",
        });
    }
}



function Eliminar(element, ic) {
    swal({
        title: "¿Realmente desea borrar este curso de su pedido?",
        text: "Se eliminara curso seleccionado",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                $(element).closest('tr').remove();

                SetResumenTotales();

            } else {

            }
        });
}

function BorradoTotal() {
    swal({
        title: "¿Realmente desea vaciar su carrito de cursos?",
        text: "Eliminara de su carrito todos los cursos seleccionados",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                $("#contenidoProductosP").empty();

                SetResumenTotales();

            } else {

            }
        });

}

function Convertir(usDate) {
    var dateParts = usDate.split(/(\d{1,2})\/(\d{1,2})\/(\d{4})/);
    return dateParts[3] + "-" + dateParts[2] + "-" + dateParts[1];
}

function curpValida(curp) {
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
        validado = curp.match(re);

    if (!validado)  //Coincide con el formato general?
        return false;

    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma = 0.0,
            lngDigito = 0.0;
        for (var i = 0; i < 17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10)
            return 0;
        return lngDigito;
    }
    if (validado[2] != digitoVerificador(validado[1]))
        return false;

    return true; //Validado
}

function EnviarEmail(carrito,titulo,email,nombre,apellidos,curp,celular,subtotal,total,iva) {

    $.ajax({
        data: {
            CarritoCurso: carrito,
            Titulo:titulo,
            Correo:email,
            Nombre:nombre,
            Apellidos:apellidos,
            Curp:curp,
            Celular:celular,
            Total:total,
            Subtotal:subtotal,
            IVA:iva
        },
        type: "POST",
        dataType: "json",
        url: "enviar-correo.php",
    })
        .done(function (data, textStatus, jqXHR) {
            var Resultado = data;

            swal("Operación correcta", "Solicitud Enviada", {
                icon: "success",
            });

        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                alert("La solicitud a fallado: " + textStatus);
            }
        });
}

function EnviarNotificacion(carrito,titulo,email,nombre,apellidos,curp,celular,subtotal,total,iva) {

    $.ajax({
        data: {
            CarritoCurso: carrito,
            Titulo:titulo,
            Correo:email,
            Nombre:nombre,
            Apellidos:apellidos,
            Curp:curp,
            Celular:celular,
            Total:total,
            Subtotal:subtotal,
            IVA:iva
        },
        type: "POST",
        dataType: "json",
        url: "notificacion.php",
    })
        .done(function (data, textStatus, jqXHR) {
            var Resultado = data;

        })
        .fail(function (jqXHR, textStatus, errorThrown) {
            if (console && console.log) {
                alert("La solicitud a fallado: " + textStatus);
            }
        });
}