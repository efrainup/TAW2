
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
            <h1>Alta Alumno <small>Sistema Para Usuario Administrador</small></h1>

            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              Welcome to SB Admin by <a class="alert-link" href="http://startbootstrap.com">Start Bootstrap</a>! Mensaje de saludo y expolicar el sistema
            </div>
          </div>
  </div><!-- /.row -->

  <div class="row"></div>
        <!-- /.row -->

  <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 align="center" class="panel-title"><i class="icon-user"></i> Ingresar Nuevo Alumno</h3>
              </div>
			  <div>
  <form action="resultado17.php" method="POST" enctype="multipart/form-data">

    <div align="center">
      <table width="82%" class="table table-bordered" >
  			<tr >
          <th ><label>
          <div align="left">Matricula</div>
          </label></th>
          <td><label for="fecha"></label>
          <input class="input-block-level" type="text" placeholder=".input-block-level">
        </tr>
		<tr>
          <th width="173" scope="row">Nombre</th>
          <td width="725"><label for="nombre"></label>
        <input class="input-block-level" type="text" placeholder=".input-block-level">
        </tr>
                  
        <tr>
          <th width="173" scope="row">Carrera</th>
          <td width="725"><label for="categoria"></label>
            <SELECT NAME="categoria" SIZE=1 > 
                    <OPTION VALUE="default">Seleccione una Opcion</OPTION>
                  <OPTION VALUE="deportes">Iti</OPTION>
                  <OPTION VALUE="sociales">Mecatronica</OPTION>
                  <OPTION VALUE="cultura">Manufactura</OPTION>
        </SELECT>          </tr>
  	
      </table>
         <div align="center">  <input class="btn btn-primary"  type="submit" name="action" id="enviar" value="Enviar"> 
	  </div>    
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
