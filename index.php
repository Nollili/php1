<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays & Loops</h1>

    <section>
        <h2>Ordered Arrays</h2>
        <?php
            $first_array = array("hello", 88, "my", -12361.11, "friend");
            echo count($first_array);
        ?>
        <br>
        <?php
            $with_function = array("PHP", "popcorn", 555.55);
            $with_short = ["PHP", "popcorn", 555.55];
        ?>
        <br>
        <?php
            $message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];
            $favorite_nums = [7, 201, 33, 88, 91];
            echo implode("!", $message);
            print_r($favorite_nums);
        ?>
        <br>
        <?php
            $round_one = ["X", "X", "first winner"];
            $round_two = ["second winner", "X", "X", "X"];
            $round_three = ["X", "X", "X", "X", "third winner"];
            $winners = [$round_one[2], $round_two[0], $round_three[4]];
            print_r($winners);
        ?>
        <br>
        <?php
            $change_me = [3, 6, 9];
            $change_me[] = "woohoo";
            $change_me[] = 77;
            $change_me[1] = "tadpole";
            print_r($change_me);
        ?>
        <br>
        <?php
            $stack = ["wild success", "failure", "struggle"];
            array_push($stack, "blocker","impediment");
            print_r($stack);
            array_pop($stack);
            array_pop($stack);
            array_pop($stack);
            array_pop($stack);
            print_r($stack);
        ?>
        <br>
        <?php
            $record_holders = [];
            array_unshift($record_holders, "Tim Montgomery", 
            "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");
            echo implode(", ", $record_holders) . "\n\n";
            array_shift($record_holders);
            echo implode(", ", $record_holders) . "\n\n";
            array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
            echo implode(", ", $record_holders) . "\n\n";
            array_shift($record_holders);
            echo implode(", ", $record_holders) . "\n\n";
            array_unshift($record_holders, "Usain Bolt");
            echo implode(", ", $record_holders) . "\n\n";
        ?>
        <br>
        <?php
            $treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];
            echo $treasure_hunt[3][4][2][0];
        ?>
         <br>
    </section>



    <section>
        <h2>ASSOCIATIVE ARRAYS</h2>
        <?php
            $php_array = array(
            "language" => "PHP", 
            "creator" => "Rasmus Lerdorf", 
            "year_created" => 1995, 
            "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]
            );

            $php_short = [
            "language" => "PHP", 
            "creator" => "Rasmus Lerdorf", 
            "year_created" => 1995, 
            "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]
            ];
        ?>
        <br>
        <?php
            $september_hits = ["The Sixth Sense" => 22896967,
            "Stigmata" => 18309666,
            "Blue Streak" => 19208806,
            "Double Jeopardy" => 23162542];
            echo implode(", ", $september_hits);
            print_r($september_hits);
        ?>
        <br>
        <?php
            $my_car = [
                "oil" => "black and clumpy",
                "brakes" => "new",
                "tires" => "old with worn treads",
                "filth" => "bird droppings", 
                "wiper fluid" => "full", 
                "headlights" => "bright"
            ];
            print_r($my_car);
            $my_car["oil"] = "new and premium";
            $my_car["tires"] = "new with deep treads";
            unset ($my_car["filth"]);
            print_r($my_car);
        ?>
        <br>
        <?php
            $hybrid_array = ["cat", "dog", 9, 18.2];
            $hybrid_array[8] = "five more";
            print_r($hybrid_array);
            array_push($hybrid_array, rand());
            echo $hybrid_array[9];
        ?>
        <br>
        <?php
            $giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];
            $impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];
            $rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];

            $potluck = $giraffe_foods + $impala_foods;
            print_r($potluck);
            $rat_impala = $rat_foods + $impala_foods;
            print_r($rat_impala);
            $everybody =  $giraffe_foods + $impala_foods + $rat_foods;
            print_r($everybody);
        ?>
        <br>
        <?php
            $doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];
            $bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];

            function createMeme ($meme) 
            {
            $meme["top_text"] = "Much PHP";
            $meme["bottom_text"] = "Very programming. Wow.";
            return $meme;
            }  
            print_r($doge_meme);
            $php_doge = createMeme($doge_meme);
            print_r($php_doge);
            function fixMeme (&$meme) 
            {
            $meme["top_text"] = "I can haz";
            $meme["bottom_text"] = "PHP, plz?";
            return $meme;
            } 
            print_r($bad_meme);
            fixMeme ($bad_meme);
            print_r($bad_meme);
        ?>
        
    </section>

</body>
</html>