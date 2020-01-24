<?php

session_start();
// Connexion à la base de données
include("identifiants.php");
echo $niveau;
echo $email;
if(isset($_POST['modifmb'])) {
   
   $niveau = $_POST['niveau'];
   $email = $_POST['email'];


           

	   if($niveau >= 1 AND $niveau <= 3) {
	      
	    
				$insertmodif = $bdd->prepare("UPDATE FC_LALOY_membre SET niveau = ? WHERE email = ?");
				$insertmodif->execute(array($niveau, $email));

				/*
				Rajouter un affichage disant qu'il y a eu le succès de la commande
				*/

				header("Location: ../gererniveau.php");
			     
	   } else {
	      $erreur = "Le niveau ne peut pas être inférieur à 1 ou supérieur à 3 !";
	   }

}
echo coucou1;

?>