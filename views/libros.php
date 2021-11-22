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
    <link rel="stylesheet" href="../css/libros.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <h1>Libros de Tahúrismo</h1>
<main><!--Libros--> 
  <div class="contenedor-abuelo">
    <div class="contenedor-padre">

      <div class="contenedor-video">

          <div class="contenedor-img">
            <img class="img-1" src="../img/poker.jpg">
          </div>

          <div class="contenedor-desc">
            <a class="label-1 " style="color: #94a1b2;" href="../Libros/libro_poker.pdf">Reglas Basicas del Poker</a>
            <a class="label-2" style="color: #94a1b2;" >Descargar Libro</a>
            
              
          </div>

      </div>

      <div class="contenedor-video">

          <div class="contenedor-img">
            <img class="img-1" src="../img/poker.jpg">
          </div>

          <div class="contenedor-desc">
            <a class="label-1" style="color: #94a1b2;" href="../Libros/libro_poker.pdf">Reglas Basicas del Poker</a>
             
          </div>

      </div>

      <div class="contenedor-video">

          <div class="contenedor-img">
            <img class="img-1" src="../img/poker.jpg">
          </div>

          <div class="contenedor-desc">
            <a class="label-1" style="color: #94a1b2;" href="../Libros/libro_poker.pdf">Reglas Basicas del Poker</a>
             
          </div>

      </div>

      <div class="contenedor-video">

          <div class="contenedor-img">
            <img class="img-1" src="../img/poker.jpg">
          </div>

          <div class="contenedor-desc">
            <a class="label-1" style="color: #94a1b2;" href="../Libros/libro_poker.pdf">Reglas Basicas del Poker</a>
             
          </div>

      </div>

      <div class="contenedor-video">

          <div class="contenedor-img">
            <img class="img-1" src="../img/poker.jpg">
          </div>

          <div class="contenedor-desc">
            <a class="label-1" style="color: #94a1b2;" href="../Libros/libro_poker.pdf">Reglas Basicas del Poker</a>
             
          </div>

      </div>

      <div class="contenedor-video">

          <div class="contenedor-img">
            <img class="img-1" src="../img/poker.jpg">
          </div>

          <div class="contenedor-desc">
            <a class="label-1" style="color: #94a1b2;" href="../Libros/libro_poker.pdf">Reglas Basicas del Poker</a>
            
          </div>

      </div>
      
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
   <a href="#">
    <i class='bx bx-question-mark'></i>
     <span class="links_name">SW Erdnase</span>
   </a>
   <span class="tooltip">SW Erdnase</span>
 </li>

 <li><!--Foro--> 
   <a href="#">
    <i class='bx bx-conversation'></i>
     <span class="links_name">Foro</span>
   </a>
   <span class="tooltip">Foro</span>
 </li>

 <li><!--Tutoriales--> 
   <a href="tutoriales.php">
    <i class='bx bx-video'></i>
     <span class="links_name">Tutoriales</span>
   </a>
   <span class="tooltip">Tutoriales</span>
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
