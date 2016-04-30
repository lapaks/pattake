<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>

<?php
if (isset($_SESSION['update_books'])): ?>
<script> 
$(document).ready(function(){
$("#profile2").hide('fast');
$("#books2").show('fast');
$("#head_profile,#head_borrowed, #head_lend,#head_followers, #head_followings").fadeTo("slow", 0.22);
$("#head_books").fadeTo("slow", 1);


});
</script>
<?php 
endif?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>

<header class="wrapper_header"><?php include ("header.php");?></header>
<div id="wrapper">
<div id="container" class="wrapper clearfix">
<?php include ("search.php");?>
<div id="sidebar">
<section>
<?php include ("sidebar.php");?>
</section>
</div>

<div id="banner">
<?php
if (!isset($_SESSION['login_user'])): ?>
<?php header('Location: index.php');?>
<?php endif?>

<div id="my_account_content">

<div id="head_profile" style="opacity:0.22"> <a href="#"><img src="images/profile.png" alt="Profile" name="click_profile" width="54" height="50" id="click_profile"></a><br> 
Profile
</div>

<div id="head_books" style="opacity:1"> <a href="#"><img src="images/books.png" alt="My Books" name="click_books" width="50" height="50" id="click_books"></a><br>
Books
</div>

<div id="head_borrowed"> <a href="#"><img src="images/books_borrowed.fw.png" alt="" name="click_borrowed" width="50" height="50" id="click_borrowed"></a><br>
Borrowed
</div>

<div id="head_lend"> <a href="#"><img src="images/books_lend.png" alt="Lendings" name="click_lend" width="50" height="50" id="click_lend"></a><br> 
Lend
</div>


<div id="head_followers"> <a href="#"><img src="images/followers.fw.png" alt="Followers" name="click_followers" width="51" height="50" id="click_followers"></a><br>
Followers
</div>

<div id="head_followings"> <a href="#"><img src="images/followers_red.fw.png" name="click_followings" width="52" height="50" id="click_followings"></a> 
Followings
</div>

<div id="profile2" style="display:none" ><?php include ('profile.php');?></div>

<div id="books3">
<div class="my_account_edit">
    <a id="edit" style="display:none" href="#">Edit</a>
    <a id="add" href="#" style="display:none" >Add Books</a>
    <a id="cancle_book_edit" href="my_library.php">Cancle</a>
</div>

<div id="edit_books">
<?php include ('connect.php'); 
$id=$_GET['id'];

$data = mysql_query("SELECT * FROM books WHERE book_id='$id'")
or die(mysql_error()); 
$info = mysql_fetch_array( $data ); 
?>

<form action="edit_books2.php" method="post" name="add_books">
  <label for="user_id">User_id</label>
  <input type="text" name="user_id" /><br />

  <label for="book_id">Book ID</label>
  <input type="text" name="book_id" value= "<?php echo $_GET["id"]; ?>"/><br />

  <label for="book_name">Book Name</label>
  <input type="text" name="book_name"  value="<?php echo "$info[book_name]";?>" /><br />

  <label for="author">Author</label>
  <input type="text" name="book_author"  value="<?php echo "$info[book_author]";?>" /><br />

  <label for="published_date">Published on</label>
  <input type="text" name="book_published_date"  value="<?php echo "$info[book_published_date]";?>" /><br />

  <label for="edition">Edition</label>
  <input type="text" name="book_edition"  value="<?php echo "$info[book_edition]";?>" /><br />

  <label for="category">Category</label>
  <input type="text" name="book_category"  value="<?php echo "$info[book_image]";?>" /><br />

  <label for="book_image">Image</label>
  <input type="text" name="book_image"   value="<?php echo "$info[book_for_sale]";?>"/><br /><br />

  <label for="book_for_sale">For Sale</label>
  <input type="text" name="book_for_sale"  value="<?php echo "$info[book_name]";?>"/><br /><br />

  <input type="submit" name="submit" id="save" value="Save" style="width:70px; display:none;" />
</form>
</div>

</div>

<div id="borrowed2">This is borrowed2</div>
<div id="lend2">This is lend2</div>
<div id="followers2">This is followers2</div>
<div id="following2">This is following2</div>

</div>

</div>

</div>
</div>
<div id="wrapper">
<div class="wrapper"">

<?php
if (isset($_SESSION['login_user'])): ?>
<div class="login_user"><?php
if (isset($_SESSION['login_user'])): ?>
<?php echo $_SESSION['login_user'];?>
<?php endif?></div>
<?php endif?>


<div style="width:800px; height:30px; text-align:right; color:#E51937"></div>
</div>
</div>
<footer><?php include ('footer.php');?></footer>
</body>
</html>
