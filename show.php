<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("section").hide(1000);
  });
});
</script>
</head>
<body>
<button>Hide</button>
<div id="sidebar">
This is a paragraph with little content.
This is another small paragraph.
</div>

<div> 
<section>this is test</section></div>
</body>
</html>
