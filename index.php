<?php
  $titulo = 'Inicio';
  include 'template/header.php';
  include 'template/navegacion.php';
  include 'inc/funciones.php';

?>

    <div class="container">
      <div id="slider-principal" class="carousel slide mt-4" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#slider-principal" data-slide-to="0" class="active"></li>
              <li data-target="#slider-principal" data-slide-to="1"></li>
              <li data-target="#slider-principal" data-slide-to="2"></li>
          </ol>
        
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/slide_01.jpg" alt="Nuestras Intalaciones">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Nuevas Instalaciones</h3>
                </div>
            </div>       
            <div class="carousel-item">
                <img src="img/slide_02.jpg" alt="Conoce Nuestros Productos">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Conoce Nuestros Productos</h3>
                </div>
            </div> 
            <div class="carousel-item">
                <img src="img/slide_03.jpg" alt="Promociones">
                <div class="carousel-caption">
                    <h3 class="text-uppercase">Promociones</h3>
                </div>
            </div> <!--carousel-item-->

          </div><!--carousel-inner-->
          <a href="#slider-principal" class="carousel-control-prev" data-slide="prev">
            <span class="carousel.carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a href="#slider-principal" class="carousel-control-next" data-slide="next">
              <span class="carousel.carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
      </div>
    </div>

    <section class="nuevo-sitio py-5">
        <h1 class="text-center text-uppercase mt-4 encabezado">
          <span class="text-lowercase d-block">Bienvenido a nuestro</span>Sitio web
        </h1>
        <p class="text-center mt-4">Entregamos lo mejor del dia con productos que hacemos con mucho cariño <br>
            para generar momentos agradables </p>    
    </section>

    <div class="container mb-5">
        <div class="row">
          <div class="col-md-4 text-center mb-4">
            <div class="imagen-servicio">
              <img src="img/servicio_01.jpg" class="img-fluid">
              <div class="row no-gutters justify-content-center">
                <div class="col-md-10 pt-4 servicio-info">
                  <h2 class="text-center text-uppercase encabezado">
                    <span class="text-lowercase d-block">Conoce sobre</span> nosotros
                  </h2>
                  <a href="#" class="btn btn-primary btn-block text-uppercase mt-4
                   py-3">Leer más</a>
                </div>
              </div><!--.row-->
            </div><!-- .imagen-destacada-->
          </div><!--.col-md-4-->
          <div class="col-md-4 text-center mb-4">
              <div class="imagen-servicio">
                <img src="img/servicio_02.jpg" class="img-fluid">
                <div class="row no-gutters justify-content-center">
                  <div class="col-md-10 pt-4 servicio-info">
                    <h2 class="text-center text-uppercase encabezado">
                      <span class="text-lowercase d-block">Nuestros</span> Productos
                    </h2>
                    <a href="#" class="btn btn-primary btn-block text-uppercase mt-4
                     py-3">Leer más</a>
                  </div>
                </div><!--.row-->
              </div><!-- .imagen-destacada-->
            </div><!--.col-md-4-->
            <div class="col-md-4 text-center mb-4">
                <div class="imagen-servicio">
                  <img src="img/servicio_03.jpg" class="img-fluid">
                  <div class="row no-gutters justify-content-center">
                    <div class="col-md-10 pt-4 servicio-info">
                      <h2 class="text-center text-uppercase encabezado">
                        <span class="text-lowercase d-block">Vista Nuestra</span> Tienda
                      </h2>
                      <a href="#" class="btn btn-primary btn-block text-uppercase mt-4
                       py-3">Leer más</a>
                    </div>
                  </div><!--.row-->
                </div><!-- .imagen-destacada-->
              </div><!--.col-md-4-->
        </div>
    </div>

    <div class="horario">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-4">
            <h2 class="text-center text-uppercase mt-5">Horarios</h2>
            <p class="text-center mt-3 lead">
                Panadería y Pastelería Paula nace en la V Región hace 40 años, pero en los últimos 10 años se ha modernizado con el fin de preparar el camino que nos ha permitido un fuerte crecimiento.
                Todos nuestros alimentos son elaborados con materia primas de alta calidad, que se comercializan a precios muy convenientes. Las líneas de productos son : Panadería, Pastelería y Gastronomía.
            </p>
            <table class="table table-hover text-center mt-3">
                <thead>
                    <tr>
                        <th>Día</th>
                        <th>De</th>
                        <th>Hasta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td>Lunes</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Martes</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Miércoles</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Jueves</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Viernes</td>
                        <td>09:00</td>
                        <td>19:00</td>
                    </tr>
                    <tr>
                        <td>Sábado</td>
                        <td>10:00</td>
                        <td>14:00</td>
                    </tr>
                    <tr>
                        <td>Domingo</td>
                        <td>Cerrado</td>
                        <td>Cerrado</td>
                    </tr>
                </tbody>
           </table>
          </div>
          <div class="col-md-6 bg-horario">

          </div>
        </div>
      </div>
    </div>

    <section class="productos container py-5">
      <h2 class="encabezado text-center text-uppercase mt-4">
        <span class="text-lowercase d-block">nuestros</span> productos
      </h2>
      <div class="row py-5">
          <?php
              $productos = obtenerProductos(4);

              while($producto = $productos->fetch_assoc() ) {
                         
          ?>
          <div class="col-md-3 mb-4">
            <div class="card">
              <a href="producto.php?id=<?php echo $producto['id']; ?>">
                <img class="card-img-top" src="img/<?php echo $producto['imagen_mini']; ?>">
                <div class="card-body">
                  <h3 class="card-title text-center text-uppercase">
                      <?php echo $producto['nombre']; ?>
                  </h3>
                  <p class="card-text text-center text-uppercase">
                      <?php echo $producto['descripcion_corta']; ?>
                  </p>
                  <p class="precio mb-0 lead text-center">
                      $<?php echo $producto['precio']; ?>
                  </p>
                </div>
              </a>
            </div><!--card-->
          </div><!--col-md-3-->
          <?php } ?>
        </div><!--row-->
    </section>

                
<?php
  include 'template/pedidos.php'; 
  include 'template/footer.php';
?>


