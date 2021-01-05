<?php
class Orden{
    function crearOrden($nit, $cantidad, $conexion){
        $statement1 = $conexion->prepare("SELECT id_cliente FROM clientes where nit = :nit");
        $statement1->bindParam(":nit", $nit, PDO::PARAM_STR);
        $statement1->execute();
        $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result1 as $id){
            $id_cliente = $id['id_cliente'];
        }
        
        $statement2 = $conexion->prepare("INSERT INTO ordenes (cantidad, id_cliente, fase_1, fase_2, fase_3)"
                    . "VALUES (:cantidad, :id_cliente, :fase, :fase, :fase); ");
        $statement2->execute([
            ":cantidad"=>$cantidad,
            ":id_cliente"=>$id_cliente,
            ":fase"=>$cantidad
        ]);
    }
    
    function mostrarOrden($conexion){
        $statement = $conexion->prepare("SELECT ordenes.id_orden, clientes.cliente, "
                . "ordenes.cantidad, ordenes.fase_3 FROM ordenes INNER JOIN clientes ON "
                . "ordenes.id_cliente=clientes.id_cliente ORDER BY ordenes.id_orden DESC");
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }
    
    function  detalleOrden($id_orden, $conexion){
        $statement = $conexion->prepare("SELECT ordenes.id_orden, ordenes.id_cliente, "
                . "clientes.cliente, clientes.email, clientes.nit, ordenes.cantidad, "
                . "ordenes.fase_1, ordenes.fase_2, ordenes.fase_3 FROM ordenes INNER JOIN clientes ON "
                . "ordenes.id_cliente=clientes.id_cliente WHERE ordenes.id_orden=:id_orden");
        $statement->bindParam(":id_orden", $id_orden, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    function cancelarOrden($id_orden, $conexion){
        $statement = $conexion->prepare("DELETE FROM ordenes WHERE ordenes.id_orden = :id_orden");
        $statement->bindParam(":id_orden", $id_orden, PDO::PARAM_INT);
        $statement->execute();
    }
}
