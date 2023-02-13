<?php
include "../db.php";

$consulta = "SELECT * FROM aeropuerto";
$res = $db->query($consulta);

    $cadena = "";
    while($row = $res->fetch_assoc()){

        $cadena .="<tr>
                <td>".$row['nombre']."</td>
                <td>".$row['iata']."</td>
                <td><button data-id=".$row['id']." class='editar'><i class='fa-solid fa-pen-to-square'></i></button></td>
                <td><button data-id=".$row['id']." id='borrar'><i class='fa-solid fa-trash'></i></button></td>
            </tr>";
    };

        echo $cadena;
?>