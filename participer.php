<?php
include("bdd/participer_bdd.php");
?><!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Participer à un évènement</title>
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
						<h1>Inscription à l'évènement </h1>
						<?php if(!isset($_SESSION['id'])){ ?>
						<div>
							<label for="mail">E-mail :</label>
							<input type="email" placeholder="Votre mail" id="mail" name="mail" />
						</div>
						<?php } ?>
						<div>
							<label for="nourriture">Je prend ma propre nourriture :</label>
							<input type="radio" value="Oui" id="nourriture" name="nourriture" /> Oui<br />
							<input type="radio" value="Non" id="nourriture" name="nourriture" checked /> Non<br />
						</div>
						<div>
							<label for="majeur">Je suis majeur :</label>
							<input type="radio" value="Oui" id="majeur" name="majeur" /> Oui<br />
							<input type="radio" value="Non" id="majeur" name="majeur" checked /> Non<br />
						<div>
							<p> Si non, téléchargez l'autorisation parentale ci-dessous, à remplir obligatoirement </p>
      						</div>
						</div>
						<div class="bottom">
								<input type="submit" name="participevent" value="Valider" />
								<a href="image/AutorisationParentale.pdf" target ="_blank" rel="register" class="linkform">autorisation parentale</a>
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

