<?php
include "../db.php";

$consulta = "SELECT v.*, al.nombre AS nombreAerolinea, apo.nombre AS nombreOrigen,apd.nombre AS nombreDestino FROM vuelo v 
            LEFT JOIN aerolinea al ON v.id_aerolinea = al.id 
            LEFT JOIN aeropuerto apo ON v.origen = apo.id
            LEFT JOIN aeropuerto apd ON v.destino = apd.id;";
$res = $db->query($consulta);

    $cadena = "";
    while($row = $res->fetch_assoc()){

        $cadena .="<tr>
                <td>".$row['nombreOrigen']."</td>
                <td>".$row['nombreDestino']."</td>
                <td>".$row['nombreAerolinea']."</td>
                <td>".$row['n_vuelo']."</td>
                <td>".$row['h_salida']."</td>
                <td>".$row['h_llegada']."</td>
                <td><button data-id=".$row['id']." class='editar'><i class='fa-solid fa-pen-to-square'></i></button></td>
                <td><button data-id=".$row['id']." class='borrar'><i class='fa-solid fa-trash'></i></button></td>
            </tr>";
    };

        echo $cadena;
?>