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

$sql="INSERT INTO grocery (month, year, food_bev, utensil, grocery_misc)
VALUES
(
'".$_SESSION['month']."',
'".$_SESSION['year']."',
'$_POST[food_bev]',
'$_POST[utensil]',
'$_POST[grocery_misc]'
)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$_SESSION['success']=1;
header('Location: expense.php');
mysqli_close($con);
?>
