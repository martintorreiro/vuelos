<?php
include "../db.php";

$resAeropuerto = $db->query("SELECT * FROM aeropuerto ");
$resAerolinea = $db->query("SELECT * FROM aerolinea ");
?>
<div>
    <h2 class="marg-b-20">Añadir Vuelo</h2>
    <form id="nuevo-vuelo-form" class="flex column jc-center ai-start" action="servicio/guardar-vuelo.php"
        method="post">

        <div class="marg-b-20">
            <label for="origen">Seleccionar origen:</label>
            <select name="origen" id="origen">
                <?php
                while($rowAeropuerto = $resAeropuerto->fetch_assoc()){
                    echo "<option value=".$rowAeropuerto['id'].">".$rowAeropuerto['nombre']."</option>";
                }
                ?>
            </select>
        </div>

        <div class="marg-b-20">
            <label for="destino">Seleccionar destino:</label>
            <select name="destino" id="destino">
                <?php
                $resAeropuerto->data_seek(0);
                while($rowAeropuerto = $resAeropuerto->fetch_assoc()){
                    echo "<option value=".$rowAeropuerto['id'].">".$rowAeropuerto['nombre']."</option>";
                }
                ?>
            </select>
        </div>

        <div class="marg-b-20">
            <label for="aerolinea">Seleccionar aerolinea:</label>
            <select name="aerolinea" id="aerolinea">
                <?php
                while($rowAerolinea = $resAerolinea->fetch_assoc()){
                    echo "<option value=".$rowAerolinea['id'].">".$rowAerolinea['nombre']."</option>";
                }
                ?>
            </select>
        </div>

        <div class="marg-b-20">
            <label for="nVuelo">Numero de vuelo:</label>
            <input type="text" id="nVuelo" name="nVuelo">
        </div>

        <div class="marg-b-20">
            <label for="hSalida">Hora de salida:</label>
            <input type="time" id="hSalida" name="hSalida">
        </div>

        <div class="marg-b-20">
            <label for="hLlegada">Hora de llegada:</label>
            <input type="time" id="hLlegada" name="hLlegada">
        </div>

        <div>
            <button>Enviar</button>
            <button id="cancelar" type="button">Cancelar</button>
        </div>
    </form>
</div>