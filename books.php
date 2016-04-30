<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="style_pattake.css" />
<div class="my_account_edit">
    <a id="edit_books" style="display:none" href="#">Edit</a>
    <a id="add_books" href="#" >Add Books</a>
    <a id="cancle_books" href="#" style="display:none">Cancle</a><br />
    <table id="books_header" width="820px">
      <tr>
        <td width="10%">Book ID</td>
        <td width="30%">Book Name</td>
        <td width="25%">Author</td>
        <td width="15%">Published Date</td>
        <td width="10%">Edition</td>
        <td width="5%">Sale</td>
        <td width="5%"></td>
      </tr>
</table>
  <?php
			if ( isset ( $_SESSION['insert_books'] ) ) {
			echo '<span style="color:#E51937">Record Updated Sucessfully!</span>';
			unset($_SESSION['insert_books']);
			}?>
    
</div>
<div class="add_new_books" >

<form action="insert_books.php" method="post">

<label>Book ID</label><input type="text" name="book_id" /><br />

  <label>Book Name</label>
  <input type="text" name="book_name" /><br />

  <label>Author</label>
  <input type="text" name="book_author"  /><br />

  <label>Published on</label>
  <input type="text" name="book_published_date" /><br />

  <label>Edition</label>
  <input type="text" name="book_edition" /><br />

  <label>Category</label>
  <input type="text" name="book_category" /><br />

  <label>Image</label>
  <input type="text" name="book_image" /><br />

  <label>For Sale</label>
  <input type="text" name="book_for_sale" /><br />
<input type="submit" name="submit" id="save_books" value="Save" style="width:70px; display:none ">
</form>
 

</div>

<div id="my_books" class="clearfix">

<?php 
 mysql_connect("localhost", "lapaks", "pattake") or die(mysql_error()); 
 mysql_select_db("lapaks") or die(mysql_error()); 
 $data = mysql_query("SELECT * FROM books where user_id = '".$_SESSION['login_user']."'") 
 or die(mysql_error()); 
 echo "<table width=820px; > "; 
 
 while($info = mysql_fetch_row($data)){
  echo
  ("<tr>
  <td width='10%'>$info[1]</td>
  <td width='30%'>$info[2]</td>
  <td width='25%'>$info[3]</td>
  <td width='15%'>$info[4]</td>
  <td width='10%'>$info[5]</td>
  <td width='5%'>$info[8]</td>
  <td width='5%'><a href = 'edit_books2.php?id=".$info[1]."'>Edit</a> </td>
  </tr>");
}
?>
</table>

</div>
<p>&nbsp;</p>
