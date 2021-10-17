<html>
    <head>
        <meta charset="uft-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="css/registrarse.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/predefenido.css" type="text/css" media="all">
        <title>Iniciar Sesion || Experto en la Mesa de Juego</title>
    </head>
    <body>
        <div>
        <div>
        <form id="registro" id="form"method="POST" >
                <h1>Iniciar Sesion</h1>

                <div>
                    <p>Correo Electrónico:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="email"  id="mail" class="input"name="mail">

                    <p>Contraseña:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="password" id="contra"class="input"name="contra" >

                    <button class ="Boton_registro"value="Continuar" name="enviar" type="submit">Iniciar Sesión</button> 
                
                    <p>¿No tienes una cuenta? </p><a href="views/formulario.php" style="color:#0505B4">Registrarse</a>
                </div>
            </form>
            <?php
            include("php/iniciar_sesion.php");
            ?>
        </div>
    </body>
</html>