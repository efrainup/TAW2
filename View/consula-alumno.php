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
 <?php  include('side-admin.php'); ?> 

  <div class="row">
          <div class="col-lg-12">
            <h1 align="center"><strong>Busqueda General de Pacientes</strong></h1>
            <h1 align="center"><small>Usuario Administrador</small></h1>
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
  <form action="resultado17.php" method="POST" enctype="multipart/form-data">

    <div align="center">
      <table width="82%" class="table table-hover">
  			 <tr>
        <th scope="col"><div align="left">
          <a href="alta-alumno.php"><span style="color: blue;"><strong>Agregar Alumno </strong></span></a>
          <?php 	
          
          include_once '../Model/Alumno.php';
          
          $alumno = new Alumno();
          
          //echo "<div align=\"center\"><table border=5><td>ID</td><td>Matricula</td><td>Nombre</td><td>Carrera</td><td>Modificar</td><td>Eliminar</td></div><br>";
          $alumnos = $alumno->Read();
          foreach($alumnos as $row){
              echo "<tr><td>".$row->Nombre."</td><td>".$row->Matricula."</td><td>".$row->Nombre."</td><!--td>".$row->Matricula."</td--><td><a href='../Controller/AlumnosController.php?Accion=U&Matricula=".$row->Matricula." '> Modificar</a></td><td><a href='../Controller/AlumnosController.php?Accion=D&Matricula=".$row->Matricula."'> Eliminar</a></td>";
          }
          
          
          
		 /* include('conexion.php');		
		$query = "SELECT * FROM alumnos  ";
		$dato='matricula';
if ( mysql_query($query)){
	echo "<div align=\"center\"><table border=5><td>ID</td><td>Matricula</td><td>Nombre</td><td>Carrera</td><td>Modificar</td><td>Eliminar</td></div><br>";
		$y=mysql_query($query);
		 while ($row=mysql_fetch_array($y)) {
  			echo "<tr><td>".$row['id']."</td><td>".$row['matricula']."</td><td>".$row['nombre']."</td><td>".$row['carrera']."</td><td><a href=' modificarosita.php?dato=".$row['matricula']." '> Modificar</a></td><td><a href=' eliminarpaciente.php?dato=".$row['matricula']."'> Eliminar</a></td>";
 }
}

	else{
		echo("QUERY INCORRECTO :(");
}*/

		?>        </th>
      </tr>
  	
      </table>
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
