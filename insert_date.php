<script>
function validate()
{
   if(document.getElementById("month").value == "")
   {
      alert("Please select value"); // prompt user
      document.getElementById("month").focus(); //set focus back to control
      return false;
   }
}
</script>
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
$month=$_POST['month']; 
$year=$_POST['year']; 



$_SESSION['views']=1;
$_SESSION['month']=$month;
$_SESSION['year']=$year;

header('Location: expense.php');


mysqli_close($con);
?>
