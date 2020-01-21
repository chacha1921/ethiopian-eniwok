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
        <div class="top-nav">
           <div class="collapse navbar-collapse" id="myNavbar">
            
             <h2>Admin Links</h2>

            <?php if($_SESSION["usertype"]=="Admin")
            {?>
            <ul>
            <li><a href="adduser.php">Add User</a></li>
            <li><a href="updateuser.php">Update User</a></li>
            <li><a href="deleteuser.php">Delete User</a></li>
                </ul>
             <?php
            }?>
           
            </div>
        </div>
    </body>
</html>