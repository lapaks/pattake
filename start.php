<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript" src="expense.js"></script>
<link rel="stylesheet" type="text/css" href="expense.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div style="width:25%; margin:0 auto; padding:200px 0px 0px 0px; ">
<form action="insert_date.php" method="post">
<label>Month</label>
<select id="month" name="month" style="width:100px;">
  <option value="">--SELECT--</option>
    <option value = "JAN">JANUARY</option>
    <option value = "FEB">FEBRUARY</option>
    <option value = "MAR">MARCH</option>
    <option value = "APR">APRIL</option>
    <option value = "MAY">MAY</option>
    <option value = "JUN">JUNE</option>
    <option value = "JUL">JULY</option>
    <option value = "AUG">AUGUST</option>
    <option value = "SEP">SEPTEMBER</option>
    <option value = "OCT">OCTOBER</option>
    <option value = "NOV">NOVEMBER</option>
    <option value = "DEC">DECEMBER</option>

</select><br />
<label>Year</label>
<select id="year" name="year" style="width:100px;">
  <option value="">--SELECT--</option>
    <option value = "2013">2013</option>
    <option value = "2014">2014</option>
    <option value = "2015">2015</option>
</select><br />
<input type="submit" value="Submit" class="submit" onclick="return validate()" style="width:250px;" />
</form>
<div class="msg"><br />
<small>* Both MONTH and YEAR must be selected</small>
<br />
</div>
</div>
</body>
</html>