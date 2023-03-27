<?php
require_once("../class/PersonaAdmin.php");
session_name("admin"); 
session_start(); 
try{
	if(isset($_SESSION['carrito'])){
		$carrito_mio=$_SESSION['carrito'];
		if(isset($_POST['titulo'])){


			 $admin = new PersonalAdmin;
			 $admin->setNombre($_POST['nombre']);
			 $admin->setApellido($_POST['apellido']);
			 $admin->setNit($_POST['nit']);
			 $admin->setDireccion($_POST['direccion']);
			 $admin->setCorreo_e($_POST['correo']);
			 $admin->setTelefono_movil($_POST['telefono']);
			 $admin->setSexo($_POST['sexo']);
			 $admin->setFecha_nac($_POST['fecha']);
			 $admin->setEdad($_POST['edad']);
			 $admin->setDependencia($_POST["dependencia"]);
			 $admin->setSalario_m($_POST['salario']);
			 $admin->setFuncion($_POST['funcion']);
			 $admin->setAños_t($_POST['años_t']);
			  
			 
			 $carrito_mio[]=array( 
				 "Codigo"=>$admin->Generar_Codigo($_POST['nombre'],$_POST['apellido']),
				 "nombre"=> $admin->getNombre(),
				 "apellido"=>$admin->getApellido(), 
				 "nit"=>$admin->getNit(),
				 "direccion"=>$admin->getDireccion(),
				 "correo"=>$admin->getCorreo_e(),
				 "telefono"=>$admin->getTelefono_movil(),
				 "sexo"=>$admin->getSexo(), 
				 "fecha"=>$admin->getFecha_nac(),
				 "edad"=>$admin->getEdad(),
				 "dependencia"=>$admin->getDependencia(),
				 "salario"=>$admin->getSalario_m(),
				 "funcion"=>$admin->getFuncion(),
				
				 "jubilacion"=>$admin->Calcular_Jubilacion($_POST['años_t'])
				 );

				
 		}
	}else{
		
		$admin = new PersonalAdmin;
			 $admin->setNombre($_POST['nombre']);
			 $admin->setApellido($_POST['apellido']);
			 $admin->setNit($_POST['nit']);
			 $admin->setDui($_POST['dui']);
			 $admin->setDireccion($_POST['direccion']);
			 $admin->setCorreo_e($_POST['correo']);
			 $admin->setTelefono_movil($_POST['telefono']);
			 $admin->setSexo($_POST['sexo']);
			 $admin->setFecha_nac($_POST['fecha']);
			 $admin->setEdad($edad=$_POST['edad']);
			 $admin->setDependencia($_POST["dependencia"]);
			 $admin->setSalario_m($_POST['salario']);
			 $admin->setFuncion($_POST['funcion']);
			  
			 
			 $carrito_mio[]=array( 
				 "Codigo"=>$admin->Generar_Codigo($_POST['nombre'],$_POST['apellido']),
				 "nombre"=> $admin->getNombre(),
				 "apellido"=>$admin->getApellido(), 
				 "dui"=>$admin->getDui(),
				 "nit"=>$admin->getNit(),
				 "direccion"=>$admin->getDireccion(),
				 "correo"=>$admin->getCorreo_e(),
				 "telefono"=>$admin->getTelefono_movil(),
				 "sexo"=>$admin->getSexo(), 
				 "fecha"=>$admin->getFecha_nac(),
				 "edad"=>$admin->getEdad(),
				 "dependencia"=>$admin->getDependencia(),
				 "salario"=>$admin->getSalario_m(),
				 "funcion"=>$admin->getFuncion(),
				 "jubilacion"=>$admin->Calcular_Jubilacion($_POST['años_t'])
				 );
	}
$_SESSION['carrito']=$carrito_mio;
header("Location: ".$_SERVER['HTTP_REFERER']."");


}
catch(Exception $e){

}
	


