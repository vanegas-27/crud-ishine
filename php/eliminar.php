<?php

require('../class/classBd.php');


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
    <title>eliminar</title>
</head>
<body>
    
    <!--Delete -->
    <?php if(isset($_POST['send'])):?>

        <?php if($_POST['placa'] == ""):?>
            <p>lo sentimos, debes ingresar la placa de tu vehiculo</p>
        <?php else:?>
            <?=$gestor-> delete($bd, 'usuarios', ['placa',$_POST['placa']])?>
            <h1>Usuario eliminado exitosamente con placa <?= $_POST['placa'] ?></h1>
        <?php endif;?>

    <?php endif;?>
    <!--End Delete -->
    <button type="button" class="btn btn-primary"><a href="../index.php">Regresar</a></button>
</body>
</html>