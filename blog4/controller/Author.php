<?php


class Author
{


    public function connexion()
    {


        include_once('../view/connexion.php');
        include_once('../model/Author.php');
        session_start();
        bdd();

        $res = bdd()->query("SELECT id, email, password FROM author");

        $email = $_POST['email'];
        $passwordUser = $_POST['password'];

        while ($donnees = $res->fetch()) {
            if ($email === $donnees["email"] && $passwordUser === $donnees["password"]) {

                $_SESSION['email'] = $email;
                $_SESSION['id'] = $donnees["id"];

                echo "<script type='text/javascript'>document.location.replace('blog.php');</script>";
            }

        }


    }



    public function deconnexion()
    {


        session_start();

        session_destroy();

        include_once('../view/deconnexion.php');
    }


}