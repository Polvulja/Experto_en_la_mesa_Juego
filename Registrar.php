<?php
    include("con_db.php");

   if(isset($_POST['boton_register'])){
   if(strlen($_POST['nombre']) >=1 && strlen($_POST['apellido']) >=1 && strlen($_POST['mail']) >=1 && strlen($_POST['contra']) >=1){

    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $mail = trim($_POST['mail']);
    $contra = trim($_POST['contra']);

    $consulta = "INSERT INTO usuarios(Nombre, Apellido, Mail, Contraseña) VALUES ('$nombre','$apellido','$mail','$contra')";
    $resultado = mysqli_query($conex,$consulta);

    if ($resultado) {
        ?> 
        <script type="text/javascript">
    alert("Registro Exitoso");
    window.location.href="index.php";
    </script>';
       <?php
    } else {
        ?> 
        <h3>¡Ups ha ocurrido un error!</h3>
       <?php
    }
}   else {
        ?> 
        <h3>¡Por favor complete los campos!</h3>
       <?php
}
       
   }

?>