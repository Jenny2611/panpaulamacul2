<?php
  $titulo= 'Nombre Pagina';
  include 'template/header.php';
  include 'template/navegacion.php';

?>



    <div class="container pt-4">
      <div class="row no-glutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Titulo Aqui</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            seg. Titulo aqui
          </h2>
        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar">
            <h2 class="text-center text-uppercase mt-4">Algo Asi</h2>
          </div>
        </aside>
      </div>
    </div>
    <?php
  include 'template/footer.php';
?>