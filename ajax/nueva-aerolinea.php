<div>
    <h2 class="marg-b-20">Añadir Aerolinea</h2>
    <form id="nueva-aerolinea-form" class="flex column jc-center ai-start" action="servicio/guardar-aerolinea.php"
        method="post">
        <div class="marg-b-20">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <div class="marg-b-20">
            <label for="iata">Codigo IATA</label>
            <input type="text" id="iata" name="iata">
        </div>

        <div>
            <button>Enviar</button>
            <button id="cancelar" type="button">Cancelar</button>
        </div>
    </form>
</div>