<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<?php include ('connect.php'); 
$data = mysql_query("SELECT * FROM users WHERE email='".$_SESSION['login_user']."'")
or die(mysql_error()); 
$info = mysql_fetch_array( $data ); 
?>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<div class="my_account_edit">
    <a id="edit_profile" href="#">Edit</a>
    <a id="cancle_profile" href="#" style="display:none">Cancle</a>
</div>
<div class="my_account_main_page">
<form action="update_profile.php" method="post">
<label>Title</label>
<select style="width:80px;">
    <option value =""> <?php echo "$info[title]";?></option>
    <option value="">--Select--</option>
    <option value = "MR">MR</option>
    <option value = "MS">MS</option>
    <option value = "MRS">MRS</option>

</select>


<br /> 
<label>First Name</label><input type="text" name="first_name" value="<?php echo "$info[first_name]";?>" id="name"> <br />
<label>Last Name</label><input type="text" name="last_name" value="<?php echo "$info[last_name]";?>"><br />
<label>Email ID</label><input id="input_email" type="text" name="email" value="<?php echo "$info[email]";?>"><br />
<label>Date of Birth</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br />
<input type="submit" name="submit" id="save_profile" value="Save" style="width:70px; display:none ">
</form>


<div id="message_box">
  <?php
			if ( isset ( $_SESSION['update'] ) ) {
			echo '<span style="color:#E51937">Record Updated Sucessfully!</span>';
			unset($_SESSION['update_profile']);
			}?>
</div>
</div>