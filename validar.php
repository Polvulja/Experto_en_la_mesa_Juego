<?php
include('con_db.php');
$mail = trim($_POST['mail']);
$contra = trim($_POST['contra']);
session_start();
$_SESSION['mail']=$mail;


$conexion = mysqli_connect("localhost","root","","tahures");

$consulta="SELECT*FROM usuarios where mail='$mail' and contra='$contra'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    ?> 
    <script type="text/javascript">
alert("Inicio de Sesion, correcta!");
window.location.href="Inicio.php";
</script>';
   <?php
}else{
    ?>
  <h1>ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_close($conexion);