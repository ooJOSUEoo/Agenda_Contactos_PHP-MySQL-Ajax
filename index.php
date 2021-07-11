<?php include './inc/layout/header.php'; ?>

<div class="contenedor-barra">
    <h1>Agenda de Contactos</h1>
</div>

<div class="bg-amarillo contenedor sombra">
    <form id="contacto" action="#">
        <legend>Añada un contacto <span>Todos los campos son obligatorios</span></legend>
        <?php include './inc/layout/formulario.php'; ?>
    </form>
</div>

<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor-contactos">
        <h2>Contactos</h2>
        <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contactos...">
        <p class="total-contactos"><span>2 </span>Contactos</p>
        <div class="contenedor-tabla">
            <table id="listado-contactos" class="listado-contactos">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Josue</td>
                        <td>UTT</td>
                        <td>1234567890</td>
                        <td>
                            <a href="editar.php?id=1" class="btn-editar btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                            <button data-id="1" type="button" class="btn-borrar btn">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Josue</td>
                        <td>UTT</td>
                        <td>1234567890</td>
                        <td>
                            <a href="editar.php?id=1" class="btn-editar btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                            <button data-id="1" type="button" class="btn-borrar btn">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Josue</td>
                        <td>UTT</td>
                        <td>1234567890</td>
                        <td>
                            <a href="editar.php?id=1" class="btn-editar btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
                            <button data-id="1" type="button" class="btn-borrar btn">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include './inc/layout/footer.php'; ?>