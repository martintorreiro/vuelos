<?php

include "../db.php";

if($_POST){

    $id = $_POST["id"];
    $origen = $_POST["origen"];
    $destino = $_POST["destino"];
    $aerolinea = $_POST["aerolinea"];
    $nVuelo = $_POST["nVuelo"];
    $hSalida = $_POST["hSalida"];
    $hLlegada = $_POST["hLlegada"];
    
    $consulta = "UPDATE vuelo SET origen = '$origen',destino = '$destino',id_aerolinea = $aerolinea,
                 n_vuelo = '$nVuelo', h_salida = '$hSalida',h_llegada = '$hLlegada'  WHERE id=$id";
    $res = $db->query($consulta);

    echo $id ;
}

?>