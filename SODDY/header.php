<link href="soddy_daisy_style.css" rel="stylesheet" type="text/css" media="screen" />
<div style="width: 1000px; margin: 0 auto; height:120px; overflow:hidden; ">
<div id="logo">
<img src="images/sd_logo.gif" width="400" height="80" style="padding:30px 0px 0px 0px;">
</div>

<div id="menu">
<ul>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="current"';?> href="index.php">Home</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'aboutus.php')) echo 'class="current"';?> href="aboutus.php">About Us</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'donate.php')) echo 'class="current"';?> href="donate.php">Donate</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'hospice.php')) echo 'class="current"';?> href="hospice.php">Hospice</a></li>
<li><a <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="current"';?> href="contact.php">Contact</a></li>
</ul>
</div>


</div>
