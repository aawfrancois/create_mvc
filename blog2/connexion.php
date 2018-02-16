<?php
session_start();

if (isset($_POST['ok'])) {

    $servername = "127.0.0.1";
    $username = "root";
    $password = "guerre1995";
    $dbname = "blog";
    $email = $_POST['email'];
    $passwordUser = $_POST['passwordUser'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $res = $conn->query("SELECT id, email, password FROM author");

        echo 'connexion ok';
        while ($donnees = $res->fetch()) {
            if ($email === $donnees["email"] && $passwordUser === $donnees["password"]) {

                $_SESSION['email'] = $email;
                $_SESSION['id'] = $donnees["id"];

                echo "<script type='text/javascript'>document.location.replace('blog.php');</script>";
            }

        }
    } catch (PDOException $e) {

    }
}

include_once('connexion_template.php');
