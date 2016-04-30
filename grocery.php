<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","lapaks","pattake","lapaks");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO expense (month, year, item, sub_item, amount)
VALUES
('".$_SESSION['month']."','".$_SESSION['year']."','grocery','food_bev', '$_POST[amount_food]'),
('".$_SESSION['month']."','".$_SESSION['year']."','grocery','utensil', '$_POST[amount_utensil]'),
('".$_SESSION['month']."','".$_SESSION['year']."','grocery','grocery_misc', '$_POST[amount_misc]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$_SESSION['success']=1;
header('Location: expense.php');
mysqli_close($con);
?>
