//Mostrar Ocultar Contraseña

const password = document.getElementById('firstPassword');
const button = document.getElementById('toggPassword');

function mostrarContrasena() {

    password.addEventListener("click", (e) => {e.preventDefault()});

    if (password.type == 'password'){
        password.type = 'text';
        console.log('Mostrar')

    } else {
        password.type = 'password';
        console.log('Ocultar')
    }
}

button.addEventListener("click", mostrarContrasena);


