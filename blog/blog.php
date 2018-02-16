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
    <meta charset="utf-8 sans">

</head>
<body>
<h1>Liste des articles</h1>
<div class="col-md-8">
    <!-- se connecter a la base -->
    <?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "guerre1995";
    $dbname = "blog";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch (PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
    }
    ?>

    <button value="ajouter un article"
            class="btn btn-primary pull-right"> <?php echo '<a href="add.php" >ajouter un article </a>'; ?>  </button>
    <button value="deconnexion"
            class="btn btn-danger pull-right"> <?php echo '<a href="logout.php" >deconnexion</a>'; ?>  </button>
    <br>

    <?php

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $request = $conn->query("SELECT title, description, creation_date FROM post_author");
    while ($donnees = $request->fetch()) {
        echo "</br>";
        echo '
           <div class="card">
 <div class="card-header">';
        echo "$donnees[title] ";
        echo '</div>
 <div class="card-body">
   <blockquote class="blockquote mb-0">
     <p>';
        echo "$donnees[description]";
        echo '</p><footer class="blockquote-footer">';
        echo "$donnees[creation_date]";
        echo '<cite title="Source Title"></cite></footer>
   </blockquote>
 </div>
</div>
           ';
    }
    ?>

</div>
</body>
</html>