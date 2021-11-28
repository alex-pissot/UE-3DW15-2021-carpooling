<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Carpooling - Utilisateurs</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet" >
    </head>
 
    <body>
        <div class="container includes">
        <?php
            include('users_create.php');
            include('users_read.php');
            include('users_update.php');
            include('users_delete.php');
        ?> 
        </div>
    </body>
</html>