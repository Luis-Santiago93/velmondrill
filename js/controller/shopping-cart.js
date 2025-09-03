function _addCarrito(e) {
    var curso = $(e).parent().parent().parent();
    var d = curso[0].infoCursos;

    swal({
        title: "¿Desea agregar este curso a su carrito?",
        text: d.nombre,
        icon: "info",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {

                var pedidoCarrito = JSON.parse(localStorage.getItem("PedidoCarrito") == null ? "[]" : localStorage.getItem("PedidoCarrito"));

                if (pedidoCarrito.length === 0) {

                    pedidoCarrito.push(d);

                    localStorage.setItem("PedidoCarrito", JSON.stringify(pedidoCarrito));

                    swal("Curso agregado!", "Operación correcta", {
                        icon: "success",
                    });
                }
                else {
                    console.log('Ya hay datos y verificar');
                    const resultado = pedidoCarrito.find(fruta => fruta.clave === d.clave);
                    if (resultado == undefined) {

                        pedidoCarrito.push(d);
                        localStorage.setItem("PedidoCarrito", JSON.stringify(pedidoCarrito));
                        swal("Curso agregado!", "Operación correcta", {
                            icon: "success",
                        });
                    }
                    else {

                        swal("Ocurrio un detalle!", "El curso " + d.nombre + " ya esta agregado en su carrito", {
                            icon: "warning",
                        });
                    }
                }

            } else {

            }
        });
}
