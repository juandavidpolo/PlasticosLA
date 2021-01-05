<?php
$conexion = Conexion::abrir_conexion();
$detalle = Orden::detalleOrden($_GET['orden'], $conexion);
        
foreach ($detalle as $detalles){
    echo '<div class="col col-12 col-sm-4 p-5">';
    echo '<div class="p-5">';
    echo '<h3 class="text-center">Detalles del cliente</h3>';
    echo '<br>';
    echo '<p>Nombre: '.$detalles['cliente'].'</p>';
    echo '<p>Email: '.$detalles['email'].'</p>';
    echo '<p>NIT: '.$detalles['nit'].'</p>';
    echo '</div>';
    echo '</div>';
    echo '<div class="col col-12 col-sm-4 p-5">';
    echo '<div class="p-5">';
    echo '<h3 class="text-center">Detalles de la orden</h3>';
    echo '<br>';
    echo '<p>Cantidad: '.$detalles['cantidad'].'</p>';
    if ($detalles['cantidad']==$detalles['fase_1']){
        echo '<p>Estado fase 1: En espera</p>';
    }elseif ($detalles['fase_1']==0) {
        echo '<p>Estado fase 1: Terminado</p>';
    }else{
        echo '<p>Estado fase 1: En producción</p>';
    }
    if ($detalles['cantidad']==$detalles['fase_2']){
        echo '<p>Estado fase 2: En espera</p>';
    }elseif ($detalles['fase_2']==0) {
        echo '<p>Estado fase 2: Terminado</p>';
    }else{
        echo '<p>Estado fase 2: En producción</p>';
    }
    if ($detalles['cantidad']==$detalles['fase_3']){
        echo '<p>Estado fase 3: En espera</p>';
    }elseif ($detalles['fase_3']==0) {
        echo '<p>Estado fase 3: Terminado</p>';
    }else{
        echo '<p>Estado fase 1: En producción</p>';
    }
    echo '</div>';
    echo '</div>';
}