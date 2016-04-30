<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<?php
if (isset($_SESSION['insert_books'])): ?>
<script> 
$(document).ready(function(){
$("#profile2").hide('fast');
$("#books2").show('fast');
$("#head_profile,#head_borrowed, #head_lend,#head_followers, #head_followings").fadeTo("slow", 0.22);
$("#head_books").fadeTo("slow", 1);
});
</script>
<?php 
unset($_SESSION['insert_books']);
endif?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Library</title>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>

<header><?php include ("header.php");?></header>
<div id="wrapper">
<div id="container" class="wrapper clearfix">
<?php include ("search.php");?>
<div id="sidebar">
<section>
<?php include ("sidebar.php");?>
</section>
</div>

<div id="banner" class="clearfix">
<?php
if (!isset($_SESSION['login_user'])): ?>
<?php header('Location: index.php');?>
<?php endif?>

<div id="library_header" class="clearfix">

<div id="head_profile"> <a href="#"><img src="images/profile.png" alt="Profile" name="click_profile" width="54" height="50" id="click_profile"></a><br> 
Profile
</div>

<div id="head_books"> <a href="#"><img src="images/books.png" alt="My Books" name="click_books" width="50" height="50" id="click_books"></a><br>
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

</div><!---library header ends--->

<div id="my_account_content">
<div id="profile2"><?php include ('profile.php');?></div>

<div id="books2">
<?php include ('books.php');?></div>

<div id="borrowed2">This is borrowed2</div>
<div id="lend2">This is lend2</div>
<div id="followers2">This is followers2</div>
<div id="following2">This is following2</div>


</div>

</div>
</div>
</div>
<?php include ('user_info_bar.php');?>
<footer><?php include ('footer.php');?></footer>
</body>
</html>
