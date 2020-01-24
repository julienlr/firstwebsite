<?php
session_start();
?><!DOCTYPE html>

<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>News</title>
	</head>
	<body>
		


		<?php
		include("raccourcis/header.php");
		?>
		<!-- Contenu de la page -->
		<div class="container_principal">
			<div class="container">
				


				<a href="eventpasse.php" class="section section_news">
					<div class="section_news_animation">
						<img src="image/AfficheLol.png" alt="Ekko dans League of Legends" class="section_news_image">
						<div>
							Tournoi League of Legends
						</div>
					</div>
					<div class="info_news">plus d'infos sur les évènements passés... </div>
				</a>

				<a href="avantage.php" class="section section_news">
					<div class="section_news_animation">
						<img src="image/small.png" alt="Café" class="section_news_image">
							<div>
								Des nouveaux cafés !
							</div>
					</div>
					<div class="info_news">plus d'infos sur les plats disponibles à la cafeteria... </div>
				</a>


			</div>
		<?php
		include("raccourcis/footer.php");
		?>
		</div>
	</body>
</html>
