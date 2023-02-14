<?php
include "header.php";
include "db.php";

?>
<div class="w-960 centrado ">
    <h1 class="marg-b-40">Listado Aeropuertos</h1>
    <div class="contenedor-tabla flex jc-center ai-start marg-b-40">
        <table>
            <thead>
                <tr>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Aerolinea</th>
                    <th>Numero de Vuelo</th>
                    <th>Hora de salida</th>
                    <th>Hora de llegada</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody id="contenedor-vuelos">

            </tbody>
        </table>
    </div>

    <div id="controles-vuelos">
        <button id="añadir-vuelo">Añadir Vuelo</button>
    </div>
</div>


<script src="js/controles/vuelos.js"></script>
<script src="js/cargarVuelos.js"></script>
<script>
$(function() {
    cargarVuelos();
})
</script>
<?php
include "footer.php";
?>