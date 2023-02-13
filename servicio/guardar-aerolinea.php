<?php

include "../db.php";

if($_POST){
    
    $nombre = $_POST["nombre"];
    $iata = $_POST["iata"];
    
    $consulta = "INSERT INTO aerolinea (nombre,iata) VALUES ('$nombre','$iata')";
    $res = $db->query($consulta);

    echo $res ;
}

?>