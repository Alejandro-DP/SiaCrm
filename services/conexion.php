<?php
$host='localhost';
$user = 'root';
$password ='Amistad2021!';
$db ='SiaDb';

$con = mysqli_connect($host,$user,$password,$db);


if (!$con){
	die("Ocurrio algun error al conectar a la base de datos , favor de contactar al administrador".mysqli_connect_error());
}





?>