//Mostrar Ocultar Contraseña

const password = document.getElementById('firstPassword');
const button = document.getElementById('toggPassword');

function mostrarContrasena() {

    password.addEventListener("click", (e) => {e.preventDefault()});

    if (password.type == 'password'){
        password.type = 'text';

    } else {
        password.type = 'password';
    }
}

button.addEventListener("click", mostrarContrasena);


const password2 = document.getElementById('secondPassword');
const button2 = document.getElementById('toggPassword2');

function mostrarContrasena2() {

    password2.addEventListener("click", (e) => {e.preventDefault()});

    if (password2.type == 'password'){
        password2.type = 'text';

    } else {
        password2.type = 'password';
    }
}

button2.addEventListener("click", mostrarContrasena2);


