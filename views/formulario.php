<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <script src="https://kit.fontawesome.com/ee5c196280.js" crossorigin="anonymous"></script>
	<title>Formulario || Experto en la Mesa de Juego</title>
	<link rel="stylesheet" href="../css/formulario.css" type="text/css" media="all">
</head>

<body>
<main>

	<form id="registro" id="form" method="POST" class="contenedor-iniciar-sesion" onchange="boton_show()">

		<label class="label-1">Formulario</label>

		<div class="contenedor-input1">
            <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada1" >Seleccione una Respuesta</option>
                        <option id="resp1">54</option>
                        <option value="2"id="resp2">56</option>
                        <option value="3"id="resp3">50</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada2">Seleccione una Respuesta</option>
                        <option value="1"id="resp4">1885</option>
                        <option value="2"id="resp5">1901</option>
                        <option value="3"id="resp6">1897</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada3">Seleccione una Respuesta</option>
                        <option value="1"id="resp7">Mechanc Grip</option>
                        <option value="2"id="resp8">Mechanc Grip superior</option>
                        <option value="3"id="resp9">Mechanc Grip Superior con meñique en el canto corto</option>
                        <option value="4"id="resp10">Mechanc Grip Inferior</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada4">Seleccione una Respuesta</option>
                        <option value="1"id="resp11">Dai Vernon</option>
                        <option value="2"id="resp12">Harry Houdini</option>
                        <option value="3"id="resp13">Juan Tamariz</option>
                        <option value="4"id="resp14">SW Erdnase</option></select>
		</div>

		<div class="contenedor-input1">
           <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada5">Seleccione una Respuesta</option>
                        <option value="1"id="resp15">1900</option>
                        <option value="2"id="resp16">1880</option>
                        <option value="3"id="resp17">1995</option>
                        <option value="4"id="resp18">1903</option></select>		</div>

		<div class="contenedor-input1">
            <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada6">Seleccione una Respuesta</option>
                        <option value="1"id="resp19">Mezcla Americana</option>
                        <option value="2"id="resp20">Mezcla Cascada</option>
                        <option value="3"id="resp21">Mezcla Faro</option>
                        <option value="4"id="resp22">Mezcla China</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada7">Seleccione una Respuesta</option>
                        <option value="1"id="resp23">Bottom Deal</option>
                        <option value="2"id="resp24">Greak Deal</option>
                        <option value="3"id="resp25">Second Deal</option>
                        <option value="4"id="resp26">Center Deal</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada8">Seleccione una Respuesta</option>
                        <option value="1"id="resp27">22</option>
                        <option value="2"id="resp28">19</option>
                        <option value="3"id="resp29">30</option>
                        <option value="4"id="resp30">15</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada2">Seleccione una Respuesta</option>
                        <option value="1"id="resp4">1885</option>
                        <option value="2"id="resp5">1901</option>
                        <option value="3"id="resp6">1897</option></select>
		</div>

		<div class="contenedor-button">
			<script type="text/javascript">
			function boton_show(){
				let botton=document.getElementById('boton_registrarse');
				if (document.getElementById('resp1').selected ==true)
				botton.style.display="inline-block";
				else botton.style.display="none";
				if(document.getElementById('nada1').selected==true&&document.getElementById('nada2').selected==true&&document.getElementById('nada3').selected==true&&document.getElementById('nada4').selected==true&&document.getElementById('nada5').selected==true&&document.getElementById('nada6').selected==true&&document.getElementById('nada7').selected==true&&document.getElementById('nada8').selected==true)
				botton.style.display="none";

			}

			</script>

			<input type="submit" name="atras" value="Atras" class="button2"OnClick="location.href='iniciarSesion.php' ">
			<input type="button" value="Continuar"class="button" id="boton_registrarse" style="display: none;" OnClick="location.href='registrarse.php '" ?><?php

			 ?>' " >

		</div>

	</form>


</main>
</body>
</html>
