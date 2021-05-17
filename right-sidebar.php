<?php
session_start();
if((isset($_COOKIE['username']))&& (isset($_COOKIE['password'])))
{
    $message = 'Welcome back '.$_COOKIE['username'];

}
?>
<html>
	<head>
		<title>Cum ajungi?</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.php">Antreprenoriat</a></h1>
					<nav id="nav">
						<ul>
                                                    <?php if(!empty($message)) {?>
                                                    <li> <a href="zona.php">Zona</a></li>
                                                   <?php }?>
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
							<h2>Cum ajungi?</h2>
							<p>Prin motivatia de a lucra</p>
						</header>
						<div class="row gtr-150">
							<div class="col-8 col-12-medium">

								<!-- Content -->
									<section id="content">
                                                                            <a href="#" class="image fit"><img src="images/any.jpeg" alt="" /></a>
										<h3>Esti deja?</h3>
										<p><audio src="mp34/E timpul să faceți bani serioși Am scris o poveste.mp3" controls="controls">
Your browser does not support the audio element.
</audio></p>
										<h3>Vrei sa devi?</h3>
										<p>Incearca aceasta platforma facuta special sa te ajute sa ajungi acolo</p>
										<ul>
											<li>1.Mai bun</li>
											<li>2.Mai perseverent </li>
											<li>3.Mai motivat</li>
											<li>4.Mai pregatit</li>
											<li>5.Mai curajos</li>
										</ul>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<section id="sidebar">
										<section>
											<h3>Ce oferim?</h3>
											<p>Informatii!</p>
											<footer>
												<ul class="actions">
                                                                                                    <li><a href="no-sidebar.php" class="button">Afla mai multe</a></li>
												</ul>
											</footer>
										</section>
										<hr />
										<section>
                                                                                    <a href="#" class="image fit"><img src="images/whiteback.jpeg" alt="" /></a>
											<h3>Cum accesezi?</h3>
											<p>Prin noi!</p>
											<footer>
												<ul class="actions">
                                                                                                    <li><a href="sign.php" class="button">Afla mai multe</a></li>
												</ul>
											</footer>
										</section>
									</section>

							</div>
						</div>
					</div>
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