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

$order_sql = "SELECT * FROM orders ORDER BY name ASC";
        $order_result = $order->query($order_sql);
        $idx = 0;
        while ($array = $order_result->fetch_assoc()) {
            $user_data[$idx]['orderID'] = $array['orderID'];
            $user_data[$idx]['name'] = $array['name'];
            $user_data[$idx]['email'] = $array['email'];
            $user_data[$idx]['phone'] = $array['phone'];
            $user_data[$idx]['rose'] = $array['rose'];
            $user_data[$idx]['peony'] = $array['peony'];
            $user_data[$idx]['magnolia'] = $array['magnolia'];
            $user_data[$idx]['dahlia'] = $array['dahlia'];
            $idx++;
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
                    <td><b>Phone</b><td>
                    <td><b>rose</b><td>
                    <td><b>peony</b><td>
                    <td><b>magnolia</b><td>
                    <td><b>dahlia</b><td>
                    <tr>';
                    
        foreach($user_data as $key => $value){	
            echo '<tr>
                    <td>'.$value['name'].'<td>
                    <td>'.$value['email'].'<td>
                    <td>'.$value['phone'].'<td>
                    <td>'.$value['rose'].'<td>
                    <td>'.$value['peony'].'<td>
                    <td>'.$value['magnolia'].'<td>
                    <td>'.$value['dahlia'].'<td>
                    <tr>';	
            }
            echo'</table>
            </div>
            </div>
            </div>
            ';	

?>