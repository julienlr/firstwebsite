<?php
if(!isset($_SESSION['id']) AND isset($_COOKIE['email'],$_COOKIE['mdp']) AND !empty($_COOKIE['email'])AND !empty($_COOKIE['mdp'])){

	$requser = $bdd->prepare("SELECT * FROM membre WHERE email = ? AND password = ?");
	$requser->execute(array($_COOKIE['email'], $_COOKIE['mdp']));
    $userexist = $requser->rowCount();
    if($userexist == 1) {
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id_membre'];
        $_SESSION['nom'] = $userinfo['nom'];
	    $_SESSION['prenom'] = $userinfo['prenom'];
        $_SESSION['email'] = $userinfo['email'];
	    $_SESSION['niveau'] = $userinfo['niveau'];
	    $_SESSION['promotion'] = $userinfo['promotion'];
	    $_SESSION['success'] = 1;
    }
}

?>