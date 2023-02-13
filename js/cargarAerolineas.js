const cargarAerolineas = () => {
  $.post(`servicio/cargar-aerolineas.php`, function (data) {
    $("#contenedor-aerolineas").html(data);
    eventosAerolineas();
  });
};
