<?php


class Bd{

    private $username;
    private $user;
    private $pass;


    /**
     * motodo constructor
     * 
     * @param username
     * @param user
     * @param pass
     * 
     * @return void
     */
    public function __construct($username,$user,$pass){
        $this-> username = $username;
        $this-> user = $user;
        $this-> pass = $pass;
    }



    /**
     * 
     * metodo para conectarse al gestor de base de datos
     * mysql
     * 
     * @param null
     * 
     * @return conection
     */
    public function conection(){
        $conexion = mysqli_connect($this->username, $this-> user, $this-> pass);
        if ($conexion->connect_error) {
            return false;
        }
        else{
            return $conexion;
        }
    }


    /**
     * 
     * metodo para conectarse a la base de datos
     * mysql
     * 
     * @param bd
     * 
     * @return conection
     */
    public function conectionBd($bd){
        $conexion = mysqli_connect($this->username, $this-> user, $this-> pass,$bd);
        if ($conexion->connect_error) {
            return false;
        }
        else{
            return $conexion;
        }
    }


    /**
     * metodo para crear la bd
     * 
     * @param conexion
     * @param bd
     * 
     * 
     * @return void
     */
    public function createBd($conn,$bd){

        //nos conectasmo al gestor

        /* se crea el query que va a ser ejecutado en el gestor*/
        $sql="CREATE DATABASE IF NOT EXISTS $bd";

        /*ejecuta el sql y retorna un valor booleano si es true o false dependiendo del resultado.*/
        //y este se captura si hay un error
        try{
            mysqli_query($conn,$sql);
            return true;
        }catch(Exception $e){   
            echo("Error... ".$e);
            return false;
        }
    }


    /**
     * metodo para crear tabla
     * 
     * @param bd
     * @param nombreTabla
     * 
     */

    public function createTable($bd,$nameTable){

        $conn = $this-> conectionBd($bd);
        
        $sql = "CREATE TABLE IF NOT EXISTS `$bd`.`$nameTable` (
            `receptor` VARCHAR(60) NOT NULL,
            `placa` VARCHAR(60) NOT NULL, 
            `hora entrada` DATETIME NOT NULL,
            `hora salida` DATETIME NULL,
            `valor` FLOAT NOT NULL) ENGINE = InnoDB;";

        try{
            mysqli_query($conn,$sql);
            return true;
        }catch(Exception $e){
            echo("Error... ".$e);
            return false;
        }

        $conn->close();
    }


    public function read($bd,$nameTable){

        $conn = $this-> conectionBd($bd);

        $sql = "SELECT * FROM `$nameTable`;";

        try{
            $query = mysqli_query($conn,$sql);

            $arr = array(); 

            while($row = mysqli_fetch_array($query)){

                $list = array(
                    $row['receptor'],
                    $row['placa'],
                    $row['hora entrada'],
                    $row['hora salida'],
                    $row['valor'],
                );

                array_push($arr,$list);
            }
            return $arr;

        }catch(Exception $e){
            echo("Error... ".$e);
            return false;
        }
        
        $conn -> close();
    }


    /**
     * metodo para insertar datos a una tabla
     * 
     * @param bd
     * @param nombreTabla
     * @param array
     * 
     * @return void
     * 
     */
    public function insertDate($bd,$nameTable,$array){

        $conn = $this-> conectionBd($bd);

        $sql = "INSERT INTO `$nameTable` (`receptor`,`placa`, `hora entrada`, `hora salida`, `valor`) VALUES ('$array[0]', '$array[1]', '$array[2]', '$array[3]','$array[4]' );";

        try{
            mysqli_query($conn,$sql);
        }catch(Exception $e){
            echo "ERROR... \n $sql";
            return false;
        }

        $conn->close();

    }



    /**
     * metodo para actualizar datos de una tabla
     * 
     * @param bd
     * @param nombreTabla
     * @param array
     * 
     * @return void
     * 
     */
    public function update($bd,$nameTable,$array){

        $conn = $this-> conectionBd($bd);

        $sql = "UPDATE `$nameTable` 
        SET `receptor`='$array[0]',`placa`='$array[1]',`hora entrada`='$array[2]',`hora salida`='$array[3]',`valor`='$array[4]' 
        WHERE placa = '$array[1]';";

        try{
            mysqli_query($conn,$sql);
        }catch(Exception $e){
            echo("Error... ".$e);
            return false;
        }

        $conn->close();

    }


    public function deleteBd($nameBd){

        $conn = $this->conection();

        $sql = "DROP DATABASE $nameBd;";

        try{
            mysqli_query($conn, $sql);
            return true;
        }catch(Exception $e){
            echo("Error... ".$e);
        }

        $conn -> close();
        
    }

    public function deleteTable($bd,$nameTable){

        $conn = $this->conectionBd($bd);

        $sql = "DROP TABLE $nameTable;";

        try{
            mysqli_query($conn, $sql);
            return true;
        }catch(Exception $e){
            echo("Error... ".$e);
        }

        $conn -> close();
        
    }


    public function delete($bd,$nameTable = null,$array){

        $conn = $this->conectionBd($bd);

        $sql = "DELETE FROM `$nameTable` WHERE $array[0] = $array[1];";

        try{
            mysqli_query($conn,$sql);
        }catch(Exception $e){
            echo("Error... ".$e);
        }

        $conn -> close();

    }


    public function formateText($array){

        foreach($array as $i){
            $textFortate = "-> ";
            foreach($i as $item){
                $textFortate .= "$item | ";
            }?>

            <li><?=$textFortate?></li><br>

            <?php
            $textFortate="";
        }
    }

}



