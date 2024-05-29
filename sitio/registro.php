<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = md5($_POST['clave']);

	include("conexion.php");

	

	$consulta = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, email, usuario, contraseña) VALUES('$nombre','$apellido','$email', '$usuario', '$password')");


	header("Location:loguearse.html");

?>	
    

</body>
</html>