<?php
$titulo = 'Ordenes';
include_once 'Plantilla/header.php';
include_once 'App/conexion.php';
include_once 'App/orden.php';
?>
<div class="container">
    <div class="row row-content justify-content-center">
        <div class="col col-12 col-sm-8 text-center p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Orden</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include_once 'Assets/listaOrdenes.php';
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
include_once 'Plantilla/footer.php';