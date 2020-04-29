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
            <?php
                include "../php/config.php";
                $sql = "SELECT * FROM `events` WHERE `events`.`tableid` = 1";
                $result = $con->query($sql);
                $totalrows = $result->num_rows;
                $counter=0;
                while($row = $result->fetch_assoc())
                {
            ?>
            <div class="flex-container1">
                <div>
                    <h2 class="bold"><?php echo $row["name"];?></h2><br/>
                    <p><?php echo $row["description"];?></p>
                        <br/>Los Interesados deben enviar sus datos a :<br/><br/>
                        <?php echo $row["contactname"];?> No. Teléf. <?php echo $row["telephone"];?> . Correo: <?php echo $row["email"];?><br>
                        <?php echo $row["contactname1"];?> No. Télef. <?php echo $row["telephone1"];?>.<br>
                        Correo: <?php echo $row["email1"];?>
                        <br/><br/>
                        <?php echo $row["location"];?><br>
                        <br>
                        Se reciben preinscripciones hasta el <?php echo $row["date"];?><br>
                        <br>
                        Saludos, gracias por difundir esta oferta académica y contribuir así con el desarrollo humano de nuestra gente.
                        <br>
                    </p>
                </div>
                <div style="padding-top: 10%;">
                    <img src="../assets/evento.png" alt="logo" />
                </div>
            </div>
            <?
                }
            ?>
        </section>
    </body>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    
        
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
