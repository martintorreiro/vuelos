<div class="formulario_estandar">
    <div class="cabecera">
        <h2>Añadir Aerolinea</h2>
    </div>
    <form id="nueva-aerolinea-form" action="servicio/guardar-aerolinea.php" method="post">
        <div class="form_body">
            <div class="form_group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>

            <div class="form_group">
                <label for="iata">Codigo IATA</label>
                <input type="text" id="iata" name="iata">
            </div>

            <div class="controls">
                <button>Enviar</button>
                <button id="cancelar" type="button">Cancelar</button>
            </div>
        </div>
    </form>
</div>