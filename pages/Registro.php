<?php 
session_start();
?>
<!doctype html>

<html lang="en">

  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" type="text/css" href="../mijares.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="../js/JS_functions.js"></script>

</head>
<body id="wrapper">
  <header >
    <div class="flex-container">
        <div><img src="../assets/logo.png" alt="logo" width="100px" height="100px"/></div>
        <div class="spacing"><a href="inicio.php" class="linkStyle">Inicio</a></div>
        <div class="spacing"><a href="semblanza.php" class="linkStyle">Semblanza</a></div>
        <div class="spacing"><a href="centroAugustoMijares.php" class="linkStyle">Centro Augusto Mijares</a></div>
        <div class="spacing"><a href="proyectos.php" class="linkStyle">Proyectos</a></div>
        <div class="spacing"><a href="eventos.php" class="linkStyle">Eventos</a></div>
        <div class="spacing"><a href="videos.php" class="linkStyle">Videos</a></div>
        <div class="spacing"><a href="equipos.php" class="linkStyle">Equipos</a></div>
        <div class="spacing"><a href="https://blog.nxm1645.uta.cloud/" class="linkStyle">Blog</a></div>

        <?php
      include "php/config.php";
      
      // Check user login or not
      if($_SESSION['uname']==""){
          echo "<div class='spacing'><a href='inicioDeSession.php' class='linkStyle'>";
          echo "Inicio de Session";
      }
      else
      {
         echo "<div class='spacing'><a href='/php/logout.php' class='linkStyle'>";
         echo "logout";
      }
      
      ?>
        </a></div>
        <div class="spacing"><a href="Registro.php" class="linkStyle">Registro</a></div>
    </div>
  </header>
  <section>
    <div class="flex-container1">
      <div style="text-align: center;">
        <img src="../assets/logo.png" alt="logo"  width="110px" height="110px" > 
           <h3 class="bold">Registro </h3><br/>
          </div>
    </div>
    <div class="flex-container1">
      <div style="flex-grow: 8; ">
        <form>     
        <div id="message" style="color: black;" class="formSpace"></div>
          <div style="display: grid;">
            
            <div>
              <input type="text" placeholder="Nombre" id="username-register" name="username" required class="formSpace corners">
              <input type="email" placeholder="Correo" id="email-register" name="email" required class="formSpace corners">
            </div>
            <div>
              <input type="password" placeholder="Contrasena" id="password-register" name="password" required class="formSpace corners">
              <input type="password" placeholder="Repeter Contrasena" id="repeat-password" name="repeatpassword" required class="formSpace corners">
            </div>
            <div>
              <input type="text" placeholder="Direccion" id="address-register" name="address-register" required  class="formSpace corners" style="width: 94.5%;"/>
            </div>
            <div>
              <input id="submit" type="button" value="Guardar" class="button corners" onclick="registration()"/></form>
            </div>
          </div>  
        </form>
      </div>
      <div style="flex-grow: 4; text-align: center;">
        <img src="../assets/logo.png" alt="logo" width="200px" height="200px">        
        <span> <h1 class="bold">CENTRO AUGUSTO MIJARES </h1></span><br/></div>
      </div>
  </section>
</body>
<footer class="footer">
  <br/>
  <br/>
  <br/>
  <br/>
  <hr style="margin: 2%;" class="footerText">
  <div class="flex-footer">    
      <div style="flex-grow: 3">
          <p class="footerText">Copyright <i class="glyphicon glyphicon-copyright-mark"></i> 2020 All rights reserved | This template is made with 
              <i class="fa fa-heart" style="color: #6059f6;"></i> by <span style="color: #6059f6;">DiazApps</span></p>
      </div>
      <div>
          <i class="fa fa-facebook" class="footerText"></i>
      </div>
      <div>
          <i class="fa fa-twitter" class="footerText"></i>
      </div>
      <div><i class="fa fa-dribbble" class="footerText"></i></div>
      <div><i class="fa fa-behance" class="footerText"></i></div>   
  </div>     
</footer>
</html>
