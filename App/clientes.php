<?php
class Clientes{
    function crearCliente($cliente, $email, $nit, $conexion){
        $statement = $conexion->prepare("SELECT id_cliente, cliente FROM clientes where cliente = :cliente");
        $statement->bindParam(":cliente", $cliente, PDO::PARAM_STR);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if ($result == NULL){
            $statement = $conexion->prepare("INSERT INTO clientes (cliente, email, nit)"
                    . "VALUES (:cliente, :email, :nit); ");
            $statement->bindParam(":cliente", $cliente, PDO::PARAM_STR);
            $statement->bindParam(":email", $email, PDO::PARAM_STR);
            $statement->bindParam(":nit", $nit, PDO::PARAM_STR);
            
            $statement->execute();
        }
    }
}
