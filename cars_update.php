<?php

use App\Controllers\CarsController;

require __DIR__ . '/vendor/autoload.php';

$controller = new CarsController();
echo $controller->updateCar();
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
            <p class="h3">Mise à jour d'une voiture</p>
            <form method="post" action="cars_update.php" name ="carUpdateForm">
                <label for="id">Id :</label>
                <input type="text" name="id">
                <br />
                <label for="band">Marque :</label>
                <input type="text" name="band">
                <br />
                <label for="model">Modèle :</label>
                <input type="text" name="model">
                <br />
                <label for="color">Couleur :</label>
                <input type="text" name="color">
                <br />
                <label for="nbrSlots">Nombre de place :</label>
                <input type="text" name="nbrSlots">
                <br />
                <input type="submit" value="Modifier la voiture">
            </form>
        </div>
    </body>
</html>