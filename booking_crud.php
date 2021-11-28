<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Carpooling - Réservations</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet" >
    </head>
 
    <body>
        <div class="container includes">
        <?php
            include('bookings_create.php');
            include('bookings_read.php');
            include('bookings_update.php');
            include('bookings_delete.php');
        ?> 
        </div>
    </body>
</html>