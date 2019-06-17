<?php include_once 'includes/templates/header.php'; ?>


  <?php
    try{
      require_once('includes/funciones/bd_conexion.php');
      $sql = "SELECT * FROM invitados";
      $resultado = $conn->query($sql);      
    }catch (Exception $e){
      echo $e->getMessage();
    }    
  ?>
  <section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>
    <ul class="lista-invitados clearfix">
    <?php while ($invitados = $resultado->fetch_assoc()) {?>
      <li>
        <div class="invitado">
        <img src="img/<?php echo $invitados['url_imagen'] ?>" alt="imagen invitado">
        <p><?php echo $invitados['nombre_invitado']. " " .$invitados['apellido_invitado'] ?></p>
        </div>
      </li>
    <?php }?>
    </ul>
    </section>
    <?php 
      $con->close();
    ?>  
 </section>
 
<?php include_once 'includes/templates/footer.php'; ?>
