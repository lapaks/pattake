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
('".$_SESSION['month']."','".$_SESSION['year']."','car','insurance_car', '$_POST[amount_insurance_car]'),
('".$_SESSION['month']."','".$_SESSION['year']."','car','fuel', '$_POST[amount_fuel]'),
('".$_SESSION['month']."','".$_SESSION['year']."','car','renewal_registration', '$_POST[amount_renewal_registration]'),
('".$_SESSION['month']."','".$_SESSION['year']."','car','maintenance', '$_POST[amount_maintenance]'),
('".$_SESSION['month']."','".$_SESSION['year']."','car','car_misc', '$_POST[amount_car_misc]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$_SESSION['success']=1;
header('Location: expense.php');
mysqli_close($con);
?>
