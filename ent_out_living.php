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
('".$_SESSION['month']."','".$_SESSION['year']."','ent_out_living','movies', '$_POST[movies]'),
('".$_SESSION['month']."','".$_SESSION['year']."','ent_out_living','netflix', '$_POST[netflix]'),
('".$_SESSION['month']."','".$_SESSION['year']."','ent_out_living','lunch', '$_POST[lunch]'),
('".$_SESSION['month']."','".$_SESSION['year']."','ent_out_living','dinner', '$_POST[dinner]'),
('".$_SESSION['month']."','".$_SESSION['year']."','ent_out_living','drinks_wine', '$_POST[drinks_wine]'),
('".$_SESSION['month']."','".$_SESSION['year']."','ent_out_living','trips_vacations', '$_POST[trips_vacations]'),
('".$_SESSION['month']."','".$_SESSION['year']."','ent_out_living','ent_out_living_misc', '$_POST[ent_out_living_misc]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$_SESSION['success']=1;
header('Location: expense.php');
mysqli_close($con);
?>
