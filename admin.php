<?php if(!isset($_SESSION)) { session_start(); } ?>
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
    <?php
    if($_SESSION['loginstatus']=="")
    {
        header("location:loginform.php");
    }
    ?>
    <?php include('top.php'); ?>
   
            <div  class="container">
                <div class="row">
                    <div class="col-sm-6">
        <?php include('left.php'); ?>
                    </div>
        <div class="col-sm-6">
            <h1>WELCOME ADMIN!!!!!</h1>
        </div>


        
        <br><br>
       </div>
           <footer class="footer">
               <div class="container">
                <center>
                   <a><p>Copyright &copy . All Rights Reserved.</p></a>
                   <a><p>This website is developed by <em>Astu CSE Students</em></p></a>
                                                     
               </center>
                                                    
               </div>
                                                
            </footer>
        </div>
    </body>
</html>