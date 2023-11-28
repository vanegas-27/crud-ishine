<?php

require("./class/classBd.php");

$username = "localhost";
$user = "root";
$pass = "";
$bd= "crud";


$gestor = new Bd($username,$user,$pass);


// $gestor -> read($bd,'prueba');


/**
 * @param null
 */
// $conn = $gestor -> conection();



/**
 * @param bd
 */
// $conn = $gestor -> conectionBd($bd);



/**
 * @param conn
 * @param bd
 */
// $gestor -> createBd($conn,$bd);



/**
 * @param bd
 * @param nameTable
 */
// $gestor -> createTable($bd,'usuarios');



/**
 * @param bd
 * @param nameTable
 */
// $gestor -> insertDate($bd,'usuarios');



/**
 * @param bd
 * @param nameTable
 */
// $gestor -> update($bd,'prueba');



/**
 * @param bd
 */
// $gestor -> deleteBd($bd);



/**
 * @param bd
 * @param nameTable
 */
// $gestor -> deleteTable($bd,'usuarios');



/**
 * @param bd
 * @param nameTable
 * @param array(key,value)
 */
// $gestor -> delete($bd,'prueba',["nombre","davidson"]);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container col-md-6 col-xs-12">

        <!-- Create -->
        <?php if(isset($_POST['enviar'])):?>

            <?php
                $documento = $_POST['documento'];
                $nombre=$_POST["nombre"];
                $apellido=$_POST["apellido"];
                $genero = $_POST['genero'];
                $phone = $_POST['telefono']; 
                ?>

                <?php if($documento == "" or $nombre == "" or $apellido == "" or $genero == "" or $phone == ""):?>
                    <p style='color:red'>No se permiten campos vacios</p>
                <?php else:?>
                    <?=$gestor -> insertDate($bd,'usuarios',[$documento,$nombre,$apellido,$genero,$phone])?>
                    <h1>Registro Exitoso del usuario <?= $nombre." ".$apellido?></h1>
                <?php endif;?>

        <?php endif;?>
         <!-- End Create -->



         <!-- read -->
         <?php if(isset($_POST['leer'])):?>
            <?=$gestor -> formateText($gestor -> read($bd,'usuarios'))?>
        <?php endif;?>
        <!-- End Read -->



        <!-- Update -->
        <?php if(isset($_POST['actualizar'])):?>

            <?php
            $documento = $_POST['documento'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $genero = $_POST['genero'];
            $telefono = $_POST['telefono'];

            //$sql = 'UPDATE usuarios SET nombre ="'.$nombre.'", apellido ="'.$apellido.'"
            $array = array($documento,$nombre,$apellido,$genero,$telefono);
            ?>

            <?php if($documento == "" || $nombre == "" || $apellido == "" || $genero == "" || $apellido == ""):?>
                <p>se deben de llenar todos los campos.</p>
            <?php else:?>
                <?=$gestor->update($bd, 'usuarios',$array);?>
                <h2>Actualizacion exitosa</h2>
            <?php endif;?>

            
        <?php endif;?>

        <!--End update-->



        
        <!--Delete -->
        <?php if(isset($_POST['borrar'])):?>

            <?php if($_POST['documento'] == ""):?>
                <p>lo sentimos, debes ingresar el documento.</p>
            <?php else:?>
                <?=$gestor-> delete($bd, 'usuarios', ['documento',$_POST['documento']])?>
                <h1>Usuario eliminado exitosamente con documento <?= $_POST['documento'] ?></h1>
            <?php endif;?>
        
        <?php endif;?>
        <!--End Delete -->
        <button type="button" class="btn btn-primary"><a href="./index.php">Regresar</a></button>
    </div>
    
</body>
</html>