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
        <header>
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
                <div style="text-align: center;">
                    <img src="../assets/logo.png" alt="logo" width="80px" height="80px"/>
                    <h2 class="bold">RESPONSABILIDAD SOCIAL UNIVERSITARIA​ Y DESARROLLO SUSTENTABLE ¿QUÉ Y PARA QUÉ?
                    </h2>
                </div>
            </div>
            <?php
                include "../php/config.php";
                $sql = "SELECT * FROM `projects` WHERE `projects`.`tableid` = 1";
                $result = $con->query($sql);
                $totalrows = $result->num_rows;
                $counter=0;
                while($row = $result->fetch_assoc())
                {
            ?>
            <div class="flex-container1">
                <div style="flex-grow: 5;">
                    <img src="../assets/graduandos.jpg" alt="logo" />
                </div>
                <div style="flex-grow: 5;">
                    <h4 class="bold"><?php echo $row["name"];?></h4>
                      <p>  <p><?php echo $row["description"];?> </p> <span class="projectStyle">Propósito:</span><?php echo $row["purpose"];?> </p>  
                      <p><span class="projectStyle">Valores:</span>  <?php echo $row["values"];?></p>  
                      <p> <span class="projectStyle">Métodos:</span> <?php echo $row["methods"];?></p>
                </div>
            </div><br/><br/>
            <div class="flex-container1">
                <div style="flex-grow: 5;">
                    <p ><span class="projectStyle">Investigación:</span> <?php echo $row["investigation"];?>
                    </p><p>   <span class="projectStyle">Asociación:</span> <?php echo $row["associations"];?>
                    </p><p>   <span class="projectStyle">Diálogo:</span><?php echo $row["research"];?> </p>
                        </p><p>    <button type="Submit" class="button corners">Leer Mas</button><br>
                </div>
                <div style="flex-grow: 5;">
                    <img src="../assets/descarga.jpg" alt="logo" />
                </div>
            </div>
        <?
            }
        ?>
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
