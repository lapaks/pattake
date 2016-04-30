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

$sql="INSERT INTO miscellaneous (month, year, groupon, goodwill, medication, miscellaneous_mis)
VALUES
(
'".$_SESSION['month']."',
'".$_SESSION['year']."',
'$_POST[groupon]',
'$_POST[goodwill]',
'$_POST[medication]',
'$_POST[miscellaneous_mis]'
)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
  session_start();
$_SESSION['success']=1;
header('Location: expense.php');

mysqli_close($con);
?>
