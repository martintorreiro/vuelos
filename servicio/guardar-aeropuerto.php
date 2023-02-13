<?php

include "../db.php";

if($_POST){
    
    $nombre = $_POST["nombre"];
    $iata = $_POST["iata"];
    
    $consulta = "INSERT INTO aeropuerto (nombre,iata) VALUES ('$nombre','$iata')";
    $res = $db->query($consulta);

    echo $res ;
}

?>