<?php
include "../db.php";
$id=$_GET["id"];
$resAeropuerto = $db->query("SELECT * FROM aeropuerto ");
$resAerolinea = $db->query("SELECT * FROM aerolinea ");
$res = $db->query("SELECT * FROM vuelo WHERE id = $id");
$row = $res->fetch_assoc();
?>

<div>
    <h2 class="marg-b-20">Editar Vuelo</h2>
    <form id="editar-vuelo-form" class="flex column jc-center ai-start" action="servicio/editar-vuelo.php"
        method="post">

        <input name="id" type="hidden" value="<?php echo $id?>">

        <div class="marg-b-20">
            <label for="origen">Seleccionar origen:</label>
            <select name="origen" id="origen">
                <?php
                while($rowAeropuerto = $resAeropuerto->fetch_assoc()){
                    if($rowAeropuerto['id']==$row['origen']){
                        echo "<option value=".$rowAeropuerto['id']." selected>".$rowAeropuerto['nombre']."</option>";
                    }else{
                        echo "<option value=".$rowAeropuerto['id'].">".$rowAeropuerto['nombre']."</option>";
                    }
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
                    if($rowAeropuerto['id']==$row['destino']){
                        echo "<option value=".$rowAeropuerto['id']." selected>".$rowAeropuerto['nombre']."</option>";
                    }else{
                        echo "<option value=".$rowAeropuerto['id'].">".$rowAeropuerto['nombre']."</option>";
                    }
                }
                ?>
            </select>
        </div>

        <div class="marg-b-20">
            <label for="aerolinea">Seleccionar aerolinea:</label>
            <select name="aerolinea" id="aerolinea">
                <?php
                while($rowAerolinea = $resAerolinea->fetch_assoc()){
                    if($rowAerolinea==$row['id_aerolinea']){
                        echo "<option value=".$rowAerolinea['id']." selected>".$rowAerolinea['nombre']."</option>";
                    }else{
                    echo "<option value=".$rowAerolinea['id'].">".$rowAerolinea['nombre']."</option>";
                    }
                }
                ?>
            </select>
        </div>

        <div class="marg-b-20">
            <label for="nVuelo">Numero de vuelo:</label>
            <input type="text" id="nVuelo" name="nVuelo" value="<?php echo $row['n_vuelo']?>">
        </div>

        <div class="marg-b-20">
            <label for="hSalida">Hora de salida:</label>
            <input type="time" id="hSalida" name="hSalida" value="<?php echo $row['h_salida']?>">
        </div>

        <div class="marg-b-20">
            <label for="hLlegada">Hora de llegada:</label>
            <input type="time" id="hLlegada" name="hLlegada" value="<?php echo $row['h_llegada']?>">
        </div>

        <div>
            <button>Enviar</button>
            <button id="cancelar" type="button">Cancelar</button>
        </div>
    </form>
</div>