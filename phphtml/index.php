<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>PHP and HTML</h1>
    <p>This is HTML</p>
<?php echo "<p>This is PHP</p>";?>

<?php 
    $about_me = [
    "name" => "Aisle Nevertell",
    "birth_year" => 1902,
    "favorite_food" => "cake"
    ];

    function calculateAge ($person_arr){
    $current_year = date("Y");
    $age = $current_year - $person_arr["birth_year"];
    return $age;
    }
?>
    <h2>Hello!</h2>
    <h2>About me:</h2>
<?php   
    echo "<h3>Hello! I'm {$about_me["name"]}!</h3>";
    echo "<p> I'm " . calculateAge($about_me). " years old! That's pretty cool, right?</p>";
    echo "<div>What more is there to say? I love {$about_me["favorite_food"]}, and that's pretty much it!</div>";
?>

<section>
<h3>Here is a form!</h3>
    <a href="form.php">
    <button>Check this out!</button>
    </a>    
</section>

</body>
</html>