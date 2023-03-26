<?php
require_once('../class/PersonaAdmin.php');
session_name("administrador");
session_start();


if (isset($_POST['enviar'])) {
    $admin=new PersonalAdmin;
    $admin->setNombre($_POST['name']);
    $admin->setApellido($_POST['apellido']);
    $admin->setDependencia($_POST['dependencia']);
    $admin->setFuncion($_POST['funcion']);


    $_SESSION['nombre_usuario'] = $admin->getNombre();
    $_SESSION['apellido_usuario'] = $admin->getApellido();
    $_SESSION['codigo_usuario'] = $admin->Generar_Codigo($_POST['name'],$_POST['apellido']);
    $_SESSION['dependencia_usuario'] = $admin->getDependencia();
    $_SESSION['funcion_usuario'] = $admin->getFuncion();
        
  }

  if (isset($_SESSION['nombre_usuario'])) {
    echo 'Nombre ' . $_SESSION['nombre_usuario'] . '!';
    echo "<br>";
    echo 'Apellido ' . $_SESSION['apellido_usuario'] . '!';
    echo "<br>";
    echo 'Codigo; ' . $_SESSION['codigo_usuario'] . '!';
    echo "<br>";
    echo 'Dependencia; ' . $_SESSION['dependencia_usuario'] . '!';
    echo "<br>";
    echo 'Funcion; ' . $_SESSION['funcion_usuario'] . '!';

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
    <a href="../pages/Ingreso_AD.php">VOLVER</a>
    </button>
</body>
</html>

    