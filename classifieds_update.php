<?php

use App\Controllers\ClassifiedsController;

require __DIR__ . '/vendor/autoload.php';

$controller = new ClassifiedsController();
echo $controller->updateClassified();
?>

<p>Mise à jour d'une annonce</p>
<form method="post" action="classifieds_update.php" name ="classifiedUpdateForm">
    <label for="id">Id :</label>
    <input type="text" name="id">
    <br />
    <label for="title">Titre :</label>
    <input type="text" name="title">
    <br />
    <label for="description">Description :</label>
    <input type="text" name="description">
    <br />
    <label for="price">Prix :</label>
    <input type="text" name="price">
    <br />
    <input type="submit" value="Modifier l'annonce">
</form>