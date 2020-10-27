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
    $Nombre = $_POST['Nombre'];
    $Usuario = $_POST['Usuario'];
    $Correo = $_POST['Correo'];
    $Genero = $_POST['Genero'];
    $Nacimiento = $_POST['Nacimiento'];
    $Pais = $_POST['Pais'];
    $Contraseña = $_POST['Contraseña'];
    $Confirmacion = $_POST['Confirmacion'];
    
    $query = "SELECT * FROM datos WHERE  Usuario LIKE '".$Usuario."' ";  
    $q = mysqli_query($conectar, $query);

    $fila = mysqli_num_rows($q);

    if ($fila >= 1) {
        echo "El Usuario Ingresado No Está Disponible";
    } else {

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
            <link href='https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&family=Fredoka+One&family=Teko:wght@500&family=Ubuntu+Condensed&display=swap' rel='stylesheet'>
            <div class = 'divToIndex'><a class = 'toIndex' href = '../Español/Index.html'><img title = 'Ir A Inicio' class = 'logoImage' src = '../Español/Imagenes/LOGO WEB SITE.png'></a></div>
            <div class = 'divToMessage'><p class = 'welcomeMessage'>Bienvenido/a <p title = 'Perfil De: $Nombre' class = 'welcomeName'>$Nombre</p> </p><div>

        </head>
        </html>";
        
    } } 
?>