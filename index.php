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
		<title>Antreprenoriat</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
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

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Viitorul e aici</h2>
							<p>Aceleasi legi economice.<br />
							Aceleasi reguli. Dar un tu mai bun.</p>
						</header>
                                            <span class="image"><img src="images/white.jpeg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
                                    <span class="image fit main"><img src="images/entreprenur.jpeg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>Esti la un pas distanta de succes</h2>
										<p>Vrei planuri validate deja in economia romaneasca? 
                                                                                    Totul depinde de motivatia si de curajul tau de a incepe lucruri noi.</p>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>E mai usor sa iei decizii cand stii ca ai un suport real. 
                                                                            Avem mentori la dispozitie care ofera asistenta companiilor
                                                                            in procesul de a lua acele decizii care pot influenta viitorul afacerii.</p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Iti putem oferi un plan solid si o echipa pregatita sa-l duca la capat. 
                                                                            E simplu sa reusesti cand ai o strategie de dezvoltare gandita pentru viitor, si o echipa care stie ce face.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
                                    <span class="image fit main"><img src="images/price.jpeg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Ce inseamna sa fii antreprenor?</h2>
							<p>Sa fii primul, dar în același timp şi cel mai bun.</p>
						</header>
						<p> Oricine are abilitatea de a deveni antreprenor. Oricine isi doreste poate sa fie antreprenor pentru toti avem acea scanteie de creativitate si inventititate. Prin urmare oricine are abilitatea sa concepa o ideea grozava pentru afacere.</p>
						<ul class="actions">
                                                    <li><a href="left-sidebar.php" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
                                    <span class="image fit main bottom"><img src="images/smart.jpeg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Cum ajungi?</h2>
                                                        <p>De la o ideea grozava pusa in practica!</p>
                           						</header>
						<p>Educatia antreprenoriala structurata este ceea ce face diferenta dintre a fi antreprenor si a fi un antreprenor care stie sa-si maximizeze succesul.</p>
						<ul class="actions">
                                                    <li><a href="right-sidebar.php" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Alatura-te in program!</h2>
							<p>Invata cum sa-ti scalezi afacerea intre 100% si 500%. Ai la dispozitie materiale de lucru, cursul video online si workshop-ul practic.</p>
						</header>
						<div class="box alt">
							<div class="row gtr-uniform">
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-chart-area"></span>
									<h3>Asistenta</h3>
									<p>Asistenta statistica in decizii care pot influenta viitorul afacerii.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-comment"></span>
									<h3>Ajutor oricand</h3>
									<p>E mai usor sa iei decizii cand stii ca ai un suport real. Mentor on Call oricand.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-flask"></span>
									<h3>Buget de venituri si cheltuieli</h3>
									<p>Inveti cum sa construiesti un buget de venituri si cheltuieli.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-paper-plane"></span>
									<h3>Newsletter</h3>
									<p>Stai informat despre tot ce e relevant in lumea antreprenorilor de succes.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-file"></span>
									<h3>Contacteaza-ne</h3>
									<p>Daca ai intrebari sau vrei consultanta personalizata, da-ne un mesaj. Un specialist iti va raspunde in cel mai scurt timp.</p>
								</section>
								<section class="col-4 col-6-medium col-12-xsmall">
									<span class="icon solid alt major fa-lock"></span>
									<h3>Principii operationale</h3>
									<p>Inveti despre principiile operationale ale unei companii de succes si ce presupune mandatul de director general.</p>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions special">
                                                            <li><a href="elements.php" class="button">Afla mai multe</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>De unde incep?</h2>
							<p>Aboneaza-te si primesti planul azi!</p>
						</header>
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Adresa de Email" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Ma abonez" class="fit primary" /></div>
							</div>
						</form>
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