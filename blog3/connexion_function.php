<?php


function connexion()
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "guerre1995";
    $dbname = "blog";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $res = $conn->query("SELECT id, email, password FROM author");

        echo 'connexion ok';
        return $res;

    } catch (PDOException $e) {

    }


}


