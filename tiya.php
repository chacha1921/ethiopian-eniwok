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
           // require 'header.php';
           ?>
           <div class="container">
               <div class="row">
                   <h1>Tiya</h1>
                   <p>Tiya is among the most important of the roughly 160 archaeological sites discovered so far in the Soddo region, south of Addis Ababa. The site contains 36 monuments, including 32 carved stelae covered with symbols, most of which are difficult to decipher. They are the remains of an ancient Ethiopian culture whose age has not yet been precisely determined.</p>
                   <div class="col-xs-6">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/tiya.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Tiya</p>
     
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-6">
                       <div class="thumbnail">
                           <a href="#">
                               <img src="img/tiya2.jpg" alt="Watch">
                           </a>
                           
                       </div>
                   </div>
                   <center>
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010339.6959881306!2d38.04658769994549!3d8.437022778492464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164ca90698644051%3A0x7cc79e27fb5f673a!2sTiya!5e0!3m2!1sen!2set!4v1576943197360!5m2!1sen!2set" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                           </center>
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
        </div>
    </body>
</html>