<?php

session_start();
// Connexion à la base de données
include("bdd/identifiants.php");
// Récupération des 10 derniers messages
$reponse_publi = $bdd->query('SELECT m.nom nom, m.prenom prenom, p.message message, p.type_langage type_langage, p.id_publi id_publi FROM FC_LALOY_membre m INNER JOIN FC_LALOY_publication p ON p.id_membre=m.id_membre ORDER BY id_publi DESC');






?><!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Publications de programmes</title>
	</head>
	<body>


		<?php
		include("raccourcis/header.php");
		?>

		<div class="affichage">
			<div class="content">
				<div class="programme">
					<br/>
					<h1>Liste de toutes les publications :</h1>
					<div>
						<a href="publication.php">Retour !</a>
					</div>
				    <?php while ($donnees_publi = $reponse_publi->fetch())
					{ ?>
					<div>
						<strong><span>Par <?php echo htmlspecialchars($donnees_publi['nom']);?> <?php echo htmlspecialchars($donnees_publi['prenom']);?>, en <?php echo htmlspecialchars($donnees_publi['type_langage']);?></span></strong>

					<br/>
					<label> <br/> <?php echo htmlspecialchars($donnees_publi['message']);?></label>
					<br/>
					</div>
						
						<?php $reponse_comments = $bdd->query('SELECT m.nom nom, m.prenom prenom, c.commentaire commentaire, c.id_publi id_publi FROM FC_LALOY_membre m INNER JOIN FC_LALOY_comments c ON c.id_membre=m.id_membre WHERE id_publi='.$donnees_publi['id_publi'].' ORDER BY id_comments');
						
						while ($donnees_comments = $reponse_comments->fetch())
						{ ?>
							<div>
							<p>Commentaires de <?php echo htmlspecialchars($donnees_comments['nom']);?> <?php echo htmlspecialchars($donnees_comments['prenom']);?> :</p>
							<h2><?php echo htmlspecialchars($donnees_comments['commentaire']);?></h2>
	
							<br/>
							
							</div>
							
						<?php } 
						if(isset($_SESSION['id'])){ ?>
							<form method="POST" action="bdd/readcomment_bdd.php?id_publi=<?php echo $donnees_publi['id_publi'];?>">	
				    			<table style="border:0px; padding:0px; margin:0px;">
				    				<tr>
										<td>
					    					Postes-ton commentaire !
					    					<br/>
					    					<textarea  cols="40" rows="10" name="msg" placeholder="commentaire"></textarea>
										</td>
									</tr>
									<tr>
					       				<td>	
										<input type="submit" name="readcomment" value="Poster" />
				       	        		</td>
					 				</tr>
				    			</table>
							</form>
							<?php } 
				 			if(isset($erreur)) {
				    				echo '<font color="red">'.$erreur."</font>";
							}
							
						} ?>
							
					
				</div>

			</div>
			<?php
			include("raccourcis/footer.php");
			?>
		</div>

	</body>
</html>
<?php 

$reponse_publi->closeCursor();

?>
