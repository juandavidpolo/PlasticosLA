<?php
include_once 'App/produccion.php';
$data = Produccion::ppm($conexion);
echo '<div class="col col-12 col-sm-8 offset-sm-2 p-5">';
include_once 'Plantilla/highcharts.php';
echo '</div>';