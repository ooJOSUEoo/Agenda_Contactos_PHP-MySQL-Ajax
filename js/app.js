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
        alert('Los campos estan vacios');
    }else{
        alert('Los no campos estan vacios');
    }
}