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
                   <h1>GADA SYSTEM</h1>
                   <p>Gada is a traditional system of governance used by the Oromo people in Ethiopia developed from knowledge gained by community experience over generations. The system regulates political, economic, social and religious activities of the community dealing with issues such as conflict resolution, reparation and protecting women’s rights. It serves as a mechanism for enforcing moral conduct, building social cohesion, and expressing forms of community culture. Gada is organized into five classes with one of these functioning as the ruling class consisting of a chairperson, officials and an assembly. Each class progresses through a series of grades before it can function in authority with the leadership changing on a rotational basis every eight years. Class membership is open to men, whose fathers are already members, while women are consulted for decision-making on protecting women’s rights. The classes are taught by oral historians covering history, laws, rituals, time reckoning, cosmology, myths, rules of conduct, and the function of the Gada system. Meetings and ceremonies take place under a sycamore tree (considered the Gada symbol) while major clans have established Gada centers and ceremonial spaces according to territory. Knowledge about the Gada system is transmitted to children in the home and at school.</p>
                   <div class="col-xs-6">
                       <div  class="thumbnail">
                           <a href="#">
                                <img src="img/geda.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">GADA SYSTEM</p>
                                    
                                        <p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-6">
                       <div class="thumbnail">
                           <a #>
                               <img src="img/geda1.jpg" alt="Watch">
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