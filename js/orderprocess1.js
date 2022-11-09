$(function(){



$('.progress_result').animate({width: '4%'},420);   

$('#orderprocess_cake_btn1').prop('disabled',true);
$('#orderprocess_cake_btn2').prop('disabled',true);
$('#orderprocess_cake_btn3').prop('disabled',true);
$('#orderprocess_cake_btn4').prop('disabled',true);
$('#orderprocess_cake_btn5').prop('disabled',true);

// $('#phoneVerify').prop('disabled',true);
// $('#emailVerify').prop('disabled',true);
// $('#phoneAnotherVerify').prop('disabled',true);
// $('#emailAnotherVerify').prop('disabled',true);

$('#process1').click(function(){
    $('#productOptionChooseGroup').css('display','flex');
    $('#orderListDateTimeGroup').css('display','none');
    $('#orderSummaryDateTimeGroup').css('display','none');

    $('.progress_result').animate({width: '4%'},420);  

    $('#processTitle1').css('color','#34302E');
    $('#processTitleNum1').removeClass('process_title_inactive_num');
    $('#processTitleNum1').addClass('process_title_active_num');
    
    $('#processTitle2').css('color','#A9A29E');
    $('#processTitleNum2').removeClass('process_title_active_num');
    $('#processTitleNum2').addClass('process_title_inactive_num');

    $('#processTitle3').css('color','#A9A29E');
    $('#processTitleNum3').removeClass('process_title_active_num');
    $('#processTitleNum3').addClass('process_title_inactive_num');
});

$('#process2').click(function(){
    $('#productOptionChooseGroup').css('display','none');
    $('#orderListDateTimeGroup').css('display','flex');
    $('#orderSummaryDateTimeGroup').css('display','none');

    $('.progress_result').animate({width: '40%'},420);

    $('#orderListDateTimeGroup').css('display','flex');

    $('#processTitle1').css('color','#A9A29E');
    $('#processTitleNum1').removeClass('process_title_active_num');
    $('#processTitleNum1').addClass('process_title_inactive_num');
    
    $('#processTitle2').css('color','#34302E');
    $('#processTitleNum2').removeClass('process_title_inactive_num');
    $('#processTitleNum2').addClass('process_title_active_num');

    $('#processTitle3').css('color','#A9A29E');
    $('#processTitleNum3').removeClass('process_title_active_num');
    $('#processTitleNum3').addClass('process_title_inactive_num');
});

$('#process3').click(function(){

    $('#productOptionChooseGroup').css('display','none');
    $('#orderListDateTimeGroup').css('display','none');
    $('#orderSummaryDateTimeGroup').css('display','flex');

    $('.progress_result').animate({width: '70%'},420);

    $('#processTitle1').css('color','#A9A29E');
    $('#processTitleNum1').removeClass('process_title_active_num');
    $('#processTitleNum1').addClass('process_title_inactive_num');
    
    $('#processTitle2').css('color','#A9A29E');
    $('#processTitleNum2').removeClass('process_title_active_num');
    $('#processTitleNum2').addClass('process_title_inactive_num');

    $('#processTitle3').css('color','#34302E');
    $('#processTitleNum3').removeClass('process_title_inactive_num');
    $('#processTitleNum3').addClass('process_title_active_num');
});

$('#orderprocess_cake_btn1').click(function(){
    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","flex");
    $('.progress_result').animate({width: '8%'},420);
});

$('#orderprocess_cake_btn2').click(function(){
    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","none");
    $('#messageGift').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","none");
    $('#paginationBtn3').css("display","flex");
    $('.progress_result').animate({width: '16%'},420);      
});

$('#orderprocess_cake_btn3').click(function(){
    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","none");
    $('#messageGift').css("display","none");
    $('#messageBakery').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","none");
    $('#paginationBtn3').css("display","none");
    $('#paginationBtn4').css("display","flex");
    $('.progress_result').animate({width: '24%'},420);      
});

$('#orderprocess_cake_btn4').click(function(){
    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","none");
    $('#messageGift').css("display","none");
    $('#productOptionChooseGroup').css("display","none");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","none");
    $('#paginationBtn3').css("display","none");
    $('#paginationBtn4').css("display","none");
    $('#paginationBtn5').css("display","flex");
    $('.progress_result').animate({width: '40%'},420);

    $('#orderListDateTimeGroup').css('display','flex');

    $('#processTitle1').css('color','#A9A29E');
    $('#processTitleNum1').removeClass('process_title_active_num');
    $('#processTitleNum1').addClass('process_title_inactive_num');

    $('#processTitle2').css('color','#34302E');
    $('#processTitleNum2').removeClass('process_title_inactive_num');
    $('#processTitleNum2').addClass('process_title_active_num');
});

$('#orderprocess_cake_btn5').click(function(){
    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","none");
    $('#messageGift').css("display","none");
    $('#messageBakery').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","none");
    $('#paginationBtn3').css("display","none");
    $('#paginationBtn4').css("display","none");
    $('#paginationBtn5').css("display","flex");
    $('.progress_result').animate({width: '70%'},420);
    
    $('#processTitle2').css('color','#A9A29E');
    $('#processTitleNum2').removeClass('process_title_active_num');
    $('#processTitleNum2').addClass('process_title_inactive_num');

    $('#processTitle3').css('color','#34302E');
    $('#processTitleNum3').removeClass('process_title_inactive_num');
    $('#processTitleNum3').addClass('process_title_active_num');
});

$('#servingOptionEdit').click(function(){
    $('#productOptionChooseGroup').css('display','flex');
    $('#orderListDateTimeGroup').css('display','none');
});

$('#flavorOptionEdit').click(function(){
    $('#productOptionChooseGroup').css('display','flex');
    $('#orderListDateTimeGroup').css('display','none');

    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","flex");
    $('.progress_result').animate({width: '8%'},420);  

});

$('#messageGiftOptionEdit').click(function(){
    $('#productOptionChooseGroup').css('display','flex');
    $('#orderListDateTimeGroup').css('display','none');

    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","none");
    $('#messageGift').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","none");
    $('#paginationBtn3').css("display","flex");
    $('.progress_result').animate({width: '16%'},420); 
    
});

$('#messageBakeryOptionEdit').click(function(){
    $('#productOptionChooseGroup').css('display','flex');
    $('#orderListDateTimeGroup').css('display','none');

    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","none");
    $('#messageGift').css("display","none");
    $('#messageBakery').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","none");
    $('#paginationBtn3').css("display","none");
    $('#paginationBtn4').css("display","flex");
    $('.progress_result').animate({width: '24%'},420); 
});

$('#finalSizeEdit').click(function(){
    $('#productOptionChooseGroup').css('display','flex');
    $('#orderListDateTimeGroup').css('display','none');
    $('#orderSummaryDateTimeGroup').css('display','none');
    $('.progress_result').animate({width: '8%'},420); 
});
$('#finalFalvorEdit').click(function(){
    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","flex");

    $('#orderSummaryDateTimeGroup').css('display','none');
    $('.progress_result').animate({width: '8%'},420);
});

$('#finalMessageGiftEdit').click(function(){
    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","none");
    $('#messageGift').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","none");
    $('#paginationBtn3').css("display","flex");

    $('#orderSummaryDateTimeGroup').css('display','none');
    $('.progress_result').animate({width: '16%'},420);  
});

$('#finalMessageBakeryEdit').click(function(){
    $('#chooseSize').css("display","none");
    $('#chooseFlavor').css("display","none");
    $('#messageGift').css("display","none");
    $('#messageBakery').css("display","flex");
    $('#paginationBtn1').css("display","none");
    $('#paginationBtn2').css("display","none");
    $('#paginationBtn3').css("display","none");
    $('#paginationBtn4').css("display","flex");

    $('#orderSummaryDateTimeGroup').css('display','none');
    $('.progress_result').animate({width: '24%'},420);
});


$(".process_form").click(function(){

    var value12Checked = $("input[id=12inch]:checked").val();
    var value10Checked = $("input[id=10inch]:checked").val();
    var value8Checked = $("input[id=8inch]:checked").val();

    var valueChocolate = $("input[id=chocolate]:checked").val();
    var valueWhite = $("input[id=white]:checked").val();
    var valueMix = $("input[id=mix]:checked").val(); 

    var valueNoMessageGift = $("input[id=noMessageGift]:checked").val();
    var valueYesMessageGift = $("input[id=yesMessageGift]:checked").val();

    var valueNoMessageBakery = $("input[id=noMessageBakery]:checked").val();
    var valueYesMessageBakery = $("input[id=yesMessageBakery]:checked").val();
    
    

    if(value12Checked == '12inch'){
    $('#size12').css({"color":"inherit", "borderColor":"inherit"});
    $('#serving32').css("color","inherit");
    $('#price80').css("color","inherit");


    $('#size10').css({"color":"#A9A29E", "borderColor":"#A9A29E"});
    $('#serving24').css("color","#A9A29E");
    $('#price60').css("color","#A9A29E");


    $('#size8').css({"color":"#A9A29E", "borderColor":"#A9A29E"});       
    $('#serving16').css("color","#A9A29E");
    $('#price50').css("color","#A9A29E");


    $('#orderprocess_cake_btn1').prop('disabled',false);
    $('#orderprocess_cake_btn1').removeClass('inactive_btn');
    $('#orderprocess_cake_btn1').addClass('btn_process');
    }
        
    if(value10Checked == '10inch'){
    $('#size10').css({"color":"inherit", "borderColor":"inherit"});
    $('#serving24').css("color","inherit");
    $('#price60').css("color","inherit");


    $('#size12').css({"color":"#A9A29E", "borderColor":"#A9A29E"});
    $('#serving32').css("color","#A9A29E");
    $('#price80').css("color","#A9A29E");


    $('#size8').css({"color":"#A9A29E", "borderColor":"#A9A29E"});    
    $('#serving16').css("color","#A9A29E");        
    $('#price50').css("color","#A9A29E");

    $('#orderprocess_cake_btn1').prop('disabled',false);
    $('#orderprocess_cake_btn1').removeClass('inactive_btn');
    $('#orderprocess_cake_btn1').addClass('btn_process');
    }
    
    if(value8Checked == '8inch'){
    $('#size8').css({"color":"inherit", "borderColor":"inherit"});
    $('#serving16').css("color","inherit");
    $('#price50').css("color","inherit");


    $('#size10').css({"color":"#A9A29E", "borderColor":"#A9A29E"});
    $('#serving24').css("color","#A9A29E");
    $('#price60').css("color","#A9A29E");


    $('#size12').css({"color":"#A9A29E", "borderColor":"#A9A29E"});
    $('#serving32').css("color","#A9A29E");
    $('#price80').css("color","#A9A29E");


    $('#orderprocess_cake_btn1').prop('disabled',false);
    $('#orderprocess_cake_btn1').removeClass('inactive_btn');
    $('#orderprocess_cake_btn1').addClass('btn_process');
    }
        

    if(valueChocolate == 'chocolate'){
    $('#flavor1').css("color","inherit");
    $('#productImg1').css("opacity","inherit");

    $('#flavor2').css("color","#A9A29E");
    $('#productImg2').css("opacity","0.4");

    $('#flavor3').css("color","#A9A29E");
    $('#productImg3').css("opacity","0.4");

    $('#orderprocess_cake_btn2').prop('disabled',false);
    $('#orderprocess_cake_btn2').removeClass('inactive_btn');
    $('#orderprocess_cake_btn2').addClass('btn_process');
            
    }

    if(valueWhite == 'white'){
    $('#flavor2').css("color","inherit");
    $('#productImg2').css("opacity","1");

    $('#flavor1').css("color","#A9A29E");
    $('#productImg1').css("opacity","0.4");

    $('#flavor3').css("color","#A9A29E");
    $('#productImg3').css("opacity","0.4");

    $('#orderprocess_cake_btn2').prop('disabled',false);
    $('#orderprocess_cake_btn2').removeClass('inactive_btn');
    $('#orderprocess_cake_btn2').addClass('btn_process');
    }
        
    if(valueMix == 'mix'){
    $('#flavor3').css("color","inherit");
    $('#productImg3').css("opacity","1");

    $('#flavor2').css("color","#A9A29E");
    $('#productImg2').css("opacity","0.4");

    $('#flavor1').css("color","#A9A29E");
    $('#productImg1').css("opacity","0.4");

    $('#orderprocess_cake_btn2').prop('disabled',false);
    $('#orderprocess_cake_btn2').removeClass('inactive_btn');
    $('#orderprocess_cake_btn2').addClass('btn_process');
    }

    if(valueNoMessageGift == "no_message_gift"){
        $('#noSelectGiftMessage').css("color","inherit");
        $('#messageNoGiftImg').css("opacity","1");

        $('#yesSelectGiftMessage').css("color","#A9A29E");
        $("#messageYesGiftImg").css("opacity","0.4");

        $('#orderprocess_cake_btn3').prop('disabled',false);
        $('#orderprocess_cake_btn3').removeClass('inactive_btn');
        $('#orderprocess_cake_btn3').addClass('btn_process');
    };
        
    if(valueYesMessageGift == "yes_message_gift"){

    $('#yesSelectGiftMessage').css("color","inherit");
    $("#messageYesGiftImg").css("opacity","1");

    $('#noSelectGiftMessage').css("color","#A9A29E");
    $('#messageNoGiftImg').css("opacity","0.4");


           
    $('#noMessageGroupGift').css('display','none');
    $('#yesMessageGroupGift').css('display','none');
    $('#makeMessageGiftDetails').css({'display':'flex','flexDirection':'column'});

    $('#orderprocess_cake_btn3').prop('disabled',false);
    $('#orderprocess_cake_btn3').removeClass('inactive_btn');
    $('#orderprocess_cake_btn3').addClass('btn_process');
            
    };

    if(valueNoMessageBakery == "no_message_bakery"){
        $('#noMsgSelectBakery').css("color","inherit");
        $('#noMsgBakeryImg').css("opacity","1");

        $('#yesMsgSelectBakery').css("color","#A9A29E");
        $("#yesMsgBakeryImg").css("opacity","0.4");

        $('#orderprocess_cake_btn4').prop('disabled',false);
        $('#orderprocess_cake_btn4').removeClass('inactive_btn');
        $('#orderprocess_cake_btn4').addClass('btn_process');
    };
        
    if(valueYesMessageBakery == "yes_message_bakery"){

    $('#yesMsgSelectBakery').css("color","inherit");
    $("#yesMsgBakeryImg").css("opacity","1");

    $('#noMsgSelectBakery').css("color","#A9A29E");
    $('#noMsgBakeryImg').css("opacity","0.4");


           
    $('#noMessageGroupBakery').css('display','none');
    $('#yesMessageGroupBakery').css('display','none');
    $('#makeMessageBakeryDetails').css({'display':'flex','flexDirection':'column'});

    $('#orderprocess_cake_btn4').prop('disabled',false);
    $('#orderprocess_cake_btn4').removeClass('inactive_btn');
    $('#orderprocess_cake_btn4').addClass('btn_process');
            
    };

    $('#makeOnMessageGift').blur(function(){

    $('#noSelectGiftMessage').css("color","#A9A29E");
    $("#messageNoGiftImg").css("opacity","0.4");

    $('#yesSelectGiftMessage').css("color","#A9A29E");
    $('#messageYesGiftImg').css("opacity","0.4");

    $('#noMessageGroupGift').css('display','flex');
    $('#yesMessageGroupGift').css('display','flex');
    $('#makeMessageGiftDetails').css('display','none');

    $('#orderprocess_cake_btn3').prop('disabled',true);
    $('#orderprocess_cake_btn3').removeClass('inactive_btn');
    $('#orderprocess_cake_btn3').addClass('btn_process');
    });

  $('#makeOnMessageBakery').blur(function(){

    $('#noMsgSelectBakery').css("color","#A9A29E");
    $("#noMsgBakeryImg").css("opacity","0.4");
    
    $('#yesMsgSelectBakery').css("color","#A9A29E");
    $('#yesMsgBakeryImg').css("opacity","0.4");
    
    $('#noMessageGroupBakery').css('display','flex');
    $('#yesMessageGroupBakery').css('display','flex');
    $('#makeMessageBakeryDetails').css('display','none');
    
    $('#orderprocess_cake_btn4').prop('disabled',true);
    $('#orderprocess_cake_btn4').removeClass('inactive_btn');
    $('#orderprocess_cake_btn4').addClass('btn_process');
    });
            

});

$('#addPickupPersonBtn').click(function(){
    $('#addAnotherPickup').slideToggle(180);
    $('#addPickupIcon').toggleClass('subtract_ico');
});

    

$(".summary_checkout_btn_member").click(function() {

    var nameCheck = $('#fullName').val();

    if(nameCheck == ""){
        $('#errorMessageName').css('display','block');
        return false;
    };

    var phoneNumber = $('#phone_number').val();
    var phoneNumberRegex = /^[0-9]{3}-[0-9]{4}-[0-9]{4}$/;

    if(!phoneNumberRegex == phoneNumber) {
        $('#errorMessagePhone').css('display','block');
        return false;
    };

    var emailCheck = $("#orderEmail1").val();
    var emailReg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

    if(!emailReg == emailCheck){
        $('#errorMessageEmail').css('display','block');
        return false;
    };

    window.open('order_confirm.html');
    
});

});

