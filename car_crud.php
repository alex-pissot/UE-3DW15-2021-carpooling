<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Carpooling - Voitures</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet" >
    </head>
 
    <body>
        <div class="container includes">
        <?php
            include('cars_create.php');
            include('cars_read.php');
            include('cars_update.php');
            include('cars_delete.php');
        ?> 
        </div>
    </body>
</html>