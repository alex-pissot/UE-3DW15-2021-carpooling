<?php

use App\Controllers\UsersController;

require __DIR__ . '/vendor/autoload.php';

$controller = new UsersController();
echo $controller->deleteUser();
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Carpooling - Utilisateurs</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet" >
    </head>

    <body>
        <div class="card crud-container">
            <p class="h3">Supression d'un utilisateur</p>
            <form method="post" action="users_delete.php" name ="userDeleteForm">
                <label for="id">Id :</label>
                <input type="text" name="id">
                <br />
                <input type="submit" value="Supprimer un utilisateur">
            </form>
        </div>
    </body>
</html>