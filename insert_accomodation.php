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

$sql="INSERT INTO accomodation (month, year, phone, internet, yes_energy, rent, bge, rental_insurance, accomodation_misc)
VALUES
(
'".$_SESSION['month']."',
'".$_SESSION['year']."',
'$_POST[phone]',
'$_POST[internet]',
'$_POST[yes_energy]',
'$_POST[rent]',
'$_POST[bge]',
'$_POST[rental_insurance]',
'$_POST[accomodation_misc]'
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
