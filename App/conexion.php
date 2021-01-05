<?php
class Conexion {
    function abrir_conexion(){
        try{
            $conexion = new PDO('mysql:host=localhost;port=3306;dbname=plasticos', 'root', '');
            $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch (PDOException $exception){
            print "ERROR1: " . $exception -> getMessage() . "<br>";
            die();
        }
    }
}