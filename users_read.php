<html>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</html>
<?php

use App\Controllers\UsersController;

require __DIR__ . '/vendor/autoload.php';

$controller = new UsersController();
echo "<div class='card crud-container'><p class='h3'>Affichage des utilisateurs</p><br>" . $controller->getUsers() . "</div>";

?>