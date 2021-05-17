<?php

include 'rul.php';

session_start();
if((isset($_COOKIE['username']))&& (isset($_COOKIE['password'])))
{
    $message = 'Welcome back '.$_COOKIE['username'];

}
$varOk=true;
 if (isset($_POST['roll']))
 {$t=new Rulet();
 $t->spin();
$insert=$t->get_number();
 if ($_POST['roll'] != $insert){
        $varOk =false;
    } 
 }
 
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Aplica</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
                    <li><?php if(isset($message)){ echo $message; }?> <a href="logout.php" class="button primary">Logout!</a></li>
                    <?php }else{?>
                    <li><a href="Logare.php" class="button primary">Intra!</a></li><?php }?>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <div id="main" class="wrapper style1">
            <div class="container">
                <header class="major">
                    <h2>Incearca premium</h2>
                    <p>Poate ai noroc</p>
                    
                </header>


               
                    <h3>Incearca</h3>
                   
                    <form name="form1" method="post" action="" >

                        <div class="row gtr-uniform gtr-50">
                            <div class="col-6 col-12-xsmall">
                                <input name="roll" type="text" id="roll" placeholder="Scrie numarul 0-100" />
                            </div>
                            
                                <ul class="actions">
                                    <li><input type="submit" name="Submit" value="Incearca" /></li>
                                    <li><input type="reset" name="Reset" value="Reset" /></li>
                                </ul>
                            <div class="col-6 col-12-xsmall">
                            <?php
                             if (isset($_POST['roll']))
                             {if($varOk==true)
      echo "Ai castigat";
  else {
  echo "Ai pierdut";  }
                             echo ", numarul era "; echo $insert;}
                             ?></div>
                            </div>
                        
                    </form>

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