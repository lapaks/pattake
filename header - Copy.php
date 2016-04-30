<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<div id="header_menu">
<ul>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="current"';?> href="index.php">Home</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'my_account.php')) echo 'class="current"';?> href="my_library.php">My Account</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'about_us.php')) echo 'class="current"';?> href="about_us.php">About Us</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'cart.php')) echo 'class="current"';?> href="#">Cart</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="current"';?> href="contact.php">Contact</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'categories.php')) echo 'class="current"';?> href="categories.php">Categories</a></li>
</ul>
</div><div id="logo"><img src="images/logo_red.png" width="250" height="40" /></div>
<div id="banner_head"></div>
	
<div id="header_search">
  <form id="form1" name="form1" method="post" action="">
   Search
    <input class="header_search" type="text" name="search" id="search" style="margin-left:10px;"/>
  </form>
</div>
