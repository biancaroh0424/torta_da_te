$(function(){


$('#orderprocess_cake_btn5').prop('disabled',true);

$(".time_slot_group").click(function(){


    var pickTime1000 = $("input[id=time_pick_detail_1000]:checked").val();
    var pickTime1030 = $("input[id=time_pick_detail_1030]:checked").val();
    var pickTime1100 = $("input[id=time_pick_detail_1100]:checked").val();
    var pickTime1130 = $("input[id=time_pick_detail_1130]:checked").val();
    var pickTime1200 = $("input[id=time_pick_detail_1200]:checked").val();
    var pickTime1230 = $("input[id=time_pick_detail_1230]:checked").val();
    var pickTime1300 = $("input[id=time_pick_detail_1300]:checked").val();
    var pickTime1330 = $("input[id=time_pick_detail_1330]:checked").val();
    var pickTime1400 = $("input[id=time_pick_detail_1400]:checked").val();
    var pickTime1430 = $("input[id=time_pick_detail_1430]:checked").val();
    var pickTime1500 = $("input[id=time_pick_detail_1500]:checked").val();
    var pickTime1530 = $("input[id=time_pick_detail_1530]:checked").val();
    var pickTime1600 = $("input[id=time_pick_detail_1600]:checked").val();
    var pickTime1630 = $("input[id=time_pick_detail_1630]:checked").val();
    var pickTime1700 = $("input[id=time_pick_detail_1700]:checked").val();
    var pickTime1730 = $("input[id=time_pick_detail_1730]:checked").val();
    var pickTime1800 = $("input[id=time_pick_detail_1800]:checked").val();
    var pickTime1830 = $("input[id=time_pick_detail_1830]:checked").val();
    var pickTime1900 = $("input[id=time_pick_detail_1900]:checked").val();
    var pickTime1930 = $("input[id=time_pick_detail_1930]:checked").val();
    var pickTime2000 = $("input[id=time_pick_detail_2000]:checked").val();
    var pickTime2030 = $("input[id=time_pick_detail_2030]:checked").val();
    var pickTime2100 = $("input[id=time_pick_detail_2100]:checked").val();
    var pickTime2130 = $("input[id=time_pick_detail_2130]:checked").val();

    var pickTime2200 = $("input[id=time_pick_detail_2200]:checked").val();



   

    
if(pickTime1000 == '10:00'){
    $('.time_details:first').click(function(){
        $('.pick_time:first span').removeClass('time_inactive');
        $('.pick_time:first span').addClass("time_active");
        
        

    $('.pick_time:eq(1) span').removeClass('time_active');
    $('.pick_time:eq(2) span').removeClass('time_active');
    $('.pick_time:eq(3) span').removeClass('time_active');
    $('.pick_time:eq(4) span').removeClass('time_active');
    $('.pick_time:eq(5) span').removeClass('time_active');
    $('.pick_time:eq(6) span').removeClass('time_active');
    $('.pick_time:eq(7) span').removeClass('time_active');
    $('.pick_time:eq(8) span').removeClass('time_active');
    $('.pick_time:eq(9) span').removeClass('time_active');
    $('.pick_time:eq(10) span').removeClass('time_active');
    $('.pick_time:eq(11) span').removeClass('time_active');
    $('.pick_time:eq(12) span').removeClass('time_active');
    $('.pick_time:eq(13) span').removeClass('time_active');
    $('.pick_time:eq(14) span').removeClass('time_active');
    $('.pick_time:eq(15) span').removeClass('time_active');
    $('.pick_time:eq(16) span').removeClass('time_active');
    $('.pick_time:eq(17) span').removeClass('time_active');
    $('.pick_time:eq(18) span').removeClass('time_active');
    $('.pick_time:eq(19) span').removeClass('time_active');
    $('.pick_time:eq(20) span').removeClass('time_active');
    $('.pick_time:eq(21) span').removeClass('time_active');
    $('.pick_time:eq(22) span').removeClass('time_active');
    $('.pick_time:eq(23) span').removeClass('time_active');
    $('.pick_time:last span').removeClass('time_active');


    $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1030 == '10:30'){
    $('.time_details:eq(1)').click(function(){
        $('.pick_time:eq(1) span').removeClass('time_inactive');
        $('.pick_time:eq(1) span').addClass("time_active");

    $('.pick_time:first span').removeClass('time_active');
    $('.pick_time:eq(2) span').removeClass('time_active');
    $('.pick_time:eq(3) span').removeClass('time_active');
    $('.pick_time:eq(4) span').removeClass('time_active');
    $('.pick_time:eq(5) span').removeClass('time_active');
    $('.pick_time:eq(6) span').removeClass('time_active');
    $('.pick_time:eq(7) span').removeClass('time_active');
    $('.pick_time:eq(8) span').removeClass('time_active');
    $('.pick_time:eq(9) span').removeClass('time_active');
    $('.pick_time:eq(10) span').removeClass('time_active');
    $('.pick_time:eq(11) span').removeClass('time_active');
    $('.pick_time:eq(12) span').removeClass('time_active');
    $('.pick_time:eq(13) span').removeClass('time_active');
    $('.pick_time:eq(14) span').removeClass('time_active');
    $('.pick_time:eq(15) span').removeClass('time_active');
    $('.pick_time:eq(16) span').removeClass('time_active');
    $('.pick_time:eq(17) span').removeClass('time_active');
    $('.pick_time:eq(18) span').removeClass('time_active');
    $('.pick_time:eq(19) span').removeClass('time_active');
    $('.pick_time:eq(20) span').removeClass('time_active');
    $('.pick_time:eq(21) span').removeClass('time_active');
    $('.pick_time:eq(22) span').removeClass('time_active');
    $('.pick_time:eq(23) span').removeClass('time_active');
    $('.pick_time:last span').removeClass('time_active');



 $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1100 == '11:00'){
    $('.time_details:eq(2)').click(function(){
        $('.pick_time:eq(2) span').removeClass('time_inactive');
        $('.pick_time:eq(2) span').addClass("time_active");


        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1130 == '11:30'){
    $('.time_details:eq(3)').click(function(){
        $('.pick_time:eq(3) span').removeClass('time_inactive');
        $('.pick_time:eq(3) span').addClass("time_active");


        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
        $('#orderprocess_cake_btn5').addClass('btn_process');
    
        $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1200 == '12:00'){
    $('.time_details:eq(4)').click(function(){
        $('.pick_time:eq(4) span').removeClass('time_inactive');
        $('.pick_time:eq(4) span').addClass("time_active");

        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1230 == '12:30'){
    $('.time_details:eq(5)').click(function(){
        $('.pick_time:eq(5) span').removeClass('time_inactive');
        $('.pick_time:eq(5) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);


    });
};

if(pickTime1300 == '13:00'){
    $('.time_details:eq(6)').click(function(){
        $('.pick_time:eq(6) span').removeClass('time_inactive');
        $('.pick_time:eq(6) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1330 == '13:30'){
    $('.time_details:eq(7)').click(function(){
        $('.pick_time:eq(7) span').removeClass('time_inactive');
        $('.pick_time:eq(7) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
        $('#orderprocess_cake_btn5').addClass('btn_process');
    
        $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1400 == '14:00'){
    $('.time_details:eq(8)').click(function(){
        $('.pick_time:eq(8) span').removeClass('time_inactive');
        $('.pick_time:eq(8) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1430 == '14:30'){
    $('.time_details:eq(9)').click(function(){
        $('.pick_time:eq(9) span').removeClass('time_inactive');
        $('.pick_time:eq(9) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1500 == '15:00'){
    $('.time_details:eq(10)').click(function(){
        $('.pick_time:eq(10) span').removeClass('time_inactive');
        $('.pick_time:eq(10) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1530 == '15:30'){
    $('.time_details:eq(11)').click(function(){
        $('.pick_time:eq(11) span').removeClass('time_inactive');
        $('.pick_time:eq(11) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1600 == '16:00'){
    $('.time_details:eq(12)').click(function(){
        $('.pick_time:eq(12) span').removeClass('time_inactive');
        $('.pick_time:eq(12) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1630 == '16:30'){
    $('.time_details:eq(13)').click(function(){
        $('.pick_time:eq(13) span').removeClass('time_inactive');
        $('.pick_time:eq(13) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1700 == '17:00'){
    $('.time_details:eq(14)').click(function(){
        $('.pick_time:eq(14) span').removeClass('time_inactive');
        $('.pick_time:eq(14) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1730 == '17:30'){
    $('.time_details:eq(15)').click(function(){
        $('.pick_time:eq(15) span').removeClass('time_inactive');
        $('.pick_time:eq(15) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1800 == '18:00'){
    $('.time_details:eq(16)').click(function(){
        $('.pick_time:eq(16) span').removeClass('time_inactive');
        $('.pick_time:eq(16) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1830 == '18:30'){
    $('.time_details:eq(17)').click(function(){
        $('.pick_time:eq(17) span').removeClass('time_inactive');
        $('.pick_time:eq(17) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1900 == '19:00'){
    $('.time_details:eq(18)').click(function(){
        $('.pick_time:eq(18) span').removeClass('time_inactive');
        $('.pick_time:eq(18) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime1930 == '19:30'){
    $('.time_details:eq(19)').click(function(){
        $('.pick_time:eq(19) span').removeClass('time_inactive');
        $('.pick_time:eq(19) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime2000 == '20:00'){
    $('.time_details:eq(20)').click(function(){
        $('.pick_time:eq(20) span').removeClass('time_inactive');
        $('.pick_time:eq(20) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime2030 == '20:30'){
    $('.time_details:eq(21)').click(function(){
        $('.pick_time:eq(21) span').removeClass('time_inactive');
        $('.pick_time:eq(21) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime2100 == '21:00'){
    $('.time_details:eq(22)').click(function(){
        $('.pick_time:eq(22) span').removeClass('time_inactive');
        $('.pick_time:eq(22) span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');
        $('.pick_time:eq(23) span').removeClass('time_active');
        $('.pick_time:last span').removeClass('time_active');

        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
    $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};

if(pickTime2130 == '21:30'){
    $('.time_details:last').click(function(){
        $('.pick_time:last span').removeClass('time_inactive');
        $('.pick_time:last span').addClass("time_active");
        
        $('.pick_time:first span').removeClass('time_active');
        $('.pick_time:eq(1) span').removeClass('time_active');
        $('.pick_time:eq(2) span').removeClass('time_active');
        $('.pick_time:eq(3) span').removeClass('time_active');
        $('.pick_time:eq(5) span').removeClass('time_active');
        $('.pick_time:eq(6) span').removeClass('time_active');
        $('.pick_time:eq(7) span').removeClass('time_active');
        $('.pick_time:eq(8) span').removeClass('time_active');
        $('.pick_time:eq(9) span').removeClass('time_active');
        $('.pick_time:eq(10) span').removeClass('time_active');
        $('.pick_time:eq(11) span').removeClass('time_active');
        $('.pick_time:eq(12) span').removeClass('time_active');
        $('.pick_time:eq(13) span').removeClass('time_active');
        $('.pick_time:eq(14) span').removeClass('time_active');
        $('.pick_time:eq(15) span').removeClass('time_active');
        $('.pick_time:eq(16) span').removeClass('time_active');
        $('.pick_time:eq(17) span').removeClass('time_active');
        $('.pick_time:eq(18) span').removeClass('time_active');
        $('.pick_time:eq(19) span').removeClass('time_active');
        $('.pick_time:eq(20) span').removeClass('time_active');
        $('.pick_time:eq(21) span').removeClass('time_active');
        $('.pick_time:eq(22) span').removeClass('time_active');
        $('.pick_time:eq(4) span').removeClass('time_active');


        $('#orderprocess_cake_btn5').removeClass('inactive_btn');
        $('#orderprocess_cake_btn5').addClass('btn_process');

    $('#orderprocess_cake_btn5').prop('disabled',false);

    });
};




});

$('#orderprocess_cake_btn5').click(function(){

$('#orderListDateTimeGroup').css('display','none');
$('#orderSummaryDateTimeGroup').css('display','flex');
});


$('#finalCakeTimeDateEdit').click(function(){
    $('#orderListDateTimeGroup').css('display','flex');
    $('#orderSummaryDateTimeGroup').css('display','none');
});

$('#finalAccTimeDateEdit').click(function(){
    $('#orderListDateTimeGroup').css('display','flex');
    $('#orderSummaryDateTimeGroup').css('display','none');
});

$('#summaryFinalCakeRemove').click(function(){
    alert('Are you sure to remove this Product?');
    $('#finalSummaryCakePreview').remove();
});

$('#summaryFinalAccRemove').click(function(){
    alert('Are you sure to remove this Product?');
    $('#finalSummaryAccPreview').remove();
});



});
