<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>About Us</title>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<!---HEADER-->
<header><?php include ("header.php");?></header>
<!---END OF HEADER-->
<!---Start of wrapper -->
<div id="wrapper">
<div id="container" class="clearfix">
<?php include ("search.php");?>
<div id="sidebar"><?php include ("sidebar.php");?></div>
<!---START OF BANNER-->
<div id="banner">
<div id="about_us"><p><a href="index.php">Pattake.com</a> is your online library. To get started <span>create an account</span> using your email address. Once you have your account, you can start <span>creating and managing your online library.</span> 
  Update your library with books you actually have. You have the option to <span>make your library private</span> as well as <span>public</span>.
  If you make your library public it will be visible to other users and they could browse through your library. They have the option to send <span>borrowing request</span> to you.
  This is the fun part actually. You will receive requests from your friends and or other registered users. Now you two can <span>communicate with each other</span> and decide on sharing or not sharing the books. You may also <span>list your books as 'For Sale'</span> with price quote.
  Same way you can <span>search our database for books</span> that you need and communicate with other users for either borrowing or for buying.</p>
  <p>Our concept is simple. Share books.  You may not require all the books that you have. 
  Instead of disposing it as garbage lets give it to someone who may need it. Books are expensive. So we are hoping to create a community that would 
  facilitate in maximizing the benifits of books. <a href="my_library.php">Join us now </a><a href="my_library.php"> !</a></p>
</div>
<div id="main">
<?php include ("main_new.php");?>
</div>
</div><!---END OF BANNER-->
</div><!---end of container page-->
</div><!---end of wrapper -->
<?php include ('user_info_bar.php');?>
<footer><?php include ("footer.php");?></footer>
</body>
</html>