<?php
session_start();
?>
<?php
$host="localhost"; // Host name 
$username="lapaks"; // Mysql username 
$password="pattake"; // Mysql password 
$db_name="lapaks"; // Database name 
$tbl_name="users"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$title = $_POST['title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];

// update data in mysql database 
$sql="UPDATE $tbl_name SET 
title='$title',
first_name='$first_name',
last_name='$last_name',
dob='$dob'
where email= '".$_SESSION['login_user']."'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
$_SESSION['update_profile']=1;
header('Location: my_library.php');

}

else {
echo "ERROR";
}?>
