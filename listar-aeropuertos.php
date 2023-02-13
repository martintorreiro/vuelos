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
                    <th>Nombre</th>
                    <th>Codigo IATA</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody id="contenedor-aeropuertos">

            </tbody>
        </table>
    </div>

    <div id="controles-aeropuertos">
        <button id="añadir-aeropuerto">Añadir Aeropuerto</button>
    </div>
</div>


<script src="js/controles/aeropuertos.js"></script>
<script src="js/cargarAeropuertos.js"></script>
<script>
$(function() {
    cargarAeropuertos();
})
</script>
<?php
include "footer.php";
?>