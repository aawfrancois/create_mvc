<?php

function bdd(){
    $servername = "127.0.0.1";
    $username = "root";
    $password = "guerre1995";
    $dbname = "blog";

    try {
        $PDO = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo 'Connexion impossible';
    }
return $PDO;
}

