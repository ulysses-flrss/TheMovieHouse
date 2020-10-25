<?php    
    $conectar = @mysqli_connect('localhost', 'root', '', 'registrostmh');
    if (!$conectar) {
        echo "ERROR: No se puede conectar al SERVIDOR";
    } else {
        $data = @mysqli_select_db($conectar,'registrostmh');
        if (!$data) {
            echo "ERROR: No se puede conectar a la BASE DE DATOS";
        }
    }
    
    $Usuario = $_GET['Usuario'];
    $Contraseña = $_GET['Contraseña'];

    $query = "SELECT * FROM datos WHERE  Usuario LIKE '".$Usuario."' AND Contraseña LIKE  '".$Contraseña."' ";  
    $q = mysqli_query($conectar, $query);

    $fila = mysqli_num_rows($q);

    if ($fila > 0) {
        header ('../index.html')
    } else {
        echo "<link href = '../estilosregister.css' type = 'text/css' rel = 'stylesheet'> <p class = 'stylePassword'>Correo o Contraseña Incorrectos</p> <a href = ../Español/login.html>Volver a Intentar</a>";
    }  mysqli_free_result($q);
?>