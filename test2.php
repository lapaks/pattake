<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 


// Create an empty array to hold the error messages. 
$arrErrors = array(); 
//Only validate if the Submit button was clicked. 
if (!empty($_POST['Submit'])) { 
    // Each time there's an error, add an error message to the error array 
    // using the field name as the key. 
    if ($_POST['name']=='') 
        $arrErrors['name'] = 'Please provide your name.'; 

         
         
         
         
        if ($_POST['music']=='') 
        $arrErrors['music'] = 'select one field.'; 
         
         
         
         
         
    if (count($arrErrors) == 0) { 
        // If the error array is empty, there were no errors. 
        // Insert form processing here. 
    } else { 
        // The error array had something in it. There was an error. 
        // Start adding error text to an error string. 
        $strError = '<div class="formerror"><p><img src="/images/triangle_error.gif" width="16" height="16" hspace="5" alt="">Please check the following and try again:</p><ul>'; 
        // Get each error and add it to the error string 
        // as a list item. 
        foreach ($arrErrors as $error) { 
            $strError .= "<li>$error</li>"; 
        } 
        $strError .= '</ul></div>'; 
    } 
} 
?> 

<style> 


.formerror { 
  border: 1px solid red; 
  background-color : #FFCCCC; 
  width: auto; 
  padding: 5px 0; 
} 

.errortext { 
  padding-left: 80px; 
  font-size:14px; 
  color:red; 
  
} 




//radio java script javascript 

</style> 




<?php echo $strError; ?> 
<form method="post" action="insert_date.php" ?>"> 
<!-- 
For every form field, we do the following... 

Check to see if there's an error message for this form field. If there is, 
add the formerror class to the surrounding paragraph block. The formerror 
class contains the highlighted box. 

Insert the contents of what the user submitted bak into the form field. 

Check again to see if this field has an error message. If it does, show 
the error icon and the error message next to the field. 
--> 


<p<?php if (!empty($arrErrors['name'])) echo ' class="formerro"'; ?>> 

    <?php if (!empty($arrErrors['name'])) echo '<br /><span class="errortext">'.$arrErrors['name'].'</span>'; ?> 
<br /> 
    <label for="name">Name:</label> 
    <input name="name" type="text" id="name" value=""> 
</p> 


<?php echo"user must pick at least one form"; ?> 

<p<?php if (!empty($arrErrors['howt'])) echo ' class="formerro"'; ?>> 

    <?php echo '<br /><span class="errortext">'.$arrErrors['music'].'</span>'; ?><br/> 
     
    <select id="off-campus" name="sport" class="item"  > 
 <option name="" value=""> -- Select Sport Type -- </option> 
<option  value="dfg">Formula 1</option> 
<option  value="dfrg">Footbal</option> 
<option  value="dfgf">Basketball</option> 
<option  value="rugby">Rugby</option> 
<option  value="cricket">Cricket</option> 
</select> 



<select id="in-campu" name="music"> 
 <option name=""  value ="">--Select  Music Type--</option> 
<option  value="tuiy">Concerts</option> 
<option  value="tfyrty" >Clubs</option> 
<option  value="rtyyt">Festival</option> 
<option  value="uyity">Opera</option> 

</select> 







    <select id="1" name="art" class="item"  > 
<option name="" value=""> -- Select Art & Theatre Type -- </option> 
<option  value="hjk">Comedy</option> 
<option   value=" gfhftgh">Drama</option> 
<option  value="ioiui">Museus</option> 
</select> 


</p> 



<p> 
    <input type="submit" name="Submit" value="Submit"> 
</p> 
</form>
</body>
</html>