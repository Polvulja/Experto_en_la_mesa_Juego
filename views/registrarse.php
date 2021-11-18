<?php
    include("../con_db.php");

   if(isset($_POST['boton_register'])){
   if(strlen($_POST['nom_comple']) >=1 && strlen($_POST['nom_usua']) >=1 && strlen($_POST['mail']) >=1 && strlen($_POST['contra']) >=1){

    $nom_comple = trim($_POST['nom_comple']);
    $nom_usua = trim($_POST['nom_usua']);
    $mail = trim($_POST['mail']);
    $contra = trim($_POST['contra']);

    $consulta = "INSERT INTO usuarios(Nombre_Usuario ,Nombre_Completo , Mail, Contraseña) VALUES ('$nom_usua','$nom_comple','$mail','$contra')";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        ?>
        <script type="text/javascript">
    alert("Registro Exitoso!");
    window.location.href="Inicio.php";
    </script>
       <?php

    } else {

        ?>
        <script type="text/javascript">
    alert(<?php echo $resultado ?>);
    </script>
       <?php
    }
}   else {
        ?>
        <script type="text/javascript">
    alert("¡Por favor complete los campos!");
    </script>';
       <?php
}

   }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <script src="https://kit.fontawesome.com/ee5c196280.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/registrarse.css" type="text/css" media="all">
	<title>Registrarse || Experto en la Mesa de Juego</title>

</head>

<body>
<main>

<form id="registro" id="form" method="POST" class="contenedor-iniciar-sesion">

		<label class="label-1">Registrarse</label>

		<div class="contenedor-input1">
			<i class="far fa-user icon"></i>
			<input class="input pri" type="text" id ="nom_usua"class="input"name="nom_usua" placeholder="Nombre Usuario">
		</div>

		<div class="contenedor-input2">
			<i class="fas fa-address-card icon"></i>
			<input class="input" type="text" id="nom_comple"class="input" name="nom_comple" placeholder="Nombre de Completo">
		</div>

		<div class="contenedor-input2">
			<i class="far fa-envelope icon"></i>
			<input class="input pri" type="email" id="mail" name="mail" placeholder="Correo Electronico">
		</div>

		<div class="contenedor-input2">
			<i class="fas fa-lock icon"></i>
			<input class="input" type="password" id="contra" name="contra" placeholder="Contraseña">
		</div>

        
		<button type="submit" name="boton_register" value="Registrarse" class="button">Registrarse

</form>

</main>
</body>
</html>
