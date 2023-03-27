<?php
require_once('../class/Docente.php');
session_name("alumno");
session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="../css/back_ground.css">
<link rel="shortcut icon" href="../img/LOGO1.ico" type="image/x-icon">
<title>ESTUDIANTES</title>
</head>
<body>


<?php 
error_reporting(0);
$carrito_mio = $_SESSION['carrito'];
$_SESSION['carrito']=$carrito_mio;

if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
    if($carrito_mio[$i]!=NULL){ 
    $total_cantidad = $carrito_mio['cantidad'];
    $total_cantidad ++ ;
    $totalcantidad += $total_cantidad;
    }}}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="../inicio.php">COLEGIO CRISTOBAL COLÓN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" 
          style="color: grey;"><i class="fa-solid fa-user"></i> 
          <?php

          echo $totalcantidad; ?></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<h1 style="text-align: center;">
                    Alumno      
                    </h1>


<!--Inicio modal-->
<div class="modal fade" id="modal_cart" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lista de estudiantes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          <div class="modal-body">
            <div>
           <div class="modal-body">
            <div class="p-2">
              <ul class="list-group mb-3">
                            <?php
                        if(isset($_SESSION['carrito'])){
                            $total=0;
                        for($i=0;$i<=count($carrito_mio)-1;$i ++){
                        if($carrito_mio[$i]!=NULL){
                          
                          ?>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div class="row col-12" >
                    <div class="col-6 p-0" style="text-align: left; color: #000000;">
                      
                      <h6 class="my-0">
                      Codigo: <?php echo $carrito_mio[$i]['Codigo'] ?>    
                      </h6>

                      <h6 class="my-0">
                      Nombre: <?php echo $carrito_mio[$i]['nombre'] ?>                        
                      </h6>                                            

                      <h6 class="my-0">
                      Apellido: <?php echo $carrito_mio[$i]['apellido']; ?>                     
                      </h6>
                                                              
                      <h6 class="my-0">
                      Nit: <?php echo $carrito_mio[$i]['nit'] ?> 
                      </h6>
                      <h6 class="my-0">
                      Direccion: <?php echo $carrito_mio[$i]['direccion'] ?> 
                      </h6>
                      <h6 class="my-0">
                      Correo: <?php echo $carrito_mio[$i]['correo'] ?> 
                      </h6>
                      <h6 class="my-0">
                      Telefono: <?php echo $carrito_mio[$i]['telefono'] ?> 
                      </h6>
                      <h6 class="my-0">
                      Sexo: <?php echo $carrito_mio[$i]['sexo'] ?> 
                      </h6>
                      <h6 class="my-0">
                      Fecha: <?php echo $carrito_mio[$i]['fecha'] ?> 
                      </h6>
                      <h6 class="my-0">
                      <?php echo $carrito_mio[$i]['mayor'] ?> 
                      </h6>
                      <h6 class="my-0">
                      Edad: <?php echo $carrito_mio[$i]['edad'] ?> 
                      </h6>
                      <h6 class="my-0">
                      Promedio <?php echo $carrito_mio[$i]['promedio'] ?> 
                      </h6>
                    </div>
                    
                  </div>
                  </li>
                      <?php
                  $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
                  }
                  }
                        }
                  ?>
                                          
						</ul>
					</div>
				</div>
			</div>
		</div>

    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      <?php ?>
      <a type="button" class="btn btn-primary" href="./borrar_es.php">Vaciar carrito</a>
    </div>
  </div>
  </div>
</div>






<div class="container mt-5">
<div class="row" style="justify-content: center;">

<div class="card m-4" style="width: 30rem;">
        <form id="formulario" name="formulario" method="post" action="../session/Sesion_Estudiante.php">       
        <div  style="text-align: center; margin-top:10px;">                
        <img src="../img/estudiante.jpg" class="card-img-top" alt="..." style="width: 100px;height:100px ;align-items: center;"  ;"  >
        </div>
                <div class="card-body">
                        <a>Nombre</a>
                        <input name="nombre" id= nombre type="text" class="form-control"value="">
                        <a>Apellido</a>
                        <input name="apellido" id= apellido type="text" class="form-control" >
                        <a>Nit</a>
                        <input name="nit" id= nit type="text" class="form-control" value=""required>
                        <a>Direccion</a>
                        <input name="direccion" id= direccion type="text" class="form-control"required>
                        <a>Correo</a>
                        <input name="correo" id= correo type="text" class="form-control"required>
                        <a>Telefono</a>
                        <input name="telefono" id= telefono type="text" class="form-control"required>
                        <a>Sexo</a>
                        <input name="sexo" id= sexo type="text" class="form-control"required>
                        <a>Fecha de nacimiento</a>
                        <input name="fecha" id= fecha type="text" class="form-control"required>
                        <a>Edad</a>
                        <input name="edad" id= edad type="text" class="form-control"required>
                        <a>Nota1</a>
                        <input name="nota1" id= nota1 type="text" class="form-control"required>
                        <a>Nota2</a>
                        <input name="nota2" id= nota2 type="text" class="form-control"required>
                        <a>Nota3</a>
                        <input name="nota3" id= nota3 type="text" class="form-control"required>
                        <button class="btn btn-primary" type="submit" ><i class="fa-solid fa-user"></i> Añadir Estudiante</button>
                </div>
        </form>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>
</body>
</html>