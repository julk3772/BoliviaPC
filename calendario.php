<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
    <?php
     try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
            $sql .= " FROM eventos ";
            $sql .= " INNER JOIN categoria_evento ";
            $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql .= " INNER JOIN invitados ";
            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
            $sql .= " ORDER BY evento_id ";
            $resultado = $conn->query($sql);
     } catch (\Exception $e) {
        echo $e->getMessage();
     }
 
   ?>
 
<div class="calendario">
     <?php
      $calendario = array();
      while( $eventos = $resultado->fetch_assoc() ) { 
        //obtiene la fecha del evento
        $fecha = $eventos['fecha_evento'];
        $evento = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos['hora_evento'],
            'categoria' => $eventos['cat_evento'],
            'inivitado'  => $eventos['nombre_invitado'] ." ". $eventos['apellido_invitado']
        );
      $calendario[$fecha] [] = $evento;
    ?>
    <?php } //while de fetch asoc ?>
    <?php 
      //imprime todos los eventos
      foreach($calendario as $dia => $lista_eventos) { ?>
          <h3>
            <i class="fa fa-calendar"></i>
            <?php
              //Unix
              setlocale(LC_TIME, 'es_ES.UTF-8');
              //Windows
              setlocale(LC_TIME, 'spanish');
              echo strftime("%A, %d, de %B del %Y", strtotime($dia));
            ?>
          </h3>
     <?php } ?>
    <pre>
        <?php var_dump($calendario); ?>
    </pre>    

</div>
      <?php 
        $conn->close();
      ?>
      
  </section><!--seccion-->
  
<?php include_once 'includes/templates/footer.php'; ?>
