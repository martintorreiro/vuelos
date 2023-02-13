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
    const idAerolinea = $(this).attr("data-id");
    $("#controles-aerolineas").load(
      `ajax/editar-aerolinea.php?id=${idAerolinea}`,
      () => {
        $("#cancelar").click(() => {
          $("#controles-aerolineas").html(
            "<button id='añadir-aerolinea'>Añadir Aerolinea</button>"
          );
          eventosAerolineas();
        });

        $("#editar-aerolinea-form").submit(function (e) {
          e.preventDefault();

          const editData = new FormData($("#editar-aerolinea-form").get(0));

          $.ajax({
            url: "servicio/editar-aerolinea.php",
            type: "POST",
            data: editData,
            processData: false,
            contentType: false,
            beforeSend: function () {
              //something before send
            },
            success: function (data) {
              if (data) {
                $("#controles-aerolineas").html(
                  "<button id='añadir-aerolinea'>Añadir Aerolinea</button>"
                );
                cargarAerolineas();
              } else {
              }
            },
          });
        });
      }
    );
  });
};
