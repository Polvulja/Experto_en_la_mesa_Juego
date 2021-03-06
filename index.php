<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtmll-strict.dtd">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <script src="https://kit.fontawesome.com/ee5c196280.js" crossorigin="anonymous"></script>
	<title>Iniciar Sesion || Experto en la Mesa de Juego</title>
	<link rel="stylesheet" href="css/iniciar-sesion.css" type="text/css" media="all">
</head>

<body>
<main>

	<form id="registro" id="form" method="POST" class="contenedor-iniciar-sesion">

		<label class="label-1">Iniciar Sesion</label>

		<div class="contenedor-input1">
			<i class="far fa-envelope icon"></i>
			<input class="input pri" type="email" id="mail" name="mail" placeholder="Correo Electronico">
		</div>

		<div class="contenedor-input2">
			<i class="fas fa-lock icon"></i>
			<input class="input" type="password" id="contraseña" name="contra" placeholder="Contraseña">
		</div>

		<input type="submit" name="enviar" value="Iniciar Sesion" class="button">

		<div class="contenedor-cuenta">
			<label class="label-2">¿No tienes una cuenta? </label><a class="label-3" href="views/formulario.php" >Registrarse</a>
		</div>
	</form>
	<?php
    include("php/iniciar_sesion.php");
    ?>

</main>
</body>
</html>
