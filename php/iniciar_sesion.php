<?php
      session_start();
      if(isset($_SESSION['mail'])){
        session_unset();
        session_destroy();
      }
      function connectDB(){
          $enlace = mysqli_connect("localhost","root","","tahures");
          return $enlace; 
      }

      function disconnectDB($conexion){
          $close= mysqli_close($conexion);
      }

      function validar($mail, $contraseña){
        $conexion = connectDB();
        $sql = "SELECT * FROM usuarios";
        mysqli_set_charset($conexion, "utf8"); 
        if(!$result = mysqli_query($conexion, $sql)) die();
        while($row = mysqli_fetch_array($result)) 
        { 
            $usuario=$row['Mail'];
            //$ct=password_verify($contra, $row['password']);
            $ct=$row['Contraseña'];
            if($usuario == $mail && $contraseña == $ct){
                session_start();
                $_SESSION["mail"] = $usuario;
                header('Location: views/Inicio.php');
                return;
            }else if ($usuario == $mail && $Contraseña != $ct) {
                echo "<script>alert('Contraseña incorrecta. Intente nuevamente.');</script>";
                disconnectDB($conexion);
                return;
            }
        }
        disconnectDB($conexion);
        echo "<script>alert('Usuario no registrado.');</script>";
        return;
      }
      if(isset($_POST["enviar"])){
      $mail = $_POST["mail"];
      $contra = $_POST["contra"];
      validar($mail, $contra);
      }
      
?>