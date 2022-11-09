$(document).ready(function(){

    $(".pw_noshow").click(function(){
        if($(this).hasClass('pw_noshow')){
            $(this).removeClass('pw_noshow');
            $(this).addClass('pw_show');
            $('#pw_signup, #pw_login').attr('type','text');
        }else{
                $(this).removeClass('pw_show');
                $(this).addClass('pw_noshow');
                $('#pw_signup, #pw_login').attr('type','password');
        }
    });


    });
    