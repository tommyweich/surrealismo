<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Formulario de contacto</title>

<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
	<form id="formcontacto" action="enviar.php" method="post">
        <label>Nombre
            <input type="text" name="nombre" required/>	
        </label>
        <label>Email
            <input type="email" name="email"required />
        </label>
        <label>Comentario
            <textarea name="comentario"></textarea>
        </label>
        <input type="submit" value="Enviar" />
    </form>	

</body>
</html>