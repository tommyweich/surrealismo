<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Limelight&display=swap">

</head>

<body class="bg-black">
    <nav class="navbar navbar-expand-lg bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="historia.html">HISTORIA</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            ARTISTAS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="artistas.html">ARTISTAS</a></li>
                            <li><a class="dropdown-item" href="galeria.html">GALERÍA</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.html">CONTACTO</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

  

    <section>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'  ");
?>
<article style="width:50%;margin:0 auto;">
	<p style="color:white; background-color:black;font-family: Playfair Display"; >Cantidad de Resultados: 
	<?php 
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php 
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			
			echo $resultados['bio'];
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>
</section>


    



    










    




    <footer class="bg-danger">

        <div class="copy">

            <p> Copyright © 2024 Tommy Weich </p>

        </div>

    </footer>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>









