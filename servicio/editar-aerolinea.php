<?php

include "../db.php";

if($_POST){

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $iata = $_POST["iata"];
    
    $consulta = "UPDATE aerolinea SET nombre = '$nombre',iata = '$iata'  WHERE id=$id";
    $res = $db->query($consulta);

    echo $id ;
}

?>