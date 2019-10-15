<?php
  //include_once 'funciones/sesiones.php';
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
        <form role="form" name="guardar-registro" id="guardar-registro" method="POST" action="modelo-admin.php"> 
              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Nombre del Administrador</label>
                  <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="Usuario">
                </div>
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" id="usuario"  name="usuario" placeholder="Tu usuario de acceso">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Crea tu Password">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="Repite tu password">
                  <span id="resultado_password" class="help-block"></span>
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="nuevo">
                <button type="submit" class="btn btn-primary" name="agregar-admin" id="crear_registro">Añadir</button>
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
  
  
