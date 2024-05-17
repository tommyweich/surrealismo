<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar</title>
</head>

<body>
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$email=$_POST['email'];
$mensaje=$_POST["mensaje"];



$destino="mail@mail.com,mail2@mail.com";
$asunto="Contacto desde el sitio";
// $mensaje="Nombre: ".$nombre." Email: ".$email ." Mensaje: ".$mensaje;

$header="From: ".$nombre."<".$email.">";

$enviado = mail($destino,$asunto,$mensaje,$header);

if($enviado == true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio del mail.";
}
include 'conexion.php';
// $conexion = mysqli_connect("localhost","root","redcatanox", "contactos") or die('No se pudo conectar al servidor');


// $consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$localidad','$comentario')");

$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre, apellido, edad, email, mensaje) VALUES ( '$nombre', '$apellido', '$edad', '$email','$mensaje')") or die(mysqli_error($conexion));



?>
</body>
</html>