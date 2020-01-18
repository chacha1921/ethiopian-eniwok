<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ETHIOPIAN ENIWOK</title>
        <meta charset="UTF-8">
        
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

        <?php include('function.php'); ?>
        <?php
        $_SESSION['loginstatus']="";
        if(isset($_POST["sbmt"]))
            {
                $cn=makeconnection();
                $s="select * from usera where username='" . $_POST["t1"] . "' and pwd='" . $_POST["t2"] ."'";

                $q=mysqli_query($cn,$s);
                $r=mysqli_num_rows($q);
                $data=mysqli_fetch_array($q);
                mysqli_close($cn);
                if($r>0)
                {
                    $_SESSION["username"]= $_POST["t1"];
                    $_SESSION["usertype"]=$data[2];
                    $_SESSION['loginstatus']="yes";
                    header("location:index.php");
                }
            else
            {
            echo "<script>alert('Invalid User Name or Password');</script>";
            }
          }
        ?>
        <?php include('topforlogin.php'); ?>

        
            <div class="container"></div>
            <div class="row">
                <div class="col-xs-12">
                    <center>
                        <form method="post">
                            <table border="10" width="100%" height="20px" align="left" class="tableshadow">
                            <tr><td colspan="2" class="toptd"></td></tr>

                            <tr><td></td>
                            <td class="lefttxt"><table border="0" width="100px" height="100px"><td>User Name</td></td><td><input type="text" name="t1" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for User Name" /></td></tr>
                            <tr><td class="lefttxt">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters between 1 to 10 for Password" /></td></tr>
                            <tr><td></td><td align="center" ><input type="submit" value="LOGIN" name="sbmt" /></td></tr>

                             </table>
                        </form>
                    </center>



                </div>
                
            </div>
        
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer class="footer">
               <div class="container">
                <center>
                   <a><p>Copyright &copy . All Rights Reserved.</p></a>
                   <a><p>This website is developed by <em>Astu CSE Students</em></p></a>
                                                     
               </center>
                                                    
               </div>
                                                
            </footer>
        </body>
    
</html>