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
('".$_SESSION['month']."','".$_SESSION['year']."','accomodation','phone', '$_POST[phone]'),
('".$_SESSION['month']."','".$_SESSION['year']."','accomodation','internet', '$_POST[internet]'),
('".$_SESSION['month']."','".$_SESSION['year']."','accomodation','yes_energy', '$_POST[yes_energy]'),
('".$_SESSION['month']."','".$_SESSION['year']."','accomodation','rent', '$_POST[rent]'),
('".$_SESSION['month']."','".$_SESSION['year']."','accomodation','bge', '$_POST[bge]'),
('".$_SESSION['month']."','".$_SESSION['year']."','accomodation','insurance_renal', '$_POST[insurance_rental]'),
('".$_SESSION['month']."','".$_SESSION['year']."','accomodation','accomodation_misc', '$_POST[accomodation_misc]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$_SESSION['success']=1;
header('Location: expense.php');
mysqli_close($con);
?>
