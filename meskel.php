<?php
session_start();
?>
<!DOCTYPE html>
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
        <div>
           <?php
         require 'header.php';
           ?>
           <div class="container">
               <div class="row">
                   <h1>MESKAL</h1>
                   <p>Meskal is second in importance only to Timket and has been celebrated for over 1,600 years. The word actually means "cross" and the feast commemorates when the cross of Christ was discovered to Empress Helena, mother of Constantine the Great.<br><br>

In Addis Ababa, celebrations start in the early afternoon when a procession bearing flaming torches approaches Meskal Square from various directions. Participants include Priests in brightly colored vestments, students, brass bands, contingents of the armed forces and floats carrying huge lit crosses. They circle the "demera" and fling torches upon it while singing a special Meskal song.<br><br>

Thousands gather at the Square to bid farewell to the rains and welcome in "Tseday" the spring season with its profuse "Meskal" daisies and golden sunshine. As evening darkens, the flames glow brighter. It is not until dawn that the burning pyramid consumes itself entirely and the big tree at the center finally falls. During the celebrations, houses are stocked with "tella" the local beer, and strangers are made welcome.<br</p>
                   <div class="col-xs-6">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/meskel.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">MESKAL</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-6">
                       <div class="thumbnail">
                           <a #>
                               <img src="img/meskel2.jpg" alt="Watch">
                           </a>
                          
                       </div>
                   </div>
               </div>
                   
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy . All Rights Reserved.</p>
                   <p>This website is developed by <em>ASTU CSE STUDENTS</em></p>
               </center>
               </div>
           </footer>
            </div>
        </div>
    </body>
</html>