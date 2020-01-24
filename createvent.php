<?php
include("bdd/createvent_bdd.php");
?><!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Créer un évènement</title>
	</head>
	<body>

		<?php
		include("raccourcis/header.php");
		?>

		<div class="affichage">
			<div class="content">

				<div class="formulaire">
					<form method="POST" action="" class="login active">
						<br/>
						<h1>Création évènement</h1>
						
						<div>
							<label for="nom_ev">Nom de l'évènement :</label>
							<input type="text" placeholder="Le nom" id="nom_ev" name="nom_ev" value="<?php if(isset($nom_ev)) { echo $nom_ev; } ?>" />
						</div>
						<div>
							<label for="date_ev">Date de l'évènement :</label>
							<input type="datetime-local" placeholder="AAAA-MM-JJ hh:mm:ss" id="date_ev" name="date_ev" value="<?php if(isset($date_ev)) { echo $date_ev; } ?>" />
						</div>
						<div>
							<label for="place_ev">Le nombre de place :</label>
							<input type="number" placeholder="Nb place" id="place_ev" name="place_ev" value="<?php if(isset($place_ev)) { echo $place_ev; } ?>" />
						</div>
						<div>
							<label for="prix_ev">Prix pour un membre de l'ASIMOV :</label>
							<input type="number" placeholder="Le prix" id="prix_ev" name="prix_ev" value="<?php if(isset($prix_ev)) { echo $prix_ev; } ?>"/>
						</div>
						<div>
							<label for="prix_nm_ev">Prix pour ceux qui ne sont pas membre :</label>
							<input type="number" placeholder="Le prix" id="prix_nm_ev" name="prix_nm_ev" value="<?php if(isset($prix_nm_ev)) { echo $prix_nm_ev; } ?>" />
						</div>
						
						
						<div class="bottom">
								<input type="submit" name="creerevent" value="Créer mon évènement" />
								<a href="" rel="register" class="linkform"></a>
						</div>

					</form>

				 <?php
				 if(isset($erreur)) {
				    echo '<font color="red">'.$erreur."</font>";
				 }
				 ?>

				</div>

			</div>
		<?php
		include("raccourcis/footer.php");
		?>
		</div>

	</body>
</html>
