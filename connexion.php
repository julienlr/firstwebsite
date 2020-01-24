<?php
include("bdd/connexion_bdd.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Connexion</title>
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
							<h1>Connexion</h1>
							<div>
								<label for="mailconnect">EMAIL</label>
								<input type="text" placeholder="Votre mail" id="mailconnect" name="mailconnect" />
							</div>
							<div>
								<label for="mdpconnect"> MOT DE PASSE <label>
								<input type="password" placeholder="Votre mdp" id="mdpconnect" name="mdpconnect" />
							</div>
							<div class="bottom">
								<?php
					 			if(isset($erreur)) {
					    		echo '<font color="red">'.$erreur."</font>";
					 			}
						 		?>
						 		<input type="checkbox" name="remember" id="remembercheck"/><label for="remembercheck">Se souvenir de moi</label>
								<input type="submit" name="formconnexion" value="Se connecter" />
								<a href="formulaire_inscription.php" rel="register" class="linkform">Pas encore de compte ? <br/>Inscrivez-vous ici</a>
							</div>
						</form>

				</div>

			</div>
		<?php
		include("raccourcis/footer.php");
		?>
		</div>

	</body>
</html>
