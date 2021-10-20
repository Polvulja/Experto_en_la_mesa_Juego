<?php
    include("../con_db.php");

   if(isset($_POST['boton_register'])){
   if(strlen($_POST['nom_comple']) >=1 && strlen($_POST['nom_usua']) >=1 && strlen($_POST['mail']) >=1 && strlen($_POST['contra']) >=1){

    $nom_comple = trim($_POST['nom_comple']);
    $nom_usua = trim($_POST['nom_usua']);
    $mail = trim($_POST['mail']);
    $contra = trim($_POST['contra']);

    $consulta = "INSERT INTO usuarios(Nombre_Completo, Nombre_Usuario, Mail, Contraseña) VALUES ('$nom_comple','$nom_usua','$mail','$contra')";
    $resultado = mysqli_query($conex,$consulta);

    if ($resultado) {
        ?> 
        <script type="text/javascript">
    alert("Registro Exitoso");
    window.location.href="Inicio.php";
    </script>';
       <?php
        
    } else {
        ?> 
        <script type="text/javascript">
    alert("¡Ups ha ocurrido un error!");
    </script>';
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