<!DOCTYPE html>
<head>
<meta name="keywords" content="THRIFT, THRIFT STORE, TENNESSEE, SODDY DAISY"/>
<meta name="Thrift Store" content="Thrift Store"/>
<meta name="author" content=""/>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Soddy Daisy Thrift Store</title>
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,700|Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link href="soddy_daisy_style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/favicon.ico">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
<header><?php include ("header.php");?></header>
<div id="main">
<div id="content-main">
<div id="column-sidebar">
<h2>Subsribe for alerts !</h2>
<p>Update our database with your contact information for email/text alerts about new store items</p>
<div style="padding:8px;">
<label>
<input type="radio" name="RadioGroup1" value="radio" id="email-only">
Email Only</label>
<label>
<input type="radio" name="RadioGroup1" value="radio" id="mobile-only">
Text Only</label>
<label>
<input type="radio" name="RadioGroup1" value="radio" id="show">
Reset</label></div>
<form name="form1" method="post" action="insert.php" onSubmit= "return validateForm()">
<div id="fullname">
<div class="lable"> Full Name</div>
<div style="float:left; width:300px;">
<input type="text" name="fullname" id="fullname-txt" class="textbox"> 
<span style="color:#F00; font-size:small">(mandatory)</span></div></div>
<div id="email">
<div class="lable">Email</div>
<div style="float:left; width:300px;">
<input type="text" name="email" id="email-txt" class="textbox" ></div></div>
<div id="mobile">
<div class="lable">Mobile No.</div>
<div style="float:left; width:300px;">
<input type="text" name="mobile" id="mobile-txt" class="textbox"></div></div>
<input name="submit" type="submit" style="margin-left:10px;">
</form>
<div style="color:#F00; padding:8px; float:left"> 
<?php
if ( isset ( $_SESSION['views'] ) ) {
echo "Record Updated Sucessfully!";
session_destroy();}?>
</div>
</div>
</div>
</div>
<div id="portfolio"><?php include("main.php");?>
<div id="sidebar"><?php include("sidebar.php");?>
</div>
</div><!---end of wrapper--->
<footer><?php include("footer.php");?></footer>
</body>
</html>
