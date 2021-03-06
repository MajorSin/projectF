<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<!--ALGEMEEN-->
		<title>Home - Adminpanel | ProjectF</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--INCLUDE-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
		<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/index.css">
		<!--FONT-->
		<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
		<!--SCRIPTS-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="scripts/index.js"></script>
	</head>
	<body>
		<!--NAVBAR-->
		<section>
			<div class="sidenavadmin">
				<div>
					<img src="img/logoban.png" id="bannerlogo" alt="banner">
				</div>
				<hr class="scheidingmenu" />
				<div>
  					<a href=".."><i class="fas fa-tachometer-alt"></i> Dashboard</a>
				</div>
				<p class="navtext">RC werk</p>
				<hr class="scheidingmenu" />
				<div>
  					<a href="../Sollicitatie"><i class="fas fa-copy"></i> Sollicitatie indienen</a>
					<a href="#" class="active"><i class="fas fa-check"></i> Checken</a>
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
			</section>
			<!--CHECK TAB-->
			<section class="check">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<div class="check-header">
								<h1>Check indienen</h1>
							</div>
							<div class="check-info">
								<p>Op deze pagina kunt u sollicitaties checken (alleen het huidige week). Selecteer een solliciatie en klik op het plusje. U zult dan een pop-up krijgen waar u alles in kunt vullen.</p>
								<?php
								include("check.php");
								?>
								<table>
									<tr>
										<th>Habbonaam</th>
										<th>Door</th>
										<th>Datum + Tijd</th>
										<th>Check</th>
									</tr>
									<?php
									foreach($result as $row){
										echo '<tr> <td>' . $row['HN'] . '</td>
										<td>' . $row['Door'] . '</td>
										<td>' . $row['Datum'] . ' ' . $row['Tijd'] . '</td>
										<td><i class="fas fa-plus-square"></i></td></tr>';
									}
									?>
								</table>
							</div>
						</div>
					</div>
				</div>
			<!--FOOTER-->
			<footer>
				PF - Platform © 2018 - <?php echo date("Y") ?> |
				We zijn niet verbonden met BEDRIJF |
				Template by: Prabhjot Singh | 
				Met dank aan HN |
				<a href="https://google.nl" target="blank">Voorwaarden & Privacy</a>
			</footer>
		</div>
	</body>
</html>