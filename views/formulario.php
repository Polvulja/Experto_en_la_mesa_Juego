<html>
    <head>
        <meta charset="uft-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="../css/formulario.css" type="text/css" media="all">
        <link rel="stylesheet" href="../css/predefenido.css" type="text/css" media="all">
        <script src="../js/Filtro.js"></script>
        <title>Filtro || Experto en la Mesa de Juego</title>
    </head>
    <body>
        <div>
            <form id="registro" id="form">
                <h1>Filtro</h1>

                    <div class="respuestas" onchange="boton_show()">
                        <p>¿Cuantas cartas tiene la baraja inglesa?</p>
                        <i class="fas fa-user-tag icono" id="respuestas"></i>
                        <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada1" >Seleccione una Respuesta</option>
                        <option id="resp1">54</option>
                        <option value="2"id="resp2">56</option>
                        <option value="3"id="resp3">50</option></select>

                        <p>¿En que año se creo la Compañia Bicycle?</p>
                        <i class="fas fa-user-tag icono" id="respuestas"></i>
                        <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada2">Seleccione una Respuesta</option>
                        <option value="1"id="resp4">1885</option>
                        <option value="2"id="resp5">1901</option>
                        <option value="3"id="resp6">1897</option></select>

                        <p>¿Con que Grip se hace el corte Charlier?</p>
                        <i class="fas fa-user-tag icono" id="respuestas"></i>
                        <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada3">Seleccione una Respuesta</option>
                        <option value="1"id="resp7">Mechanc Grip</option>
                        <option value="2"id="resp8">Mechanc Grip superior</option>
                        <option value="3"id="resp9">Mechanc Grip Superior con meñique en el canto corto</option>
                        <option value="4"id="resp10">Mechanc Grip Inferior</option></select>

                        <p>¿Quien escribio el libro "The Expert at the Card Table"?</p>
                        <i class="fas fa-user-tag icono" id="respuestas"></i>
                        <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada4">Seleccione una Respuesta</option>
                        <option value="1"id="resp11">Dai Vernon</option>
                        <option value="2"id="resp12">Harry Houdini</option>
                        <option value="3"id="resp13">Juan Tamariz</option>
                        <option value="4"id="resp14">SW Erdnase</option></select>

                        <p>¿En que año nacio John Scarne?</p>
                        <i class="fas fa-user-tag icono" id="respuestas"></i>
                        <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada5">Seleccione una Respuesta</option>
                        <option value="1"id="resp15">1900</option>
                        <option value="2"id="resp16">1880</option>
                        <option value="3"id="resp17">1995</option>
                        <option value="4"id="resp18">1903</option></select>

                        <p>¿Que mezcla se denomina como "La Mezcla Perfecta"?</p>
                        <i class="fas fa-user-tag icono" id="respuestas"></i>
                        <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada6">Seleccione una Respuesta</option>
                        <option value="1"id="resp19">Mezcla Americana</option>
                        <option value="2"id="resp20">Mezcla Cascada</option>
                        <option value="3"id="resp21">Mezcla Faro</option>
                        <option value="4"id="resp22">Mezcla China</option></select>
                        

                        <p>¿Como se llama la tecnica donde se retira la segunda carta del bottom de la baraja?</p>
                        <i class="fas fa-user-tag icono" id="respuestas"></i>
                        <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada7">Seleccione una Respuesta</option>
                        <option value="1"id="resp23">Bottom Deal</option>
                        <option value="2"id="resp24">Greak Deal</option>
                        <option value="3"id="resp25">Second Deal</option>
                        <option value="4"id="resp26">Center Deal</option></select>

                        <p>¿Aque edad John Scarne Escribio su primer libro?</p>
                        <i class="fas fa-user-tag icono" id="respuestas"></i>
                        <select class="input" name="opciones" id="opciones">
                        <option selected="select" id="nada8">Seleccione una Respuesta</option>
                        <option value="1"id="resp27">22</option>
                        <option value="2"id="resp28">19</option>
                        <option value="3"id="resp29">30</option>
                        <option value="4"id="resp30">15</option></select>

                        <p>¿En que año se creo la Compañia Bicycle?</p>
                        <i class="fas fa-user-tag icono" id="respuestas"></i>
                        <select class="input"  name="opciones" id="opciones">
                        <option selected="select" id="nada2">Seleccione una Respuesta</option>
                        <option value="1"id="resp4">1885</option>
                        <option value="2"id="resp5">1901</option>
                        <option value="3"id="resp6">1897</option></select>

                        <input type="button" value="Atras" class="boton"OnClick="location.href='iniciarSesion.php' ">
                        <input type="button" value="Continuar" id="boton_registrarse" style="display: none;" OnClick="location.href='registrarse_usuario.php' " >
                </div>
            </form>
        </div>
    </body>
</HTML>