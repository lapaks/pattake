
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script> 
$(document).ready(function(){
$("#click_profile").click(function(){
$("#profile2").fadeIn('slow');
$("#books, #borrowed,#lend, #followers, #my_account_summary, #following").fadeOut('slow');
$("#close_profile").click(function(){
$("#profile2").fadeOut('slow');
$("#books, #borrowed,#lend, #followers,#my_account_summary, #following").fadeIn('slow'); 
  });
  });
});
</script>


<script> 
$(document).ready(function(){
$("#click_books").click(function(){
$("#books2").fadeIn('slow');
$("#profile, #borrowed,#lend, #followers,#my_account_summary, #following").fadeOut('slow');
$("#close_books").click(function(){
$("#books2").fadeOut('slow');
$("#profile, #borrowed,#lend, #followers,#my_account_summary, #following").fadeIn('slow'); 
  });
  });
});
</script>
<script> 
$(document).ready(function(){
$("#click_borrowed").click(function(){
$("#borrowed2").fadeIn('slow');
$("#profile, #books,#lend, #followers,#my_account_summary, #following").fadeOut('slow');
$("#close_borrowed").click(function(){
$("#borrowed2").fadeOut('slow');
$("#profile, #books,#lend, #followers,#my_account_summary, #following").fadeIn('slow'); 
  });
  });
});
</script>

<script> 
$(document).ready(function(){
$("#click_lend").click(function(){
$("#lend2").fadeIn('slow');
$("#profile, #books,#borrowed, #followers, #my_account_summary,#following").fadeOut('slow');
$("#close_lend").click(function(){
$("#lend2").fadeOut('slow');
$("#profile, #books,#borrowed, #followers,#my_account_summary, #following").fadeIn('slow'); 
  });
  });
});
</script>

<script> 
$(document).ready(function(){
$("#click_followers").click(function(){
$("#followers2").fadeIn('slow');
$("#profile, #books,#borrowed, #lend,#my_account_summary, #following").fadeOut('slow');
$("#close_followers").click(function(){
$("#followers2").fadeOut('slow');
$("#profile, #books,#borrowed, #lend,#my_account_summary, #following").fadeIn('slow'); 
  });
  });
});
</script>

<script> 
$(document).ready(function(){
$("#click_followings").click(function(){
$("#following2").fadeIn('slow');
$("#profile, #books,#borrowed, #lend,#my_account_summary, #followers").fadeOut('slow');
$("#close_followings").click(function(){
$("#following2").fadeOut('slow');
$("#profile, #books,#borrowed, #lend,#my_account_summary, #followers").fadeIn('slow'); 
  });
  });
});
</script>

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
<div id="container" class="wrapper">
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
<div id="my_account_content" style="float:left; width:500px">


<div id="profile" style="display:block" class="my_account_main_page"><img src="images/profile.png" alt="Profile" width="54" height="50"> <a id="click_profile" href="#">Profile</a></div>
<div id="profile2"><?php include ('profile2.php'); ?></div>

<div id="books" class="my_account_main_page"><img src="images/books.png" alt="My Books" width="50" height="50"> <a id="click_books" href="#">My Books</a></div>
<div id="books2"><?php include ('books.php');?></div>
<div id="borrowed" class="my_account_main_page"><img src="images/books_borrowed.fw.png" width="50" height="50"><a id="click_borrowed" href="#"> Books I borrowed</a></div>
<div id="borrowed2">
<a href="#"><img id="close_borrowed" src="images/close.png" width="15" height="15" style="float:right"></a>
</div>
<div id="lend" class="my_account_main_page"><img src="images/books_lend.png" alt="Lendings" width="50" height="50"> <a id="click_lend" href="#">Books I have lend</a></div>
<div id="lend2">
<a href="#"><img id="close_lend" src="images/close.png" width="15" height="15" style="float:right"></a>
</div>
<div id="followers" class="my_account_main_page"><img src="images/followers.fw.png" alt="Followers" width="51" height="50"> <a id="click_followers" href="#">My Followers</a></div>
<div id="followers2">
<a href="#"><img id="close_followers" src="images/close.png" width="15" height="15" style="float:right"></a>

</div>
<div id="following" class="my_account_main_page"><img src="images/followers_red.fw.png" width="52" height="50"> <a id="click_followings" href="#">My Followings</a></div>
<div id="following2">
<a href="#"><img id="close_followings" src="images/close.png" width="15" height="15" style="float:right"></a>
</div>

</div>

<div style="float:right; width:300px;">
<div id="my_account_summary">
<h2>In a nutshell</h2>
<ul>
<li>Books in your Library #10</li>
<li>Books borrowed #3</li>
<li>Books lend #2</li>
<li>Following #4</li>
<li>Followers #5</li>
<li>Notification #0</li>


</ul></div>

</div>

</div>

<div id="main">
<h2>Featured Books</h2>
<div id="main_conent">
<?php include ("main_new.php");?>
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

<footer><?php include ("footer.php");?></footer>
</body>
</html>