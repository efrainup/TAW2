<?php
$con = mysql_connect("localhost","root","");
	$opcion = $_POST['action'];
			if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("universidad", $con);
?>

