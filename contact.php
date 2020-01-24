<?php
session_start();
?><!DOCTYPE html>

<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Nous trouver</title>
	</head>
	<body>
		


		<?php
		include("raccourcis/header.php");
		?>
		<!-- Contenu de la page -->
		<div class="container_principal">
			<div class="container">


					<div class="section section_column section_border">
						<a href="http://ic2.univ-lemans.fr/fr/index.html"><img src="image/ic2.png" alt="ic2"/></a>
						<h2 class="text_center">Où sommes nous ?</h2>
						<div class="section section_parametre3">

							<span class="text_center">20 Avenue René Laennec<br />72000 Le Mans</span>
							<iframe 
								class="map" 
							  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAcqp4qaeeHMiiHn1ThwhEXxV7JUm836o4
							    &q=institut+claude+chappe">
							</iframe>
						</div>
					</div>
				
		

			</div>
		<?php
		include("raccourcis/footer.php");
		?>
		</div>
	</body>
</html>
