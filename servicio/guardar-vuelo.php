<?php

include "../db.php";

if($_POST){
    
    $origen = $_POST["origen"];
    $destino = $_POST["destino"];
    $aerolinea = $_POST["aerolinea"];
    $nVuelo = $_POST["nVuelo"];
    $hSalida = $_POST["hSalida"];
    $hLlegada = $_POST["hLlegada"];
    
    $consulta = "INSERT INTO vuelo (origen,destino,id_aerolinea,n_vuelo,h_salida,h_llegada) 
                            VALUES ('$origen','$destino','$aerolinea','$nVuelo','$hSalida','$hLlegada')";
    $res = $db->query($consulta);

    echo $res ;
}

?>