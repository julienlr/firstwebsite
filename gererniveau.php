<?php

session_start();
// Connexion à la base de données
include("bdd/identifiants.php");
$reponse = $bdd->query('SELECT * FROM FC_LALOY_membre');
?><!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Modifier niveau</title>
	</head>
	<body>

		<?php
		include("raccourcis/header.php");
		?>

		<div class="affichage">
			<div class="content">

				<div class="formulaire">
				<br/>
				<h1>Modifier le niveau d'un membre</h1>
				<div>
					<p>Niveau 1 = Membre</p>
					<p>Niveau 2 = Gérant</p>
					<p>Niveau 3 = Administrateur</p>
					
				</div>
				<?php while ($donnees = $reponse->fetch())
						{ ?>
					<form method="POST" action="bdd/gererniveau_bdd.php" class="login active">
						<br/>	
						
						<div>
							<label>Nom : <?php echo htmlspecialchars($donnees['nom']);?></label>
						
						</div>
						<div>
							<label>Prénom : <?php echo htmlspecialchars($donnees['prenom']);?></label>
						
						</div>
						<div>
							<label>E-mail : <?php echo htmlspecialchars($donnees['email']);?></label>
							<input type="hidden" id="email" name="email" value="<?php echo $donnees['email'];?>" />
						</div>
						<div>
							<label>Niveau : </label>
							<input type="number" id="niveau" name="niveau" placeholder="<?php echo $donnees['niveau']; ?>" />
						</div>
						<div>
							<label>Promotion : <?php echo htmlspecialchars($donnees['promotion']);?></label>
						
						</div>
						<div class="bottom">
								<input type="submit" name="modifmb" value="Sauvegarder" />
								<a href="" rel="register"></a>
						</div>
						
					</form>
					<?php } ?>
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