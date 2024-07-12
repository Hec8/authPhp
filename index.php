<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Accueil</title>
</head>
<body>
    <?php
        session_start();
        echo ("Utilisateur ".$_SESSION['username']).",";
    ?>
    <br>
    <br>
    <h2>Bienvenu sur le site</h2>
</body>
</html>