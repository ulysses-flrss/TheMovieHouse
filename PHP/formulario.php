<?php

    error_reporting(E_ALL ^ E_NOTICE);

    $conectar = mysqli_connect('localhost', 'root', '', 'registrostmh');
    if (!$conectar) {
        echo "ERROR: No se puede conectar al SERVIDOR";
    } else {
        $data = mysqli_select_db($conectar,'registrostmh');
        if (!$data) {
            echo "ERROR: No se puede conectar a la BASE DE DATOS";
        }
    }

    $id = "";
    $Nombre = $_GET['Nombre'];
    $Usuario = $_GET['Usuario'];
    $Correo = $_GET['Correo'];
    $Genero = $_GET['Genero'];
    $Nacimiento = $_GET['Nacimiento'];
    $Pais = $_GET['Pais'];
    $Contraseña = $_GET['Contraseña'];
    $Confirmacion = $_GET['Confirmacion'];
    
    if ($Contraseña != $Confirmacion) {
       echo '<script>
                alert ("Las Contraseñas No Coinciden");
            </script>';
    } else{
    $sql = "INSERT INTO datos VALUES('$id', '$Nombre', '$Usuario', '$Correo', '$Genero','$Nacimiento', '$Pais', '$Contraseña', '$Confirmacion')";
    
    $ejecutar = mysqli_query($conectar, $sql);
    if (!$ejecutar) {
        echo "<p class = 'nonRegistered'>Los Datos No se REGISTRARON</p>";
    } else {
        echo "  <!DOCTYPE html>
                <html lang='en'>
                <head>
                <link rel='stylesheet' href='../Español/css/bienvenida.css'> 
                <link href'https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap' rel='stylesheet'>
                <span class = 'welcomeMessage'>Bienvenido $Nombre</span>
        </head>
        </html>";
        
    } }
?>