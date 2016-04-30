<?php session_start();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Expense</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script language="javascript" type="text/javascript" src="expense.js"></script>
<link rel="stylesheet" type="text/css" href="expense.css" />
</head>
<body>
<div>
<?php
if (!isset($_SESSION['views'])): ?>
<?php header('Location: start.php');?>
<?php endif?>
Entering date for   <?php echo $_SESSION['month'];?>-<?php echo $_SESSION['year'];?> <br>
<h3><a id="change_date" href="start_again.php">Change Date</a></h3>
</div>
<div id="tabs">
  <ul>
    <ul>
      <li><a href="#grocery">Grocery</a></li>
    </ul>
    <li><a href="#car">Car</a></li>
    <li><a href="#ent_out_living">Entertainment and Outdoor Living</a></li>
    <li><a href="#accomodation">Accomodation</a></li>
    <li><a href="#miscellaneous">Miscellaneous</a></li>
  </ul>
<div id="grocery">
  <form action="insert_grocery.php" method="post">
<label>Month </label>
<input type="text" name="month" value="<?php echo $_SESSION['month'];?>" class="" disabled > <br />
<label>Year</label>
<input type="text" name="year" value="<?php echo $_SESSION['year'];?>" class="" disabled> <br />
<label>Food-Beverages </label>
<input type="text" name="food_bev" value="" class="txt" > <br />
<label>Utensil </label>
<input type="text" name="utensil" value=""  class="txt" > <br />
<label>Miscellaneous </label>
<input type="text" name="grocery_misc" value="" class="txt">
<input type="submit" name="submit" id="save_profile" value="Save" style="width:70px;">
<?php
			if ( isset ( $_SESSION['success'] ) ) {
			echo "Record Updated Sucessfully!";
			unset($_SESSION['success']);
			}?>
           
</form>
</div>  
<div id="car">
<label>Month </label>
<input type="text" name="car_month" value="<?php echo $_SESSION['month'];?>" class="" disabled > <br />
<label>Year</label>
<input type="text" name="car_year" value="<?php echo $_SESSION['year'];?>" class="" disabled> <br />

<form action="insert_car.php" method="post">
<label>Insurance </label>
<input type="text" name="insurance_car" value=""  class="txt" > <br />
<label>Fuel</label>
<input type="text" name="fuel" value="" class="txt"> <br />
<label>Renewal/Registration </label>
<input type="text" name="renewal_registration" value="" class="txt" >
<br />
<label>Maintenance </label>
<input type="text" name="maintenance" value=""  class="txt">
<br />
<label>Miscellaneous </label>
<input type="text" name="car_misc" value=""  class="txt">

<input type="submit" name="submit" id="save_profile" value="Save" style="width:70px;">
</form>

</div>
<div id="ent_out_living">

<form action="insert_ent_outdoor.php" method="post">
<label>Month </label>
<input type="text" name="month" value="<?php echo $_SESSION['month'];?>" class="" disabled > <br />
<label>Year</label>
<input type="text" name="year" value="<?php echo $_SESSION['year'];?>" class="" disabled> <br />

<label>Movies </label>
<input type="text" name="movies" value=""  class="txt"> <br />
<label>Netflix</label>
<input type="text" name="netflix" value="" class="txt"> <br />
<label>Lunch</label>
<input type="text" name="lunch" value="" class="txt" >
<br />
<label>Dinner </label>
<input type="text" name="dinner" value=""  class="txt">
<br />
<label>Drinks/Wine </label>
<input type="text" name="drinks_wine" value="" class="txt" >
<br />
<label>Trips/Vacations</label>
<input type="text" name="trips_vacations" value=""  class="txt">
<br />
<label>Miscellaneous </label>
<input type="text" name="ent_out_living_misc" value="" class="txt" >
<input type="submit" name="submit" id="save_profile" value="Save" style="width:70px;">
</form>
</div>
<div id="accomodation">
<form action="insert_accomodation.php" method="post">
<label>Month </label>
<input type="text" name="month" value="<?php echo $_SESSION['month'];?>" class="" disabled > <br />
<label>Year</label>
<input type="text" name="year" value="<?php echo $_SESSION['year'];?>" class="" disabled> <br />


<label>Phone </label>
<input type="text" name="phone" value="" class="txt" > <br />
<label>Internet</label>
<input type="text" name="internet" value="" class="txt"> <br />
<label>Yes Energy</label>
<input type="text" name="yes_energy" value="" class="txt" >
<br />
<label>Rent </label>
<input type="text" name="rent" value="" class="txt" >
<br />
<label>BGE</label>
<input type="text" name="bge" value="" class="txt" >
<br />
<label>Rental Insurance</label>
<input type="text" name="insurance_rent" value="" class="txt" >
<br />
<label>Miscellaneous </label>
<input type="text" name="accomodation_misc" value="" class="txt" >
<input type="submit" name="submit" id="save_profile" value="Save" style="width:70px;">
</form>
</div>

<div id="miscellaneous">
<form action="insert_miscellaneous.php" method="post">
<label>Month </label>
<input type="text" name="month" value="<?php echo $_SESSION['month'];?>" class="" disabled > <br />
<label>Year</label>
<input type="text" name="year" value="<?php echo $_SESSION['year'];?>" class="" disabled> <br />
<label>Groupon </label>
<input type="text" name="groupon" value="" class="txt" > <br />
<label>Goodwill</label>
<input type="text" name="goodwill" value="" class="txt"> <br />
<label>Medication </label>
<input type="text" name="medication" value="" class="txt" ><br>
<label>Miscellaneous </label>
<input type="text" name="miscellaneous_mis" value="" class="txt" >
<input type="submit" name="submit" id="save_profile" value="Save" style="width:70px;">
</form>

</div>

</div><!---end of tabs--->
<div id="total">
Total<span id="sum">0</span>
</div>
<div id="summary" style="width:1456px; overflow:auto;">
<div id="grocery_summary" style="width:260px; float:left" >
    <table width="260px;">
    <tr>
      <th colspan="6" style="text-align:center">Grocery</th>
      </tr>
      <tr>
        <td width="52px;"><a href="#" title="Month">MNT</a></td>
        <td width="52px;"><a href="#" title="Year">YR</a></td>
        <td width="52px;"><a href="#" title="Food & Beverages">F/B</a></td>
        <td width="52px;"><a href="#" title="Utensil">UTN</a></td>
        <td width="52px;"><a href="#" title="Miscellaneous">MSC</a></td>
        <td width="52px;"><a href="#" title="Total">TOT</a></td>
      </tr>
<?php 
include ('connect.php');
$query = "select  month, food_bev + utensil + grocery_misc as ItemSum
from grocery order by month"; 
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_row($result);
// Print out result
echo $row[0];
?>
<?php 
 mysql_connect("localhost", "lapaks", "pattake") or die(mysql_error()); 
 mysql_select_db("lapaks") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM grocery ") 
 or die(mysql_error()); 
 echo "<table width=260px; > "; 
 

 while($info = mysql_fetch_row($data)){
  echo
  ("<tr>
  <td width='52px;'>$info[0]</td>
  <td width='52px;'>$info[1]</td>
  <td width='52px;'>$info[2]</td>
  <td width='52px;'>$info[3]</td>
  <td width='52px;'>$info[4]</td>
  <td width='52px;'>
  </tr>");
}
?>
</table>
</div>
<div id="car_summary" style="width:260px; float:left" >
    <table width="260px">
        <th colspan="6" style="text-align:center">Car</th>
      <tr>
        <td width="52px"><a href="#" title="Insurance">INS</a></td>
        <td width="52px"><a href="#" title="Fuel">FUL</a></td>
        <td width="52px"><a href="#" title="DMV : Renewal & Registration">DMV</a></td>
        <td width="52px"><a href="#" title="Maintenance">MNT</a></td>
        <td width="52px"><a href="#" title="Miscellaneous">MSC</a></td>
      </tr>

<?php 
 mysql_connect("localhost", "lapaks", "pattake") or die(mysql_error()); 
 mysql_select_db("lapaks") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM car ") 
 or die(mysql_error()); 
 
 echo "<table width=260px;> "; 
 
 while($info = mysql_fetch_row($data)){
  echo
  ("<tr>
  <td width='52px'>$info[2]</td>
  <td width='52px'>$info[3]</td>
  <td width='52px'>$info[4]</td>
  <td width='52px'>$info[5]</td>
  <td width='52px'>$info[6]</td>
  </tr>");
}
?>
</table>
</div>
<div id="ent_outdoor_summary" style="width:364px; float:left" >
    <table width="364px">
        <th colspan="7" style="text-align:center">Entertainment &amp; Outdoor Living</th>
      <tr>
        <td width="52px"><a href="#" title="Movies">MOV</a></td>
        <td width="52px"><a href="#" title="Netflix">NFL</a></td>
        <td width="52px"><a href="#" title="Lunch">LUN</a></td>
        <td width="52px"><a href="#" title="Dinner">DIN</a></td>
        <td width="52px"><a href="#" title="Drinks & Wine">WIN</a></td>
        <td width="52px"><a href="#" title="Trips & Vaccations">VAC</a></td>
        <td width="52px"><a href="#" title="Miscellaneous">MIS</a></td>
      </tr>

<?php 
 mysql_connect("localhost", "lapaks", "pattake") or die(mysql_error()); 
 mysql_select_db("lapaks") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM ent_outdoor") 
 or die(mysql_error()); 
 echo "<table width=364px; > "; 
 
 while($info = mysql_fetch_row($data)){
  echo
  ("<tr>
  <td width='52px'>$info[2]</td>
  <td width='52px'>$info[3]</td>
  <td width='52px'>$info[4]</td>
  <td width='52px'>$info[5]</td>
  <td width='52px'>$info[6]</td>
  <td width='52px'>$info[7]</td>
  <td width='52px'>$info[8]</td>

  </tr>");
}
?>
</table>
</div>
<div id="accomodation_summary" style="width:364px; float:left" >
    <table width="364px">
        <th colspan="7" style="text-align:center">Accomodation</th>
      <tr>
        <td width="52px"><a href="#" title="Mobile : ATT">MOB</a></td>
        <td width="52px"><a href="#" title="Internet : Comast">INT</a></td>
        <td width="52px"><a href="#" title="Yes Emergy">YEN</a></td>
        <td width="52px"><a href="#" title="Rent">RNT</a></td>
        <td width="52px"><a href="#" title="BGE">BGE</a></td>
        <td width="52px"><a href="#" title="Rental Insurance">INS</a></td>
        <td width="52px"><a href="#" title="Miscellaneous">MIS</a></td>
      </tr>

<?php 
 mysql_connect("localhost", "lapaks", "pattake") or die(mysql_error()); 
 mysql_select_db("lapaks") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM accomodation") 
 or die(mysql_error()); 
 echo "<table width=364px; > "; 
 
 while($info = mysql_fetch_row($data)){
  echo
  ("<tr>
  <td width='52px'>$info[2]</td>
  <td width='52px'>$info[3]</td>
  <td width='52px'>$info[4]</td>
  <td width='52px'>$info[5]</td>
  <td width='52px'>$info[6]</td>
  <td width='52px'>$info[7]</td>
  <td width='52px'>$info[8]</td>

  </tr>");
}
?>
</table>
</div>
<div id="miscllenaous_summary" style="width:208px; float:left; clear:both" >
    <table width="208px">
        <th colspan="3" style="text-align:center">Miscellaneous</th>
      <tr>
        <td width="52px"><a href="#" title="Gropuon">GRP</a></td>
        <td width="52px"><a href="#" title="Goodwill">GDW</a></td>
        <td width="52px"><a href="#" title="Medication">MED</a></td>
        <td width="52px"><a href="#" title="Miscellaneous">MIS</a></td>
      </tr>

<?php 
 mysql_connect("localhost", "lapaks", "pattake") or die(mysql_error()); 
 mysql_select_db("lapaks") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM accomodation") 
 or die(mysql_error()); 
 echo "<table width=208px; > "; 
 
 while($info = mysql_fetch_row($data)){
  echo
  ("<tr>
  <td width='52px'>$info[2]</td>
  <td width='52px'>$info[3]</td>
  <td width='52px'>$info[4]</td>
  <td width='52px'>$info[5]</td>
  </tr>");
}
?>
</table>
</div>
</div><!---end of summary div--->
</body>
</body>
</html>