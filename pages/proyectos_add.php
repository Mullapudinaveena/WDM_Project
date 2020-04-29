<?php 
session_start();
?>
<!doctype html>

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../mijares.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../js/updateFunctions.js"></script>
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
      include "../php/config.php";
      
      // Check user login or not
      if($_SESSION['uname']==""){
          echo "<div class='spacing'><a href='inicioDeSession.php' class='linkStyle'>";
          echo "Inicio de Session";
      }
      else
      {
         echo "<div class='spacing'><a href='/php/logout.php' class='linkStyle'>";
         echo "Logout";
      }
      
      ?>
        </a></div>
        <div class="spacing"><a href="adminpanel.php" class="linkStyle">Admin Panel</a></div>
                <div class="spacing"><a href="Registro.php" class="linkStyle">Registro</a></div>
            </div>
        </header>
        <section style="margin: 5%">
            <form action="">
                
                <div>
                    <label for="pname" class="bold">Project Name</label>
                    <span id="projectname-info" class="info"></span>
                    <input type="text" id="projectname" placeholder="Project Name" class="formSpace corners" required>
                </div><br/>
                <div>
                    <label for="img" class="bold">Image:</label>
                    <input type="file" id="img" accept="image/*" style="display: inline;" class="fileUpload">
                </div><br/>
                <div class="textArea">
                    <label for="description" class="bold">Description</label>
                    <span id="description-info" class="info"></span>
                    <textarea id="description" required placeholder="Description" rows="3" cols="50" class="formSpace corners"></textarea>
                </div>
                <div class="textArea"> 
                    <label for="purpose" class="bold">Purpose</label>
                    <span id="purpose-info" class="info"></span>
                    <textarea id="purpose" required placeholder="Purpose" rows="3" cols="50" class="formSpace corners"></textarea>
                </div>
                <div class="textArea">
                    <label for="values" class="bold">Values</label>
                    <span id="values-info" class="info"></span>
                    <textarea id="values" required placeholder="Values" rows="3" cols="50" class="formSpace corners"></textarea>
                </div>
                <div class="textArea">
                    <label for="methods" class="bold">Methods</label>
                    <span id="methods-info" class="info"></span>
                    <textarea id="methods" required  placeholder="Methods" rows="3" cols="50" class="formSpace corners"></textarea>
                </div>
                <div class="textArea">
                    <label for="associations" class="bold">Associations</label>
                    <span id="associations-info" class="info"></span>
                    <textarea id="associations" required placeholder="Associations" rows="3" cols="50" class="formSpace corners"></textarea>
                </div>
                <div class="textArea">
                    <label for="research" class="bold">Research</label>
                    <span id="research-info" class="info"></span>
                    <textarea id="research" required placeholder="Research" rows="3" cols="50" class="formSpace corners"></textarea>
                </div><br/><br/>    
                <div>
                <button type="Submit" class="button corners" onclick="proyectosAdd(1)">Add New</button>
                </div>
            </form>
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