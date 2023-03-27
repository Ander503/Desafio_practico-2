<?php
require_once('../class/Estudiante.php');
session_name("alumno");
session_start();
if(isset($_SESSION['carrito'])){
	$carrito_mio=$_SESSION['carrito'];
	if(isset($_POST['titulo'])){
		/**Para formulario*/
		$estudiante = new Estudiante;

		$estudiante->setNombre("anderson");
		$estudiante->setApellido($_POST['apellido']);
		$estudiante->setNit($_POST['nit']);
		$estudiante->setDireccion($_POST['direccion']);
		$estudiante->setCorreo_e($_POST['correo']);
		$estudiante->setTelefono_movil($_POST['telefono']);
		$estudiante->setSexo($_POST['sexo']);
		$estudiante->setFecha_nac($_POST['fecha']);
		$estudiante->setEdad($edad=$_POST['edad']);
		
	
		$carrito_mio[]=array( 
				"Codigo"=>$estudiante->Generar_Codigo($_POST['nombre'],$_POST['apellido']),
				"nombre"=> $estudiante->getNombre(),
				"apellido"=>$estudiante->getApellido(), 
				"nit"=>$estudiante->getNit(),
				"direccion"=>$estudiante->getDireccion(),
				"correo"=>$estudiante->getCorreo_e(),
				"telefono"=>$estudiante->getTelefono_movil(),
				"sexo"=>$estudiante->getSexo(), 
				"fecha"=>$estudiante->getFecha_nac(),
				"edad"=>$estudiante->getEdad(),				
				"nota1"=>$estudiante->Setnotas_E($nota1_1[0]=$_POST['nota1']),
				"nota2"=>$estudiante->Setnotas_E($nota1_2[1]=$_POST['nota2']),
				"nota3"=>$estudiante->Setnotas_E($nota1_[2]=$_POST['nota3']),
				"promedio"=>$estudiante->CalcularNotaPromedio($nota1_,$nota2_,$nota3_),
				"mayor"=>$estudiante->EsmayorEdad($_POST['edad'])
			);					
				
	 }
}else{

			$estudiante = new Estudiante;			

			$estudiante->setNombre("anderson");
			$estudiante->setApellido($_POST['apellido']);
			$estudiante->setNit($_POST['nit']);
			$estudiante->setDireccion($_POST['direccion']);
			$estudiante->setCorreo_e($_POST['correo']);
			$estudiante->setTelefono_movil($_POST['telefono']);
			$estudiante->setSexo($_POST['sexo']);
			$estudiante->setFecha_nac($_POST['fecha']);
			$estudiante->setEdad($edad=$_POST['edad']);

			$carrito_mio[]=array( 
				"Codigo"=>$estudiante->Generar_Codigo($_POST['nombre'],$_POST['apellido']),
				"nombre"=> $estudiante->getNombre(),
				"apellido"=>$estudiante->getApellido(), 
				"nit"=>$estudiante->getNit(),
				"direccion"=>$estudiante->getDireccion(),
				"correo"=>$estudiante->getCorreo_e(),
				"telefono"=>$estudiante->getTelefono_movil(),
				"sexo"=>$estudiante->getSexo(), 
				"fecha"=>$estudiante->getFecha_nac(),
				"edad"=>$estudiante->getEdad(),
				"nota1"=>$estudiante->Setnotas_E($nota1_1[0]=$_POST['nota1']),
				"nota2"=>$estudiante->Setnotas_E($nota1_2[1]=$_POST['nota2']),
				"nota3"=>$estudiante->Setnotas_E($nota1_[2]=$_POST['nota3']),
				"promedio"=>$estudiante->CalcularNotaPromedio($nota1,$nota2,$nota3),
				"esmayor"=>$estudiante->EsmayorEdad($_POST['edad'])
			
			);


}
$_SESSION['carrito']=$carrito_mio;
header("Location: ".$_SERVER['HTTP_REFERER']."");
	
?>



