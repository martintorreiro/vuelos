const eventosAeropuertos = () => {
  $("#añadir-aeropuerto").click(function () {
    $("#controles-aeropuertos").load("ajax/nuevo-aeropuerto.php", () => {
      $("#cancelar").click(() => {
        $("#controles-aeropuertos").html(
          "<button id='añadir-aeropuerto'>Añadir Aeropuerto</button>"
        );
        eventosAeropuertos();
      });

      $("#nuevo-aeropuerto-form").submit(function (e) {
        e.preventDefault();

        const fdata = new FormData($("#nuevo-aeropuerto-form").get(0));

        $.ajax({
          url: "servicio/guardar-aeropuerto.php",
          type: "POST",
          data: fdata,
          processData: false,
          contentType: false,
          beforeSend: function () {
            //something before send
          },
          success: function (data) {
            if (data) {
              cargarAeropuertos();
              $("#nuevo-aeropuerto-form input").each(function () {
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
          eventosAeropuertos();
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
