<?php
include("bdd/formulaire_inscription_bdd.php");
?><!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Formulaire d'inscription</title>
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
						<h1>Inscription</h1>
						<div>
							<label for="nom">Nom :</label>
							<input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
						</div>
						<div>
							<label for="prenom">Prenom :</label>
							<input type="text" placeholder="Votre prenom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
						</div>
						<div>
							<label for="mail">Mail :</label>
							<input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
						</div>
						<div>
							<label for="mail2">Confirmation du mail :</label>
							<input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>"/>
						</div>
						<div>
							<label for="mdp">Mot de passe :</label>
							<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
						</div>
						<div>
							<label for="mdp2">Confirmation du mot de passe :</label>
							<input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
						</div>
						<div>
							<label for="promotion">Saisir votre promotion :</label>
							<input type="radio" value="L1" id="promotion" name="promotion" checked /> L1
						     <input type="radio" value="L2" id="promotion" name="promotion" checked /> L2
						     <input type="radio" value="L3" id="promotion" name="promotion" checked /> L3
						     <input type="radio" value="M1" id="promotion" name="promotion" checked /> M1
						     <input type="radio" value="M2" id="promotion" name="promotion" checked /> M2
						</div>
						<div class="bottom">
								<input type="submit" name="forminscription" value="Valider mon inscription" />
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
