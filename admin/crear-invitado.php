<?php
  //include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';
?>
<body  class="hold-transition skin-blue fixed sidebar-mini" data-elemento="Eventos">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php include_once 'templates/barra.php'; ?>
        <?php include_once 'templates/navegacion.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="text-center">
        Añadir Invitados
        <small>Utilice el formulario para agregar una nuevo invitad@</small>
      </h1>

      
    </section>

    <!-- Main content -->
    <section class="content">
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Crear Nuevo Invitado</h3>
                            </div>
                            <!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" id="guardar-registro-archivo" action="modelo-invitado.php" enctype="multipart/form-data" method="post">
                                    <div class="box-body">
                                            <div class="form-group">
                                                <label for="nombre_invitado">Nombre: </label>
                                                <input type="text" class="form-control" id="nombre_invitado" name="nombre_invitado" placeholder="Introduce el nombre del invitado">
                                            </div>
                                            <div class="form-group">
                                                <label for="apellido_invitado">Apellido: </label>
                                                <input type="text" class="form-control" id="apellido_invitado" name="apellido_invitado" placeholder="Introduce el apellido del invitado">
                                            </div>                                         
                                            <div class="form-group">
                                                <label for="biografia_invitado">Biografia:</label>
                                                <textarea class="form-control" id="biografia_invitado" name="biografia_invitado" rows="8" placeholder="Biografia del Inviatad@"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="imagen_invitado">Subir Imagen</label>
                                                <input type="file" id="imagen_invitado" name="archivo_imagen">
                                                <p class="help-block">Añadir la imagen del invitad@</p>
                                            </div>
                                    </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <input type="hidden" name="registro" value="nuevo">
                                        <button type="submit" name="agregar" id="agregar" class="btn btn-primary">Agregar</button>
                                    </div>
                                </form>
                            
                    </div>
                </div>
            </div> <!--.row-->  
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
  include_once 'templates/footer.php';
?>
  
  
