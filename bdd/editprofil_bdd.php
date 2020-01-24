<?php

session_start();
// Connexion à la base de données
include("bdd/identifiants.php");

if(isset($_POST['formedit'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $promotion = $_POST['promotion'];
   $mail = $_SESSION['email'];
   $id = $_SESSION['id'];
   if(!empty($_POST['nom']) AND !empty($_POST['prenom'])) {
      $nomlength = strlen($nom);
      if($nomlength <= 255) {
	     $prenomlength = strlen($prenom);
      	 if($prenomlength <= 255) {
            


                     
                        $updatembr = $bdd->prepare("UPDATE FC_LALOY_membre SET nom = ?, prenom = ?, promotion = ? WHERE id_membre = ?");
                        $updatembr->execute(array($nom, $prenom, $promotion, $id));

                        $requser = $bdd->prepare("SELECT * FROM FC_LALOY_membre WHERE id_membre = ?");
                        $requser->execute(array($id));
                        $userinfo = $requser->fetch();
                        $_SESSION['nom'] = $userinfo['nom'];
                        $_SESSION['prenom'] = $userinfo['prenom'];
                        $_SESSION['promotion'] = $userinfo['promotion'];
                        
                        

                        header("Location: profil.php");
                     
                  
            
	      } else {
         $erreur = "Votre prenom ne doit pas dépasser 255 caractères !";
         }
      } else {
         $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

?>

