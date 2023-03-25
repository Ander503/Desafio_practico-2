<?php
require_once('../class/Estudiante.php');
session_name("estudiante");
session_start();


if (isset($_POST['enviar'])) {
    $estudiante=new Estudiante;
    $estudiante->setNombre($_POST['name']);
    $estudiante->setApellido($_POST['apellido']);

    $_SESSION['nombre_usuario'] = $estudiante->getNombre();
    $_SESSION['apellido_usuario'] = $estudiante->getApellido();
    $_SESSION['codigo_usuario'] = $estudiante->Generar_Codigo($_POST['name'],$_POST['apellido']);
        
  }

  if (isset($_SESSION['nombre_usuario'])) {
    echo 'Nombre ' . $_SESSION['nombre_usuario'] . '!';
    echo "<br>";
    echo 'Apellido ' . $_SESSION['apellido_usuario'] . '!';
    echo "<br>";
    echo 'Codigo; ' . $_SESSION['codigo_usuario'] . '!';
    echo "<br>";
    /**Faltaria hacer la toma de valores para el promedio*/
    echo 'Promedio';
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
    
<br>
    <button>
    <a href="../pages/Ingreso_E.php">VOLVER</a>
    </button>
</body>
</html>

    