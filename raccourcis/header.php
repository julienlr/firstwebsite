

<div class="contenair_header">
			<!-- header -->
			<div class="header">
				<div class="menuPC">
				<!-- Menu PC -->
					<button class="titre">A.S.I.M.O.V</button>
					<div class="menuPC-content">
					<strong><a href="index.php">Accueil</a></strong>
					<strong><a href="event.php">Evènements</a></strong>
    					<strong><a href="eventpasse.php">Evènements ultérieurs</a></strong>
    					<strong><a href="news.php">News</a></strong>
					<strong><a href="publication.php">Programmes publiés par les étudiants</a></strong>
    					<strong><a href="avantage.php">La caféteria</a></strong>
    					<strong><a href="contact.php">Nous trouver</a></strong>

    				</div>
				</div>
			<?php	if(isset($_SESSION['id']) AND $_SESSION['niveau'] == 3){	?>
					<a href="gererniveau.php" class="text_menu">Modifier Niveau</a>
					<a href="createvent.php" class="text_menu">Créer Event</a>
					<a href="readpubli.php" class ="text_menu">Publies-ton programme</a>
					<a href="profil.php" class="text_menu">Profil</a>	
					<a href="bdd/deconnexion.php" class="text_menu">Déconnexion</a>
			<?php	}else if(isset($_SESSION['id']) AND $_SESSION['niveau'] == 2){	?>
					<a href="createvent.php" class="text_menu">Créer Event</a>
					<a href="readpubli.php" class ="text_menu">Publies-ton programme</a>	
					<a href="profil.php" class="text_menu">Profil</a>
					<a href="bdd/deconnexion.php" class="text_menu">Déconnexion</a>
			<?php	}else if(isset($_SESSION['id'])){	?>
					<a href="readpubli.php" class ="text_menu">Publies-ton programme</a>	
					<a href="profil.php" class="text_menu">Profil</a>
					<a href="bdd/deconnexion.php" class="text_menu">Déconnexion</a>
			<?php	}else{	?>

					<a href="formulaire_inscription.php" class="text_menu">S'inscrire</a>
					<a href="connexion.php" class="text_menu">Connexion</a>
			<?php	}	?>


				<!-- Menu Portable -->
				<div class="menuPort">
					<div  class="button">&equiv;</div>
					<div class="sous_menu">
				<?php	if(isset($_SESSION['id']) AND $_SESSION['niveau'] == 3){	?>
						<a href="index.php" class="text_menuPort">Accueil A.S.I.M.O.V</a>
						<a href="gererniveau.php" class="text_menuPort">Modifier Niveau</a>
						<a href="createvent.php" class="text_menuPort">Créer Event</a>
						<a href="event.php" class="text_menuPort">Evènements</a>
						<a href="news.php" class="text_menuPort">News</a>
    					<a href="eventpasse.php" class="text_menuPort">Evènements ultérieurs</a>
						<a href="readpubli.php" class="text_menuPort">Publier votre Programme</a>
						<a href="publication.php" class="text_menuPort">Programmes publiés par les étudiants</a>
						<a href="avantage.php" class="text_menuPort">La cafétéria</a>
						<a href="contact.php" class="text_menuPort">Nous trouver</a>
						<a href="profil.php" class="text_menuPort">Profil</a>
						<a href="bdd/deconnexion.php" class="text_menuPort">Déconnexion</a>
				<?php	} else if(isset($_SESSION['id']) AND $_SESSION['niveau'] == 2){	?>
						<a href="index.php" class="text_menuPort">Accueil A.S.I.M.O.V</a>
						<a href="createvent.php" class="text_menuPort">Créer Event</a>
						<a href="event.php" class="text_menuPort">Evènements</a>
						<a href="news.php" class="text_menuPort">News</a>
    						<a href="eventpasse.php" class="text_menuPort">Evènements ultérieurs</a>
						<a href="readpubli.php" class="text_menuPort">Publier votre Programme</a>
						<a href="publication.php" class="text_menuPort">Programmes publiés par les étudiants</a>
						<a href="avantage.php" class="text_menuPort">La cafétéria</a>
						<a href="contact.php" class="text_menuPort">Nous trouver</a>
						<a href="profil.php" class="text_menuPort">Profil</a>
						<a href="bdd/deconnexion.php" class="text_menuPort">Déconnexion</a>
				<?php	} else if(isset($_SESSION['id'])){	?>
						<a href="index.php" class="text_menuPort">Accueil A.S.I.M.O.V</a>
						<a href="event.php" class="text_menuPort">Evènements</a>
						<a href="news.php" class="text_menuPort">News</a>
    						<a href="eventpasse.php" class="text_menuPort">Evènements ultérieurs</a>
						<a href="readpubli.php" class="text_menuPort">Publier votre Programme</a>
						<a href="publication.php" class="text_menuPort">Programmes publiés par les étudiants</a>
						<a href="avantage.php" class="text_menuPort">La cafétéria</a>
						<a href="contact.php" class="text_menuPort">Nous trouver</a>
						<a href="profil.php" class="text_menuPort">Profil</a>
						<a href="bdd/deconnexion.php" class="text_menuPort">Déconnexion</a>

				<?php	}else{	?>
						<a href="index.php" class="text_menuPort">Accueil A.S.I.M.O.V</a>
						<a href="event.php" class="text_menuPort">Evènements</a>
						<a href="eventpasse.php" class="text_menuPort">Evènements ultérieurs</a>
						<a href="news.php" class="text_menuPort">News</a>
						<a href="publication.php" class="text_menuPort">Programmes publiés par les étudiants</a>
						<a href="avantage.php" class="text_menuPort">La cafétéria</a>
						<a href="contact.php" class="text_menuPort">Nous trouver</a>
						<a href="formulaire_inscription.php" class="text_menuPort">S'inscrire</a>
						<a href="connexion.php" class="text_menuPort">Connexion</a>
				<?php	}	?>
				
					</div>
				</div>
			

			</div>
</div>
