<?php 
session_start();
header('Content-Type: text/html; charset=utf-8' );
?>
<!doctype html>

<html lang="en">

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <?php
            include '../php/config.php';
            $sql = "SELECT * FROM `mission` WHERE `mission`.`tableid` = 1";
            $result = $con->query($sql);
            $row = $result->fetch_assoc();
        ?>
        <div class="flex-container1" style="text-align: center;">
            <div style="flex-grow: 5" >
                <h1 style="color: #6059f6;" class="bold">MISIÓN</h2>
                <p><?php echo $row["mission"];?></p>
            </div>
            <div style="flex-grow: 5">
                <h1 style="color: #6059f6;" class="bold">VISIÓN</h2>
                <p><?php echo $row["vision"];?></p>
            </div>
        </div>
        <div class="flex-container1" style="text-align: center;">
            <div>
                <img src="../assets/logo.png" alt="logo"  width="50px" height="50px"/><br>
                <h2 class="bold">VALORES</h2>
                <p  class="purposeSpacing"><?php echo $row["valores"];?></p>
            </div>  
        </div><br/>
        <div class="box box1">
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">RESPONSABILIDAD SOCIAL</h4><br>
                <p><?php echo $row["value1"];?></p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">FRATERNIDAD</h4>
                <p><?php echo $row["value2"];?></p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">LIBERTAD</h4>
                <p><?php echo $row["value3"];?></p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">CORRESPONSABILIDAD</h4>
                <p><?php echo $row["value4"];?></p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">SOLIDARIDAD</h4>
                <p><?php echo $row["value5"];?></p>
            </div>
            <div class="box2" style="padding: 8%;">
                <h4 class="bold">CONSTANCIA</h4>
                <p><?php echo $row["value6"];?></p>  
            </div>
        </div>
    </section>   

</body>
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
