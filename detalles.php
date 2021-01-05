<?php
$titulo = 'Ordenes';
include_once 'Plantilla/header.php';
include_once 'App/conexion.php';
include_once 'App/orden.php';
$conexion = Conexion::abrir_conexion();
if(isset($_POST['submit'])){
    Orden::cancelarOrden($_GET['orden'], $conexion);
    header('Location:ordenes.php');
}
?>
<div class="container">
    <div class="row row-content justify-content-center">
        <?php
        include_once 'Assets/detalleOrden.php';
        ?>
    </div>
    <div class="row">
        <div class="col col-12 text-center mr-auto">
            <form method="post">
                <button type="submit" class="btn btn-danger" name="submit">Cancelar Orden</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once 'Plantilla/footer.php';