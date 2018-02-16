<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog antoine</title>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" charset="utf-8"></script> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Connexion
        </div>
        <div class="card-block">
            <br>
            <form action="connexion.php" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" placeholder="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passwordUser" name="passwordUser"
                               placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" value="ok" name="ok">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php
    // && !empty($_POST['passwordUser']) && !empty($_POST['usernameUser'])

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
    ?>

</div>
</body>
</html>