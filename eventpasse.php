<?php
session_start();

// Connexion à la base de données
include("bdd/identifiants.php");

?><!DOCTYPE html>

<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Evènements passés</title>
	</head>
	<body>
		

		<?php
		include("raccourcis/header.php");
		?>
		

		<!-- Contenu de la page -->
		<div class="container_principal">
			<div class="container">
				<div class="section section_column">
					<div class="section section_column">
						<h1 class="text_center">LAN DE LEAGUE OF LEGENDS</h1>

						<p class="image">
 						<a href = "http://challonge.com/asilol"><img src="image/AfficheLol.png" alt="affiche LOL" /></a>
						</p>
						<p> Cette LAN de LOL a rassemblé 120 personnes et l'équipe gagnante est Xx_Unic0rns-0f-d4rkn355_xX !
						<br/>Pour plus d'infos, cliquez sur l'affiche.</p>
						<br/><br/><br/><br/>
						<strong><h2 class="text_center">Journée Porte Ouverte</h2></strong>
						<img src="image/porteouverte.jpg" alt="porte ouverte" />
						<p> 40 visiteurs se sont présentées aux portes ouvertes de la fac d'informatique du Mans, 
						</br> qui se déroulaient le 10 février dernier. </p>
						<br/><br/><br/><br/>
						<h3 class="text_center">LAN MINECRAFT</h3>
						<img src="image/minecraft.jpg" alt="minecraft" />
					</div>
				</div>
			</div>

			
		<?php
		include("raccourcis/footer.php");
		?>
		</div>
	</body>
</html>
