<?php
$nombr = $_POST['user'];
$contr = $_POST['pass'];
require_once 'conexion.php';
$consulta="SELECT *FROM usuarios WHERE Usuario='$nombr' AND  Contraseña='$contr'";
$query = mysqli_query($con,$consulta);

$fias=mysqli_fetch_array($query);

if ($fias){
session_start();

echo "Bienvenid@, $nombr";
}
else
{
	echo "<script>
		  alert('No tienes acceso al sistema');
		  
	</script>";
}
?>