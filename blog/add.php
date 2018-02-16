<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Antoine blog </title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <meta charset="utf-8">
</head>
<body>

<h2>Nouvel article</h2>

<div class="center-block col-md-4 col-md-offset-6">
    <form action="add.php" method="POST">
        <div class="form-group">
            <label for="title">Titre de l'article</label>
            <input type="text" name="title" class="form-control" placeholder="titre de l'article">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" rows="10" cols="50"></textarea>
        </div>

        <button class="btn btn-primary" type="submit" name="ok" value="Envoyer"> Envoyer</button>
    </form>
</div>
<br/>
<a href="blog.php">VISITEZ LE BLOG</a>


<?php
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
    $author_id = $_SESSION['id'];


    $req = $PDO->prepare("INSERT INTO post_author (title, description, creation_date, author_id) VALUES ('" . $title . "', '" . $description . "', '" . $date . "','" . $author_id . "')");
    $req->execute(array(
        "title"         => $title,
        "description"   => $description,
        "creation_date" => $date,
        "author_id"     => $author_id,
    ));
    echo "<script type='text/javascript'>document.location.replace('blog.php');</script>";
}


?>

</body>
</html>