<?php

include "db.php";

$key = 'd410a7d9-7524-4343-9a3e-586e4c694c2b';

$consultaVuelos = "https://airlabs.co/api/v9/airports?api_key=$key";

$json = file_get_contents($consultaVuelos);

$datos = json_decode($json);

print_r($datos["response"]) ;

?>