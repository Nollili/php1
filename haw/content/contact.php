<div class="col-sm-12">

    <div class="w-75 p-3 mx-auto text-center">
        <h2>Newsletter</h2>
        <form method="POST" class="form-group d-grid gap-2">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="email@address.com" required>
            <input type="text" name="comment" placeholder="comments (max. 255 char)">
            <button type="submit" name="submit" class="btn btn-light">SEND</button>
        </form>
    </div>
    
    <?php 

if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];


    $newsletter_sql = "INSERT INTO newsletter (name, email, user_comment) VALUES ('$name', '$email', '$comment')";


    $sql = "SELECT email FROM newsletter WHERE email = '$_POST[email]'";
    $result = $newsletter->query($sql);
      if ($result->num_rows > 0) {
              $siker = 1;
           echo '<script> alert("This e-mail address is already taken."); </script>';
           echo '<meta http-equiv="refresh" content="0;url=index.php?menu=about">';
           $_SESSION['name']= $_POST['name'];
           $_SESSION['email']= $_POST['email'];
           $_SESSION['comment']= $_POST['comment'];
      }


    if ($newsletter->query($newsletter_sql) === TRUE) {
        echo '
        <div class="w-75 p-3 mx-auto">
            Dear '.$name.' ,<br>
            You signed up to our newsletter ( '.$email.' ). <br>
            Your comments ('.$comment.') is sent to us.
        </div>
    ';
    }else {
        echo 'Hiba: '. $newsletter_sql .'<br>'. $newsletter->error;
    }

    $newsletter->close();


}
?>
</div>