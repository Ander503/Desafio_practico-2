<?php
require_once('../class/Estudiante.php');

session_start();


if (isset($_POST['enviar'])) {
    $estudiante=new Estudiante;
    $estudiante->setNombre($_POST['name']);
    $estudiante->setApellido($_POST['name']);
    $_SESSION['nombre_usuario'] = $estudiante->getNombre();
    $_SESSION['apellido_usuario'] = $estudiante->getNombre();

    
  }

  if (isset($_SESSION['nombre_usuario'])) {
    echo 'Bienvenido ' . $_SESSION['nombre_usuario'] . '!';
  }


  else{
    echo "no hay datos";
  }

/*********************************************** */

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
    //echo "La clave recuperada de la variable de sesión:" . $_SESSION['clave'];
    ?>
<br>
    <button>
    <a href="../pages/Ingreso_E.php">VOLVER</a>
    </button>
</body>
</html>

    