<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html >
<html>
<head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>
         <?php
                require 'header.php';
            ?>
        <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/eritale4.jpg">
                           </a>
                           <center>
                                <div class="caption">
                                    <h1>Erta Ale</h1>
                          <a href="eritale.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See More</a>
                                    
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                  
                       <a href="#">
                           <img src="img/blue2.jpg"></a>
                       <center>
                           <div class="caption">
                               <h1>The Blue Nile Falls (Tisisat Falls) </h1>
                       <a href="blue.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See More</a>
                       </div>
                           </center>
                   </div>
                   </div>
                       <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/sofoumer.jpg">
                           </a>
                           <center>
                                <div class="caption">
                                    <h1>The Sof Omar Cave</h1>
                          <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See More</a>
                               </div>
                           </center>
                       </div>
                   </div>
            </div>
            <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                  
                       <a href="#">
                           <img src="img/lucy.jpg"></a>
                       <center>
                           <div class="caption">
                               <h1>Lucy</h1>
                       <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See More</a>
                       </div>
                           </center>
                       </div>
                    </div>
                       <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/debredamo.jpg">
                           </a>
                           <center>
                                <div class="caption">
                                    <h1>Debre Damo Monastery</h1>
                          <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See More</a>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                  
                       <a href="#">
                           <img src="img/tana.jpg"></a>
                       <center>
                           <div class="caption">
                               <h1>Lake Tana</h1>
                       <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">See More</a>
                       </div>
                           </center>
                   </div>
                   </div>
            </div>
               </div>
             <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy . All Rights Reserved.</p>
                   <p>This website is developed by <em>Astu CSE Students</em></p>
               </center>
               </div>
           </footer>


    </body>
</html>