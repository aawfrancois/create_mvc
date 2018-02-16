<!DOCTYPE html>
<html>
<head>
    <title>Antoine blog </title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
