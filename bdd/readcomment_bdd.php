<?php

session_start();
// Connexion à la base de données
include("identifiants.php");

if(isset($_POST['readcomment'])) {
   
   $msg = $_POST['msg'];
   $id = $_SESSION['id'];
   $id_publi = $_GET['id_publi'];

   if(!empty($msg)) {
      
	     
                     
                        $insertcomments = $bdd->prepare("INSERT INTO FC_LALOY_comments(id_publi, id_membre, commentaire) VALUES(?,?,?)");
                        $insertcomments->execute(array($id_publi, $id, $msg));
                     
                        header("Location: ../publication.php");
            
      
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

?>
