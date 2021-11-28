<?php

use App\Controllers\ClassifiedsController;

require __DIR__ . '/vendor/autoload.php';

$controller = new ClassifiedsController();
echo $controller->deleteClassified();
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
            <p class="h3">Supression d'une annonce</p>
            <form method="post" action="classifieds_delete.php" name ="classifiedDeleteForm">
                <label for="id">Id :</label>
                <input type="text" name="id">
                <br />
                <input type="submit" value="Supprimer une annonce">
            </form>
        </div>
    </body>
</html>