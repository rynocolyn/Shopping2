<?php

include 'connection.php';


$item = $_POST['item'];
$qty = $_POST['qty'];
 
$sql =  ("INSERT INTO basket (item, qty) VALUES ('$item', '$qty')")  or die(mysql_error());

  echo "<h2>Thank you for your Comment!</h2>";

?>
