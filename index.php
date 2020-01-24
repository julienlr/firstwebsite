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

		<title>Accueil ASIMOV</title>
	</head>
	<body>
		

		<?php
		include("raccourcis/header.php");
		?>
		
		
	<?php	if(isset($_SESSION['id']) AND isset($_SESSION['success']) AND $_SESSION['success'] == 1)
			include("bdd/connecter.php");
	?>

		<!-- Contenu de la page -->
		<div class="container_principal">
			<div class="container">
				<!-- Diapo -->
				<div  class="container_diapo">

					<div class="diapo">
						<div class="info_diapo"> 
							<span class="text_white">
								Resultats du Tournoi League of Legends <br />
								<a href="resultatTournoi.html" class="text_white"> -> plus d'informations</a>
							</span>
						</div>
					</div>

					<div class="diapo2">
						<div class="info_diapo"> 
							<span class="text_white">
								Nouveau café !! <br />
								<a href="avantage.php" class="text_white"> -> plus d'informations</a>
							</span>

						</div>
					</div>
				</div>
				
				<!-- Section de présentation de L'association -->

				<div class="section section_column">
					<div class="section section_column">
						<h2 class="text_center">Présentation</h2>

						<div class="paragraphe">
							<span class="disposition_ligne_paragraphe">
							
								<span>L'association ASIMOV (Association des Super Informaticiens du Mans Officieusement Vitamine) permet l'organisation de rencontre avec d'anciens étudiants du département Informatique en vue de faciliter de recherche d'emplois ou de stages en entreprise. 
								L’association se doit d’aider ses membres avec le développement des
								relations amicales entre ces derniers et ses anciens membres, de promouvoir les formations
								informatiques au Mans et aider les étudiants dans l’apprentissage de l’informatique.</span>

								<span>Une caféteria est mise a disposition au rez-de-chaussé de l'institut Claude Chappe.</span>

								<span>Nous organisons des tournois de jeux tel que League of Legends. </span>

								<span>La carte membre donne des avantages au Subway et a la caféteria <a href="avantage.php">Voir plus.</a></span>

							</span>
							<img class="image_paragraphe" src="image/Logo_ASIMOV.png" alt="Logo de l'association" />
							</div>
							<br/><br/>
							<span class="disposition_ligne_paragraphe">
							<span> Pour en savoir plus sur l'association ASIMOV, vous pouvez consulter le document PDF ci-dessous pour mieux comprendre son fonctionnement. </span>

							<div>
								<br/><br/>
								<iframe src="image/STATUTS.pdf" width="600" height="800"></iframe>
      						</div>
      					</span>

					</div>
			</div>
			
		<?php
		include("raccourcis/footer.php");
		?>
		</div>
	</body>
</html>

