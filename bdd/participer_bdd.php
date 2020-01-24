<?php

session_start();
// Connexion à la base de données
include("bdd/identifiants.php");


   if(isset($_POST['participevent'])) {
      
      if(!isset($_SESSION['id'])){ // si on n'est pas connecté
         $email = $_POST['mail'];
         $event = $_GET['id_event'];
         $nourriture = $_POST['nourriture'];
         $majeur = $_POST['majeur'];


         if(!empty($_POST['nourriture']) AND !empty($_POST['majeur']) AND !empty($_POST['mail'])) {

            $reqmail = $bdd->prepare("SELECT * FROM FC_LALOY_membre WHERE email = ?");
            $reqmail->execute(array($email));
            $mailexist = $reqmail->rowCount();
            if($mailexist == 0) {   // si on n'a pas de compte = PAS membre
            
            
				  $reqpart = $bdd->prepare("SELECT * FROM FC_LALOY_participation_event WHERE email = ?");
           		  $reqpart->execute(array($email));
            	  $partexist = $reqpart->rowCount();
            	  $reqpartid = $bdd->prepare("SELECT * FROM FC_LALOY_participation_event WHERE id_membre = ?");
           		  $reqpartid->execute(array($_SESSION['id']));
            	  $partidexist = $reqpartid->rowCount();
                  if($partexist == 0 AND $partidexist == 0){
                           
                                 $insertparti = $bdd->prepare("INSERT INTO FC_LALOY_participation_event(id_event, email, pers_nourriture, pers_majeur) VALUES(?, ?, ?, ?)");
                                 $insertparti->execute(array($event, $email, $nourriture, $majeur));

                                 header("Location: index.php");
                           
                              
                  } else {
                     $erreur = "Vous vous êtes déjà inscrits !";
                  }

            } else { // sinon on a un compte, donc on est membre mais pas connecté

               $userinfo = $reqmail->fetch();
               $id = $userinfo['id_membre'];

                  $reqpart = $bdd->prepare("SELECT * FROM FC_LALOY_participation_event WHERE email = ?");
           		  $reqpart->execute(array($email));
            	  $partexist = $reqpart->rowCount();
            	  $reqpartid = $bdd->prepare("SELECT * FROM FC_LALOY_participation_event WHERE id_membre = ?");
           		  $reqpartid->execute(array($_SESSION['id']));
            	  $partidexist = $reqpartid->rowCount();
                  if($partexist == 0 AND $partidexist == 0){
                        
                              $insertparti = $bdd->prepare("INSERT INTO FC_LALOY_participation_event(id_event, id_membre, pers_nourriture, pers_majeur) VALUES(?, ?, ?, ?)");
                              $insertparti->execute(array($event, $id, $nourriture, $majeur));

                              header("Location: index.php");
            
                           
               } else {
                  $erreur = "Vous vous êtes déjà inscrits !";
               }
            }

         } else {
            $erreur = "Tous les champs doivent être complétés !";
         }





      } else { // sinon on est connecté
         $id = $_SESSION['id'];
         $event = $_GET['id_event'];
         $nourriture = $_POST['nourriture'];
         $majeur = $_POST['majeur'];


         if(!empty($_POST['nourriture']) AND !empty($_POST['majeur'])) {


            	  $reqpart = $bdd->prepare("SELECT * FROM FC_LALOY_participation_event WHERE email = ?");
           		  $reqpart->execute(array($email));
            	  $partexist = $reqpart->rowCount();
            	  $reqpartid = $bdd->prepare("SELECT * FROM FC_LALOY_participation_event WHERE id_membre = ?");
           		  $reqpartid->execute(array($_SESSION['id']));
            	  $partidexist = $reqpartid->rowCount();
                  if($partexist == 0 AND $partidexist == 0){
                        
                           $insertparti = $bdd->prepare("INSERT INTO FC_LALOY_participation_event(id_event, id_membre, pers_nourriture, pers_majeur) VALUES(?, ?, ?, ?)");
                           $insertparti->execute(array($event, $id, $nourriture, $majeur));

                           header("Location: index.php");
         
                        
            } else {
               $erreur = "Vous vous êtes déjà inscrits !";
            }

         } else {
            $erreur = "Tous les champs doivent être complétés !";
         }

      }
      
   }

?>
