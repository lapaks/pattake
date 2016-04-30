<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pattake.com - Your online library</title>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<!---facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!---facebook-->
<header><?php include ("header.php");?></header>
<div id="wrapper">
<!---start of container page-->
<div id="container" class="clearfix" style="overflow:visible">
<?php include ("search.php");?>
<?php include ("home_page.php");?>
</div><!---end of container page-->
</div><!---end of wrapper-->
<?php include ('user_info_bar.php');?>
<footer><?php include ("footer.php");?></footer>
</body>
</html>