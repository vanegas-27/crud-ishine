
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
    <title>actualizar</title>
</head>
<body>
    
    <!-- Update -->
    <?php if(isset($_POST['send'])):?>

        <?php
            $receptor = $_POST['receptor'];
            $placa=$_POST["placa"];
            $hEntrada=$_POST["hora_entrada"];
            $hSalida = $_POST['hora_salida'];
            $valor = $_POST['valor_a_pagar']; 

            $array = array($receptor,$placa,$hEntrada,$hSalida,$valor);
        ?>

        <?php if($receptor == "" || $placa == "" || $hEntrada == "" || $hSalida == "" || $valor == ""):?>
            <p>se deben de llenar todos los campos.</p>
        <?php else:?>
            <?=$gestor->update($bd, 'usuarios',$array);?>
            <h2>Actualizacion exitosa</h2>
        <?php endif;?>


    <?php endif;?>

    <!--End update-->
    <button type="button" class="btn btn-primary"><a href="../index.php">Regresar</a></button>
</body>
</html>