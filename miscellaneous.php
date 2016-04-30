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
('".$_SESSION['month']."','".$_SESSION['year']."','miscellaneous','groupon', '$_POST[groupon]'),
('".$_SESSION['month']."','".$_SESSION['year']."','miscellaneous','goodwill', '$_POST[goodwill]'),
('".$_SESSION['month']."','".$_SESSION['year']."','miscellaneous','medication', '$_POST[medication]'),
('".$_SESSION['month']."','".$_SESSION['year']."','miscellaneous','miscellaneous_misc', '$_POST[miscellaneous_misc]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$_SESSION['success']=1;
header('Location: expense.php');
mysqli_close($con);
?>
