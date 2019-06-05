<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>Invitados</h2>
    <?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
    ?>  
    <?php
      try {
            require_once('includes/funciones/bd_conexion.php');
            $sql = "SELECT * FROM 'invitados' ";
            $resultado = $conn->query($sql);
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
    ?>
    
   <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
        <?php while($invitados = $resultado->fetch_assoc() ){?>
             <li>
                <div class="invitado">
                    <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="imagen invitado">
                    <p><?php echo $invitado['nombre_invitado'] . "" . $invitado['apellido_invitado'] ?></p>
                </div>
             </li>             
        <?php }?>
        </ul>
    </section>                          
    <?php
      $conn->close();
     ?>
  </section>
<?php include_once 'includes/templates/footer.php'; ?>
