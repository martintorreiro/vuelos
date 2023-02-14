const cargarVuelos = () => {
  $.post(`servicio/cargar-vuelos.php`, function (data) {
    $("#contenedor-vuelos").html(data);
    eventosVuelos();
  });
};
