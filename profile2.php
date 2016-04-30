<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script>
$(document).ready(function(){
  $("#form input").prop("disabled", true); //<-- use prop NOT attr
});
</script>

<script> 
$(document).ready(function(){
$("#edit").click(function(){
  $("#form input").prop("enabled", true); //<-- use prop NOT attr
  });
});
</script>


<?php
include ('connect.php'); 
$data = mysql_query("SELECT * FROM users WHERE email='".$_SESSION['login_user']."'")
or die(mysql_error()); 
$info = mysql_fetch_array( $data ); 
?>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<div class="my_account_edit"><a id="edit" href="#">Edit</a></div>
<div class="my_account_main_page">
<form action="" method="get" id="form">
<label>Title</label><input type="text" name="contact" value="<?php echo "$info[title]";?>" ><br /> 
<label>First Name</label><input type="text" name="contact" value="<?php echo "$info[first_name]";?>"> <br />
<label>Last Name</label><input type="text" name="contact" value="<?php echo "$info[last_name]";?>"><br />
<label>Email ID</label><input type="text" name="contact" value="<?php echo "$info[email]";?>"> <br />
<label>Date of Birth</label><input type="text" name="contact" value="<?php echo "$info[dob]";?>"> <br />
</form>
</div>
