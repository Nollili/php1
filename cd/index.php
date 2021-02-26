<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>CRUD</title>
</head>
<body>
    <?php require_once 'process.php'; ?>

    <?php  if (isset($_SESSION['message'])):   ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>

    </div>
    <?php endif ?>
    <?php 

        $mysqli = new mysqli('localhost', 'root', '', 'crud') or die (mysql_error($mysqli));
        $result = $mysqli->query("SELECT * FROM data") or die ($mysqli->error);
        #pre_r($result);
    ?>

    <div class="row table table-sm">
        <table class="table">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>Location</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>

    <?php 
        while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?> </td>
                <td><?php echo $row['location']; ?> </td>
                <td>
                    <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
    <?php endwhile; ?>
        </table>    
    </div>


    <?php 
        function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        }
        pre_r($result->fetch_assoc())
    ?>

    <div class="col-md-6 justify-content-center container">  
        <form action="process.php" method="POST" >

            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Your name" class="form-control">
            </div>

            <div class="form-group">
                <label for="location" class="form-label">Location:</label>
                <input type="text" name="location" value="<?php echo $location; ?>" placeholder="Enter your location" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary" >SAVE</button>
            </div>

        </form>
    </div>

</body>
</html>