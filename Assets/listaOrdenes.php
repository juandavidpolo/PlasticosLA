<?php
$conexion = Conexion::abrir_conexion();
$orden = Orden::mostrarOrden($conexion);
foreach ($orden as $ordenes){
    echo '<tr>';
    echo '<td>'.$ordenes['id_orden'].'</td>';
    echo '<td>'.$ordenes['cliente'].'</td>';
    echo '<td>'.$ordenes['cantidad'].'</td>';
    echo '<td>'.$ordenes['fase_3'].'</td>';
    echo '<td><a href="detalles.php?orden='.$ordenes['id_orden'].'" target="_blank">ver mas detalles</a></td>';
    echo '</tr>';
}