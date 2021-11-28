<?php

use App\Controllers\UsersController;
use App\Services\CarsService;

require __DIR__ . '/vendor/autoload.php';

$controller = new UsersController();
echo $controller->createUser();

$carsService = new CarsService();
$cars = $carsService->getCars();
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
            <p class="h3">Création d'un utilisateur</p>
            <form method="post" action="users_create.php" name ="userCreateForm">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname">
                <br />
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname">
                <br />
                <label for="email">Email :</label>
                <input type="text" name="email">
                <br />
                <label for="birthday">Date d'anniversaire au format dd-mm-yyyy :</label>
                <input type="text" name="birthday">
                <br />
                <label for="cars">Voiture(s) :</label>
                <?php foreach ($cars as $car): ?>
                    <?php $carName = $car->getBrand() . ' ' . $car->getModel() . ' ' . $car->getColor(); ?>
                    <input type="checkbox" name="cars[]" value="<?php echo $car->getId(); ?>"><?php echo $carName; ?>
                    <br />
                <?php endforeach; ?>
                <br />
                <input type="submit" value="Créer un utilisateur">
            </form>
        </div>
    </body>
</html>