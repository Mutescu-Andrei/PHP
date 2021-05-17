<?php
session_start();
if(!isset($_SESSION["myusername"])){
header("Location:index.php");
}
if((isset($_COOKIE['username']))&& (isset($_COOKIE['password'])))
{
    header("Location:index.php");

}//else{header('Location:index.php');}
?>
<html>
    <body>
      Login Successful
      <a href="logout.php">Logout</a>
      
        
    </body>
</html>