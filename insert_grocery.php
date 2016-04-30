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

$sql="INSERT INTO grocery_new (month_grocery, year_grocery, amount_grocery, item_grocery)
VALUES
(
'".$_SESSION['month']."',
'".$_SESSION['year']."',
'$_POST[amount_grocery]',
'$_POST[item_grocery]'
)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$_SESSION['success']=1;
header('Location: expense.php');
mysqli_close($con);
?>
