<?php
require('../class/Estudiante.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="shortcut icon" href="../img/LOGO1.png" type="image/x-icon">
    <title>Ingreso Estudiante</title>

   <link rel="stylesheet" href="../css/style_back.css">
   <link rel="stylesheet" href="../css/style_form.css">
   <link rel="stylesheet" href="../css/style_btn.css">
    <!--Ingresar
    <link rel="stylesheet" href="./css/style_error.css">--> 
    <!--Google Fonst-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Poiret+One&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stryle_container.css">
    <style>
        select {
            word-wrap: normal;
            border: none;
        }
    </style>
</head>
<body>
    <!--Boton Regresar-->
    <button class="back">
        <div class="text">
            <span>Regresar</span>

        </div>
        <div class="clone">
            <span><a class="no_deco" href="../inicio.php">Regresar</a></span>
            
        </div>
        <svg width="20px" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
    </button>

   <!--OJO-->
   <div class="container-login"> 
        <!--OJO-->
		<div class="wrap-login"> 
			<form action="../session/Sesion_estudiante.php" method="post"> 
        
				
				<span class="login-form-title">Ingreso Datos Estudiante</span> 		
                <div class="container_c">
                    <!--COLUMNA 2-->
                    <div class="column_1">
                        <!-- Nombre --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="name" placeholder="Nombres" >	 
                            <span class="focus-efecto"></span> 
                        </div> 
                        <!--NIT --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="nit" placeholder="NIT" > 
                            <span class="focus-efecto"></span> 
                        </div>  
                        <!--Correo--> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="email" name="email" placeholder="Correo Electronico" > 
                            <span class="focus-efecto"></span> 
                        </div>     
                        <!--Telefono Fijo--> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="telefono_f" placeholder="Telefono Fijo" > 
                            <span class="focus-efecto"></span> 
                        </div> 	      
                        <!--Fecha de Nacimiento--> 
                        <!--Tener en cuenta que la fecha debe de ir en el formato YYYY-MM-DD"-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" > 
                            <span class="focus-efecto"></span> 
                        </div> 	                                
                            
                         <!-- Calificacion 1 --> 
                         <div class="wrap-input100"> 
                            <input class="input100" type="text" name="nota1" placeholder="Calificacion 1" >	 
                            <span class="focus-efecto"></span> 
                        </div>                                     
                                    
                                    <!--Calificacione 2--> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="nota3" placeholder="Calificacion 3" > 
                            <span class="focus-efecto"></span> 
                        </div> 	                                                                  
                    </div>		


                    <!--COLUMNA 2-->
                    <div class="column_2">
                        <!-- Apellidos --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="apellido" placeholder="Apellidos" > 
                            <span class="focus-efecto"></span> 
                        </div> 	                        
                        <!-- Direccion --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="direccion" placeholder="Direccion" > 
                            <span class="focus-efecto"></span> 
                        </div> 	
                        <!--Telefono Movil--> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="telefono_m" placeholder="Telefono Movil" > 
                            <span class="focus-efecto"></span> 
                        </div> 	 
                        <!--Genero--> <!--Input Select-->
                        <div class="wrap-input100"> 
                            <select class="input100">
                                <option class="select_" value="">Masculino</option>
                                <option value="">Femenino</option>
                                <option value="">Prefiero no decirlo</option>
                            </select> 
                            <span class="focus-efecto"></span> 
                        </div>                 
                        <!--Edad--> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="edad" placeholder="Edad" > 
                            <span class="focus-efecto"></span> 
                        </div> 	                    
                                                
                        <!--Codigon Estudiante MOSTRADO EN RESULTADOS
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="cod_estudiante" placeholder="Codigo Estudiante"  disabled> 
                            <span class="focus-efecto"></span> 
                        </div> 	-->


                         <!-- Calificacion 3 --> 
                         <div class="wrap-input100"> 
                            <input class="input100" type="text" name="nota2" placeholder="Calificacion 2" > 
                            <span class="focus-efecto"></span> 
                        </div> 	             
                         	                        	                                                
                    </div>
                </div>
                
                <button type="submit" name="enviar" class="sesion">
                    Ingresar Datos
                </button>
                
                <a href="../session/Sesion_estudiante.php" name="otro">VER DATOS</a>


			</form> 
		</div> 
	</div>  

    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
	<script>
		$(document).ready(function(){
			$(".info .close").click(function(){
				$(this).closest(".info").remove();
			})
		})
	</script>
</body>
</html>


<?php
   


/*$_SESSION['usuario'] = $_REQUEST['name'];
$_SESSION['clave'] = $_REQUEST['apellido'];

/*Toma los datos
if(isset($_POST['enviar'])){
   
    //Se crea un nuevo objeto de la clase estudiante;
    $alumno = new Estudiante;
    $nombre=$_POST['name'];
    $apellido=$_POST['apellido'];
    /*$notas[0]=8.9;
    $notas[1]=7;
    $notas[2]=6;

    $alumno->Setnotas_E($notas[0]);
    $alumno->Setnotas_E($nota2[1]);
    $alumno->Setnotas_E($nota3[3]);


    $alumno->setNombre($nombre);
    $alumno->setApellido($apellido);
    $alumno->Generar_Codigo($nombre,$apellido);

    $_SESSION=$alumno;



    


}
if(isset($_POST['enviar'])){
    $nombre=$_REQUEST['name'];
    $_SESSION["carrito"]["nombre"]=$nombre;   

    echo $_SESSION["carrito"]["nombre"];
}


if(isset($_REQUEST['otro'])){

    $nombre="DON BOSCO";

    $_SESSION["carrito"]["nombre"]=$nombre;   

    echo $_SESSION["carrito"]["nombre"];
}*/
  

?>



