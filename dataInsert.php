<?php
include_once 'App/conexion.php';
include_once 'App/estado.php';
$conexion = Conexion::abrir_conexion();
estado::ingresarProduccion($conexion, $_GET['fase1'], $_GET['fase2'], $_GET['fase3']);
estado::actualizar($conexion, $_GET['fase1'], $_GET['fase2'], $_GET['fase3']);
die();
/*
 * dataInsert.php?fase1=200&fase2=200&fase3=200
 */