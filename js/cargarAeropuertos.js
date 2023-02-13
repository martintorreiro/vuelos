const cargarAeropuertos = () => {
  $.post(`servicio/cargar-aeropuertos.php`, function (data) {
    $("#contenedor-aeropuertos").html(data);
    eventosAeropuertos();
  });
};
