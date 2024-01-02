<?php 
    include("template/cabecera.php")
?>

            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-3">Bienvenido <?php echo $nombreDelUsuario; ?> </h1>
                    <p class="lead">Gestion de productos</p>
                    <hr class="my-2">
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar productos</a>
                    </p>
                </div>
            </div>

<?php 
    include("template/pieDePagina.php")
?>
       