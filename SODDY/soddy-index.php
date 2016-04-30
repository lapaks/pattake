<?php session_start();
ob_start();
?>
<!DOCTYPE html>
<head>
<meta name="keywords" content="THRIFT, THRIFT STORE, TENNESSEE, SODDY DAISY"/>
<meta name="description" content="Thrift Store"/>
<meta name="author" content=""/>
<meta name="Thrift Store" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Soddy Daisy Thrift Store</title>
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link href="soddy_daisy_style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/favicon.ico">
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper"><!---start of wrapper--->
<header><?php include ("header.php");?></header>
<div id="banner-index">
<div id="slideshow">
<img src="slides/image1.jpg" class="active" />
<img src="slides/image2.jpg"/>
<img src="slides/image3.jpg"/>

</div>
</div>
<div id="portfolio"><?php include("main.php");?>
<div id="sidebar"><?php include("sidebar.php");?>
</div>
</div><!---end of wrapper--->
<footer><?php include("footer.php");?></footer>
</body>
</html>
