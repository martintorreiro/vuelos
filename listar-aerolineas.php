<?php
include "header.php";
include "db.php";

?>
<div class="w-960 centrado ">
    <h1 class="marg-b-40">Listado Aerolineas</h1>
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
            <tbody id="contenedor-aerolineas">

            </tbody>
        </table>
    </div>

    <div id="controles-aerolineas">
        <button id="añadir-aerolinea">Añadir Aerolinea</button>
    </div>
</div>


<script src="js/controles/aerolineas.js"></script>
<script src="js/cargarAerolineas.js"></script>
<script>
$(function() {
    cargarAerolineas();
})
</script>
<?php
include "footer.php";
?>