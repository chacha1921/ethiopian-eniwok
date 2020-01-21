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
                                <img src="img/honey.jpg">
                           </a>
                           <center>
                                <div class="caption">
                                    <h1>Honey land Hotel</h1>
                                    <h2>$27.2</h2>
                                    
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                  
                       <a href="#">
                           <img src="img/lalibelaho.jpg"></a>
                       <center>
                           <div class="caption">
                               <h1>Lalibela Hotel</h1>
                               
                               <h1>$45+</h1>
                       </div>
                           </center>
                   </div>
                   </div>
                       <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/jerusalem.jpg">
                           </a>
                           <center>
                                <div class="caption">
                                    <h1>Jerusalem Hotel Lalibela</h1>
                                    <h1>$33+</h1>
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
             </div>


    </body>
</html>