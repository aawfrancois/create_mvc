<?php


function addArticles($title, $description)
{
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
    $date = date("Y-m-d H:i:s");

    $req = $PDO->prepare("INSERT INTO post_author (title, description, creation_date) VALUES ('" . $title . "', '" . $description . "', '" . $date . "')");
    $req->execute(array(
        "title"         => $title,
        "description"   => $description,
        "creation_date" => $date,
    ));
}
