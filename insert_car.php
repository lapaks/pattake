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

$sql="INSERT INTO car (month, year, insurance_car, fuel, renewal_registration, maintenance, car_misc)
VALUES
(
'".$_SESSION['month']."',
'".$_SESSION['year']."',
'$_POST[insurance_car]',
'$_POST[fuel]',
'$_POST[renewal_registration]',
'$_POST[maintenance]',
'$_POST[car_misc]'
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
