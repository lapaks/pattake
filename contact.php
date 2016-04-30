<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<!-- HTML5 shim for IE backwards compatibility -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<header><?php include ("header.php");?></header>
<div id="wrapper"> <!--wrapper starts-->
<div id="container" class="clearfix"><!--container starts--->
<?php include ("search.php");?>
<div id="sidebar"><?php include ("sidebar.php");?></div>
<div id="banner" >
<div id="contact">
<p>9006 Town & Country Blvd, # D</p>
<p>Ellicott City, MD, 21043</p>
<p>Phone : +1(641) 583 5597</p>
<p>Email :  <a href="mailto:info@pattake.com">info@pattake.com</a></p></div>
  <div id="contact_map">
  <iframe width="500" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?sll=39.28715490000001,-76.81698489999997&amp;sspn=0.006077882592813817,0.0171646612731248&amp;t=m&amp;q=9006+Town+and+Country+Blvd,+Ellicott+City,+MD&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=9006+Town+and+Country+Blvd,+Ellicott+City,+Maryland+21043&amp;ll=39.290701,-76.812716&amp;spn=0.009964,0.023603&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?sll=39.28715490000001,-76.81698489999997&amp;sspn=0.006077882592813817,0.0171646612731248&amp;t=m&amp;q=9006+Town+and+Country+Blvd,+Ellicott+City,+MD&amp;dg=opt&amp;ie=UTF8&amp;hq=&amp;hnear=9006+Town+and+Country+Blvd,+Ellicott+City,+Maryland+21043&amp;ll=39.290701,-76.812716&amp;spn=0.009964,0.023603&amp;z=15&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
<div id="main"><?php include ("main_new.php");?></div>
</div>
</div><!---end of container page-->
</div><!--wrapper ends-->
<?php include ('user_info_bar.php');?>
<footer><?php include ("footer.php");?></footer>
</body>
</html>