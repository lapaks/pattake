<?php
session_start();
?>
<?php
$con=mysqli_connect("localhost","pattake_pattake","jhg(*&LKHJG#2","pattake_pattake");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO thrift_store (fullname, email, mobile)
VALUES
('$_POST[fullname]','$_POST[email]','$_POST[mobile]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$_SESSION['views']=1;
header('Location: subscribe.php');
mysqli_close($con);
?>
