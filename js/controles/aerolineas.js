const eventosAerolineas = () => {
  $("#añadir-aerolinea").click(function () {
    $("#controles-aerolineas").load("ajax/nueva-aerolinea.php", () => {
      $("#cancelar").click(() => {
        $("#controles-aerolineas").html(
          "<button id='añadir-aerolinea'>Añadir Aerolinea</button>"
        );
        eventosAerolineas();
      });

      $("#nueva-aerolinea-form").submit(function (e) {
        e.preventDefault();

        const fdata = new FormData($("#nueva-aerolinea-form").get(0));

        $.ajax({
          url: "servicio/guardar-aerolinea.php",
          type: "POST",
          data: fdata,
          processData: false,
          contentType: false,
          beforeSend: function () {
            //something before send
          },
          success: function (data) {
            if (data) {
              cargarAerolineas();
              $("#nueva-aerolinea-form input").each(function () {
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
    const idAeropuerto = $(this).attr("data-id");
    $("#controles-aeropuertos").load(
      `ajax/editar-aeropuerto.php?id=${idAeropuerto}`,
      () => {
        $("#cancelar").click(() => {
          $("#controles-aeropuertos").html(
            "<button id='añadir-aeropuerto'>Añadir Aeropuerto</button>"
          );
          eventosControles();
        });

        $("#editar-aeropuerto-form").submit(function (e) {
          e.preventDefault();

          const editData = new FormData($("#editar-aeropuerto-form").get(0));

          $.ajax({
            url: "servicio/editar-aeropuerto.php",
            type: "POST",
            data: editData,
            processData: false,
            contentType: false,
            beforeSend: function () {
              //something before send
            },
            success: function (data) {
              console.log("-----", data);
              if (data) {
                $("#controles-aeropuertos").html(
                  "<button id='añadir-aeropuerto'>Añadir Aeropuerto</button>"
                );
                cargarAeropuertos();
              } else {
              }
            },
          });
        });
      }
    );
  });
};
