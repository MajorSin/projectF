<!---------------------------------------
SESSION STARTER
--------------------------------------->
<?php
session_start();
if(isset($_SESSION['gebruiker'])){
	header("location: admin");
}
else{}
?>
<!DOCTYPE html>
<html>
	<head>
		<!---------------------------------------
		INCLUDE'S
		--------------------------------------->
		<!--ALGEMEEN-->
		<meta charset="utf-8">
		<title>Homepagina - ProjectF</title>
		<link rel="icon" href="img/logo.png" sizes="16x16 32x32" type="image/png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--INCLUDE-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<link href="//cdn.muicss.com/mui-0.9.41/css/mui.min.css" rel="stylesheet" type="text/css" />
		<script src="//cdn.muicss.com/mui-0.9.41/js/mui.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<!--FONT-->
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
		<!--STYLE-->
		<link rel="stylesheet" href="css/index.css">
		<!--SCRIPT-->
		<script src="scripts/index.js" type="text/javascript"></script>
	</head>
	<body>
		<!---------------------------------------
		LOADER
		--------------------------------------->
		<div id="loaderdiv">
			<img src="img/loader.gif" id="loader" />
		</div>
		<!---------------------------------------
		CONTENT
		--------------------------------------->
		<div id="content">
			<!---------------------------------------
			NAVBAR
			--------------------------------------->
			<nav id="nav">
				<div class="container">
					<div class="row">
						<div class="col-sm-6" id="logodesktop">
							<div id="logodiv" class="logo">
								<img src="img/logoban.png" id="logodesktop"/>
							</div>
						</div>
						<div class="col-sm-6" id="navdesktop">
							<ul>
								<li><a class="navdesktoptext" id="homenav">Homepagina</a></li>
								<li><a class="navdesktoptext" id="overnav">Over ons</a></li>
								<li><a class="navdesktoptext" id="vragennav">Veelgestelde vragen</a></li>
								<li><a class="navdesktoptext" id="contactnav">Contact</a></li>
							</ul>
						</div>
						<!---------------------------------------
						MOBILE NAV
						--------------------------------------->
						<div id="logomobile" class="col-6">
							<div class="logo">
								<img src="img/logo.png" id="logomobileimg"/>
							</div>
						</div>
						<div class="col-6" id="responsivemobilenav">
							<div id="hamburger-menu">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<!---------------------------------------
			MOBILE NAV FULL SCREEN
			--------------------------------------->
			<div id="navmobilecontent">
				<div class="container-fluid" id="navmobiletext">
					<li id="mobilenavli" ><a id="homenavmobile">Homepagina</a></li>
					<li id="mobilenavli" ><a id="overnavmobile">Over ons</a></li>
					<li id="mobilenavli" ><a id="vragennavmobile">Veelgestelde vragen</a></li>
					<li id="mobilenavli" ><a id="contactnavmobile">Contact</a></li>
				</div>
			</div>
			<!---------------------------------------
			BANNER
			--------------------------------------->
			<section id="banner">
				<div id="bannerimg">
				</div>
				<div id="bannerdiv" class="container">
					<div class="container">
						<div class="row">
							<!---------------------------------------
							BESCHRIJVING
							--------------------------------------->
							<div id="beschrijving" class="col-sm-6">
								<h1 id="hoofdtitel">Lorem ipsum dolor sit</h1>
								<hr size="90" id="scheidingbanner" />
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna dictum.</p>
								<div id="btnbanner">
									<button type="button" class="mui-btn mui-btn--large mui-btn--primary mui-btn--raised" id="overonsbannerbtn"><span class="glyphicon glyphicon-info-sign"></span><i class="fas fa-info-circle"></i> Over ons</button>
								</div>
							</div>
							<!---------------------------------------
							LOGIN
							--------------------------------------->
							<div id="login" class="col-sm-6">
								<h1>Login</h1>
								<p>Lorem ipsum dolor sit</p>
								<div class="row">
									<form id="loginform" class="col s12" name="loginform" method="post">
										<div class="input-field col s12">
											<i id="hnlogo" class="fas fa-user material-icons prefix"></i>
											<input id="hn" type="text" class="validate" name="hn">
											<label id="hninput" for="hn">Gebruikersnaam</label>
										</div>
										<div class="input-field col s12">
											<i id="wwlogo" class="fas fa-key material-icons prefix"></i>
											<input id="ww" type="password" class="validate" name="ww">
											<label id="wwinput" for="ww">Wachtwoord</label>
										</div>
										<button class="mui-btn mui-btn--raised mui-btn--primary" id="forminlog" name="forminlog"><i class="fas fa-chevron-right"></i> Inloggen</button>
									</form>
								</div>
								<p id="resultformlogin"></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!---------------------------------------
			OVER ONS
			--------------------------------------->
			<div id="overonsbg"></div>
			<section id="overons">
				<div id="overonsdiv">
					<div class="container" id="overonsbgdiv">
						<h1>Over Ons</h1>
						<div class="row">
							<!---------------------------------------
							BESCHRIJVING
							--------------------------------------->
							<div class="col-sm-12">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eu mi eu odio varius pretium. Nam lacinia sapien metus, id pellentesque diam bibendum a. Cras vehicula ullamcorper nisl, ut ullamcorper ipsum molestie sit amet. Etiam et venenatis quam, id eleifend dui. Nam leo nisl, cursus vel odio et, aliquet tristique erat. Mauris sit amet posuere erat. Cras vel neque eget nunc scelerisque rhoncus. Sed luctus iaculis tincidunt.</p>
								<p>Phasellus convallis nisl a arcu feugiat congue. Sed viverra, felis ut hendrerit hendrerit, urna leo porttitor orci, et sollicitudin nulla lorem ut odio. Nulla porta mauris nec pretium consequat. Pellentesque vitae justo at erat lobortis semper non et magna. Cras egestas quis eros nec ornare. Praesent luctus ante quis pellentesque interdum. Proin finibus eget lacus id vehicula. Mauris et odio sit amet odio hendrerit ultrices id eu lorem.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!---------------------------------------
			VEELGESTELDE VRAGEN
			--------------------------------------->
			<section id="vragen">
				<div>
					<div class="container">
						<h1>Veelgestelde vragen</h1>
						<div class="row">
							<div class="col-sm-6">
								<h3><i class="far fa-question-circle"></i> Lorem ipsum dolor sit amet.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consectetur feugiat tortor ac commodo. In ut massa tortor. Nunc sed dictum arcu. Donec sed tincidunt est, quis congue velit. Nunc.</p>
							</div>
							<div class="col-sm-6">
								<h3><i class="far fa-question-circle"></i> Lorem ipsum dolor sit amet.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consectetur feugiat tortor ac commodo. In ut massa tortor. Nunc sed dictum arcu. Donec sed tincidunt est, quis congue velit. Nunc.</p>
							</div>
							<div class="col-sm-6">
								<h3><i class="far fa-question-circle"></i> Lorem ipsum dolor sit amet.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consectetur feugiat tortor ac commodo. In ut massa tortor. Nunc sed dictum arcu. Donec sed tincidunt est, quis congue velit. Nunc.</p>
							</div>
							<div class="col-sm-6">
								<h3><i class="far fa-question-circle"></i> Lorem ipsum dolor sit amet.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consectetur feugiat tortor ac commodo. In ut massa tortor. Nunc sed dictum arcu. Donec sed tincidunt est, quis congue velit. Nunc.</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!---------------------------------------
			CONTACT
			--------------------------------------->
			<section id="contact">
				<div>
					<div class="container">
						<h1>Contact</h1>
						<div class="row">
							<!---------------------------------------
							FORM CONTACT
							--------------------------------------->
							<div class="col-sm-6">
								<form id="loginform" class="col s12">
									<div class="input-field col s12">
										<i class="fas fa-user material-icons prefix"></i>
										<input id="chn" type="text" class="validate">
										<label for="chn">Gebruikersnaam</label>
									</div>
									<div class="input-field col s12">
										<i class="fas fa-at material-icons prefix"></i>
										<input id="mail" type="text" class="validate">
										<label for="mail">E-Mail</label>
									</div>
									<div class="input-field col s12">
										<i class="fas fa-envelope material-icons prefix"></i>
										<textarea id="msg" class="materialize-textarea"></textarea>
										<label for="msg">Bericht</label>
									</div>
									<button id="contactbtn" class="mui-btn mui-btn--raised mui-btn--primary"><i class="fas fa-chevron-right"></i> Inloggen</button>
								</form>
							</div>
							<div class="col-sm-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ullamcorper quam eget augue consectetur, at blandit ante congue. Proin egestas dictum elementum. Vivamus fringilla metus non ex tristique sodales. Curabitur sed porta lorem. Aenean malesuada mi in fermentum auctor. Sed viverra, nisl in tristique eleifend, sapien enim pharetra ipsum, et luctus ligula nisl id mauris. Nam maximus mollis tortor in scelerisque.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec euismod ut erat sed volutpat. Phasellus lobortis, quam dignissim finibus sollicitudin, mi mi aliquet sem, et pretium leo felis sed orci.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent orci tellus, sagittis ut sagittis sed, venenatis vitae nisi. Aenean scelerisque, urna at cursus vestibulum, ex purus auctor dolor, vel gravida metus felis et mi. Sed consequat sem sit amet congue.</p>
								<p>Alle velden verplicht</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!---------------------------------------
			FOOTER
			--------------------------------------->
			<section id="footer">
				<footer>
					<div class="container">
						<div class="row" id="footerinforow">
							<div class="col-sm-3">
								<h2>ProjectF</h2>
								<p>Just for the fun! Try this out.</p>
								<div id="socialmedia">
									<a href="https://twitter.com/?lang=nl" target="blank">
										<img src="img\twitter.png" class="sociallogo" /> <span class="socialtext"><b>@ProjectF</b></span>
									</a>
								</div>
							</div>
							<div class="col-sm-3">
								<h5>Links</h5>
								<ul id="links">
									<li>Site 1:<a href="https://www.google.nl" target="blank">Google</a></li>
									<li>Site 2:<a href="https://www.google.nl" target="blank">Google</a></li>
									<li>Site 3:<a href="https://www.google.nl" target="blank">Google</a></li>
								</ul>
							</div>
							<div class="col-sm-3">
								<h5>Andere afdelingen</h5>
								<ul id="andereafdelingenul">
									<li>Afdeling 1:<a href="https://www.bing.nl" target="blank">Bing</a></li>
									<li>Afdeling 2:<a href="https://www.bing.nl" target="blank">Bing</a></li>
									<li>Afdeling 3:<a href="https://www.bing.nl" target="blank">Bing</a></li>
									<li>Afdeling 4:<a href="https://www.bing.nl" target="blank">Bing</a></li>
									<li>Afdeling 5:<a href="https://www.bing.nl" target="blank">Bing</a></li>
								</ul>
							</div>
							<div class="col-sm-3">
								<h5>Verkennen</h5>
								<ul id="footernav">
									<li><a id="homefooter">Homepagina</a></li>
									<li><a id="overfooter">Over ons</a></li>
									<li><a id="vragenfooter">Veelgestelde vragen</a></li>
									<li><a id="contactfooter">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="container-fluid" id="afsluiting">
						PF © 2018 - <?php echo date("Y") ?> | 
						We zijn niet verbonden met BEDRIJF | 
						Template by: Prabhjot Singh | 
						Met dank aan HN |
						<a href="https://google.nl" target="blank">Voorwaarden & Privacy</a>
					</div>
				</footer>
			</section>
		</div>
	</body>
</html>