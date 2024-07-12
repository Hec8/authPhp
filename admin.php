<?php
session_start();
  if(isset($_POST['deco'])) {
    header('Location: connexion.php');
    echo ("Utlisateur ".$_SESSION['username']. ",vous avez été déconnecté");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Page admin</title>
</head>
<body>
    <div>
        <h2>Liste des utilisateurs connectés</h2>
    </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo($_SESSION['username']) ?></td>
      <td><button type="submit" name="deco" class="btn btn-danger" href="connexion.php">Déconnecter</button></td>
    </tr>
  </tbody>
</table>
</body>
</html>