<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "login";
$tbl_name = "users";
$connection = mysqli_connect($host, $username, $password, $db_name) or die("cannot connect");
//mysql_select_db($db_name)or die ("cannot select DB");
$myusername = $_POST['myusername'];
$mypassword = $_POST['mypassword'];
$mypassword=md5($mypassword);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($connection, $myusername);
$mypassword = mysqli_real_escape_string($connection, $mypassword);

$sql = "SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result = mysqli_query($connection, $sql);

$count = mysqli_num_rows($result);

if ($count == 1)
{
    session_start();
    $_SESSION["myusername"] = $myusername;

    if ($_POST['captcha'] != $_SESSION['digit']){
        $varOk =false;
        //die("Sorry, the CAPTCHA code entered was incorrect!");
         session_destroy();
    }
   
    //
    if ((isset($_POST['myusername'])) && (isset($_POST['mypassword'])) && $varOk == true)
    {
        //die( $_POST['rememberme']);
        if (isset($_POST['rememberme'])) //&& $_POST['rememberme'] == 1)
        {
            setcookie('username', $_POST['myusername'], time() + 60 * 60 * 24 * 365);
            setcookie('password', md5($_POST['mypassword']) , time() + 60 * 60 * 24 * 365);
            //echo "Remember me cookie set!";
            
        }
        else
        {
            setcookie('username', $_POST['myusername'], false);
            setcookie('password', md5($_POST['mypassword']) , false);
            //echo "Remember me cookie not set!";
            
        }
        //}
       header("location:index.php"); 
    }
    
}
else
{
    $error_message = "Wrong Username or Password";
}

?>
