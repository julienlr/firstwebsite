<?php

session_start();
// Connexion à la base de données
include("bdd/identifiants.php");

// Récupération des évènement classé par id_event donc par date de création
$reponse = $bdd->query('SELECT m.nom nom, m.prenom prenom, e.id_event id_event, e.nom_event nom_event, e.date_event date_event, e.nb_place nb_place, e.prix_membre prix_membre, e.prix_not_membre prix_not_membre FROM FC_LALOY_membre m INNER JOIN FC_LALOY_event e ON e.id_membre=m.id_membre ORDER BY id_event');


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
?><!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Liste des évènements</title>
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
						<h1>Liste des évènements :</h1>
						<?php while ($donnees = $reponse->fetch())
					{ 
						// permet d'avoir le nombre de place restante
						$reqplace = $bdd->prepare("SELECT * FROM FC_LALOY_participation_event WHERE id_event = ?");
						$reqplace->execute(array($donnees['id_event']));
			            $placeprise = $reqplace->rowCount();
						$nb_place_restante = $donnees['nb_place']-$placeprise;

					?>
				    
						<hr/>
						<div>
							<label>Auteur : <?php echo htmlspecialchars($donnees['nom']);?> <?php echo htmlspecialchars($donnees['prenom']);?></label>
						
						</div>
						<div>
							<label>Nom de l'évènement : <?php echo htmlspecialchars($donnees['nom_event']);?></label>
						
						</div>
						<div>
							<label>Date de l'évènement : <?php echo htmlspecialchars($donnees['date_event']);?></label>
						
						</div>
						<div>
							<label>Prix membre : <?php echo htmlspecialchars($donnees['prix_membre']);?> €</label>
						
						</div>
						<div>
							<label>Prix non membre : <?php echo htmlspecialchars($donnees['prix_not_membre']);?> €</label>
						
						</div>
						<div>
							<label>Nombre place restante : <?php echo $nb_place_restante;?></label>
						
						</div>
						<div>
							<a href="participer.php?id_event=<?php echo $donnees['id_event']; ?>">Pour participer !</a>
						</div>					

					</form>
					<br/>

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
