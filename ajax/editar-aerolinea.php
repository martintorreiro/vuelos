<?php
include "../db.php";
$id=$_GET["id"];
$res = $db->query("SELECT * FROM aerolinea WHERE id = $id");
$row = $res->fetch_assoc();
?>

<div class="formulario_estandar">
    <div class="cabecera">
        <h2>Editar Aerolinea</h2>
    </div>
    <form id="editar-aerolinea-form">
        <div class="form_body">
            <input type="hidden" name="id" value=<?php echo $id ?>>

            <div class="form_group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']?>">
            </div>

            <div class="form_group">
                <label for="iata">Codigo IATA</label>
                <input type="text" id="iata" name="iata" value="<?php echo $row['iata']?>">
            </div>
        </div>
        <div class="controls">
            <button>Editar</button>
            <button id="cancelar" type="button">Cancelar</button>
        </div>

    </form>
</div>