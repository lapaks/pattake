//books//

$(document).ready(function(){
$("#add_books").click(function(){
$(".add_new_books, #save_books, #cancle_books").fadeIn("slow");
$("#edit_books, #add_books").hide("fast");
$("#my_books,#books_header").fadeOut("slow");

$("#cancle_books").click(function(){
$("#add_books").show("fast");
$("#books_header, #my_books").fadeIn("slow");
$("#cancle_books, #save_books").hide("fast");
$(".add_new_books").fadeOut("slow");
});
});
});

//profile//
$(document).ready(function(){
jQuery("#form input, select").prop("disabled" , true).css("background-color", "#FEF5F5");
$("#edit_profile").click(function(){
$("#form input, select").prop("disabled" , false).css("background-color", "#FFFFFF");
$("#input_email").prop("disabled" , true).css("background-color", "#FEF5F5");
$("#message_box, #edit_profile").hide('fast');
$("#cancle_profile, #save_profile").show("fast");
$("#cancle_profile").click(function(){
	$("#form input, select").prop("disabled" , true).css("background-color", "#FEF5F5");
	$("#edit_profile").show("fast");
	$("#cancle_profile, #save_profile").hide("fast");
});
});
});



//my library//

$(document).ready(function(){
$("#click_profile").click(function(){
$("#profile2").fadeIn('slow');
$("#books2, #borrowed2, #lend2, #followers2, #following2, #books3").fadeOut('slow');
$("#head_books,#head_borrowed, #head_lend,#head_followers, #head_followings").fadeTo("slow", 0.22);
$("#head_profile").fadeTo("slow", 1);

  });
});


$(document).ready(function(){
$("#click_books").click(function(){
$("#books2, #books3").fadeIn('slow');
$("#profile2, #borrowed2, #lend2, #followers2, #following2").fadeOut('slow');
$("#head_profile,#head_borrowed, #head_lend,#head_followers, #head_followings").fadeTo("slow", 0.22);
$("#head_books").fadeTo("slow", 1);
  });
  });

$(document).ready(function(){
$("#click_borrowed").click(function(){
$("#borrowed2").fadeIn('slow');
$("#profile2, #books2, #lend2, #followers2, #following2, #books3").fadeOut('slow');
$("#head_profile,#head_books, #head_lend,#head_followers, #head_followings").fadeTo("slow", 0.22);
$("#head_borrowed").fadeTo("slow", 1);
  });
  });

$(document).ready(function(){
$("#click_lend").click(function(){
$("#lend2").fadeIn('slow');
$("#profile2, #books2, #borrowed2, #followers2, #following2, #books3").fadeOut('slow');
$("#head_profile,#head_books, #head_borrowed,#head_followers, #head_followings").fadeTo("slow", 0.22);
$("#head_lend").fadeTo("slow", 1);
  });
  });

$(document).ready(function(){
$("#click_followers").click(function(){
$("#followers2").fadeIn('slow');
$("#profile2, #books2, #borrowed2, #lend2, #following2, #books3").fadeOut('slow');
$("#head_profile,#head_books, #head_borrowed,#head_lend, #head_followings").fadeTo("slow", 0.22);
$("#head_followers").fadeTo("slow", 1);
  });
  });

$(document).ready(function(){
$("#click_followings").click(function(){
$("#following2").fadeIn('slow');
$("#profile2, #books2, #borrowed2, #lend2, #followers2, #books3").fadeOut('slow');
$("#head_profile,#head_books, #head_borrowed,#head_lend, #head_followers").fadeTo("slow", 0.22);
$("#head_followings").fadeTo("slow", 1);
  });
});
