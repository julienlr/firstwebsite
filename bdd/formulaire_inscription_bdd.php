<?php

session_start();
// Connexion à la base de données
include("bdd/identifiants.php");

if(isset($_POST['forminscription'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   $promotion = $_POST['promotion'];
   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $nomlength = strlen($nom);
      if($nomlength <= 255) {
	$prenomlength = strlen($prenom);
      	 if($prenomlength <= 255) {
            if($mail == $mail2) {
               if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                  $reqmail = $bdd->prepare("SELECT * FROM FC_LALOY_membre WHERE email = ?");
                  $reqmail->execute(array($mail));
                  $mailexist = $reqmail->rowCount();
                  if($mailexist == 0) {
                     if($mdp == $mdp2) {
                        $insertmbr = $bdd->prepare("INSERT INTO FC_LALOY_membre(nom, prenom, email, password, niveau, promotion) VALUES(?, ?, ?, ?, 1, ?)");
                        $insertmbr->execute(array($nom, $prenom, $mail, $mdp, $promotion));

                        $requser = $bdd->prepare("SELECT * FROM FC_LALOY_membre WHERE email = ? AND password = ?");
                        $requser->execute(array($mail, $mdp));
                        $userinfo = $requser->fetch();
                        $_SESSION['id'] = $userinfo['id_membre'];
                        $_SESSION['nom'] = $userinfo['nom'];
                        $_SESSION['prenom'] = $userinfo['prenom'];
                        $_SESSION['email'] = $userinfo['email'];
                        $_SESSION['niveau'] = $userinfo['niveau'];
                        $_SESSION['promotion'] = $userinfo['promotion'];
                        $_SESSION['success'] = 1;

                        header("Location: index.php");
                     } else {
                        $erreur = "Vos mots de passes ne correspondent pas !";
                     }
                  } else {
                     $erreur = "Adresse mail déjà utilisée !";
                  }
               } else {
                  $erreur = "Votre adresse mail n'est pas valide !";
               }
            } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
            }
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

