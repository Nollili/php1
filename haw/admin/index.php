<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    
        <link rel="stylesheet" href="stylesheet.css">
        <title>The Florist</title>
    </head>

<?php
    error_reporting(E_ALL ^ E_WARNING); 
    require('../../hazifeladat_VerebelyiNoemiLili/config.php');
    session_start();
?>

<body>
    <nav class="nav justify-content-center">
        <ul class="row main-row text-center">
        <div class="nav-item col-sm-4"><a href="index.php" class="nav-link text-dark">HOME</a></div>
        <div class="nav-item col-sm-4"><a href="?page=orders" class="nav-link text-dark">Orders</a></div>
        <div class="nav-item col-sm-4"><a href="?page=newsletter" class="nav-link text-dark">Newsletter Sub.</a></div>
        </ul>
    </nav>

    <?php    
        if($_GET['page'] == 'orders'){

            include('orders.php');	
    }

    if($_GET['page'] == 'newsletter'){

        include('newsletter.php');	
}
?>
    




</body>
</html>