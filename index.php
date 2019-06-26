<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
      <h2>La mejor Tienda Gamer de la paz</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere feugiat mauris, a interdum orci varius a. Phasellus lobortis interdum bibendum. Phasellus sed erat vestibulum, sagittis dui lobortis, egestas felis. </p>
    </section><!--seccion-->

    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster="img/bg-talleres.jpg">
          <source src="video/Pexels Videos 979689.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogg">    
        </video>
      </div><!--contenedor video-->
      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
              <h2>Programa del Evento</h2>
              <?php 
                try{
                  require_once('includes/funciones/bd_conexion.php');
                  $sql = "SELECT * FROM categoria_evento ";
                  $resultado = $conn->query($sql);
                } catch (Exception $e){
                  $error = $e->getMessage();
                }
              ?>
              <nav class="menu-programa">
                <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                  <?php $categoria = $cat['cat_evento']; ?>
                    <a href="#<?php echo strtolower($categoria) ?>">
                      <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i>
                  <?php echo $categoria ?></a>                        
                <?php } ?>
              </nav>
              <?php
                try {
                      require_once('includes/funciones/bd_conexion.php');
                      $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                      $sql .= " FROM eventos ";
                      $sql .= " INNER JOIN categoria_evento ";
                      $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                      $sql .= " INNER JOIN invitados ";
                      $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                      $sql .= " AND eventos.id_cat_evento = 1";
                      $sql .= " ORDER BY evento_id LIMIT 2;";
                      $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                      $sql .= " FROM eventos ";
                      $sql .= " INNER JOIN categoria_evento ";
                      $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                      $sql .= " INNER JOIN invitados ";
                      $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                      $sql .= " AND eventos.id_cat_evento = 2";
                      $sql .= " ORDER BY evento_id LIMIT 2;";
                      $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                      $sql .= " FROM eventos ";
                      $sql .= " INNER JOIN categoria_evento ";
                      $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                      $sql .= " INNER JOIN invitados ";
                      $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                      $sql .= " AND eventos.id_cat_evento = 3";
                      $sql .= " ORDER BY evento_id LIMIT 2";
                      
                    } catch (\Exception $e) {
                  echo $e->getMessage();
                }
              ?>
              <?php $conn->multi_query($sql);?>
              <?php 
                do{
                  $resultado = $conn->store_result();
                  $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>
                  <?php $i = 0; ?>
                  <?php foreach($row as $evento): ?>
                    <?php if($i % 2 == 0) {?>
                      <div id="<?php echo strtolower($evento['cat_evento'])?>" class="info-curso ocultar clearfix">
                    <?php } ?>
                      <div class="detalle-equipo">
                        <h3><?php echo utf8_encode($evento['nombre_evento']) ?></h3>
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $evento['hora_evento']; ?></p>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $evento['fecha_evento']; ?></p>
                        <p><i class="fa fa-user" aria-hidden="true"></i><?php echo $evento['nombre_invitado'] . "" . $evento['apellido_invitado']; ?></p>
                      </div>
                    <?php if($i % 2 == 1): ?>  
                        <a href="#" class="button float-right">Ver todos</a>
                      </div><!--Talleres-->
                    <?php endif;?>              
                    <?php  $i++; ?>    
                    <?php endforeach; ?>
                    <?php $resultado->free();?>    
                  <?php } while($conn->more_results() && $conn->next_result()); ?>         
          </div><!--programa-evento-->          
        </div><!--contenedor-->
      </div><!--contenido-programa-->
    </section><!--programa-->
      <?php include_once 'includes/templates/invitados.php'; ?>   
    <div class="contador parallax">
      <div class="contenedor">
        <ul class="resumen-evento clearfix">
          <li><p class="numero">0</p>Años</li>
          <li><p class="numero">0</p>Equipos</li>
          <li><p class="numero">0</p>Clientes</li>
          <li><p class="numero">0</p>Marcas</li>
        </ul>
      </div>
    </div>

    <section class="precios seccion">
      <h2>Precios</h2>
      <div class="contenedor">
        <ul class="lista-precios clearfix">
          <li>
            <div class="tabla-precio">
              <h3>Equipo Oficina</h3>
              <p class="numero">$300</p>
              <ul>
                <li>Intel I3</li>
                <li>8Gb RAM</li>
                <li>1 Tera Disco Duro HDD</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Equipo EcoGamer </h3>
              <p class="numero">$500</p>
              <ul>
                <li>Intel I5</li>
                <li>12Gb RAM</li>
                <li>120 Gb Disco Duro SSD</li>
                <li>1 Tera Disco Duro HDD</li>
                <li>GTX 1050 2 Gb VRAM</li>
              </ul>
              <a href="#" class="button">Comprar</a>
            </div>
          </li>
          <li>
            <div class="tabla-precio">
              <h3>Equipo ProGamer</h3>
              <p class="numero">$800</p>
              <ul>
                <li>Intel I7</li>
                <li>32Gb RAM</li>
                <li>500 Gb Disco Duro SSD</li>
                <li>1 Tera Disco Duro HDD</li>
                <li>GTX 1070 5 Gb VRAM</li>
              </ul>
              <a href="#" class="button hollow">Comprar</a>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <div id="mapa" class="mapa">
    </div>
    <section class="seccion">
      <h2>Testimonios</h2>
      <div class="testimoniales contenedor clearfix">
        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu nisl elit. Nullam at nulla a sapien pharetra sollicitudin. Mauris vitae felis erat. Ut sit amet nisl nibh. Nunc varius pulvinar tortor ut semper.</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial">
              <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div>
        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu nisl elit. Nullam at nulla a sapien pharetra sollicitudin. Mauris vitae felis erat. Ut sit amet nisl nibh. Nunc varius pulvinar tortor ut semper.</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial">
              <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div>
        <div class="testimonial">
          <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu nisl elit. Nullam at nulla a sapien pharetra sollicitudin. Mauris vitae felis erat. Ut sit amet nisl nibh. Nunc varius pulvinar tortor ut semper.</p>
            <footer class="info-testimonial clearfix">
              <img src="img/testimonial.jpg" alt="imagen testimonial">
              <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
            </footer>
          </blockquote>
        </div><!--.testimonios-->
      </div>
    </section>
    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>registrate a las noticias de:</p>
        <h3>barbarian gek</h3>
        <a href="#" class="button transparente">Registro</a>
      </div><!--.contenido-->
    </div><!--.newsletter-->
    <section class="seccion">
      <h2>experiencia de:</h2>
      <div class="cuenta-regresiva contenedor">
        <ul class="clearfix">
          <li><p id="dias" class="numero">520</p>Dias</li>
          <li><p id="horas" class="numero">15</p>Horas</li>
          <li><p id="minutos" class="numero">5</p>Minutos</li>
          <li><p id="segundos" class="numero">20</p>Segundos</li>
        </ul>
      </div>
    </section>
    <?php include_once 'includes/templates/footer.php'; ?>
    
