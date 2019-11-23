<?php
  $titulo= 'Sobre Nosotros';
  include 'template/header.php';
  include 'template/navegacion.php';

?>


    <div class="container pt-4">
      <div class="row no-glutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid" alt="">
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
          <main class="col-lg-8 contenido-principal">
              <h2 class="d-block d-md-none text-uppercase text-center">
                Nosotros
              </h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores suscipit perspiciatis atque dignissimos commodi 
                molestiae ullam asperiores, blanditiis ipsa illum molestias dicta accusamus quia iusto, veniam, provident itaque ipsam.
                
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores suscipit perspiciatis atque dignissimos commodi 
                molestiae ullam asperiores, blanditiis ipsa illum molestias dicta accusamus quia iusto, veniam, provident itaque ipsam.
              </p>
              <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores suscipit perspiciatis atque dignissimos commodi 
                  molestiae ullam asperiores, blanditiis ipsa illum molestias dicta accusamus quia iusto, veniam, provident itaque ipsam.
                  
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias maiores suscipit perspiciatis atque dignissimos commodi 
                  molestiae ullam asperiores, blanditiis ipsa illum molestias dicta accusamus quia iusto, veniam, provident itaque ipsam.
              </p>
              
                  
              <h1 class="text-center text-uppercase mt-5 encabezado">
                  <span class="text-lowercase d-block">Conoce nuestras </span>
                  instalaciones
              </h1>
              <div class="imagenes pt-4">
                    <a href="#" data-target="#imagen_1" data-toogle="modal">
                      <img src="img/galeria_mini_03.jpg" class="img-fluid">
                    </a>
                    <a href="#" data-target="#imagen_1" data-toogle="modal">
                      <img src="img/galeria_mini_02.jpg" class="img-fluid">
                    </a>
                    <a href="#" data-target="#imagen_1" data-toogle="modal">
                      <img src="img/galeria_mini_03.jpg" class="img-fluid">
                    </a>

                    <div class="modal fade" id="imagen_1" tabindex="-1" role="dialog"
                    aria-labelledby="imagen 1" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                              <img src="img/galeria_grande_01.jpg" class="img-fluid">
                            </div><!--modal-body -->
                          </div> <!--modal-content-->
                        </div><!--modal-dialog-->
                    </div><!--modal-->  
                </div> 

          </main>
        <aside class="col-lg-4 pt-4 pt-lg-0 aligh-self-start">
          <div class="sidebar horario">
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
                          <td>21:00</td>
                      </tr>
                      <tr>
                          <td>Martes</td>
                          <td>09:00</td>
                          <td>21:00</td>
                      </tr>
                      <tr>
                          <td>Miércoles</td>
                          <td>09:00</td>
                          <td>21:00</td>
                      </tr>
                      <tr>
                          <td>Jueves</td>
                          <td>09:00</td>
                          <td>21:00</td>
                      </tr>
                      <tr>
                          <td>Viernes</td>
                          <td>09:00</td>
                          <td>21:00</td>
                      </tr>
                      <tr>
                          <td>Sábado</td>
                          <td>10:00</td>
                          <td>21:00</td>
                      </tr>
                      <tr>
                          <td>Domingo</td>
                          <td>Cerrado</td>
                          <td>Cerrado</td>
                      </tr>
                  </tbody>
             </table>
          </div>
        </aside>
      </div>
    </div>
    <?php
  include 'template/footer.php';
?>