<?php
require_once 'Connection.php';
require_once 'ConnectionPDO.php';

       

$sql1="DROP PROCEDURE IF EXISTS editP";
$sql2="CREATE PROCEDURE editP(
    IN strID int(11),
    IN strTitle varchar(100),
    IN strImage varchar(100)
)


BEGIN 
        UPDATE imagini SET title=strTitle,image=strImage WHERE id=strID;
        END;";

$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();

$sql3="DROP TRIGGER IF EXISTS triggerUpdate";
$sql4="CREATE TRIGGER triggerUpdate BEFORE UPDATE ON imagini FOR EACH ROW
        BEGIN
        INSERT INTO imagini_updated(title,edtime,status)
        VALUES(OLD.title,NOW(),'EDITED');
        END;";

$stmt3=$con->prepare($sql3);
$stmt4=$con->prepare($sql4);
$stmt3->execute();
$stmt4->execute();
        
$sql5="DROP PROCEDURE IF EXISTS editP2";
$sql6="CREATE PROCEDURE editP2(
    IN strID int(11)
)


BEGIN 
        SELECT * FROM imagini WHERE id=strID ;
        END;";

$stmt5=$con->prepare($sql5);
$stmt6=$con->prepare($sql6);
$stmt5->execute();
$stmt6->execute();

function getSingleValue($con, $sql, $parameters)
{
    $q = $con->prepare($sql);
    $q->execute($parameters);
    return $q->fetchColumn();
}

if(!isset($_POST["submit"])){
    
 
$stmt99 = $con->prepare("SELECT * FROM imagini WHERE id=:id");
$stmt99->execute(['id' => filter_input(INPUT_GET, 'id')]); 
$record = $stmt99->fetch();

            
}else{
  $stmt999 = $con->prepare("SELECT * FROM imagini WHERE id=:id");
$stmt999->execute(['id' => filter_input(INPUT_POST, 'id')]); 
$rec = $stmt999->fetch();

print("title = $rec[0]\n");
print("title = ".filter_input(INPUT_POST, 'image'));

 $title=filter_input(INPUT_POST, 'title');
 $arr= filter_var_array($_FILES);

$pant=$arr['image'];//$_FILES['image']['name'];

 if(isset($pant))
 {$target="./imagini/".basename($_FILES['image']['name']);

 }else
 {$target=getSingleValue($con, "SELECT image FROM imagini WHERE id=?", [filter_input(INPUT_POST, 'id')]); 
 //echo $target;

}


$id=filter_input(INPUT_POST, 'id');
$sql="CALL editP('{$id}','{$title}','{$target}')";
$q=$con->query($sql);

move_uploaded_file($_FILES['image']['tmp_name'], $target);
header('Location:zona.php');
 }
 ?>
<!DOCTYPE HTML>
<html>
   <head>
      <title>View</title>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript>
         <link rel="stylesheet" href="assets/css/noscript.css" />
      </noscript>
   </head>
   <body class="is-preload landing">
      <div id="page-wrapper">
      <!-- Header -->
      <header id="header">
         <h1 id="logo"><a href="index.php">Antreprenoriat</a></h1>
         <nav id="nav">
            <ul>
               <li><a href="index.php">Acasa</a></li>
               <li>
                  <a href="#">Investitor</a>
                  <ul>
                     <li><a href="left-sidebar.php">Ce inseamna</a></li>
                     <li><a href="right-sidebar.php">Cum ajungi</a></li>
                     <li><a href="no-sidebar.php">Cursuri</a></li>
                     <li>
                        <a href="#">Top 4 Ivestitori</a>
                        <ul>
                           <li><a href="Dragos-Petrescu.php">Dragos Petrescu</a></li>
                           <li><a href="Cristian-Onetiu.php">Cristian Onetiu</a></li>
                           <li><a href="Daniela-Mariscu.php">Daniela Mariscu</a></li>
                           <li><a href="Sebastian-Dobrincu.php">Sebastian Dobrincu</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li><a href="elements.php">Contact</a></li>
               <?php if(!empty($message)) { ?>
               <li><?php if(isset($message)){ echo $message; }?>
                  <a href="logout.php" class="button primary">Logout!</a>
               </li>
               <?php }
                  else{?>
               <li><a href="Logare.php" class="button primary">Intra!</a></li>
               <?php }?>
            </ul>
         </nav>
      </header>
      <body class="is-preload landing">
         <div id="page-wrapper">
            <div class="table-wrapper">             
                  <br><br>
            </div>
             <div>
                 
                 <h1 style="text-align: center; vertical-align: middle;">Editati inregistrarea: </h1>
<form method="post" style="text-align: center; vertical-align: middle;" action="<?php echo $_SERVER['PHP_SELF'];?>"
      enctype="multipart/form-data">
    Titlu:<br/><input type="text" name="title" value="<?php echo $record['title'];?>" /><br/>
    Image:<br/><input type="file" name="image" value="<?php echo $record['image'];?>"> <br/>
    <img src="<?php echo $record['image'];?>"><br/>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
    <input type="submit" name="submit" value="Edit" />
</form>
                  
               
                <br><br>
                <h1 style="text-align: center; vertical-align: middle;" ><a href="zona.php" style="text-align: center;">Back</a></h1>
             </div>
            
            <!-- Footer -->
            <footer id="footer">
               <ul class="icons">
                  <li><a href="#" onclick="window.open('https://twitter.com/share?url=http://localhost/Tema/index3.php&via=Sitename&text=Lorem Ceva ceva','Twitter share','width=620,height=420');return false;"  class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http://localhost/Tema/index3.php','Facebook Share','width=620,height=420');return false;" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
                  <li><a href="#" class="icon brands alt fa-instagram" onclick="window.open('https://www.instagram.com/antreprenorul.ro/','Instagram Share','width=620,height=420');return false;" > <span class="label">Instagram</span></a></li>
               </ul>
               <ul class="copyright">
                  <li>&copy; Antreprenoriat. All rights reserved.</li>
               </ul>
            </footer>
         </div>
         <!-- Scripts -->
         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/jquery.scrolly.min.js"></script>
         <script src="assets/js/jquery.dropotron.min.js"></script>
         <script src="assets/js/jquery.scrollex.min.js"></script>
         <script src="assets/js/browser.min.js"></script>
         <script src="assets/js/breakpoints.min.js"></script>
         <script src="assets/js/util.js"></script>
         <script src="assets/js/main.js"></script>
   </body>
</html>
