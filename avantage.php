<?php
session_start();
?><!DOCTYPE html>

<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Avantages</title>
	</head>
	<body>
		


		<?php
		include("raccourcis/header.php");
		?>
		<!-- Contenu de la page -->
		<div class="container_principal">
			<div class="container">
				<div class="section section_column ">
					<div class="section section_column section_border">

						<h1>Prix de la caféteria</h1>
						<!-- Tableau des prix de la cafeteria -->
						<table class="table_prix">
							<tr>
								<td>Produit</td>
								<td>Prix Adhérant</td>
								<td>Prix Non Adhérant</td>
							</tr>
							<tr>
								<td>Repas (New)*</td>
								<td>3€</td>
								<td>3€</td>
							</tr>

							<tr>
								<td>Soda*</td>
								<td>0,6€</td>
								<td>0,8€</td>
							</tr>

							<tr>
								<td>Snack 1*</td>
								<td>0,6€</td>
								<td>1€</td>
							</tr>

							<tr>
								<td>Snack 2*</td>
								<td>0,7€</td>
								<td>1,1€</td>
							</tr>

							<tr>
								<td>Thé</td>
								<td>0,3€</td>
								<td>0,6€</td>
							</tr>

							<tr>
								<td>Café*</td>
								<td>0,5€</td>
								<td>0,6€</td>
							</tr>

							<tr>
								<td>Chupa Chups</td>
								<td>0,2€</td>
								<td>0,3€</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="section section_column section_border">
					<h2>Repas</h2>
					<div class="paragraphe">

						<span>
							<strong>Les membres bénéficient d’une formule ASIMOV <br>
							au Subway à 5€ le Sub30 avec une boisson.<br>
							<br>
							*(Plat tout fait + Boisson ou Snack <br>
						Plat : Lasagne, Blanquette de veau )</strong></span>

					</div>
					
				</div>
			</div>
		
		<?php
		include("raccourcis/footer.php");
		?>
		</div>
	</body>
</html>
