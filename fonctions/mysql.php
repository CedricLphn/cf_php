<?php

function connexion_bdd() {
    try{
        $host = "localhost";
        $nombdd = "comptabilite";
        $utilisateur = "root";
        $mdp = "root"; 
        $port = 8889;

        $bdd = new PDO(
            "mysql:host=$host;port=$port;dbname=$nombdd",
            $utilisateur,
            $mdp,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        return $bdd;
    }
    catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

?>