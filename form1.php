<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script></head>


<div style="padding-top:100px;text-align: center;">
	<a class="popup-link-1"><b>Click me for a popup!</b></a>
</div>

<div class="popup-box" id="popup-box-1"><div class="close">X</div><div class="top"><h2>Jquery Twitter Style Popup</h2></div><div class="bottom"><?php include ('connect.php'); 
$id=$_GET['id'];

$data = mysql_query("SELECT * FROM books WHERE book_id='$id'")
or die(mysql_error()); 
$info = mysql_fetch_array( $data ); 
?>

<form action="edit_books1.php" method="post" name="add_books">
  <label for="user_id">User_id</label>
  <input type="text" name="user_id" /><br />

  <label for="book_id">Book ID</label>
  <input type="text" name="book_id" value= "<?php echo $_GET["id"]; ?>"/><br />

  <label for="book_name">Book Name</label>
  <input type="text" name="book_name"  value="<?php echo "$info[book_name]";?>" /><br />

  <label for="author">Author</label>
  <input type="text" name="book_author"  value="<?php echo "$info[book_author]";?>" /><br />

  <label for="published_date">Published on</label>
  <input type="text" name="book_published_date"  value="<?php echo "$info[book_published_date]";?>" /><br />

  <label for="edition">Edition</label>
  <input type="text" name="book_edition"  value="<?php echo "$info[book_edition]";?>" /><br />

  <label for="category">Category</label>
  <input type="text" name="book_category"  value="<?php echo "$info[book_image]";?>" /><br />

  <label for="book_image">Image</label>
  <input type="text" name="book_image"   value="<?php echo "$info[book_for_sale]";?>"/><br /><br />

  <label for="book_for_sale">For Sale</label>
  <input type="text" name="book_for_sale"  value="<?php echo "$info[book_name]";?>"/><br /><br />

  <input type="submit" name="submit" id="save" value="Save" style="width:70px; display:none;" />
</form></div></div>
<div id="blackout"></div>

<script>
$(document).ready(function() {
	var boxWidth = 400;
	
	function centerBox() {
		
		/* Preliminary information */
		var winWidth = $(window).width();
		var winHeight = $(document).height();
		var scrollPos = $(window).scrollTop();
		/* auto scroll bug */
		
		/* Calculate positions */
		
		var disWidth = (winWidth - boxWidth) / 2
		var disHeight = scrollPos + 150;
		
		/* Move stuff about */
		$('.popup-box').css({'width' : boxWidth+'px', 'left' : disWidth+'px', 'top' : disHeight+'px'});
		$('#blackout').css({'width' : winWidth+'px', 'height' : winHeight+'px'});
	
		return false;
	}
	
	
	$(window).resize(centerBox);
	$(window).scroll(centerBox);
	centerBox();	

	$('[class*=popup-link]').click(function(e) {
	
		/* Prevent default actions */
		e.preventDefault();
		e.stopPropagation();
		
		/* Get the id (the number appended to the end of the classes) */
		var name = $(this).attr('class');
		var id = name[name.length - 1];
		var scrollPos = $(window).scrollTop();
		
		/* Show the correct popup box, show the blackout and disable scrolling */
		$('#popup-box-'+id).show();
		$('#blackout').show();
		$('html,body').css('overflow', 'hidden');
		
		/* Fixes a bug in Firefox */
		$('html').scrollTop(scrollPos);
	});
	$('[class*=popup-box]').click(function(e) { 
		/* Stop the link working normally on click if it's linked to a popup */
		e.stopPropagation(); 
	});
	$('html').click(function() { 
		var scrollPos = $(window).scrollTop();
		/* Hide the popup and blackout when clicking outside the popup */
		$('[id^=popup-box-]').hide(); 
		$('#blackout').hide(); 
		$("html,body").css("overflow","auto");
		$('html').scrollTop(scrollPos);
	});
	$('.close').click(function() { 
		var scrollPos = $(window).scrollTop();
		/* Similarly, hide the popup and blackout when the user clicks close */
		$('[id^=popup-box-]').hide(); 
		$('#blackout').hide(); 
		$("html,body").css("overflow","auto");
		$('html').scrollTop(scrollPos);
	});
});

</script>

<style>
.popup-box {
	position: absolute;
	border-radius: 5px;
	background: #fff;
	display: none;
	box-shadow: 1px 1px 5px rgba(0,0,0,0.2);
	font-family: Arial, sans-serif;
	z-index: 9999999;
	font-size: 14px;
}

.popup-box .close {
	position: absolute;
	top: 0px;
	right: 0px;
	font-family: Arial, Helvetica, sans-serif;	
	font-weight: bold;
	cursor: pointer;
	color: #434343;
	padding: 20px;
	font-size: 20px;
}

.popup-box .close:hover {
	color: #000;
}

.popup-box h2 {
	padding: 0;
	margin: 0;
	font-size: 18px;
}
.popup-box .top {
	padding: 20px;
}

.popup-box .bottom {
	background: #eee;
	border-top: 1px solid #e5e5e5;
	padding: 20px;
	border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
}

#blackout {
	background: rgba(0,0,0,0.3);
	position: absolute;
	top: 0;
	overflow: hidden;
	z-index: 9999;
	left: 0;
	display: none;
}


</style>
