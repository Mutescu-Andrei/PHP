<?php
session_start();
if((isset($_COOKIE['username']))&& (isset($_COOKIE['password'])))
{
    $message = 'Welcome back '.$_COOKIE['username'];

}
?>
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
                
                
                 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
                <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   <style>#mapid { height: 250px;
       width: 400px;}</style>
   
   
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
                                                    
                                                    <section id="content" style="text-align: center;">
 <div class="container" style="display: inline-block;">
                                                    <p><svg width="400" height="180" >
                      <defs>
    <filter id="f1" x="0" y="0">
      <feGaussianBlur in="SourceGraphic" stdDeviation="15" />
    </filter>
  </defs>
  <line x1="120" y1="20" x2="300" y2="200" style="stroke:#000000;stroke-width:2"  />
  <rect x="120" y="20" rx="20" ry="20" width="150" height="150"
  style="fill:#0bb56e ;stroke:black;stroke-width:5;opacity:0.5" filter="url(#f1)" />
  <text fill="#ffffff" font-size="120" font-family="Script" x="155" y="135">A</text>
  </svg>
  </p></div></section>
							<h2>Contact </h2>
							<p>Cum poti ajunge la noi</p>
                                                         <div id="mapid" class="container"></div>
                                                         
						</header>

						<!-- Text -->
						

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
                        <script>var mymap = L.map('mapid').setView([47.17399,27.57143], 15);
                        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFpbWFpbWFpbWFpIiwiYSI6ImNrYWI1aGNyejEyN20yd3BnaGE1OXFnZjIifQ.zx53n8RcSTO3TV2ZoL8q7g'
}).addTo(mymap);
                        var marker = L.marker([47.17399,27.57143]).addTo(mymap);
                    </script>

	</body>
</html>