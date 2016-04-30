<script>

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

$_SESSION['insert_books']=1;
header('Location: my_library.php');


mysqli_close($con);
?>
