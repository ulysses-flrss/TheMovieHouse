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
    
    if ($Contraseña != $Confirmacion) {
       echo '<script>
                alert ("Las Contraseñas No Coinciden");
            </script>';
    } else{
    $sql = "INSERT INTO datos VALUES('$id', '$Nombre', '$Usuario', '$Correo', '$Genero','$Nacimiento', '$Pais', '$Contraseña', '$Confirmacion')";
    
    $ejecutar = mysqli_query($conectar, $sql);
    if (!$ejecutar) {
        echo "Los Datos No se REGISTRARON";
    } else {
        echo "Los Datos Se Registraron Correctamente <a href ='../Español/index.html'>Volver al inicio</a>";
    } }
    

    
?>