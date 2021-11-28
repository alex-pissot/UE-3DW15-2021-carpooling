<html>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</html>
<?php

use App\Controllers\CarsController;

require __DIR__ . '/vendor/autoload.php';

$controller = new CarsController();
echo "<div class='card crud-container'><p class='h3'>Affichage des voitures</p><br>" . $controller->getCars() . "</div>";

?>
