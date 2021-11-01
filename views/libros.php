<!DOCTYPE html>
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
  <div class="contenedor-padre">
      
    <div class="contenedor-seg"><!--Baraja Española--> 
      <div class="contenedor-img-2">
        <img class="img-1" src="../img/poker.jpg">
        <a class="label-1" style="color: #94a1b2;" href="../Libros/libro_poker.pdf">Reglas Basicas del Poker</a>
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
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Perfil</span>
       </a>
       <span class="tooltip">Perfil</span>
     </li>

     <li><!--Libros--> 
       <a href="../views/libros.php">
        <i class='bx bx-book-bookmark'></i>
         <span class="links_name">Libros</span>
       </a>
       <span class="tooltip">Libros</span>
     </li>

     <li><!--Historia--> 
       <a href="../views/Inicio.php">
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
       <a href="#">
        <i class='bx bx-video'></i>
         <span class="links_name">Tutoriales</span>
       </a>
       <span class="tooltip">Tutoriales</span>
     </li>

     <li class="profile"><!--Avatar--> 
         <div class="profile-details">
           <img src="../img/avatar.png" alt="profileImg">
           <div class="name_job">
            <div class="name">Usuario 1</div>
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