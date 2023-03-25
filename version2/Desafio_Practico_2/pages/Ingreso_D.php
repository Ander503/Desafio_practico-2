<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="shortcut icon" href="../img/LOGO1.png" type="image/x-icon">
    <title>Ingreso Docente</title>

    <link rel="stylesheet" href="../css/style_form.css">
    <link rel="stylesheet" href="../css/style_back.css">
    <!--Ingresar
    <link rel="stylesheet" href="./css/style_error.css">--> 
    <!--Google Fonst-->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Poiret+One&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
			<form action="" method="post"> 
        
				
				<span class="login-form-title">Ingreso Datos Docente</span> 		
                <div class="container_c">
                    <!--COLUMNA 2-->
                    <div class="column_1">
                        <!-- Nombre --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="name" placeholder="Nombres" required>	 
                            <span class="focus-efecto"></span> 
                        </div> 
                        <!--DUI-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="dui" placeholder="DUI" required> 
                            <span class="focus-efecto"></span> 
                        </div> 
                        <!--Direccion-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="direccion" placeholder="Direccion" required> 
                            <span class="focus-efecto"></span> 
                        </div> 
                        <!--telefono movil-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="telefono_m" placeholder="Telefono Celular" required> 
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
                            <input class="input100" type="text" name="edad" placeholder="Edad" required> 
                            <span class="focus-efecto"></span> 
                        </div> 
                        <!--Horas Trabajadas-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="horas_trabajadas" placeholder="Horas Trabajadas" required> 
                            <span class="focus-efecto"></span> 
                        </div> 
                        <!--Codigo Docente-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="cod_docente" placeholder="Codigo Docente" required disabled> 
                            <span class="focus-efecto"></span> 
                        </div> 

                    </div>		

                    <!--COLUMNA 2-->
                    <div class="column_2">
                        <!-- Apellidos --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="apellido" placeholder="Apellidos" required> 
                            <span class="focus-efecto"></span> 
                        </div> 	
                        <!--NIT --> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="nit" placeholder="NIT" required> 
                            <span class="focus-efecto"></span> 
                        </div> 	
                        <!--Correo--> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="email" name="email" placeholder="Correo Electronico" required> 
                            <span class="focus-efecto"></span> 
                        </div> 	
                        <!--Telefono Fijo--> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="telefono_f" placeholder="Telefono Fijo" required> 
                            <span class="focus-efecto"></span> 
                        </div> 	
                        <!--Fecha de Nacimiento--> 
                        <!--Tener en cuenta que la fecha debe de ir en el formato YYYY-MM-DD"-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required> 
                            <span class="focus-efecto"></span> 
                        </div> 	
                        <!--Materias--> <!--AQUI DEBERIA SER UN INPUT SELECT-->
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="materias" placeholder="Materias" required> 
                            <span class="focus-efecto"></span> 
                        </div> 	

                        <!--Salario--> 
                        <div class="wrap-input100"> 
                            <input class="input100" type="text" name="salario" placeholder="Salario $" required> 
                            <span class="focus-efecto"></span> 
                        </div>  	                        	                                                
                    </div>
                </div>
                
                <button type="submit" name="enviar" class="sesion">
                    Ingresar Datos
                </button>
			</form> 
		</div> 
	</div> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!--Esto es para la validacion-->
	<script>
		$(document).ready(function(){
			$(".info .close").click(function(){
				$(this).closest(".info").remove();
			})
		})
	</script>
</body>
</html>





