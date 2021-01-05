<?php
$titulo = 'Producción';
include_once 'Plantilla/header.php';
include_once 'App/conexion.php';
include_once 'App/produccion.php';

$conexion = Conexion::abrir_conexion();
?>
<script src="Highcharts/highcharts.js"></script>
<script src="Highcharts/series-label.js"></script>
<script src="Highcharts/exporting.js"></script>
<script src="Highcharts/export-data.js"></script>
<div class="container">
    <div class="row row-content">
            <?php
            include_once 'Assets/Produccion.php';
            ?>
    </div>
</div>
<?php
include_once 'Plantilla/footer.php';