<?php

session_start();
// Connexion à la base de données
include("bdd/identifiants.php");

if(isset($_POST['readpubli'])) {
   $msg = $_POST['msg'];
   $langage = $_POST['langage'];
   $id = $_SESSION['id'];
   if(!empty($msg) AND !empty($langage)) {
      
	     
                     
                        $insertpubli = $bdd->prepare("INSERT INTO FC_LALOY_publication(id_membre, message, type_langage) VALUES(?, ?, ?)"); // rajouter NULL oui dans la base de donnée pour comments
                        $insertpubli->execute(array($id, $msg, $langage));
                     
                        header("Location: publication.php");
                
	      
      
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

?>
