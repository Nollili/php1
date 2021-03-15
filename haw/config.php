<?php



$order = new mysqli('localhost', 'root', '', 'florist');

$newsletter = new mysqli('localhost', 'root', '', 'florist');


$order_result = mysqli_query($order,"set names 'utf8'");

$newsletter_result = mysqli_query($newsletter,"set names 'utf8'");


if ($order->connect_error) {
  die("Sikertelen csatlakozás: " . $order->connect_error);
}

if ($newsletter->connect_error) {
    die("Sikertelen csatlakozás: " . $newsletter->connect_error);
  }
?>