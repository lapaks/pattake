<?php 
ob_start(); 
session_start();
?>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<div class="wrapper">
<div id="logo"><img src="images/logo_red.png" width="250" height="40" /></div>
<div id="header_menu">
<ul>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="current"';?> href="index.php">Home</a></li>
<?php
if (isset($_SESSION['login_user'])): ?>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'my_library.php')) echo 'class="current"';?>href="my_library.php">My Library</a></li>
<?php endif ?>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'about_us.php')) echo 'class="current"';?> href="about_us.php">About Us</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="current"';?> href="contact.php">Contact</a></li>
<?php 
if (isset($_SESSION['login_user'])): ?>
<li><a  href="logout.php">Logout</a></li> 
<?php endif ?>
</ul>
</div>
</div>

