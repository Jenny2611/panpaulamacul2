<footer class="footer-sitio pt-3 mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-uppercase text-center pb-4">Nosotros</h3>
            <p class="text-justify">
                Panadería y Pastelería Paula nace en la V Región hace 40 años, pero en los últimos 10 años se ha modernizado con el fin de preparar el camino que nos ha permitido un fuerte crecimiento.</p>
          </div>
          <div class="col-md-4 text-center">
              <h3 class="text-uppercase  pb-4">Horarios</h3>
              <p>Lunes- Viernes 9AM - 9PM</p>
              <p>Sabado         10AM - 9PM</p>
              <p>Lunes- Viernes Cerrado</p>
          </div>
          <div class="col-md-4 text-center">
            <h3 class="text-uppercase pb-4">CONTACTO</h3>
            <p>Av. José Pedro Alessandri 927, local 01</p>
            <p>Ñuñoa</p>
            <nav class="sociales text-center text-center">
                <ul>
                  <li>
                     <a href="http://facebook.com">
                       <span class="sr-only"> Facebook</span>                     
                     </a>                   
                  </li>
                  <li>
                    <a href="http://twitter.com">
                      <span class="sr-only"> Twitter</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://instagram.com">
                      <span class="sr-only"> Instagram</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://pinterest.com">
                      <span class="sr-only"> Pinterest</span>
                    </a>
                  </li>
                  <li>
                    <a href="http://youtube.com">
                      <span class="sr-only"> YouTube</span>
                    </a>
                  </li>
                </ul>
              </nav>
          </div><!--col-md-4-->
          <hr class="w-100">
          <p class="text-center copyright w-100 ">Pan Paula Macul 2019. Todos los derechos reservados</p>
        </div><!--row-->
      </div><!--container-->
    </footer>    

    <script src="js/jquery.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

<?php
    // Guarda todo el contenido a un archivo
    $fp = fopen($archivoCache, 'w');
    fwrite($fp, ob_get_contents());
    fclose($fp);
    // Enviar al navegador
    ob_end_flush();
?>