<?php

    $server = "info.univ-lemans.fr"; // info.univ-lemans.fr
    $schema = "l2info"; // l2info

    $bdd = new PDO('mysql:host='.$server.';dbname='.$schema.';charset=utf8', 'l2infoetu', 'webdyn72'); // l2infoetu : webdyn72
    include_once('bdd/cookie.php');

?>
