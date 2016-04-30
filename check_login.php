<?php
ob_start();
$host="localhost"; // Host name 
$username="lapaks"; // Mysql username 
$password="pattake"; // Mysql password 
$db_name="lapaks"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['login_email']; 
$mypassword=$_POST['login_password']; 

// To protect MySQL injection (more detail about MySQL injection)
$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and user_password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

header("location:my_library.php");
session_start();
$_SESSION['login_user']=$myusername;
$_SESSION['start']=time();

}
else {
echo "Wrong Username or Password";
}
?>
