<?php include './inc/layout/header.php'; ?>

<div class="contenedor-barra">
    <div class="contenedor barra">
        <a href="index.php" class="btn volver">Volver</a>
        <h1>Editar Contacto</h1>
    </div>
</div>
<div class="bg-amarillo contenedor sombra">
    <form id="contacto" action="#">
        <legend>Edite el Contacto<span>Todos los campos son obligatorios</span></legend>
        <?php include './inc/layout/formulario.php'; ?>
    </form>
</div>

<?php include './inc/layout/footer.php'; ?>