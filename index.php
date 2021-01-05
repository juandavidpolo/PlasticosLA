<?php
$titulo = 'Inicio';
include_once 'Plantilla/header.php';
include_once 'App/conexion.php';
include_once 'App/orden.php';
include_once 'App/clientes.php';
include_once 'App/produccion.php';

$conexion = Conexion::abrir_conexion();
if(isset($_POST['submit'])){
    Clientes::crearCliente($_POST['cliente'], $_POST['email'], $_POST['nit'], $conexion);
    Orden::crearOrden($_POST['nit'], $_POST['pedido'], $conexion);
    header('Location:ordenes.php');
}
?>
<div class="container">
    <div class="row row-content">
        <div class="col-12 col-sm-8 offset-sm-2 p-3">
            <h2 class="text-center">Crear Orden</h2>
            <form method="post">
                <div class="mb-3">
                    <label for="cliente" class="form-label">Cliente</label>
                    <input type="text" class="form-control" id="cliente" name="cliente">
                </div>
                <div class="mb-3">
                    <label for="nit" class="form-label">NIT</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nit">
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">Cantidad del pedido</label>
                    <input type="number" class="form-control" id="pedido" name="pedido">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Crear orden</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once 'Plantilla/footer.php';