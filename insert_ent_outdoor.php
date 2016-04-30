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

$sql="INSERT INTO ent_outdoor (month, year, movies, netflix, lunch, dinner, drinks_wine, trips_vacations, ent_outdoor_misc)
VALUES
(
'".$_SESSION['month']."',
'".$_SESSION['year']."',
'$_POST[movies]',
'$_POST[netflix]',
'$_POST[lunch]',
'$_POST[dinner]',
'$_POST[drinks_wine]',
'$_POST[trips_vacations]',
'$_POST[ent_outdoor_misc]'
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
