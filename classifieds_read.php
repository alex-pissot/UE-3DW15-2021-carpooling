<html>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</html>
<?php

use App\Controllers\ClassifiedsController;

require __DIR__ . '/vendor/autoload.php';

$controller = new ClassifiedsController();
echo "<div class='card crud-container'><p class='h3'>Affichage des annonces</p><br>" . $controller->getClassifieds() . "</div>";