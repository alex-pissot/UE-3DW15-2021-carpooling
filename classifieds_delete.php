<?php

use App\Controllers\ClassifiedsController;

require __DIR__ . '/vendor/autoload.php';

$controller = new ClassifiedsController();
echo $controller->deleteClassified();
?>

<p>Supression d'une annonce</p>
<form method="post" action="classifieds_delete.php" name ="classifiedDeleteForm">
    <label for="id">Id :</label>
    <input type="text" name="id">
    <br />
    <input type="submit" value="Supprimer une annonce">
</form>