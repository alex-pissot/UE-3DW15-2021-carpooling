<?php
use App\Controllers\CarsController;
use App\Services\CarsService;

require __DIR__ . '/vendor/autoload.php';

$controller = new CarsController();
echo $controller->createCar();

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
            <p class="h3">Ajout d'une voiture</p>
            <form method="post" action="cars_create.php" name ="carCreateForm">
                <label for="brand">Marque :</label>
                <input type="text" name="brand">
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
                <input type="submit" value="Ajout d'une voiture">
            </form>
        </div>
    </body>
</html>