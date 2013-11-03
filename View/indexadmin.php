
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
            <h1 align="center"><strong>Universidad Poltecnica de Victoria</strong></h1>
            <h1 align="center"><small>Bienvenido</small></h1>
            <div class="alert alert-info">
              <p align="center">Bienvenido a este pequeño sitio de internet, en el cual se encuentra una   aplicación basada en PHP y usando bases de datos en MySql, para recrear un   sistema de control escolar.</p>
                <p align="center">Este proyecto es realizado en la materia de 'Tecnologias y Aplicaciones Web'   que se imparte en la currícula de la carrera de Ingeniería en Tecnologías de la   Información en la Universidad Politécnica de Victoria.</p>
                <p align="center">Dicha materia es impartida por el M.S.I. Mario Humberto Chavez Rodriguez </p>
        <p align="center">Espero sea de su agrado nuestro trabajo. </p>
        <p align="center"><img src="LOGO.png" alt="imagen" width="224" height="180"></p>
            </div>
          </div>
  </div><!-- /.row -->

  <div class="row"></div>
        <!-- /.row -->



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
