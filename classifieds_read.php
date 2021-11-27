<?php

use App\Controllers\ClassifiedsController;

require __DIR__ . '/vendor/autoload.php';

$controller = new ClassifiedsController();
echo $controller->getClassifieds();