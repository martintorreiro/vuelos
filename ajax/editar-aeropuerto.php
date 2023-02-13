<?php
include "../db.php";
$id=$_GET["id"];
$res = $db->query("SELECT * FROM aeropuerto WHERE id = $id");
$row = $res->fetch_assoc();
?>

<div>
    <h2 class="marg-b-20">Editar Aeropuerto</h2>
    <form id="editar-aeropuerto-form" class="flex column jc-center ai-start">
        <input type="hidden" name="id" value=<?php echo $id ?>>
        <div class="marg-b-20">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']?>">
        </div>

        <div class="marg-b-20">
            <label for="iata">Codigo IATA</label>
            <input type="text" id="iata" name="iata" value="<?php echo $row['iata']?>">
        </div>

        <div>
            <button>Enviar</button>
            <button id="cancelar" type="button">Cancelar</button>
        </div>
    </form>
</div>