<?php
session_start();
include_once("connexion_template.php");
include_once("connexion_function.php");

if (isset($_POST['ok'])) {

$email = $_POST['email'];
$password = $_POST['password'];

    while ($donnees = connexion()->fetch()) {
        if ($email === $donnees["email"] && $password === $donnees["password"]) {

            $_SESSION['email'] = $email;
            $_SESSION['id'] = $donnees["id"];

            echo "<script type='text/javascript'>document.location.replace('blog.php');</script>";
        }

    }

    echo "<script type='text/javascript'>document.location.replace('blog.php');</script>";

}
