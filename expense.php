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
<h3><a id="change_date" href="start_again.php">Change Date</a></h3>
</div>
<div id="main" style="margin:0 auto;">
<form action="insert_expense.php" method="post">
<label>Select Item</label>
<select name="item" id="firstDropdown" style="width:200px;">
  <option value="">--SELECT--</option>
    <option value = "grocery">GROCERY</option>
    <option value = "car">CAR</option>
    <option value = "ent_out_living">ENT & OUT LIVING</option>
    <option value = "accomodation">ACCOMODATION</option>
    <option value = "miscellaneous">MISCELLANEOUS</option>
</select><br>
<?php
			if ( isset ( $_SESSION['success'] ) ) {
			echo "Record Updated Sucessfully!";
			unset($_SESSION['success']);
			}?>
           
</form>
<div id="itemgrocery" class="dropdown"><h1>Grocery</h1>

<form action="grocery.php" method="post">
<label>Month </label>
<input type="text" name="month" value="<?php echo $_SESSION['month'];?>" class="" disabled > <br />
<label>Year</label>
<input type="text" name="year" value="<?php echo $_SESSION['year'];?>" class="" disabled> <br />
<label>Food & Beverages</label>
<input type="text" name="amount_food" value="" class="txt" >
<br />
<label>Utensil</label>
<input type="text" name="amount_utensil" value=""  class="txt" > <br />
<label>Miscellaneous</label>
<input type="text" name="amount_misc" value="" class="txt">
<input type="submit"  id="savegrocery" value="Save" class="dropdown" style="width:70px;">
<?php
			if ( isset ( $_SESSION['success'] ) ) {
			echo "Record Updated Sucessfully!";
			unset($_SESSION['success']);
			}?>
           
</form>

</div>

<div id="itemcar" class="dropdown"><h1>Car</h1>

<form action="car.php" method="post">
<label>Month </label>
<input type="text" name="month" value="<?php echo $_SESSION['month'];?>" class="" disabled > <br />
<label>Year</label>
<input type="text" name="year" value="<?php echo $_SESSION['year'];?>" class="" disabled> <br />
<label>Insurance</label>
<input type="text" name="amount_insurance_car" value="" class="txt" ><br />
<label>Fuel</label>
<input type="text" name="amount_fuel" value=""  class="txt" > <br />
<label>Renewal & Registration</label>
<input type="text" name="amount_renewal_registration" value="" class="txt"><br>
<label>Maintenance</label>
<input type="text" name="amount_maintenance" value="" class="txt"><br>
<label>Miscellaneous</label>
<input type="text" name="amount_car_misc" value="" class="txt">
<input type="submit"  id="savecar" value="Save" class="dropdown"style="width:70px;">
<?php
			if ( isset ( $_SESSION['success'] ) ) {
			echo "Record Updated Sucessfully!";
			unset($_SESSION['success']);
			}?>
           
</form>

</div>
<div id="itement_out_living" class="dropdown"><h1>Entertainment</h1>

<form action="ent_out_living.php" method="post">
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

<input type="submit"  id="saveent_out_living"class="dropdown" value="Save" style="width:70px;">
<?php
			if ( isset ( $_SESSION['success'] ) ) {
			echo "Record Updated Sucessfully!";
			unset($_SESSION['success']);
			}?>
           
</form>

</div>
<div id="itemaccomodation" class="dropdown"><h1>Accomodation</h1>

<form action="accomodation.php" method="post">
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
<input type="text" name="insurance_rental" value="" class="txt" >
<br />
<label>Miscellaneous </label>
<input type="text" name="accomodation_misc" value="" class="txt" >
<input type="submit"  id="saveaccomodation"class="dropdown" value="Save" style="width:70px;">
<?php
			if ( isset ( $_SESSION['success'] ) ) {
			echo "Record Updated Sucessfully!";
			unset($_SESSION['success']);
			}?>
           
</form>

</div>
<div id="itemmiscellaneous" class="dropdown"><h1>Miscellaneous</h1>

<form action="miscellaneous.php" method="post">
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
<input type="text" name="miscellaneous_misc" value="" class="txt" >
<input type="submit"  id="savemiscellaneous" class="dropdown"value="Save" style="width:70px;">
<?php
			if ( isset ( $_SESSION['success'] ) ) {
			echo "Record Updated Sucessfully!";
			unset($_SESSION['success']);
			}?>
           
</form>

</div>
</div><!---end of grocery--->
	
</div>
<!---end of summary div--->
</body>
</body>
</html>