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

    if (nombre === '' || empresa === '' || telefono === '') {
        //2 parametros, texto y clase
        mostrarNotificacion('Todos los campos son obligatorios', 'error');
    }else{
        
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