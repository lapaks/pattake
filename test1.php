<html>
    <head>
        <title>Sum Html Textbox Values using jQuery/JavaScript</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    </head>
    <body>
    <div>
<table width="300px" border="1" style="border-collapse:collapse;background-color:#E8DCFF">
    <tr>
        <td width="40px">1</td>
        <td>Butter</td>
        <td><input class="txt" type="text" name="txt"/></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Cheese</td>
        <td><input class="txt" type="text" name="txt"/></td>
    </tr>
    <tr>

    </tr>
    <tr id="summation">
        <td>&nbsp;</td>
        <td align="right">Sum :</td>
        <td align="center"><span id="sum">0</span></td>
    </tr>
</table>
 
 
<script>
    $(document).ready(function(){
 
        //iterate through each textboxes and add keyup
        //handler to trigger sum event
        $(".txt").each(function() {
 
            $(this).keyup(function(){
                calculateSum();
            });
        });
 
    });
 
    function calculateSum() {
 
        var sum = 0;
        //iterate through each textboxes and add the values
        $(".txt").each(function() {
 
            //add only if the value is number
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
 
        });
        //.toFixed() method will roundoff the final sum to 2 decimal places
        $("#sum").html(sum.toFixed(2));
    }
</script>
</div>
</body>
</html>