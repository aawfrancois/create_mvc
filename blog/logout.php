<?php
session_start();
session_destroy()
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">

    <title>Antoine blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-6">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title col-sm-offset-4">Bye Bye</h3>
                </div>
            </div>
            <button value="se reconnecter" class="btn btn-primary pull-right"> <?php  echo'<a href="connexion.php" >se reconnecter</a>'; ?>  </button>
        </div>
    </div>
</div>



</body>
</html>