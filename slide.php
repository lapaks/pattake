<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script> 
$(document).ready(function(){
  $("#signup").click(function(){
    $("#panel").slideDown("slow");
  });
});
</script>
 
<style type="text/css"> 
#panel,#signup
{
padding:5px;
text-align:left;
width:300px;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
}
#panel
{
padding:0px;
display:none;
}
</style>
</head>
<body>
 
<div id="signup">signup</div>
<div id="panel">Hello world!</div>

</body>
</html>