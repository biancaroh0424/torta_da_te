
$(document).ready(function(){
var wishButton = $('.wishlist');
var horizWish = $('.horiz_wish');


$(wishButton).click(function(){
    $(this).toggleClass('wishlist_added');
});

$(horizWish).click(function(){
    $(this).toggleClass('horiz_wish_added');
});



$('#accAdd').click(function(){
    $(this).css('display','none');
    $('#counterBtn1').css('display','flex');
});

$('#subtract1').click(function(e){

    e.preventDefault();
    var stat = $('#result1').text();
    var statCount = $('#sumcount').text();
    var num = parseInt(stat,10);
    num--;

    if(num <= 0){
    num = 1;
    }
    $('#result1').text(num);
    $(statCount).text(num);
});


$('#add1').click(function(e){
    e.preventDefault();
    var stat = $('#result1').text();
    var statCount = $('#sumcount').text();
    var num = parseInt(stat,10);
    num++;

   if(num > 99){
   num=99;
   }
   $('#result1').text(num);
   $(statCount).text(num);
   });

$('#accAdd2').click(function(){
    $(this).css('display','none');
    $('#counterBtn2').css('display','flex');
});

$('#subtract2').click(function(e){
    e.preventDefault();
    var stat = $('#result2').text();
    var num = parseInt(stat,10);
    num--;
    if(num <= 0){
    num = 1;
    }
    $('#result2').text(num);
    });
    $('#add2').click(function(e){
    e.preventDefault();
    var stat = $('#result2').text();
    var num = parseInt(stat,10);
    num++;

   if(num > 99){
   num=99;
   }
   $('#result2').text(num);
   
   });

   $('#accAdd3').click(function(){
    $(this).css('display','none');
    $('#counterBtn3').css('display','flex');
});

$('#subtract3').click(function(e){
    e.preventDefault();
    var stat = $('#result3').text();
    var num = parseInt(stat,10);
    num--;
    if(num <= 0){
    num = 1;
    }
    $('#result3').text(num);
    });
    $('#add3').click(function(e){
    e.preventDefault();
    var stat = $('#result3').text();
   var num = parseInt(stat,10);
   num++;

   if(num > 99){
   num=99;
   }
   $('#result3').text(num);
   
   });

   $('#accAdd4').click(function(){
    $(this).css('display','none');
    $('#counterBtn4').css('display','flex');
});

$('#subtract4').click(function(e){
    e.preventDefault();
    var stat = $('#result4').text();
    var num = parseInt(stat,10);
    num--;
    if(num <= 0){
    num = 1;
    }
    $('#result4').text(num);
    });
    $('#add4').click(function(e){
    e.preventDefault();
    var stat = $('#result4').text();
   var num = parseInt(stat,10);
   num++;

   if(num > 99){
   num=99;
   }
   $('#result4').text(num);
   
   });


   $('#accAdd5').click(function(){
    $(this).css('display','none');
    $('#counterBtn5').css('display','flex');
});

   $('#subtract5').click(function(e){
    e.preventDefault();
    var stat = $('#result5').text();
    var num = parseInt(stat,10);
    num--;
    if(num <= 0){
    num = 1;
    }
    $('#result5').text(num);
    });
    $('#add5').click(function(e){
    e.preventDefault();
    var stat = $('#result5').text();
   var num = parseInt(stat,10);
   num++;

   if(num > 99){
   num=99;
   }
   $('#result5').text(num);
   
   });

   $('#accAdd6').click(function(){
    $(this).css('display','none');
    $('#counterBtn6').css('display','flex');
});

   $('#subtract6').click(function(e){
    e.preventDefault();
    var stat = $('#result6').text();
    var num = parseInt(stat,10);
    num--;
    if(num <= 0){
    num = 1;
    }
    $('#result6').text(num);
    });
    $('#add6').click(function(e){
    e.preventDefault();
    var stat = $('#result6').text();
   var num = parseInt(stat,10);
   num++;

   if(num > 99){
   num=99;
   }
   $('#result6').text(num);
   
   });


   $('#accAdd7').click(function(){
    $(this).css('display','none');
    $('#counterBtn7').css('display','flex');
});

   $('#subtract7').click(function(e){
    e.preventDefault();
    var stat = $('#result7').text();
    var num = parseInt(stat,10);
    num--;
    if(num <= 0){
    num = 1;
    }
    $('#result7').text(num);
    });
    $('#add7').click(function(e){
    e.preventDefault();
    var stat = $('#result7').text();
   var num = parseInt(stat,10);
   num++;

   if(num > 99){
   num=99;
   }
   $('#result7').text(num);
   
   });


   $('#accAdd8').click(function(){
    $(this).css('display','none');
    $('#counterBtn8').css('display','flex');
});

   $('#subtract8').click(function(e){
    e.preventDefault();
    var stat = $('#result8').text();
    var num = parseInt(stat,10);
    num--;
    if(num <= 0){
    num = 1;
    }
    $('#result8').text(num);
    });
    $('#add8').click(function(e){
    e.preventDefault();
    var stat = $('#result8').text();
   var num = parseInt(stat,10);
   num++;

   if(num > 99){
   num=99;
   }
   $('#result8').text(num);
   
   });


   $('#accAdd9').click(function(){
    $(this).css('display','none');
    $('#counterBtn9').css('display','flex');
});

   $('#subtract9').click(function(e){
    e.preventDefault();
    var stat = $('#result9').text();
    var num = parseInt(stat,10);
    num--;
    if(num <= 0){
    num = 1;
    }
    $('#result9').text(num);
    });
    $('#add9').click(function(e){
    e.preventDefault();
    var stat = $('#result9').text();
   var num = parseInt(stat,10);
   num++;

   if(num > 99){
   num=99;
   }
   $('#result9').text(num);
   
   });
   

});





// $(".card_order_btn:first").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:first').css("display") === "none"){
//     $('.card_order_btn_active:first').css("display","flex");
//     };
    

// });

// $(".card_order_btn:eq(1)").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:eq(1)').css("display") === "none"){
//     $('.card_order_btn_active:eq(1)').css("display","flex");
//     };
    

// });

// $(".card_order_btn:eq(2)").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:eq(2)').css("display") === "none"){
//     $('.card_order_btn_active:eq(2)').css("display","flex");
//     };
    

// });

// $(".card_order_btn2:eq(3)").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn2:eq(3)').css("display") === "none"){
//     $('.card_order_btn_active:eq(3)').css("display","flex");
//     };
    

// });

// $(".card_order_btn:eq(4)").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:eq(4)').css("display") === "none"){
//     $('.card_order_btn_active:eq(4)').css("display","flex");
//     };
    

// });

// $(".card_order_btn:eq(3)").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:eq(3)').css("display") === "none"){
//     $('.card_order_btn_active:eq(3)').css("display","flex");
//     };
    

// });

// $(".card_order_btn:eq(4)").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:eq(4)').css("display") === "none"){
//     $('.card_order_btn_active:eq(4)').css("display","flex");
//     };
    

// });

// $(".card_order_btn:eq(5)").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:eq(5)').css("display") === "none"){
//     $('.card_order_btn_active:eq(5)').css("display","flex");
//     };
    

// });

// $(".card_order_btn:eq(6)").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:eq(6)').css("display") === "none"){
//     $('.card_order_btn_active:eq(6)').css("display","flex");
//     };
    

// });

// $(".card_order_btn:eq(7)").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:eq(7)').css("display") === "none"){
//     $('.card_order_btn_active:eq(7)').css("display","flex");
//     };
    

// });
// $(".card_order_btn:last").click(function(){

//     $(this).css("display","none");

//     if ($('.card_order_btn:last').css("display") === "none"){
//     $('.card_order_btn_active:last').css("display","flex");
//     };
    

// });








// });


// $(function(){
//     $('.subtract_product:eq(1)').click(function(e){
//     e.preventDefault();
//     var stat = $('.counter_card_order_btn_active:eq(1)').text();
//     var num = parseInt(stat,10);
//     num--;
//     if(num <= 0){
//     num = 1;
//     }
//     $('.counter_card_order_btn_active:eq(1)').text(num);
//     });
//     $('.add_product:eq(1)').click(function(e){
//     e.preventDefault();
//     var stat = $('.counter_card_order_btn_active:eq(1)').text();
//     var num = parseInt(stat,10);
//     num++;
    
//     if(num > 5){
//     num=5;
//     }
//     $('.counter_card_order_btn_active:eq(1)').text(num);
    
//     });


// });


// $(function(){
//     $('.subtract_product:eq(2)').click(function(e){
//     e.preventDefault();
//     var stat = $('.counter_card_order_btn_active:eq(2)').text();
//     var num = parseInt(stat,10);
//     num--;
//     if(num <= 0){
//     num = 1;
//     }
//     $('.counter_card_order_btn_active:eq(2)').text(num);
//     });
//     $('.add_product:eq(2)').click(function(e){
//     e.preventDefault();
//     var stat = $('.counter_card_order_btn_active:eq(2)').text();
//     var num = parseInt(stat,10);
//     num++;
    
//     if(num > 5){
//     num=5;
//     }
//     $('.counter_card_order_btn_active:eq(2)').text(num);
    
//     });// $(function(){
//     $('.subtract_product:eq(2)').click(function(e){
//     e.preventDefault();
//     var stat = $('.counter_card_order_btn_active:eq(2)').text();
//     var num = parseInt(stat,10);
//     num--;
//     if(num <= 0){
//     num = 1;
//     }
//     $('.counter_card_order_btn_active:eq(2)').text(num);
//     });
//     $('.add_product:eq(2)').click(function(e){
//     e.preventDefault();
//     var stat = $('.counter_card_order_btn_active:eq(2)').text();
//     var num = parseInt(stat,10);
//     num++;
    
//     if(num > 5){
//     num=5;
//     }
//     $('.counter_card_order_btn_active:eq(2)').text(num);
    
//     });




// });






