<?php
include('connect.php');
if(isset($_GET['book_id']))
{
$id=$_GET['book_id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$query3=mysql_query("select * from books where book_id='$id'");
if($query3)
{
header('location:books.php');
}
}
$query1=mysql_query("select * from addd where id='$id'");
$query2=mysql_fetch_array($query1);



$sql="INSERT INTO books (user_id, book_id, book_name, book_author, book_published_date, book_edition,book_category,book_image,book_for_sale)
VALUES
(
'".$_SESSION['login_user']."',
'$_POST[book_id]',
'$_POST[book_name]',
'$_POST[book_author]',
'$_POST[book_published_date]',
'$_POST[book_edition]',
'$_POST[book_category]',
'$_POST[book_image]',
'$_POST[book_for_sale]'
)";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

$_SESSION['update_books']=1;
header('Location: my_library.php');


mysqli_close($con);
?>
