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
      else{
          if($_SESSION['uname']=="admin") {
            echo "<div class='spacing'><a href='/php/logout.php' class='linkStyle'> Logout </a></div>";
            echo "<div class='spacing'><a href='adminpanel.php' class='linkStyle'>";
            echo "Admin Panel";
          } else {
            echo "<div class='spacing'><a href='/php/logout.php' class='linkStyle'>";
            echo "Logout";
          }
      }
      
      ?>
        </a></div>
                <div class="spacing"><a href="Registro.php" class="linkStyle">Registro</a></div>
            </div>
        </header>
        
        <section>
            <div class="flex-container1">
                <div style="flex-grow: 5">
                    <img src="../assets/logo.png" alt="logo"/>
                    <h1 style="color: #6059f6;" class="bold">CENTRO AUGUSTO MIJARES</h1>
                    ​<h2 class="bold" >DESARROLLO HUMANO SUSTENTABLE</h2>
                </div>
                <div style="flex-grow: 5">
                    <h3 class="bold">BIENVENIDA</h3>
                    
                    <div>
                        <?php
                            include '../php/config.php';
                            $sql = "SELECT * FROM `homepage` WHERE `homepage`.`tableid` = 2";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                        ?><?php echo $row["message"];?>
                    </div> 
                </div>
                
            </div> 
            <div class="flex-container">
                <div style="text-align: center;">
                    <img src="../assets/logo.png" alt="logo" width="50px" height="50px"/>
                    <h3 class="bold">PROPÓSITO</h3>
                    <div class="purposeSpacing"><?php echo $row["message"];?>
                    </div>
                </div>
            </div>
            <div class="flex-container1" style="background-color:#F8F8F8;">
                <div style="flex-grow: 5; padding-top: 4%; padding-left: 4%;">
                    <iframe src="https://youtu.be/Kcl-T98Wtvo" style="width: 90%; height:80%">
                    </iframe>
                </div>
                <div style="flex-grow: 5">
                    <h3 class="bold">OBJETIVOS</h3>
                    <ol>
                        <li><?php echo $row["objective1"];?></li>
                        <li><?php echo $row["objective2"];?></li>
                        <li><?php echo $row["objective3"];?></li>
                        <li><?php echo $row["objective4"];?></li>
                    </ol>
                </div>
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