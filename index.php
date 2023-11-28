<?php

require('./class/classBd.php');


$username = "localhost";
$user = "root";
$pass = "";
$bd= "crud";

$gestor = new Bd($username,$user,$pass);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nequi | ahorros y soluciones efectivas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./js/index.js"></script>
    



    <link rel="stylesheet" type="text/css" href="./css/style.css">

</head>
<body>

    <div class="alert alert-primary container title-home" role="alert">
    <h4 class="alert-heading">Bienvenidos a parqueadero-DV...</h4>
    <p>Software diseñado para la automatizacion de usuarios que llegan al parqueadero, 
        desempeñado en guardar,elimiar y modificar los registros de cada automovil que ingresa y sale del parqueadero.
    </p>
    <div class="alert alert-danger">
        <span>FALTAN VALIDACIONES, PERO CUMPLE CON LO ESTIPULADO -- >"CRUD"< --</span>
    </div>
    </div>
    
    <div class="row container" id="container-form">
        <div class="container-fluid box">
            <form action="./php/crear.php" method="post">


                <div class="row mb-3">
                    <label for="id" class="col-sm-2 col-form-label">Receptor</label>
                    <div class="col-sm-10">
                    <input type="text"  name = "receptor" placeholder = "receptor" class="form-control" />
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">palca</label>
                    <div class="col-sm-10">
                    <input type="text"  name = "placa" placeholder = "placa" class="form-control"/>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="apellido" class="col-sm-2 col-form-label">fecha de entrada</label>
                    <div class="col-sm-10">
                    <input type="dateTime-local"  name = "hora_entrada" placeholder = "hora entrada" class="form-control" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="genero" class="col-sm-2 col-form-label">fecha de salida</label>
                    <div class="col-sm-10">
                    <input type="dateTime-local"  name = "hora_salida" placeholder = "hora salida" class="form-control" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="teefono" class="col-sm-2 col-form-label">valor a pagar</label>
                    <div class="col-sm-10">
                    <input type="number"  name = "valor_a_pagar" placeholder = "valor a pagar" class="form-control" />
                    </div>
                </div>

                <div>
                    <select class="list">
                        <option>...</option>
                        <option>crear</option>
                        <option>Actualizar</option>
                        <option>eliminar</option>
                    </select>
                </div><hr>

                <div class="container d-flex align-items-center justify-content-evenly">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="submit" name="send" class="btn btn-outline-primary">enviar</button>
                    </div>

                    <!-- estilos de read -->
                    <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" name="view" role="button" aria-controls="offcanvasExample">
                    Ver datos
                    </a>

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Datos bd</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <span class="alert alert-info" role="alert"><?=$gestor -> formateText($gestor -> read($bd,'usuarios'))?></span>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

</body>
</html>