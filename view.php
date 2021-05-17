      
<?php
include 'Connection.php';
$sql="SELECT * FROM imagini WHERE ID='{$_GET['id']}'";
$query=mysqli_query($con,$sql)or die(mysqli_error($con));
$row=mysqli_fetch_array($query);

    
   
        
   session_start();
   if((isset($_COOKIE['username']))&& (isset($_COOKIE['password'])))
   {
       $message = ' '.$_COOKIE['username'];
   
   }
   if(empty($message)) {
       header("Location:index.php");
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
                 <table >
                  <tr >
                     <th style="text-align: center; vertical-align: middle;">Nume</th>
                     <th style="text-align: center; vertical-align: middle;">Imagine</th>
                    
                  </tr>
                  <?php
                // echo "Nume:".$row["title"]."<br/>";
//echo "Imagine:<img src=".$row['image']."><br/> ";
?>
                  <tr style="border-bottom:1px solid black;">
                      <td style="text-align: center;"><img src="<?php echo $row['image'];?>" style="max-height: 400px;max-width: 400px; display: inline-block; "></td>
                      <td style="text-align: center; vertical-align: middle;"><div style="display: inline-block;"><?php echo $row['title'];?></div></td>
                   
                  </tr>
                  
               </table>
                <br><br>
                <a href="zona.php">Back</a>
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
