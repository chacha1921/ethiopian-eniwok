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
                                <img src="img/sheraton.jpg">
                           </a>
                           <center>
                                <div class="caption">
                                    <h1>Sheraton Addis</h1>
                                    <h3>5 star</h3>
                                    <h2>$407</h2>
                                    
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                  
                       <a href="#">
                           <img src="img/sabon.jpg"></a>
                       <center>
                           <div class="caption">
                               <h1>Sabon Hotel</h1>
                               <h2>3 star</h2>
                               <h1>$61+</h1>
                       </div>
                           </center>
                   </div>
                   </div>
                       <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/capital.jpg">
                           </a>
                           <center>
                                <div class="caption">
                                    <h1>Capital Hotel & Spa</h1>
                                  <h2>5 Star</h2>
                                    <h1>$126+</h1>
                               </div>
                           </center>
                       </div>
                   </div>
            </div>
            <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                  
                       <a href="#">
                           <img src="img/adis.jpg"></a>
                       <center>
                           <div class="caption">
                               <h1>Addis Regency Hotel</h1>
                       </div>
                           </center>
                       </div>
                    </div>
                       <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/Addissinia.jpg">
                           </a>
                           <center>
                                <div class="caption">
                                    <h1>Addissinia Hotel</h1>
                                    <h2>5 Star</h2>
                                    <h1>$97+</h1>
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                  
                       <a href="#">
                           <img src="img/jupiter.jpg"></a>
                       <center>
                           <div class="caption">
                               <h1>jupiter International Hotel</h1>
                               <h2>5 Star</h2>
                                    <h1>$129+</h1>
                       </div>
                           </center>
                   </div>
                   </div>
            </div>
            <div class="row">
                       <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/golden.jpg" >
                           </a>
                           <center>
                                <div class="caption">
                                    <h1>Golden Tulip Hotel</h1>
                                    <h2>5 Star</h2>
                                    <h1>$174+</h1>
                          
                               </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                  
                       <a href="#">
                           <img src="img/hilton.jpg"></a>
                       <center>
                           <div class="caption">
                               <h1>Hilton Hotel</h1>
                               <h2>4 Star</h2>
                                    <h1>$153+</h1>
                       </div>
                           </center>
                       </div>
                       </div>
                <div class="col-xs-4">
                       <div  class="thumbnail">
                  
                       <a href="#">
                           <img src="img/adis.jpg"></a>
                       <center>
                           <div class="caption">
                               <h1>Marriott Hotel</h1>
                               <h2>5 Star</h2>
                                    <h1>$350+</h1>
                       </div>
                           </center>
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