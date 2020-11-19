<?php
session_start();
if(!isset($_SESSION['gebruiker'])){
	header("location: ../index");
}else{}
?>
<!doctype html>
<html>
	<head>
		<!--ALGEMEEN-->
		<title>Home - Adminpanel | ProjectF</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--INCLUDE-->
		<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
		<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
		<!--FONT-->
		<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
		<!--SCRIPTS-->
		<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
		<!--NAVBAR-->
		<section>
			<div class="sidenav">
				<div>
					<img src="img/logoban.png" id="bannerlogo" alt="banner">
				</div>
				<hr class="scheidingmenu" />
				<div>
  					<a href="index.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
				</div>
				<p class="navtext">RC werk</p>
				<hr class="scheidingmenu" />
				<div>
  					<a href="Sollicitatie"><i class="fas fa-copy"></i> Sollicitatie indienen</a>
					<a href="check"><i class="fas fa-check"></i> Checken</a>
					<a href="#"><i class="fas fa-search"></i> Reviewen</a>
				</div>
				<p class="navtext">Lijsten</p>
				<hr class="scheidingmenu" />
				<div>
  					<a href="#"><i class="fas fa-list"></i> Ledenlijst</a>
  					<a href="#"><i class="fas fa-list"></i> Sollicitatie-lijsten</a>
				</div>
			</div>
		</section>
		<div id="main">
			<!--HEADER-->
			<section>
				<header>
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<h1 id="headertext">Dashboard</h1>
							</div>
							<div id="headerimg" class="col-sm-6">
								<span id="headerimghelper"></span>
								<img id="pf" src="https://www.habbo.nl/habbo-imaging/avatarimage?hb=image&user=<?php echo $_SESSION['gebruiker'] ?>&headonly=1&direction=8&head_direction=3&action=wav&gesture=sml&size=m" alt="<?php echo $_SESSION['gebruiker'] ?>">
							</div>
						</div>
					</div>
				</header>
				<!--DROPDOWN-->
				<div id="dropdown">
					
				</div>
			</section><!--INTRO TEXT-->
			<section id="intro">
				<div id="welkomheader">
					<h2>Welkom <?php echo $_SESSION['gebruiker'] ?>!</h2>
				</div>
				<div id="introtext">
					<img id="introimg" src="https://www.habbo.nl/habbo-imaging/avatarimage?hb=image&user=<?php echo $_SESSION['gebruiker'] ?>&headonly=0&direction=2&head_direction=2&action=wav&gesture=sml&size=l" alt="<?php echo $_SESSION['gebruiker'] ?>" />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas, tortor sed volutpat vestibulum, arcu purus ultricies ex, eget fringilla libero enim vel urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent fermentum tempor est, sit amet varius leo congue non. Phasellus condimentum id magna sed hendrerit. Integer id congue purus, vel feugiat augue. Aliquam laoreet felis a libero pretium, blandit tempor ipsum consectetur. Curabitur congue viverra mollis. Sed eros purus, hendrerit sit amet sagittis ac, auctor eu mauris. Sed turpis nulla, eleifend ac pulvinar eu, condimentum blandit nulla. Vestibulum ac tellus feugiat, scelerisque sem sit amet, porta tellus. Duis semper iaculis tristique. Proin sit amet placerat nisi. Aliquam interdum, ipsum ac tristique pretium, justo leo condimentum diam, at egestas risus arcu sed arcu. Etiam aliquam dui dolor, id gravida purus placerat nec. Cras aliquet aliquet elit, non tincidunt mauris tristique vel. Sed id pretium metus, et bibendum erat.</p>
					<p>Nunc vitae velit vulputate, scelerisque felis sit amet, porta nisi. Nullam fringilla turpis ut mauris tincidunt laoreet. Etiam a condimentum felis, vel placerat felis. Donec iaculis rutrum dui ac mattis. Integer suscipit luctus velit, eget auctor neque congue at. Morbi aliquam risus commodo justo lobortis, a convallis turpis sodales. In hac habitasse platea dictumst. Quisque lobortis volutpat elit ut congue. Proin posuere hendrerit gravida. Nullam urna turpis, efficitur a quam sed, scelerisque rutrum elit.</p>
					<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur ac leo at dui ultricies porta nec in turpis. Donec lobortis porttitor porttitor. Aenean faucibus eu ipsum et mollis. Donec scelerisque elit lorem, non accumsan metus volutpat non. Integer in metus porttitor, ultricies dui vel, pellentesque elit. Donec dapibus fermentum faucibus. Ut imperdiet nunc a pharetra dapibus. Proin tincidunt bibendum tellus, dignissim viverra mi. Aenean euismod pulvinar varius. Nulla facilisi. Suspendisse id ipsum ac odio tincidunt rutrum quis in dolor. Phasellus massa tellus, bibendum ac tincidunt et, lacinia eget diam.</p>
				</div>
			</section>
			<!--GRAFIEK SOLLICITATIES-->
			<section id="grafiek">
				<div id="grafiekheader">
					<!--WEEKNUMMER-->
					<?php
					$weekNumber = date("W"); 
					?>
					<h2>Sollicitaties week <?php echo $weekNumber ?>
					
					<a class="fas fa-info-circle infosolli" href="Sollicitatie"></a>
					</h2>
				</div>
				<!--GRAFIEKINHOUD-->
				<div id="grafiekinhoud">
					<canvas id="bar-chart"></canvas>
					<script type="text/javascript">
						new Chart(document.getElementById("bar-chart"), {
							type: 'line',
							data: {
								labels: ["Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag","Zaterdag","Zondag"],
								datasets: [{ 
									data: [10,6,12,4,6,15,14,0],
									label: "Sollicitaties",
									borderColor: "rgba(248,248,248,0.89)",
									fill: false,
									backgroundColor: 'rgba(248,248,248,0.89)',
								}]
							},
							options: {
								title: {
									display: false
								},
								legend: {
									display: false
								}
							}
						});
					</script>
				</div>
			</section>
			<!--FOOTER-->
			<footer>
				PF - Platform © 2018 - <?php echo date("Y") ?> |
				We zijn niet verbonden met BEDRIJF |
				Template by: Prabhjot Singh | 
				Met dank aan HN |
				<a href="https://google.nl" target="blank">Voorwaarden & Privacy</a>
			</footer>
		</div>
		<!--
		<div class="GST-div" id="sollicitaties">
			<span id="SN">
				<script language="javascript">
					var endnumberSollicitaties = 75;
					animatieSollicitaties("SN", 0, endnumberSollicitaties, 750);
				</script>
			</span>
		</div>
		<script type="text/javascript"> var number = 
				include('../connection.php');
				$sqlUsernameCounter = "SELECT count(`gebruikersnaam`) FROM users"; 
				$resultUsernameCounter = $dbh->prepare($sqlUsernameCounter); 
				$resultUsernameCounter->execute(); 
				$numberUsername = $resultUsernameCounter->fetchColumn(); 
				echo $numberUsername;
		</script>
		-->
	</body>
</html>