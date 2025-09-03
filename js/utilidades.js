function ParseToCurrency(d) {

    return Number(d).toLocaleString('es-mx', { style: "currency", currency: "MXN" })
};

function ParseToDecimal(d) {

    return Number(d).toLocaleString('es-mx', { style: "decimal" })
};