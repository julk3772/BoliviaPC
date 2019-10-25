<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        
        <div class="pull-left info">
          <p><?php echo $_SESSION ['nombre'] ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Busqueda...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-calendar"></i>
            <span>Eventos</span>            
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-evento.php"><i class="fas fa-list"></i>&nbsp Ver Todos</a></li>
            <li><a href="crear-evento.php"><i class="fas fa-plus-circle"></i>&nbsp Agregar</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fas fa-book"></i>
            <span>Categoria de Eventos</span>            
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-categoria.php"><i class="fas fa-list"></i>&nbsp Ver Todos</a></li>
            <li><a href="crear-categoria.php"><i class="fas fa-plus-circle"></i>&nbsp Agregar</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="far fa-user"></i>
            <span>Invitados</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fas fa-list"></i>&nbsp Ver Todos</a></li>
            <li><a href="#"><i class="fas fa-plus-circle"></i>&nbsp Agregar</a></li>            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
          <i class="fas fa-user-friends"></i>
            <span>Registrados</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fas fa-list"></i>&nbsp Ver Todos</a></li>
            <li><a href="#"><i class="fas fa-plus-circle"></i>&nbsp Agregar</a></li>            
          </ul>
        </li>
        <?php if($_SESSION['nivel'] == 1); { ?>
        <li class="treeview">
          <a href="#">
          <i class="fas fa-users-cog"></i>
            <span>Administradores</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-admin.php"><i class="fas fa-list"></i>&nbsp Ver Todos</a></li>
            <li><a href="crear-admin.php"><i class="fas fa-plus-circle"></i>&nbsp Agregar</a></li>            
          </ul>
        </li>
        <?php } ?>
        <li class="treeview">
          <a href="#">
          <i class="far fa-comments"></i>
            <span>Testimoniales</span>
            
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fas fa-list"></i>&nbsp Ver Todos</a></li>
            <li><a href="#"><i class="fas fa-plus-circle"></i>&nbsp Agregar</a></li>            
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
