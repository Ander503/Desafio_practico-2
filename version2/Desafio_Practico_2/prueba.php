<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Agrega la referencia al archivo JS de jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <!-- Agrega la referencia al archivo JS de Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Agrega la referencia al archivo JS de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/stryle_container.css">
    <title>Document</title>
</head>
<body>
<div class="CONTENEDOR_CE">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#tab1" data-toggle="tab">Pestaña 1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#tab2" data-toggle="tab">Pestaña 2</a>
        </li>
        
    </ul>
    <!--Contenido-->
    <div class="tab-content">
        <div id="tab1" class="tab-pane active">
            Contenido de la pestaña 1
        </div>
        <div id="tab2" class="tab-pane">
            Contenido de la pestaña 2
        </div>        
    </div>
</div>
</body>
</html>