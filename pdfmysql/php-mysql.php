<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

$conexion = mysql_connect("localhost", "root");
mysql_select_db("demo", $conexion);
$queEmp = "SELECT idemp, nombre, direccion, telefono, imagen FROM empresa ORDER BY idemp ASC";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'idemp'=>'<b>ID</b>',
				'nombre'=>'<b>nombre</b>',
				'direccion'=>'<b>direccion</b>',
				'telefono'=>'<b>telefono</b>',
				'imagen'=>'<b>codigo imagen</b>',
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>Consulta de Ventas</b>\n";


$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);

date_default_timezone_set("America/Mexico_City");
$pdf->ezText("Hora: " . date ("h:i",time()));

$pdf->ezStream();
?>

