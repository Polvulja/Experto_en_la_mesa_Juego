<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/barra_izquierda.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <h1>Historia de los Tahures</h1>
<main>
    <div class="contenedor-padre">
      <div class="titulo">
        <label class="label-1">Historia y financiación</label>
      </div>
      <div class="contenedor-hijo">
        <div class="desc">
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p><br><p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
        </div>
        <div class="contenedor-img">
         <img class="img-1" src="../img/Primeros_tahures.jpg">
         <label class="label-2">Madre fundadora</label>
        </div>
      </div>
      <div class="contenedor-seg">
        <div class="contenedor-img-2">
           <img class="img-1" src="../img/john-scarne_1.jpg">
           <label class="label-2">John Scarne</label>
        </div>
        <div class="desc-2">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Perfil</span>
       </a>
       <span class="tooltip">Perfil</span>
     </li>

     <li><!--Libros--> 
       <a href="#">
        <i class='bx bx-book-bookmark'></i>
         <span class="links_name">Libros</span>
       </a>
       <span class="tooltip">Libros</span>
     </li>

     <li><!--Historia--> 
       <a href="#">
        <i class='bx bx-archive'></i>
         <span class="links_name">Historia Tahures</span>
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
           <img src="../avatar.png" alt="profileImg">
           <div class="name_job">
            <div class="name">Usuario 1</div>
           </div>
           <a href="#">
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
