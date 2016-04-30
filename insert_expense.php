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
  
// branch on the basis of 'calculate' value 
switch ($_POST['calculate']) {
      // if calculate => grocery
      case 'grocery':
$sql="INSERT INTO expense (month, year, item, sub_item, amount)
VALUES
(
'".$_SESSION['month']."',
'".$_SESSION['year']."',
'$_POST[item]',
'$_POST[sub_item]',
'$_POST[amount]'
)";


      // if calculate => subtract
      case 'car':
$sql="INSERT INTO expense (month, year, item, sub_item5, amount)
VALUES
(
'".$_SESSION['month']."',
'".$_SESSION['year']."',
'$_POST[item]',
'$_POST[sub_item5]',
'$_POST[amount]'
)";
}




if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$_SESSION['success']=1;
header('Location: expense.php');
mysqli_close($con);
?>
