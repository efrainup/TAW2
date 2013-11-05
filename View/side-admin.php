<?php 
include_once '../Controller/SessionManager.php';
?>

       <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
		     
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-pencil"></i> Alumnos <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="icon-user" href="alta-alumno.php">Alta Alumno</a></li>
                <li><a class="icon-search" href="consula-alumno.php">Consulta General</a></li>
              </ul>
            </li>
			 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book"></i> Maestros <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="icon-user"  href="#">Alta Maestro </a></li>
                <li><a class="icon-search" href="#">Consulta General</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-folder-open"></i> Carreras <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="icon-book" href="#">Alta Carrera </a></li>
                <li><a class="icon-search" href="#">Consulta General</a></li>             
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-folder-close"></i> Materias <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="icon-book" href="#">Alta Materia </a></li>
                <li><a class="icon-search" href="#">Consulta General</a></li>             
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-file"></i> Reporte <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="icon-download" href="#">Generar Reporte pdf </a></li>
                <li><a class="icon-list-alt" href="#">Generar Reporte xls </a></li>             
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell-alt"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i><?php SessionManager::getNombreUsuario()?><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">