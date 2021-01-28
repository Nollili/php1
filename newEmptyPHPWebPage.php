<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <h1>My First PHP Site</h1>
        <p>This HTML will get delivered as is</p>

        <?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>"; ?>
        <?php echo "<ul><li>You can use any HTML tags,</li><li>like this list.</li></ul>"; ?>

        <?php
        // I will always remember this
        echo "Hello, World!"; # My first PHP statement

        /* "I've never thought of PHP as more 
          than a simple tool to solve problems."
          - Rasmus Lerdorf */
        echo "\nRasmus is the creator of PHP!";
        ?>
        <br>
        <?php echo "She said \"hi\" to the dog."; ?>
        <br>
        <?php
        echo "1. Bake a cake";
        echo "\n2. Bake a bread";
        echo "\n3. Learn to have \"fun\"";
        ?>

        <?php
        $lahe = "hi";
        $biography = "\n Won't tell you anything!";
        $favorite_food = "\npancake " . "and " . "meat";
        ?>

        <br>
        <?php
        $name = "Lili";
        $language = "Japanese";
        echo "I'm " . $name . " and I speak " . $language;
        ?>

        <?php
        $noun = "car";
        $adjective = "silly";
        $verb = "run";
        echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";
        echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";
        ?>
        <br>
        <?php
        $movie = "The Hobbit";
        $movie = "The Matrix";
        $old_favorite = $movie;
        echo "I'm a fickle person, my favorite movie used to be $movie.";
        $movie = "Dunkirk";
        echo "\nBut now my favorite is $movie.";
        echo "\nBut I'll always have a special place in my heart for $old_favorite.";
        ?>
        <br>
        <?php
        echo "I'm going on a picnic!";
        $sentence = "\nI'm going on a picnic, and I'm taking apples";
        echo $sentence;

        $sentence .= ", bananas";
        echo $sentence;
        $sentence .= ", carrots";
        echo $sentence;
        ?>
        <br>
        <?php
        $very_bad_unclear_name = "15 chicken wings";
        $order = & $very_bad_unclear_name;
        $order .= ", 1 cheeseburger";
        $order .= ", 3 side salads";
        echo "\nYour order is: $very_bad_unclear_name.";
        ?>
        <br>
        <?php
        $age = 11;
        echo $age;
        echo "\n";
        $movie_rating = 3.2;
        echo $movie_rating;
        echo "\n";
        echo 8.2 + 3.8;
        ?>
        <br>
        <?php
        echo "1187.23 - 1089.98 = ";
        $last_month = 1187.23;
        $this_month = 1089.98;
        echo $last_month - $this_month;
        echo 8 ** 2;
        echo 82 % 6;
        ?>
        <br>
        <?php
        $num_languages = 4;
        $months = 11;
        $days = $months * 16;
        $days_per_language = $days / $num_languages;
        echo $days_per_language;
        ?>
        <br>
        <?php

        function praisePHP() {
            echo "PHP is a wonderful language!";
        }

        praisePHP();
        ?>
        <br>
        <?php

        function inflateEgo() {
            echo "You are kind and engaged.\n";
        }

        inflateEgo();
        inflateEgo();
        ?>
        <br>
        <?php

        function printStringReturnNumber() {
            echo "ERROR: Page not found!\n";
            return 404;
        }

        $my_num = printStringReturnNumber();
        echo $my_num;
        ?>
        <br>
        <?php

        function createVacuum() {
            echo "It doesn't actually matter if this function does anything as long as it returns NULL.";
        }

        echo createVacuum() * 10;
        ?>
        <br>
        <?php

        function increaseEnthusiasm($str_param) {
            return $str_param . "!";
        }

        function repeatThreeTimes($str_param) {
            return $str_param . $str_param . $str_param;
        }

        echo increaseEnthusiasm("oh");
        echo repeatThreeTimes("wow");
        echo increaseEnthusiasm(repeatThreeTimes("hai"));
        ?>
        <br>
        <?php

        function calculateArea($height, $width) {
            return $height * $width;
        }

        function calculateVolume($height, $width, $depth) {
            return $height * $width * $depth;
        }

        echo calculateArea(5, 10);
        echo "\n";
        echo calculateVolume(4, 11, 7);
        ?>
        <br> 
        <?php

        function calculateTip($total, $tip = 20) {
            return $total * (1 + $tip / 100);
        }

        echo calculateTip(100, 25);
        echo "\n";
        echo calculateTip(100);
        echo "\n";
        echo calculateTip(65, 15);
        ?>

        <br>
        <?php
        $string_one = "you have hair";
        $string_two = "toads are nice";
        $string_three = "pink is my favorite color";

        function convertToQuestion(&$str) {
            $str = "Do you think " . $str . "?\n";
        }

        convertToQuestion($string_one);
        convertToQuestion($string_two);
        convertToQuestion($string_three);
        echo $string_one;
        echo $string_two;
        echo $string_three;
        ?>

        <br>
        <?php
        $language = "PHP";
        $topic = "scope";

        function generateLessonName($concept) {
            global $language;
            return $language . ": " . $concept;
        }

        echo generateLessonName($topic);
        ?>
        <br>
        <?php
        $first = "Welcome to the magical world of built-in functions.";
        $second = 82137012983;
        echo gettype($first);
        echo gettype($second);
        var_dump($first);
        var_dump($second);
        ?>
        <br>
        <?php
        echo strrev(".pu ti peeK .taerg gniod er'uoY");
        echo "\n";
        echo strtolower("SOON, tHiS WILL Look NoRmAL.");
        echo "\n";
        echo str_repeat("\nThere's no place like home.\n", 3);
        ?>
        <br>
        <?php
        $essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";
        echo substr_count($essay_one, "really");
        ?>
        <br>
        <?php
        echo round(1298736.821763876);
        echo abs(127);
        ?>
        <br>
        <?php
        echo getrandmax();
        echo "\n";
        echo rand();
        echo "\n";
        echo rand(1, 52);
        ?>
        <br>
        <?php

        function convertToShout($str) {
            return strtoupper($str) . "!";
        }

        function tipGenerously($cost) {
            return ceil($cost * 1.2);
        }

        function calculateCircleArea($diameter) {
            return pi() * ($diameter / 2) ** 2;
        }

        echo convertToShout("woah there, buddy");
        echo "\n";
        echo convertToShout("i just don't know");
        echo "\n";
        echo tipGenerously(100.00); // 
        echo "\n";
        echo tipGenerously(982.27); // 
        echo "\n";
        echo calculateCircleArea(6);
        echo "\n";
        echo calculateCircleArea(29);
        ?>
        <br>
        
        <footer>
            <p>And this code is back in plain HTML</p>
        </footer>
    </body>
</html>
