<?php
  session_start();
  
  if(isset($_GET['cerrar_sesion'] ) ) {
    session_destroy();
   }
  include_once 'templates/header.php';
  include_once 'funciones/funciones.php';
?>
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Bolvia</b>PC</a>
  </div>
  <!-- /.login-logo -->
  <body class="hold-transition login-page">
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form name="login-admin-form" id="login-admin" method="POST" action="insertar-admin.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <input type="hidden" name="login-admin" value="1">
          <button type="submit" name="login_admin" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   
    <!-- /.social-auth-links -->

    

  </div>
  <!-- /.login-box-body -->
</div>
<?php 
  include_once 'templates/footer.php';
?>
  
  
