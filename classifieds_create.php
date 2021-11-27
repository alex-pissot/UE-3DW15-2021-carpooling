<?php
use App\Controllers\ClassifiedsController;
use App\Services\UsersService;

require __DIR__ . '/vendor/autoload.php';

$controller = new ClassifiedsController();
echo $controller->createClassified();

?>

<p>Ajout d'une annonce</p>
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