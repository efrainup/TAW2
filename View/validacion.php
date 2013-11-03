 <?php 
session_start();
$con = mysql_connect("localhost","root","");
	$opcion = $_POST['action'];
			if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("universidad", $con);

			$user=$_POST['usuario'];
			$pass=$_POST['pass'];
			$tipo1='1';
			$tipo2='2';
	echo"primer piso";
			$c_reg = mysql_query("SELECT * FROM usuario WHERE usuario = '$user' AND pass = '$pass'");
			echo"segundo piso";
			$account = mysql_fetch_array($c_reg);
			if ($account['usuario'] == $user && $account['pass'] == $pass && $account['tipo'] ==$tipo1){

			$_SESSION["S_tipo"]=$tipo;	
				header("Location:indexadmin.php");
				echo"tercer piso";

			}else{	echo"cuarto piso";

			if ($account['usuario'] == $user && $account['pass'] == $pass && $account['tipo'] ==$tipo2){

			$_SESSION["S_tipo"]=$tipo2;	
			echo"cuarto piso";
				
			
			header("Location:indexmaestro.php");
			}else{
			header("Location:index.html");
		
			}
		}
		mysql_close($con);	
		
		
		?>
