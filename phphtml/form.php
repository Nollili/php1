<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
    $_REQUEST:
    <?php print_r($_REQUEST);?>
    <br>
    $_GET:
    <?php print_r($_GET);?>
    <br>
    $_POST:
    <?php print_r($_POST);?>
    <form method="get">
        GET Form: <input type="text" name="get_name">
        <input type="submit" value="Submit GET">
    </form>
    <form method="post">
        POST Form: <input type="text" name="post_name">
        <input type="submit" value="Submit POST">
    </form>
    <a href="index.php">Reset</a>

</section>

<section>
    <form method="get">
    Country:
    <input type="text" name="country">
    <br>
    Language:
    <input type="text" name="language">
    <br>
    <input type="submit" value="Submit">
    </form>
    <br>
    <p>Your language is: <?=$_GET['language'];?></p>
    <p>Your country is: <?=$_GET['country'];?></p>
    <a href="index.php">Reset</a>

</section>


<section>
    <form method="post">
    Favorite Color:
    <input type="text" name="color">
    <br>
    Favorite Food:
    <input type="text" name="food">
    <br>
    <input type="submit" value="Submit">
    </form>
    <br>
    <p>Best food is: <?=$_POST['food'];?></p>
    <p>Best color is: <?=$_POST['color'];?></p>
    <a href="index.php">Reset</a>
</section>

<section>
    <form method="get" action="greet_user.php">
    First Name:
    <input type="text" name="first">
    <br>
    Last Name:
    <input type="text" name="last">
    <br>
    <input type="submit" value="Submit">
    </form>

    <a href="index.php">Reset</a>

</section>




</body>
</html>