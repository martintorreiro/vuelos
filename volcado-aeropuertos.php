<?php

include "db.php";

$key = 'd410a7d9-7524-4343-9a3e-586e4c694c2b';

$consultaVuelos = "https://airlabs.co/api/v9/airports?country_code=ES&api_key=$key";

$json = file_get_contents($consultaVuelos);

$datos = json_decode($json,true);

$datos = $datos["response"];


   for($i=0; $i<count($datos); $i++){
    
    if(isset($datos[$i]["iata_code"])){

        $nombre = $datos[$i]["name"];
        $iata = $datos[$i]["iata_code"];
        $consulta = "INSERT INTO aeropuerto (nombre,iata) VALUES ('$nombre', '$iata')";
        $res = $db->query($consulta); 
        echo $nombre;
    }
};   



?>