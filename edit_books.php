<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<?php include ('connect.php'); 
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
</form>
