<?php

/**
 * Created by PhpStorm.
 * User: antoinefrancois
 * Date: 15/02/2018
 * Time: 23:36
 */
class Posts
{

    public function addArticles()
    {
        include_once('../view/add.php');
        include_once('../model/Posts.php');
        session_start();
        bdd();


        if (isset($_POST['ok'])) {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = date("Y-m-d H:i:s");


            $req = bdd()->prepare("INSERT INTO post_author (title, description, creation_date) VALUES ('" . $title . "', '" . $description . "', '" . $date . "')");
            $req->execute(array(
                "title"         => $title,
                "description"   => $description,
                "creation_date" => $date,
            ));
            echo "<script type='text/javascript'>document.location.replace('blog.php');</script>";
        }


    }

    public function ShowArticles()
    {
        include_once('../view/blog.php');
        include_once('../model/Posts.php');
        session_start();
        bdd();

        $conn = bdd();

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $request = $conn->query("SELECT DISTINCT title, description, creation_date FROM post_author");

        return $request;
    }
}