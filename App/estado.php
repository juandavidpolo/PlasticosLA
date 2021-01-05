<?php
class estado{
    function ingresarProduccion($conexion, $fase1, $fase2, $fase3){
        $statement = $conexion->prepare("INSERT INTO produccion (fase_1, fase_2, "
                . "fase_3, fecha) VALUES (:fase1, :fase2, :fase3, now())");
        $statement->bindParam(":fase1", $fase1, PDO::PARAM_INT);
        $statement->bindParam(":fase2", $fase2, PDO::PARAM_INT);
        $statement->bindParam(":fase3", $fase3, PDO::PARAM_INT);
        $statement->execute();
    }
    function actualizar($conexion, $fase1, $fase2, $fase3){
        $statement1 = $conexion->prepare("SELECT id_orden, fase_1, fase_2, fase_3 FROM ordenes Where "
                . "fase_1 NOT IN (0) AND fase_2 NOT IN (0) AND fase_3 NOT IN (0)"
                . "ORDER BY id_orden ASC LIMIT 1");
        $statement1->execute();
        $result = $statement1->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $remaining){
            $nfase_1=$remaining['fase_1']-$fase1;
            $nfase_2=$remaining['fase_2']-$fase1;
            $nfase_3=$remaining['fase_3']-$fase1;
        }
        $statement2 = $conexion->prepare("UPDATE ordenes SET fase_1=:nfase_1,"
                . "fase_2=:nfase_2, fase_3=:nfase_3 WHERE id_orden=:id_orden");
        $statement2->bindParam(":nfase_1", $nfase_1, PDO::PARAM_INT);
        $statement2->bindParam(":nfase_2", $nfase_2, PDO::PARAM_INT);
        $statement2->bindParam(":nfase_3", $nfase_3, PDO::PARAM_INT);
        $statement2->bindParam(":id_orden", $remaining['id_orden'], PDO::PARAM_INT);
        $statement2->execute();
    }
}