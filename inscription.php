<?php
session_start();
$database = new PDO('mysql:host=localhost;dbname=utilisateurs', 'root', ''); 
    if(isset($_POST['envoi'])) {
        if(!empty($_POST['username']) AND ($_POST['password'])) {
            $username = htmlspecialchars($_POST['username']);
            $password = $_POST['password'];
            $insertUser = $database->prepare('INSERT INTO users(username, password) VALUES (?, ?)');
            $insertUser->execute(array($username, $password));

            $recupUser = $database->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
            $recupUser->execute(array($username, $password));
            
            if($recupUser->rowCount()>0) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_SESSION['id'] = $recupUser->fetch()['id'];
            }
            
        } else {
            echo "Veuillez renseigner tous les champs !";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Inscription</title>
</head>
<body>

    <div class="container" bg-primary>
        <form action="" method="post" align="center">
            <h1>Inscription</h1>
            <input type="text" name="username" placeholder="username...">
            <br>
            <input type="password" name="password" placeholder="password...">
            <br><br>
            <button type="submit" class="btn btn-primary" name="envoi">Envoyer</button>
        </form>
    </div>
</body>
</html>