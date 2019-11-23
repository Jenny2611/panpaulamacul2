<?php
  $titulo= 'Servicios';
  include 'template/header.php';
  include 'template/navegacion.php';

?>



    <div class="container pt-4">
      <div class="row no-glutters">
        <div class="col-12 hero">
          <img src="img/servicios.jpg" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Servicios
          </h2>

          <div id="servicios">
              <div class="card">
                  <div class="card-header" id="servicio1">
                      <h2 class="md-0">
                          <button class="btn btn-link" data-toggle="collapse"
                          data-target="#descripcion1" aria-expanded="true" 
                          aria-controls="#descripcion1">
                              Servicio 1
                        </button>
                      </h2>
                  </div><!--.card-header-->
                  <div id="descripcion1" class="collapse show" aria-labelledby="servicio1" 
                  data-parent="#servicios">
                    <div class="card-body">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Velit quas quo quaerat veniam sint rerum consequatur sed, 
                        voluptatem nulla minus hic magnam, veritatis voluptates saepe perferendis 
                     
                        Velit quas quo quaerat veniam sint rerum consequatur sed, 
                        voluptatem nulla minus hic magnam, veritatis voluptates saepe perferendis 
                        fugit cumque excepturi id?
                      </p>

                    </div>

                  </div>
              </div><!--.card-->

              <div class="card">
                  <div class="card-header" id="servicio2">
                      <h2 class="md-0">
                          <button class="btn btn-link" data-toggle="collapse"
                          data-target="#descripcion2" aria-expanded="false" 
                          aria-controls="#descripcion2">
                              Servicio 2
                        </button>
                      </h2>
                  </div><!--.card-header-->
                  <div id="descripcion2" class="collapse" 
                  aria-labelledby="servicio2" data-parent="#servicios">
                    <div class="card-body">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Velit quas quo quaerat veniam sint rerum consequatur sed, 
                        voluptatem nulla minus hic magnam, veritatis voluptates saepe perferendis 
                     
                        Velit quas quo quaerat veniam sint rerum consequatur sed, 
                        voluptatem nulla minus hic magnam, veritatis voluptates saepe perferendis 
                        fugit cumque excepturi id?
                      </p>

                    </div>

                  </div>
              </div><!--.card-->


              <div class="card">
                  <div class="card-header" id="servicio3">
                      <h2 class="md-0">
                          <button class="btn btn-link" data-toggle="collapse"
                          data-target="#descripcion3" aria-expanded="false" 
                          aria-controls="#descripcion3">
                              Servicio 3
                        </button>
                      </h2>
                  </div><!--.card-header-->
                  <div id="descripcion3" class="collapse" 
                  aria-labelledby="servicio3" data-parent="#servicios">
                    <div class="card-body">
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Velit quas quo quaerat veniam sint rerum consequatur sed, 
                        voluptatem nulla minus hic magnam, veritatis voluptates saepe perferendis 
                     
                        Velit quas quo quaerat veniam sint rerum consequatur sed, 
                        voluptatem nulla minus hic magnam, veritatis voluptates saepe perferendis 
                        fugit cumque excepturi id?
                      </p>

                    </div>

                  </div>
              </div><!--.card-->

          </div>

        </main>
        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar p-3">
                <h2 class="text-center text-uppercase mt-4">Nuevos Clientes</h2>
                <p class="lead text-center mt-4">
                    Recibe 0 % de descuento con este cupón
                </p>

                <div class="cupon px-2 py-3 mt-5">
                    <p class="text-uppercase text-center mb-0">
                        <span class="display-4">0 % Descuento</span> <br>
                        en todos productos de Pasteleria
                    </p>
                </div>
          </div>
        </aside>
      </div>
    </div>



      <?php
  include 'template/pedidos.php'; 
  include 'template/footer.php';
?>