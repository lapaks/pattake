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

$sql="INSERT INTO users (title, first_name, last_name, email, user_password, dob)
VALUES
(
'$_POST[title]',
'$_POST[first_name]',
'$_POST[last_name]',
'$_POST[email]',
'$_POST[user_password]',
'$_POST[dob]'
)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

$_SESSION['views']=1;
header('Location: index.php');


mysqli_close($con);
?>
