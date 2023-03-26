<?php

require_once('../class/Docente.php');

session_name("mestro");
session_start();


if (isset($_POST['enviar'])) {
    $docente=new Docente;
    $docente->setNombre($_POST['name']);
    $docente->setApellido($_POST['apellido']);
    $docente->sethoras_t($_POST['horas_trabajadas']);

    //materias
    $as1[0]=$_POST['materia1'];
    $as2[1]=$_POST['materia2'];
    $as3[2]=$_POST['materia3'];
    $docente->setAsignatura($as1[0]);
    $docente->setAsignatura($as2[1]);
    $docente->setAsignatura($as3[2]);


    $_SESSION['nombre_usuario'] = $docente->getNombre();
    $_SESSION['apellido_usuario'] = $docente->getApellido();
    $_SESSION['codigo_usuario'] = $docente->Generar_Codigo($_POST['name'],$_POST['apellido']);
    $_SESSION['Horas_usuario']=$docente->gethoras();
    $_SESSION['Asignaturas_usuario']=$docente->getAsignatura();
        
  }

  if (isset($_SESSION['nombre_usuario'])) {
    echo 'Nombre ' . $_SESSION['nombre_usuario'] ;
    echo "<br>";
    echo 'Apellido ' . $_SESSION['apellido_usuario'] ;
    echo "<br>";
    echo 'Codigo: ' . $_SESSION['codigo_usuario'];
    echo "<br>";
    echo 'Horas: ' . $_SESSION['Horas_usuario'];
    echo "<br>";
    echo 'Materias: ';
    echo "<br>";
    echo "<li>".$_SESSION['Asignaturas_usuario'];
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

    