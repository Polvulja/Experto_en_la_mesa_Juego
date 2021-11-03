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
                        <option selected="select" id="nada1" >¿Cuantas cartas tiene la baraja Inglesa?</option>
                        <option id="resp1">54</option>
                        <option value="2"id="resp2">56</option>
                        <option value="3"id="resp3">50</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada2">¿En que año se creo la Compañia Bicycle?</option>
                        <option value="1"id="resp4">1885</option>
                        <option value="2"id="resp5">1901</option>
                        <option value="3"id="resp6">1897</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada3">¿Con que agarre se realiza el corte Charlier?</option>
                        <option value="1"id="resp7">Mechanc Grip</option>
                        <option value="2"id="resp8">Mechanc Grip superior</option>
                        <option value="4"id="resp10">Mechanc Grip Inferior</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada4">¿Quien escribio "the Expert at the card table"?</option>
                        <option value="1"id="resp11">Dai Vernon</option>
                        <option value="2"id="resp12">Harry Houdini</option>
                        <option value="3"id="resp13">Juan Tamariz</option>
                        <option value="4"id="resp14">SW Erdnase</option></select>
		</div>

		<div class="contenedor-input1">
           <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada5">¿Con que mano se realiza el abanico invertido?</option>
                        <option value="1"id="resp15">Con la derecha</option>
                        <option value="2"id="resp16">Con la Izquierda</option>
                        <option value="3"id="resp17">Con ambas</option>
                        <option value="4"id="resp18">En la mesa</option></select>		</div>

		<div class="contenedor-input1">
            <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada6">¿A que Mezcal se considera la Mezcla perfecta?</option>
                        <option value="1"id="resp19">Mezcla Americana</option>
                        <option value="2"id="resp20">Mezcla Cascada</option>
                        <option value="3"id="resp21">Mezcla Faro</option>
                        <option value="4"id="resp22">Mezcla China</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada7">¿Cual es la Tecnica por la cual se retiene la ultima carta de bottom y se reparte como bottom deal? </option>
                        <option value="1"id="resp23">Bottom Deal</option>
                        <option value="2"id="resp24">Greak Deal</option>
                        <option value="3"id="resp25">Second Deal</option>
                        <option value="4"id="resp26">Center Deal</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada8">¿Cual es la mejor plantilla de la empesa Bicycle?</option>
                        <option value="1"id="resp27">1</option>
                        <option value="2"id="resp28">808</option>
                        <option value="3"id="resp29">908</option>
                        <option value="4"id="resp30">708</option></select>
		</div>

		<div class="contenedor-input1">
            <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada2">¿De donde proviene la barja inglesa?</option>
                        <option value="1"id="resp4">Baraja Alemana</option>
                        <option value="2"id="resp5">Baraja Francesa</option>
                        <option value="3"id="resp6">Baraja del tarot</option></select>
		</div>
            <div class="contenedor-input1">
            <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada2">¿Cuantas paginas tiene "the Expert at the card table" en su version en español?</option>
                        <option value="1"id="resp4">180</option>
                        <option value="2"id="resp5">145</option>
                        <option value="3"id="resp6">191</option>
                        <option value="3"id="resp6">350</option></select>
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

			<input type="button" name="atras" value="Atras" class="button2" OnClick="location.href='../index.php' ">
			<input type="button" value="Continuar"class="button" id="boton_registrarse" style="display: none;" OnClick="location.href='registrarse.php '" ?><?php
                  ?>

		</div>

	</form>


</main>
</body>
</html>
