<?php
class Produccion{
    function ppm($conexion){
        $statement = $conexion->prepare("SELECT fase_1, fase_2, fase_3, "
                . "DATE_FORMAT(fecha, '%M/%d %H:%i') as Fecha FROM produccion");
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}