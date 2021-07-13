const formularioContactos = document.querySelector('#contacto');

eventListeners();

function eventListeners() {
    //Cuando el formulario de crear o editar se ejecuta
    formularioContactos.addEventListener('submit', leerFormulario);
}

function leerFormulario(e) {
    e.preventDefault();

    //Leer datos de los inputs
    const nombre = document.querySelector('#nombre').value,
         empresa = document.querySelector('#empresa').value,
         telefono = document.querySelector('#telefono').value;
         accion = document.querySelector('#accion').value;

    if (nombre === '' || empresa === '' || telefono === '') {
        //2 parametros, texto y clase
        mostrarNotificacion('Todos los campos son obligatorios', 'error');
    }else{
        //pasa la validacion, crear llama a ajax
        const infoContacto = new FormData();
        infoContacto.append('nombre', nombre);
        infoContacto.append('empresa', empresa);
        infoContacto.append('telefono', telefono);
        infoContacto.append('accion', accion);

        //console.log(...infoContacto);

        if(accion === 'crear'){
            //crear un nuevo elemento
            insertarBD(infoContacto);
        } else {
            //editar un elememto
            const idRegistro = document.querySelector('#id').value;
            infoContacto.append('id', idRegistro);
            actualizarRegistro(infoContacto);
        }
    }
}
//Notificacion en pantalla
function mostrarNotificacion(mensaje, clase) {
    const notificacion = document.createElement('div');
    notificacion.classList.add(clase,'notificacion','sombra')
    notificacion.textContent = mensaje;

    //Formulario
    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));

    //Ocultar y mostrar la notificacion
    setTimeout(() => {
        notificacion.classList.add('visible');

        setTimeout(() => {
            notificacion.classList.remove('visible');
            setTimeout(() => {
                notificacion.remove();
            }, 600);
        }, 3000);
    }, 100);
}