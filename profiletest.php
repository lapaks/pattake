<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="update_profile.php" method="post" id="form" >
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
<label>Date of Birth</label><input type="text" name="dob" value="<?php echo "$info[dob]";?>"> <br /><br />
<input type="submit" name="submit" id="save_profile" value="Save" style="width:70px; ">
</form></body>
</html>
