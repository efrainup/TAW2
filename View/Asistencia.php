<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    
  </head>

<body>
<div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="indexadmin.php">Administrador</a>
        </div>
 <?php  include('side-maestro.php'); ?> 

  <div class="row">
          <div class="col-lg-12">
            <h1 align="center"><strong>Lista de asistencia</strong></h1>
            <!--h1 align="center"><small>Usuario Administrador</small></h1-->
            </div>
  </div><!-- /.row -->

  <div class="row"></div>
        <!-- /.row -->

  <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 align="center" class="panel-title"><i class="icon-user"></i>Lista de Alumnos y opciones que se pueden realizar</h3>
</div>
			  <div>
  

                              

    <div align="center">
        
        <form method="POST" action="../Controller/AlumnosController.php">
        <input type="hidden" name="Accion" value="LISTA"/>
        <?php
        echo "<input type='hidden' name='idGrupo' value='{$_REQUEST['Grupo']}'/>"
        ?>
      <table width="82%" class="table table-hover">
          <thead>
          <th>Grupo</th>
          <th><?php 
          $fech =  date("Y-m-d");
          echo date("D, d M Y") ?></th>
          <th></th>
          <th></th>
          <th></th>
          </thead>
          <?php 	
          
          include_once '../Model/Grupo.php';
          
          $grupo = new Grupo();
          //$maestro->Id_Maestro = 1;//$_REQUEST[];
          $grupo->Id_Grupo = $_REQUEST["Grupo"];
          $alumnos = $grupo->getAlumnos();
          
          session_start();
          $_SESSION["AsistenciaAlumnos"] = serialize($alumnos);
          
         // echo $maestros;
          foreach($alumnos as $row){
              $che = $row->readAsistencia($grupo->Id_Grupo, $fech) == 1 ? "checked='checked'" : "";
              
              echo "<tr>".
                   
                   "<td>".$row->Nombre."</td>".
                   "<td><input type='checkbox' name='asistencia[]' value='{$row->Id_Alumno}' {$che} /></td>";
              
          }
          
     
		?>        
  	
      </table>
        <button>Firmar asistencia</button>
        
        </form>
      <div align="center"></div>    
</div>
              </div><!-- /.row -->      

  </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Page Specific Plugins -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>
</body>
</html>
