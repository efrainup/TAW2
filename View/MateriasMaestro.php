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
            <h1 align="center"><strong>Consulta general de grupos</strong></h1>
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
  <form action="resultado17.php" method="POST" enctype="multipart/form-data">

    <div align="center">
        <div class="accordion">
        <?php 	
          include_once "../Controller/SessionManager.php";
          include_once '../Model/Maestro.php';
          
          $maestro = new Maestro();
          $mas = SessionManager::getMaestro();
          $maestro->Id_Maestro = $mas->Id_Maestro;
          $materias = $maestro->getMaterias();
          ?>
        
        <?php
        // echo $maestros;
          foreach($materias as $row){
        ?>   
        
        
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      <?php $row->Nombre ?>
                    </a>
                </div>
                <div  class="accordion-body collapse in">
                    <div class="accordion-inner">
                      Anim pariatur cliche...
                    </div>
                </div>
            </div>
       
        
          <?php } ?>
        
         </div>
      
          
          
          
          
          
          
          
          
              
  	
      
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
