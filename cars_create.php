<?php
use App\Controllers\CarsController;
use App\Services\CarsService;

require __DIR__ . '/vendor/autoload.php';

$controller = new CarsController();
echo $controller->createCar();

?>

<p>Ajout d'une voiture</p>
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