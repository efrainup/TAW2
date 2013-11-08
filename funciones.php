
<?php

	
include('conexion.php');

$rep=$_POST["rep_ind"];

switch($opcion){


///////////////////////////////////////////////////////////////////////////////////////7
	case 'Agregar':

	$sql="INSERT INTO registros(solicitado_por,departamento,realizado_por,recibido_por,descripcion,tipo_servicio,estado,fecha_reporte,fecha_termino) VALUES ('$_POST[solicitante]','$_POST[departamento]','$_POST[realizado]','$_POST[recibido]','$_POST[descripcion]','$_POST[tiposervicio]','$_POST[estado]','$_POST[fecha_r]','$_POST[fecha_t]')";

		if (!mysql_query($sql,$con)){
  			die('Error: ' . mysql_error()); 
  		}else{

			header("Location: admin_agregar_reporte.php");
		}
		mysql_close($con);


	break;
//////////////////////////////////////////////////////////////////////////////////////////
	case "Eliminar":

		$sql="DELETE FROM registros WHERE id='$_POST[id_reporte]'";


		if (!mysql_query($sql,$con)){
  			die('Error: ' . mysql_error()); 
  		}else{

			header("Location: admin_eliminar_reporte.php");
		}
		mysql_close($con);

		break;
	/////////////////////////////////////////////////////////////////////////////////7
		case 'Agregar Usuario':
		
		$sql="INSERT INTO usuarios(Nombre,usuario,contrasenia,tipo) VALUES ('$_POST[nombre]','$_POST[usuario]','$_POST[pass]','$_POST[tipo]')";

		if (!mysql_query($sql,$con)){
  			die('Error: ' . mysql_error()); 
  		}else{

			header("Location: admin_agregar_usuario.php");
		}
		mysql_close($con);

		break;

	//////////////////////////////////////////////////////////////
		case "Eliminar Usuario":

		$sql="DELETE FROM usuarios WHERE usuario='$_POST[usuario]'";


		if (!mysql_query($sql,$con)){
  			die('Error: ' . mysql_error()); 
  		}else{

			header("Location: admin_eliminar_usuario.php");
		}
		mysql_close($con);

		break;

	///////////////////////////////////////////////////////////////////////////
		case 'Generar Hoja de Excel':

		header("Location: ArchivoRegistros.php");
		break;

	///////////////////////////////////////////////////////////////////////
		case 'Imprimir Reporte':	

		header("Content-type: application/vnd.ms-excel" ) ; 
		header("Content-Disposition: attachment; filename=Registro_Telecomunicaciones.xls" ) ; 

		include('conexion.php');

		$qry=mysql_query("SELECT * FROM registros WHERE id='$rep'") ;  
		$account = mysql_fetch_array($qry);
		


		$solicitado_por=$account['solicitado_por'];
		$departamento=$account['departamento'];
		$realizado_por=$account['realizado_por'];
		$recibido_por=$account['recibido_por'];
		$descripcion=$account['descripcion'];
		$tipo_servicio=$account['tipo_servicio'];
		$estado=$account['estado'];
		$fecha_reporte=$account['fecha_reporte'];
		$fecha_termino=$account['fecha_termino'];


		echo"<table><tr><td>Solicitado por:</td><td>". $solicitado_por; echo"</td><td>Departamento:</td><td>". $departamento; echo"</td></tr>";
		echo "<tr></tr>";
		echo"<tr><td>Realizado por:</td><td>". $realizado_por; echo"</td><td>Recibido por:</td><td>". $recibido_por; echo"</td></tr>";
		echo "<tr></tr>";
		echo "<tr><td>Tipo de Servico:</td><td>". $tipo_servicio; echo"</td><td>Descripcion:</td><td>". $descripcion; echo"</td></tr>";
		echo "<tr></tr>";
		echo "<tr><td>Tipo de Servico:</td><td>". $estado; echo"</td></tr>";
		echo "<tr></tr>";
		echo"<tr><td>Fecha de Reporte:</td><td>". $fecha_reporte; echo"</td><td>Fecha de Reparacion:</td><td>". $fecha_reporte; echo"</td></tr>";
		
		echo "<tr></tr>";

		echo "<tr></tr>";

		echo "<tr></tr>";
		echo"<tr><td></td><td>______________________________</td>";echo"<td></td><td>______________________________</td></tr>";
		echo"<tr><td></td><td>Frima de Recibido</td>";echo"<td></td><td>Frima de Realizado</td></tr>";
		echo"</table>";

		break;

	}


?>
