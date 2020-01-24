<?php

session_start();
// Connexion à la base de données
include("bdd/identifiants.php");

if(isset($_POST['creerevent'])) {
   $nom_ev = htmlspecialchars($_POST['nom_ev']);
   $date_ev = $_POST['date_ev'];
   $place_ev = $_POST['place_ev'];
   $prix_ev = $_POST['prix_ev'];
   $prix_nm_ev = $_POST['prix_nm_ev'];
   $id = $_SESSION['id'];
   
   $datetime = date("Y-m-d H:i:s");          
   echo $date_ev;
   echo $datetime;
   if(!empty($_POST['nom_ev']) AND !empty($_POST['date_ev']) AND !empty($_POST['place_ev']) AND !empty($_POST['prix_ev']) AND !empty($_POST['prix_nm_ev'])) {
      $nom_ev_length = strlen($nom_ev);
      if($nom_ev_length <= 255) {
      
            if($date_ev > $datetime) {
               
                     if($prix_ev < $prix_nm_ev) {
                        $insertevent = $bdd->prepare("INSERT INTO FC_LALOY_event(id_membre, nom_event, date_event, nb_place, prix_membre, prix_not_membre) VALUES(?, ?, ?, ?, ?, ?)");
                        $insertevent->execute(array($id, $nom_ev, $date_ev, $place_ev, $prix_ev, $prix_nm_ev));

                        /*
                        Rajouter un affichage disant qu'il y a eu le succès de la création de l'évènement
                        */

                        header("Location: index.php");
                     } else {
                        $erreur = "Le prix pour les membres doit être moins élevé que pour ceux qui ne sont pas membre !";
                     }
            } else {
            $erreur = "Date déjà passé !";
            }
      } else {
         $erreur = "Le nom de l'évènement ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

?>
