<?php include './inc/layout/header.php'; ?>

<div class="contenedor-barra">
    <h1>Agenda de Contactos</h1>
</div>

<div class="bg-amarillo contenedor sombra">
    <form id="contacto" action="#">
        <legend>Añada un contacto <span>Todos los campos son obligatorios</span></legend>
        <div class="campos">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="Nombre Contacto" id="nombre">
            </div> 
            <div class="campo">
                <label for="empresa">Empresa:</label>
                <input type="text" placeholder="Nombre Empresa" id="empresa">
            </div> 
            <div class="campo">
                <label for="telefono">Telefono:</label>
                <input type="tel" placeholder="Telefono Contacto" id="telefono">
            </div> 
            <div class="enviar">
                <input type="submit" value="AÑADIR">
            </div>      
        </div>
    </form>
</div>


<?php include './inc/layout/footer.php'; ?>