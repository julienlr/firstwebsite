<?php
session_start();

include("identifiants.php");

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM FC_LALOY_membre WHERE email = ? AND password = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         if(isset($_POST['remember'])){
            setcookie('email','$mailconnect',time()+365*24-3600,null,null,false,true);
            setcookie('mdp','$mdpconnect',time()+365*24-3600,null,null,false,true);
         }
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
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
