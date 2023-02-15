<?php
include "../db.php";

$resAeropuerto = $db->query("SELECT * FROM aeropuerto ");
$resAerolinea = $db->query("SELECT * FROM aerolinea ");
?>
<div class="formulario_estandar">
    <div class="cabecera">
        <h2>Añadir Vuelo</h2>
    </div>
    <form id="nuevo-vuelo-form" action="servicio/guardar-vuelo.php" method="post">
        <div class="form_body">
            <div class="form_group">
                <label for="origen">Seleccionar origen:</label>
                <select name="origen" id="origen" required>
                    <?php
                while($rowAeropuerto = $resAeropuerto->fetch_assoc()){
                    echo "<option value=".$rowAeropuerto['id'].">".$rowAeropuerto['nombre']."</option>";
                }
                ?>
                </select>
            </div>

            <div class="form_group">
                <label for="destino">Seleccionar destino:</label>
                <select name="destino" id="destino" required>
                    <?php
                $resAeropuerto->data_seek(0);
                while($rowAeropuerto = $resAeropuerto->fetch_assoc()){
                    echo "<option value=".$rowAeropuerto['id'].">".$rowAeropuerto['nombre']."</option>";
                }
                ?>
                </select>
            </div>

            <div class="form_group">
                <label for="aerolinea">Seleccionar aerolinea:</label>
                <select name="aerolinea" id="aerolinea" required>
                    <?php
                while($rowAerolinea = $resAerolinea->fetch_assoc()){
                    echo "<option value=".$rowAerolinea['id'].">".$rowAerolinea['nombre']."</option>";
                }
                ?>
                </select>
            </div>

            <div class="form_group">
                <label for="nVuelo">Numero de vuelo:</label>
                <input type="text" id="nVuelo" name="nVuelo" required>
            </div>

            <div class="form_group">
                <label for="hSalida">Hora de salida:</label>
                <input type="time" id="hSalida" name="hSalida" required>
            </div>

            <div class="form_group">
                <label for="hLlegada">Hora de llegada:</label>
                <input type="time" id="hLlegada" name="hLlegada" required>
            </div>
        </div>

        <div class="controls">
            <button>Enviar</button>
            <button id="cancelar" type="button">Cancelar</button>
        </div>
    </form>
</div>