<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtmll-strict.dtd">
<?php
    include("../con_db.php");
    $hola=$_COOKIE["idactual"];
    $consulata = "SELECT * FROM usuarios WHERE id=$hola";
    $resultado = mysqli_query($conex,$consulata);
    $consulta = mysqli_fetch_array($resultado);
    
?> 
<html>
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="stylesheet" href="../css/barra_izquierda.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="../php/Funciones.js"></script>
    <script src="https://kit.fontawesome.com/ee5c196280.js" crossorigin="anonymous"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<main>
    <div class="contenedor-padre-2">
      <div class="contenedor-fondo-foto">
        <div class="contenedor-foto">
        <?php
         $directory="Foto_Perfil/";
         $dirint = dir($directory);
     
         while (($archivo = $dirint->read()) != false)
         {
             if (strpos($archivo,'jpg') || strpos($archivo,'jpeg')|| strpos($archivo,'png')){
                 $image = $directory. $archivo;
                 echo'<img class="img-perfil" src='.$image.'>';
             }
         }
         $dirint->close();
         ?>
    
        </div>
        <div class="contenedor-fondo">
        </div>
      </div>
      <div class="contenedor-editar">
      <form class="contenedor-desc-2" method="POST" enctype="multipart/form-data">
      
        <label class="label-4"><b>Hola! </b></label>
        <div><!--Nombre Real -->
          <label class="label-2"><b>Nombre Real:</b> </label>
          <label class="label-1" id="label1">
            <?php echo $consulta ['Nombre_Completo'];?>
          </label>
          <input type="text"class="input" name="Nombre_Completo" id="pep1" style="display: none" placeholder="<?php echo $consulta['Nombre_Completo'];?>">
        </div>

        <div><!--Nombre usuario -->
          <label class="label-2" ><b>Nombre de Usuario: </b></label>
          <label class="label-1" id="label2">
          <?php echo $consulta['Nombre_Usuario'];?>
          </label>
          <input type="text"class="input" name="Nombre_Usuario" id="pep2" style="display: none" placeholder="<?php echo $consulta['Nombre_Usuario'];?>">
        </div>

        <div><!--Mail -->
          <label class="label-2"><b>Mail:</b> </label>
          <label class="label-1" id="label3">
          <?php echo $consulta['Mail'];?>
          </label>
          <input type="text" class="input"name="Mail" id="pep3" style="display: none" placeholder="<?php echo $consulta['Mail'];?>">
        </div>

        <div><!--Contrase??a -->
          <label class="label-2"><b>Contrase??a:</b> </label>
          <label class="label-1"id="label4">
          <?php echo $consulta['Contrase??a'];?>
          </label>
          <input type="text"class="input" name="Contrase??a" id="pep4" style="display: none" placeholder="<?php echo $consulta['Contrase??a'];?>">
        </div>

      <div class="contenedor-label"><!--Botones de editar -->
        <label class="label-5" name="editar_perfil" onclick="mostrar()">Editar</label>
        <label class="label-5" name="editar_perfil" onclick="Subir_Foto()">Subir Foto de Perfil</label>
        <label class="label-5" name="editar_perfil" onclick="Subir_libro()">Subir Libro</label> 
        
      </div>

      </div>

      <div class="contenedor-boton" ><!--Botones de carga -->
        <input type="file" name="foto2" id="subir_foto"value="Cambiar Foto" style="display: none"class="button">
        <button type="submit" name="libro" value="Subir libro" class="button-2" accept="application/pdf" id="pp2" style="display: none">Subir Libro
        <button type="submit" name="foto" value="Subir Foto" class="button-2" id="pp" style="display: none">Subir Foto
        <button type="submit" name="boton_terminar" value="Actualizar Datos" class="button-2" id="boton_terminar" style="display: none">Actualizar Datos

      </div>
      <?php
      if(isset($_POST['libro'])){
        $nombreImagen = $_FILES['foto2']['name'];
        $archivo = $_FILES['foto2']['tmp_name'];
        $ruta = "Libros";
        $carpeta = $ruta."/";
        $ruta = $ruta."/"."/".$nombreImagen;
        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0777, true);
        }
        ?>
          <script type="text/javascript">
          alert("Se Subio Correctamente el Libro!");
          window.location.href="perfil.php";
          </script>
        <?php
        move_uploaded_file($archivo,$ruta);
      }

    if(isset($_POST['foto'])){
      $nombreImagen = $_FILES['foto2']['name'];
      $archivo = $_FILES['foto2']['tmp_name'];
      $ruta = "Foto_Perfil";
      $carpeta = $ruta."/";
      $ruta = $ruta."/"."/".$nombreImagen;
      if (!file_exists($carpeta)) {
          mkdir($carpeta, 0777, true);
      }
      ?>
          <script type="text/javascript">
          alert("Se Subio Correctamente la Imagen!");
          window.location.href="perfil.php";
          </script>
        <?php
      move_uploaded_file($archivo,$ruta);
    }
      if(isset($_POST['boton_terminar'])){

        $Nombre_Completo = ($_POST['Nombre_Completo']);
        $Nombre_Usuario = ($_POST['Nombre_Usuario']);
        $Mail = ($_POST['Mail']);
        $Contrase??a = ($_POST['Contrase??a']);

        $consulta = "UPDATE usuarios SET Nombre_Completo='$Nombre_Completo',Nombre_Usuario='$Nombre_Usuario',Mail='$Mail',Contrase??a='$Contrase??a' WHERE id='$hola'";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
          ?>
            <script type="text/javascript">
            alert("Se actualizo Correctamente!");
            window.location.href="perfil.php";
            </script>
          <?php

      }
    }
      ?>
    </div>
    </form>
  </main>
  <div class="sidebar"><!--Barra--> 
  <div class="logo-details"><!--Titulo--> 
    <div class="logo_name">Bienvenido</div>
    <i class='bx bx-menu' id="btn" ></i>
 </div>

<ul class="nav-list">

  <li><!--Perfil--> 
   <a href="perfil.php">
     <i class='bx bx-user' ></i>
     <span class="links_name">Perfil</span>
   </a>
   <span class="tooltip">Perfil</span>
 </li>

 <li><!--Libros--> 
   <a href="libros.php">
    <i class='bx bx-book-bookmark'></i>
     <span class="links_name">Libros</span>
   </a>
   <span class="tooltip">Libros</span>
 </li>

 <li><!--Historia--> 
   <a href="Inicio.php">
    <i class='bx bx-archive'></i>
     <span class="links_name">Historia </span>
   </a>
   <span class="tooltip">Historia</span>
 </li>

 <li><!--SW Erdnase--> 
   <a href="sw.php">
    <i class='bx bx-question-mark'></i>
     <span class="links_name">SW Erdnase</span>
   </a>
   <span class="tooltip">SW Erdnase</span>
 </li>

 <li class="profile"><!--Avatar--> 
     <div class="profile-details">
     <?php
         $directory="Foto_Perfil/";
         $dirint = dir($directory);
     
         while (($archivo = $dirint->read()) != false)
         {
             if (strpos($archivo,'jpg') || strpos($archivo,'jpeg')|| strpos($archivo,'png')){
                 $image = $directory. $archivo;
                 echo'<img class="img-perfil" src='.$image. '>';
             }
         }
         $dirint->close();
    ?>
       <div class="name_job">
        <div class="name">
          <?php 
          echo $consulta['Nombre_Usuario'];
        
          ?>
        </div>
       </div>
       <a href="../index.php">
        <i class='bx bx-log-out' id="log_out" ></i>
      </a>
     </div>
 </li>


</ul>
    
</div>
<script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
  });

  searchBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange(); 
  });

  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
   }
  }
  </script>
</body>
</html>