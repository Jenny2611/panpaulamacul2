<?php
    if(isset( $_GET['id'])){
        if(filter_var( $_GET['id'], FILTER_VALIDATE_INT ) ) {
            $producto_id = $_GET['id'];
        }else {
            header('location: 404.html');
            exit;
        }
    }

    $titulo= 'Productos';
    include 'template/header.php';
    include 'template/navegacion.php';
    include 'inc/funciones.php';

    ini_set("display_errors", "1");
    error_reporting(E_ALL);

    $resultado =obtenerProducto( $producto_id );

    if($resultado->num_rows > 0) {

        while($producto = $resultado->fetch_assoc() ) {

    ?>


        <div class="container pt-4">
          <div class="row no-glutters">
            <div class="col-12 hero">
              <img src="img/<?php echo $producto['imagen_completa']; ?>" class="img-fluid" alt="">
              <h2 class="text-uppercase d-none d-md-block py-3 px-5"><?php echo $producto['nombre']; ?></h2>
            </div>
          </div>
        </div>

        <div class="container pt-4">
          <div class="row no-glutters">
            <main class="col-lg-8 contenido-principal">
              <h2 class="d-block d-md-none text-uppercase text-center">
                Producto 1
              </h2>
              <p>
                <?php echo $producto['descripcion']; ?>
              </p>

            </main>
            <aside class="col-lg-4 pt-4 pt-lg-0">
              <div class="sidebar pt-5 descripcion_producto">
                <h2 class="text-center text-uppercase mt-4">Descripcion</h2>
                <p class="text-center"><?php echo $producto['descripcion_corta']; ?></p>
                <h3 class="text-uppercase text-center mt-2">Precio</h3>
                <p class="display-4 text-center p-3">$<?php echo $producto['precio']; ?></p>
              </div>
            </aside>
          </div>
        </div>
        <?php
          } // Fin del while
        } else{
          echo '<h2 class="text-center text-uppercase mt-4">Producto No Encontrado</h2>';
        }
        include 'template/footer.php';
?>