<!DOCTYPE html>
<html>
<body>

<h1>SHOPPING BASKET</h1>

<p>List of goodies to get:</p>

<form action="php/addItem.php" method="post">
  <p>Item: <input type="text" name="item"></p>
  <p>Qty: <input type="number" min="1" max="99" step="0.5" value="0" name="qty"></p>
  <p><input type="submit" value="Submit"></p>
</form>

</body>

<?php
$con=mysqli_connect("localhost","root","","shopping");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM basket");

echo "<table border='1'>";

$i = 0;
while($row = $result->fetch_assoc())
{
    if ($i == 0) {
      $i++;
      echo "<tr>";
      foreach ($row as $key => $value) {
        echo "<th>" . $key . "</th>";
      }
      echo "</tr>";
    }
    echo "<tr>";
    foreach ($row as $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


</html>
