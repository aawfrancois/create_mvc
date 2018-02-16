<?php
session_start();
include_once("add_template.php");
include_once("add_function.php");

if (isset($_POST['ok'])) {
    addArticles($_POST['title'], $_POST['description']);

    echo "<script type='text/javascript'>document.location.replace('blog.php');</script>";

}

