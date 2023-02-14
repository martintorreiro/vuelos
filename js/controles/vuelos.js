const eventosVuelos = () => {
  $("#añadir-vuelo").click(function () {
    $("#controles-vuelos").load("ajax/nuevo-vuelo.php", () => {
      $("#cancelar").click(() => {
        $("#controles-vuelos").html(
          "<button id='añadir-vuelo'>Añadir Vuelo</button>"
        );
        eventosVuelos();
      });

      $("#nuevo-vuelo-form").submit(function (e) {
        e.preventDefault();

        const fdata = new FormData($("#nuevo-vuelo-form").get(0));

        $.ajax({
          url: "servicio/guardar-vuelo.php",
          type: "POST",
          data: fdata,
          processData: false,
          contentType: false,
          beforeSend: function () {
            //something before send
          },
          success: function (data) {
            if (data) {
              cargarVuelos();
              $("#nuevo-vuelo-form input").each(function () {
                this.value = "";
              });
            } else {
            }
          },
        });
      });
    });
  });

  $(".editar").click(function () {
    const idVuelo = $(this).attr("data-id");
    $("#controles-vuelos").load(`ajax/editar-vuelo.php?id=${idVuelo}`, () => {
      $("#cancelar").click(() => {
        $("#controles-vuelos").html(
          "<button id='añadir-vuelo'>Añadir Vuelo</button>"
        );
        eventosVuelos();
      });

      $("#editar-vuelo-form").submit(function (e) {
        e.preventDefault();

        const editData = new FormData($("#editar-vuelo-form").get(0));

        $.ajax({
          url: "servicio/editar-vuelo.php",
          type: "POST",
          data: editData,
          processData: false,
          contentType: false,
          beforeSend: function () {
            //something before send
          },
          success: function (data) {
            if (data) {
              $("#controles-vuelos").html(
                "<button id='añadir-vuelo'>Añadir Vuelo</button>"
              );
              cargarVuelos();
            } else {
            }
          },
        });
      });
    });
  });
};
