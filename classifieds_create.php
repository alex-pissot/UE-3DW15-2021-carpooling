<?php
use App\Controllers\ClassifiedsController;
use App\Services\UsersService;

require __DIR__ . '/vendor/autoload.php';

$controller = new ClassifiedsController();
echo $controller->createClassified();

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
            <p class="h3">Ajout d'une annonce</p>
            <form method="post" action="classifieds_create.php" name ="classifiedCreateForm">
                <label for="title">Titre de l'annonce :</label>
                <input type="text" name="title">
                <br />
                <label for="description">Description :</label>
                <input type="text" name="description">
                <br />
                <label for="price">Prix :</label>
                <input type="text" name="price">
                <br />
                <input type="submit" value="Ajout d'une annonce">
            </form>
        </div>
    </body>
</html>