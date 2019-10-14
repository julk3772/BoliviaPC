<?php
  //include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
  $id = $_GET['id'];
  if(!filter_var($id, FILTER_VALIDATE_INT)) {
    die("Error!");
  }
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';
?>


  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Administrador
        <small>Please llene el formulario</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Administrador</h3>

          
        </div>
        <div class="box-body">
        <?php 
          $sql = "SELECT * FROM admins WHERE id_admin = $id ";         
          $resultado = $conn->query($sql);
          $admin = $resultado->fetch_assoc();
        ?>
        <form role="form" name="guardar-registro" id="guardar-registro" method="POST" action="modelo-admin.php" value="<?php echo $admin['usuario']; ?>"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre del Administrador</label>
                  <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Tu nombre completo" value="<?php echo $admin['nombre']; ?>">
                </div>
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" id="usuario"  name="usuario" placeholder="Tu usuario de acceso">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Crea tu Password">
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="actualizar">
                <input type="hidden" name="id_registro" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-primary" name="agregar-admin">Guardar</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
        
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  include_once 'templates/footer.php';
?>
  
  
