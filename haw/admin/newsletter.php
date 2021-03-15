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
    error_reporting(E_ALL ^ E_NOTICE);
    require('../../hazifeladat_VerebelyiNoemiLili/config.php');
    session_start();
?>

<?php
$newsletter_sql = "SELECT * FROM newsletter ORDER BY name ASC";
        $newsletter_result = $newsletter->query($newsletter_sql);
        $idy = 0;
        while ($array = $newsletter_result->fetch_assoc()) {
            $newsletter_data[$idy]['userID'] = $array['userID'];
            $newsletter_data[$idy]['name'] = $array['name'];
            $newsletter_data[$idy]['email'] = $array['email'];
            $newsletter_data[$idy]['user_comment'] = $array['user_comment'];
            $idy++;
        }
            echo'
            <div class="pt-5 container">
            <div class="row">
            <div class="col-sm-12">
            <h3 class="pb-5 text-center">Orders</h3> 
            <table class="table table-hover" width="75%">
                    <tr>
                    <td><b>Name</b><td>
                    <td><b>E-mail</b><td>
                    <td><b>Comment</b><td>
                    <tr>';
                    
        foreach($newsletter_data as $key => $value){	
            echo '<tr>
                    <td>'.$value['name'].'<td>
                    <td>'.$value['email'].'<td>
                    <td>'.$value['user_comment'].'<td>

                    <tr>';	
            }
            echo'</table>
            </div>
            </div>
            </div>
            ';	
?>
