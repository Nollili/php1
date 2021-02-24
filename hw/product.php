<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    
    <link rel="stylesheet" href="product.css">
    <title>PRODUCT</title>
</head>
<body>
    <nav class="nav justify-content-center">
            <ul class="row main-row text-center">
            <div class="nav-item col-sm-3"><a href="index.php" class="nav-link text-dark">HOME</a></div>
            <div class="nav-item col-sm-3"><a href="about.php" class="nav-link text-dark">ABOUT</a></div>
            <div class="nav-item col-sm-3"><a href="#" class="nav-link text-dark">ORDER</a></div>
            <div class="nav-item col-sm-3"><a href="contact.php" class="nav-link text-dark">CONTACT</a></div>
            </ul>
    </nav>
        <hr> 

        <h2 class="text-center">Order a bouquet here:</h2>

    <div class="w-50 p-3 mx-auto">
        <form method="POST" >
            <form-group class="input-group">
                <div class="input-group mb-2">
                    <label for="name">Full Name</label>
                    <input method="POST" type="text" name="name" placeholder="Full Name" required>
                </div>

                <div class="input-group mb-2">
                    <label for="email">Email Address</label>
                    <input method="POST" type="email" name="email" placeholder="email@address.com" name="email" required>
                </div>

                <div class="input-group mb-2">
                    <label for="phone">Phone Number</label>
                    <input method="POST" type="tel" name="phone" placeholder="+36/30-684-2673" name="phone" required>
                </div>

                <div class="input-group mb-2">
                    <label for="password1">Password</label>
                    <input method="POST" type="password" name="password1" placeholder="Password (Min. 8 char)" required >
                </div>
            
                <div class="input-group mb-2">
                    <label for="password2">Confirm Password</label>
                    <input method="POST" type="password" name="password2" placeholder="Confirm password" name="password" required >
                </div>
                <br>
                <h3>Choose flower types for the bouquet: </h3> <br>
                <div class="flower-group w-75 p-3 mx-auto">
                    <div class="rose">
                        <label for="rose">Rose</label>
                        <input type="number" name="rose" min='1' placeholder='1'><br>
                    </div>
                    <div class="peony">
                        <label for="peony">Peony</label>
                        <input type="number" name="peony" min='1' placeholder='1'><br>
                    </div>
                    <div class="magnolia">
                        <label for="magnolia">Magnolia</label>
                        <input type="number" name="magnolia" min='1' placeholder='1'><br>
                    </div>
                    <div class="dahlia">
                        <label for="dahlia">Dahlia</label>
                        <input type="number" name="dahlia" min='1' placeholder='1'><br>
                    </div>
                </div>
                <button type="submit" class="btn btn-light" name="submit">Order</button>

            </div>
        </form>
    </div>

    <?php 

    if (isset($_POST['submit'])) {

        $success = true;
        if($_POST['password1'] != $_POST['password2']){
            $success = false;
            echo '<script>alert("Passwords must match!")</script>';

        }
        if($success = true){

            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $password1 = $_POST["password1"];
            $password2 = $_POST["password2"];
            $rose = $_POST["rose"];
            $peony = $_POST["peony"];
            $magnolia = $_POST["magnolia"];
            $dahlia = $_POST["dahlia"];
            $flowersum = $_POST["rose"] +  $_POST["peony"] + $_POST["magnolia"] +  $_POST["dahlia"];

            echo '

            <div class="w-50 p-3 mx-auto">
                Dear '.$name.' ,<br>
                You ordered '.$flowersum.' flowers. <br>
                If your bouquet is ready, we will send you an email to '.$email.' and call you ('.$phone.').
            </div>
            
        
            ';



        }


    }
    ?>
    



</body>
</html>