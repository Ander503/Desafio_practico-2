<?php
require_once("../class/Docente.php");
session_name("docente");
session_start(); 
try{
	if(isset($_SESSION['carrito'])){
		$carrito_mio=$_SESSION['carrito'];
		if(isset($_POST['titulo'])){			

			$docente = new Docente;
			$docente->setNombre($_POST['nombre']);
			$docente->setApellido($_POST['apellido']);
			$docente->setNit($_POST['nit']);
			$docente->setDireccion($_POST['direccion']);
			$docente->setCorreo_e($_POST['correo']);
			$docente->setTelefono_movil($_POST['telefono']);
			$docente->setSexo($_POST['sexo']);
			$docente->setFecha_nac($_POST['fecha']);
			$docente->setEdad($edad=$_POST['edad']);
			 
			$docente->setAsignatura($materia[0]=$_POST['materia1']);
			$docente->setAsignatura($materia[1]=$_POST['materia2']);
			$docente->setAsignatura($materia[2]=$_POST['materia3']);

			$carrito_mio[]=array( 
				"Codigo"=>$docente->Generar_Codigo($_POST['nombre'],$_POST['apellido']),
				"nombre"=> $docente->getNombre(),
				"apellido"=>$docente->getApellido(), 
				"nit"=>$docente->getNit(),
				"direccion"=>$docente->getDireccion(),
				"correo"=>$docente->getCorreo_e(),
				"telefono"=>$docente->getTelefono_movil(),
				"sexo"=>$docente->getSexo(), 
				"fecha"=>$docente->getFecha_nac(),
				"edad"=>$docente->getEdad(),
				"Materias"=>$docente->getAsignatura(),
				"materia1"=>$_POST['materia1'],
				"materia2"=>$_POST['materia2'],
				"materia3"=>$_POST['materia3'],
				"salario"=>$docente->Calcular_Salario($_POST['horas_t'])
			);
 		}
	}
	else{		
		$docente = new Docente;
		$docente->setNombre($_POST['nombre']);
		$docente->setApellido($_POST['apellido']);
		$docente->setNit($_POST['nit']);
		$docente->setDireccion($_POST['direccion']);
		$docente->setCorreo_e($_POST['correo']);
		$docente->setTelefono_movil($_POST['telefono']);
		$docente->setSexo($_POST['sexo']);
		$docente->setFecha_nac($_POST['fecha']);
		$docente->setEdad($_POST['edad']);	
		$carrito_mio[]=array( 
			"Codigo"=>$docente->Generar_Codigo($_POST['nombre'],$_POST['apellido']),
			"nombre"=> $docente->getNombre(),
			"apellido"=>$docente->getApellido(), 
			"nit"=>$docente->getNit(),
			"direccion"=>$docente->getDireccion(),
			"correo"=>$docente->getCorreo_e(),
			"telefono"=>$docente->getTelefono_movil(),
			"sexo"=>$docente->getSexo(), 
			"fecha"=>$docente->getFecha_nac(),
			"edad"=>$docente->getEdad(),
			"Materias"=>$docente->getAsignatura(),
			"materia1"=>$_POST['materia1'],
			"materia2"=>$_POST['materia2'],
			"materia3"=>$_POST['materia3'],
			"salario"=>$docente->Calcular_Salario($_POST['horas_t'])
			);
			
		
	}
$_SESSION['carrito']=$carrito_mio;
header("Location: ".$_SERVER['HTTP_REFERER']."");
}
catch(Exception $e){

}
	
?>



