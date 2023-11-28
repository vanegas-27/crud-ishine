<?php
require('../class/classBd.php');


$username = "localhost";
$user = "root";
$pass = "";
$bd= "crud";


$gestor = new Bd($username,$user,$pass);
$gestor -> createTable($bd,'usuarios');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear</title>
</head>
<body>
    
        <!-- Create -->
        <?php if(isset($_POST['send'])):?>

            <?php
                $receptor = $_POST['receptor'];
                $placa=$_POST["placa"];
                $hEntrada=$_POST["hora_entrada"];
                $hSalida = $_POST['hora_salida'];
                $valor = $_POST['valor_a_pagar']; 
            ?>

            <?php if($receptor == "" or $placa == "" or $hEntrada == "" or $hSalida == "" or $valor == ""):?>
                <p style='color:red'>No se permiten campos vacios</p>
            <?php else:?>
                <?=$gestor -> insertDate($bd,'usuarios',[$receptor,$placa,$hEntrada,$hSalida,$valor])?>
                <h1>Registro Exitoso del usuario <?= $receptor?></h1>
            <?php endif;?>

        <?php endif;?>
        <!-- End Create -->

        <button type="button" class="btn btn-primary"><a href="../index.php">Regresar</a></button>
</body>
</html>