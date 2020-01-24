<?php
session_start();
?><!DOCTYPE html>
<html>
	<head>
		<?php
		include("raccourcis/link_header.php");
		?>

		<title>Profil</title>
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
							<label>Prenom : <?php echo $_SESSION['prenom']; ?> </label>
						</div>
						<div>
							<label>Nom : <?php echo $_SESSION['nom']; ?> </label>
						</div>
						<div>
							<label>Mail : <?php echo $_SESSION['email']; ?> </label>
						</div>
						<div>
							<label>Promotion : <?php echo $_SESSION['promotion']; ?> </label>
						</div>

						<div class="bottom">
								<a href="editprofil.php" rel="register" class="linkform">
								<input type="button" value="Editer mon profil" /></a>
						</div>
				</div>

			</div>
		<?php
		include("raccourcis/footer.php");
		?>
		</div>

	</body>
</html>
