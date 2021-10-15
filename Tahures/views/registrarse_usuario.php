<html>
    <head>
        <meta charset="uft-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <link rel="stylesheet" href="../css/registrarse.css" type="text/css" media="all">
        <link rel="stylesheet" href="../css/predefenido.css" type="text/css" media="all">
        <title>Registrarse || Experto en la Mesa de Juego</title>
    </head>
    <body>
        <div>
        <div>
            <form id="registro" id="form"method="POST" >
                <h1>Registrarse</h1>

                <div>
                    <p>Nombre:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="text" id="nombre"class="input" name="nombre">

                    <p>Apellido:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="text" id ="apellido"class="input"name="apellido">

                    <p>Correo Electrónico:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="email"  id="mail" class="input"name="mail">

                    <p>Contraseña:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="password" id="contra"class="input"name="contra" >

                    <button class ="Boton_registro" name="boton_register"value="Continuar" >Registrarse</button> 
                
                    <p>¿Ya tienes una cuenta? </p><a href="iniciarSesion.php" style="color:#0505B4">Iniciar Sesión</a>
                </div>
            </form>
            <?php
            include("../Registrar.php");
            ?>
        </div>
    </body>
</html>