<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtmll-strict.dtd">
<?php
    include("../con_db.php");
    $hola=$_COOKIE["idactual"];
    $consulata = "SELECT * FROM usuarios WHERE id=$hola";
    $resultado = mysqli_query($conex,$consulata);
    $consulta = mysqli_fetch_array($resultado);
    $id=$consulta['id'];
    
?> 
<html >
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/barra_izquierda.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <h1>SW Erdnase</h1>
  <div class="contenedor-title">
    
  </div>

<main><!--Historia--> 

    <div class="contenedor-padre">
      
      <div class="contenedor-seg"><!--SW--> 
        <div class="contenedor-img-2">
           <img class="img-1" src="../img/sw.jpg">
           <label class="label-2" style="color: #94a1b2;">SW Erdnase (creador del libro "The expert at the card table")</label>
        </div>
      </div>
    </div>
    <h1>Teorias</h1>
    <div class="contenedor-title-2">
    
    </div>
    <div class="contenedor-hijo"><!--teorias--> 
      <div class="desc">
        <p class="texto">Lamentablemente no existe informacion certera de Sw Erdnase, ya que este mismo es un seudonimo, pero existe alguna teorias al respecto. SW Erdnase Publicó su unico libro en 1902 en su version inglesas (la cual es la original). Lo unico que se sabe con veracidad es que poseia las manos pequeñas, finitas y muy bien cuidadas, media 1,68m y poseia los ojos marrones. Se desconoce su fecha de nacimiento y de fallecimiento.</p>
        <br>
        <p class="texto">Una Teoria es que su nombre es ".E.S. Andrews", el cual es Sw Erdnase al reves. Aunque conicide con los nombres de esa epoca, no se posee seguridad del dato.</p>
        <br>
        <p class="texto">Otra Teoria es que fue un analfabeta pero le pagó a un dibujante y a una imprenta para poder publicar su libro.</p>
        <br>
        <p class="texto">Se ha realizado un comic relatando la historia de Sw Erdnase en base de una teoria, el cua se llama "El ultimo Tahur", donde podrémos encontrar informacion al respecto de la epoca de la publicacion del libro.</p>
      </div>
      <div class="contenedor-img-3">
       <img class="img-1" src="../img/sw_erdnase.jpg">
       <label class="label-2" style="color: #94a1b2;">"The expert at the card table" (1902)</label>
      </div>
    </div>

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
