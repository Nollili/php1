<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    
    <link rel="stylesheet" href="contact.css">
    <title>CONTACT</title>
</head>
<body>
        <nav class="nav justify-content-center">
            <ul class="row main-row text-center">
            <div class="nav-item col-sm-3"><a href="index.php" class="nav-link text-dark">HOME</a></div>
            <div class="nav-item col-sm-3"><a href="about.php" class="nav-link text-dark">ABOUT</a></div>
            <div class="nav-item col-sm-3"><a href="product.php" class="nav-link text-dark">ORDER</a></div>
            <div class="nav-item col-sm-3"><a href="#" class="nav-link text-dark">CONTACT</a></div>
            </ul>
        </nav>
        <hr> 


        <div class="w-50 p-3 mx-auto text-center">
            <h2>Newsletter</h2>
            <form method="POST" class="form-group d-grid gap-2">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="email@address.com" required>
                <input type="text" name="comment" placeholder="Additional comments">
                <button type="submit" name="submit" class="btn btn-light">SEND</button>
            </form>
        </div>
       
        <?php 

    if (isset($_POST['submit'])) {

                $name = $_POST["name"];
                $email = $_POST["email"];
                $comment = $_POST["comment"];

                echo '

                    <div class="w-50 p-3 mx-auto">
                        Dear '.$name.' ,<br>
                        You signed up to our newsletter ( '.$email.' ). <br>
                        Your comments ('.$comment.') is sent to us.
                    </div>

                ';


        
    }

            
           


        



    ?>


</body>
</html>