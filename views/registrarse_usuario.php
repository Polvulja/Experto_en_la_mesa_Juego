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
                    <p>Nombre completo:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="text" id="nom_comple"class="input" name="nom_comple">

                    <p>Nombre de Usuario:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="text" id ="nom_usua"class="input"name="nom_usua">

                    <p>Correo Electrónico:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="email"  id="mail" class="input"name="mail">

                    <p>Contraseña:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="password" id="contra"class="input"name="contra" >

                    <p>Foto de Perfil:<i class="fa-solid fa-circle-exclamation"></i></p>
                    <input type="file" name="foto_avatar" style="color: azure;"/>

                    <button class ="Boton_registro" name="boton_register"value="Continuar" >Registrarse</button> 
                </div>
            </form>
            <?php
            include("../php/Registrar.php");
            ?>
        </div>
    </body>
</html>