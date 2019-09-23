<?php 
  include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
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
        Crear Administrador
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
        <form role="form" name="crear-admin" id="crear-admin" method="POST" action="insertar-admin.php"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre del Administrador</label>
                  <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Tu nombre completo">
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
                <input type="hidden" name="agregar-admion" value="1">
                <button type="submit" class="btn btn-primary" name="agregar-admin">Añadir</button>
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
  
  
