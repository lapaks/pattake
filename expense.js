// JavaScript Document

//tabs

/*
$(function() {
  $( "#tabs" ).tabs();
  });

//sum
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
	*/
	
 $(document).ready(function () {
    $('input.txt').bind('keypress', function (e) {
        return (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57) && e.which != 46) ? false : true;
    });
});
$(function() {
  $( "#tabs" ).tabs();
  });


//validate drop down
function validate()
{
   if((document.getElementById("month").value == "")||(document.getElementById("year").value == ""))
   {
      alert("MONTH & YEAR must be selected !"); // prompt user
	  return false;
      document.getElementById("month").focus(); //set focus back to control
      return true;
   }
}

//drop down option
$(document).ready(function(){
$(".dropdown,#itemgrocery,#itemcar,#itement_out_living,#itemaccomodation,#itemmiscellaneous").hide();
$("#firstDropdown").on("change", function() {
    $(".dropdown").hide();
    var value = $("#firstDropdown").val();
    $("#item" + value).show();
	$("#save" + value).show();
	
});
});