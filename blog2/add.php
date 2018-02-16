<?php
session_start();

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

if (isset($_POST['ok'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = date("Y-m-d H:i:s");


    $req = $PDO->prepare("INSERT INTO post_author (title, description, creation_date) VALUES ('" . $title . "', '" . $description . "', '" . $date . "')");
    $req->execute(array(
        "title"         => $title,
        "description"   => $description,
        "creation_date" => $date,
    ));
    echo "<script type='text/javascript'>document.location.replace('blog.php');</script>";
}

include_once('add_template.php');
