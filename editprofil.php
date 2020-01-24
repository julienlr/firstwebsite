<?php
include("bdd/editprofil_bdd.php");
?><!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Modifer votre Profil</title>
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
					<h1>Mon profil</h1>
					<div>
						<label for="mailconnect">NOM</label>
						<input type="text" id="nom" name="nom" value="<?php echo $_SESSION['nom']; ?>" />
					</div>
					<div>
						<label for="mailconnect">PRENOM</label>
						<input type="text" id="prenom" name="prenom" value="<?php echo $_SESSION['prenom']; ?>" />
					</div>
					<div>
						<label for="nom">Mail : <?php echo $_SESSION['email']; ?> </label>
					</div>
					<div>
						<label for="promotion">Saisir votre promotion :</label>
					  	<input type="radio" value="L1" id="promotion" name="promotion" <?php if($_SESSION['promotion'] == 'L1'){ ?> checked <?php }  ?> /> L1
					    <input type="radio" value="L2" id="promotion" name="promotion" <?php if($_SESSION['promotion'] == 'L2'){ ?> checked <?php }  ?> /> L2
					    <input type="radio" value="L3" id="promotion" name="promotion" <?php if($_SESSION['promotion'] == 'L3'){ ?> checked <?php }  ?> /> L3
					    <input type="radio" value="M1" id="promotion" name="promotion" <?php if($_SESSION['promotion'] == 'M1'){ ?> checked <?php }  ?> /> M1
					    <input type="radio" value="M2" id="promotion" name="promotion" <?php if($_SESSION['promotion'] == 'M2'){ ?> checked <?php }  ?> /> M2
					</div>
					<div class="bottom">
							<input type="submit" name="formedit" value="Sauvegarder" />
							<a href="" class="linkform"></a>
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
