<?php

use App\Controllers\CarsController;

require __DIR__ . '/vendor/autoload.php';

$controller = new CarsController();
echo $controller->deleteCar();
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
            <p class="h3">Supression d'une voiture</p>
            <form method="post" action="cars_delete.php" name ="carDeleteForm">
                <label for="id">Id :</label>
                <input type="text" name="id">
                <br />
                <input type="submit" value="Supprimer une voiture">
            </form>
        </div>
    </body>
</html>