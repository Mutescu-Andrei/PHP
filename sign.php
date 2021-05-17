<?php
session_start();
if((isset($_COOKIE['username']))&& (isset($_COOKIE['password'])))
{
    $message = 'Welcome back '.$_COOKIE['username'];

}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Inregisteraza-te</title>
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

        
      <div id="main" class="wrapper style1">
            <div class="container">
                <header class="major">
                    <h2>Sign</h2>
                    <p>Ai deja cont?</p>
                    <p><a href="Logare.php" class="button primary">Logheaza-te!</a></p>
                </header>


                <section>
                    <h3>Sign Form</h3>
                    <?php if(!empty($error_message)) { ?><p><?php if(isset($error_message)){ echo $error_message; }?></p><?php }?>
                    <form name="form2" method="post" action="" >

                        <div class="row gtr-uniform gtr-50">
                     <div class="col-6 col-12-xsmall">
                                <input name="username" type="text" id="username" placeholder="Nume" />
                            </div>
                            <div style="white-space: pre-wrap;">

                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input name="password" type="text" id="password" placeholder="Parola" />
                            </div>
                            <div style="white-space: pre-wrap;">

                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input name="email" type="text" id="email" placeholder="Email" />
                            </div>
                            <div style="white-space: pre-wrap;">

                            </div>
                            <div class="col-6 col-12-xsmall">
                                <input name="mobile" type="text" id="mobile" placeholder="Telefon" />
                            </div>
                            <div style="white-space: pre-wrap;">

                            </div>
                            
                            <div class="col-12">
                                <ul class="actions">
                                    
       
                                    <li><input type="submit" name="submit" value="Incepe" />
                                     <?php 
include 'model.php';
$model=new Model();
$insert=$model->insert();
?></li>
                                    <li><input type="reset" name="seset" value="Reset" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>

                </section>
            </div>
        </div>
            
          
        

        
        </section>
        
        
        
        
        
        
        
        
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