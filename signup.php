<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
include "../torta_da_te/inc/session.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/style_menu_footer.css">
    <link rel="stylesheet" href="../torta_da_te/css/login_signup_popup.css">
    <link rel="stylesheet" href="../torta_da_te/css/login_signup.css">
    <link rel="stylesheet" href="../torta_da_te/css/product.css">
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">

    <title>Signup</title>
</head>
<body>
    <?php 
    include "../torta_da_te/inc/header.php";
    ?>
        
<main id="main">
    
    <section class="signup">
        <div class="signup_section">
            <div class="login_ttl">
            <h3>Sign up</h3>
            </div>

            <form class="signup_form" name="signup_form" action="insert.php" method="post" onsubmit="return formSignup()">
                
         
                <fieldset>
                    <legend class="signup_subttl">Alreay a member? Please&nbsp;<a href="../torta_da_te/login.html"> Login here!</a></legend>
        

                    <div class="form_details">
                    <label for="email_signup">
                        Email
                    </label>
                    <input class="signup_input_id" type="text" name="user_email" id="email_signup" placeholder="Email" onkeyup="checkEmailExist(this.value)">
                    <span id="errorEmail"></span>
        
                    <label for="pw_signup">
                        Password
                    </label>


                    <div class="pw_input_ico" id="pwSignupWrap">
                    <input class="signup_input_pw" type="password" name="user_pw" id="pw_signup" placeholder="Password" onkeyup="pwValidation()">
                              
                    <div class="pw_noshow"></div>
                  </div>


                    <span id="errorPw"></span>


                    <div class="checkbox_group">
                    <div class="popup_checkbox_group_signup">
                        <input type="checkbox" class="new_checkbox" name="privacy" id="privacy" checked required>
                        <label for="privacy"><span class="terms">* I've read and I agree in
                        <a class="login_signup_ttl_link" href="#">Privacy Policy</a></span>
                        </label>
                    </div>
                    <div class="popup_checkbox_group_signup">
                        <input type="checkbox" class="new_checkbox" name="terms" id="terms" checked required>

                        <label for="terms"><span class="terms">* I’ve read and I agree in
                        <a class="login_signup_ttl_link" href="#">Terms in Use</a></span>
                        </label>
                    </div>
                </div>

        <ul class="signup_avail">
                    <li class="signup_avail_li" id="length">More than 8 characters</li>
                    <li class="signup_avail_li" id="capital">At least one uppercase</li>
                    <li class="signup_avail_li" id="number">At least one number</li>
                    <li class="signup_avail_li" id="symbol">At least one symbol (!? & # . $ * etc)</li>
        </ul>

           
                </div>

                <div class="signup_btn_group">
                    <button class="signup_btn" type="submit" inactive>Signup</button>
                    <span class="login_option">or</span>
                    <div class="google_login">
                        Signup with<div class="google_ico"></div>
                    </div>
                </div>
                </fieldset>
        
               </form>
</div>
    </section>
    </main>

    <?php
    include "../torta_da_te/inc/footer.html"
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="../torta_da_te/js/login.js"></script>
    <script src="../torta_da_te/js/signup_query.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>
    <script src="../torta_da_te/js/signup.js"></script>

    <script>
        
    </script>
     <script>


function checkEmailExist(g_email){

let emailCheck = document.getElementById("email_signup");
let emailValid = emailCheck.value.length;
let emailReg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

let pwValid = document.getElementById("pw_signup");
let errorMessage = document.getElementById("errorEmail");
let errorPw = document.getElementById("errorPw");
const errorEmailBorder = document.getElementById("email_signup");



if (emailCheck.value==""){
errorMessage.innerHTML = "Please write your e-mail!";
errorMessage.classList = "error_message";
errorEmailBorder.classList="signup_error_input";
return false;

}else if (emailValid < 10 || emailValid > 64){
errorMessage.innerHTML = "Please write valid Email";
errorMessage.classList = "error_message";
errorEmailBorder.classList="signup_error_input";
return false;
}else if(emailCheck.value == emailReg){
errorMessage.innerHTML = "Please write valid Email";
errorMessage.classList = "error_message";
errorEmailBorder.classList="signup_error_input";
return false;

} else{
var xmlhttp = fncGetXMLHttpRequest();

// 아이디를 체크할 php 페이지에 체크 하려하는 id 값을 파라미터로 전송
//     alert('id_check_ajax.php?user_email='+g_email);
// return false;


xmlhttp.open('GET', 'email_check_ajax.php?user_email='+g_email, false);

xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');

xmlhttp.onreadystatechange = function (){
if( xmlhttp.readyState=='4' && xmlhttp.status==200 ){
    if( xmlhttp.status==500 || xmlhttp.status==404 || xmlhttp.status==403 )
        alert( xmlhttp.status );
    else{
        var txt = xmlhttp.responseText;
        txt = txt.replace(/\n/g, "");
        txt = txt.replace(/\r/g, ""); 
        txt = txt.replace(/\s+/, ""); 
        txt = txt.replace(/\s+$/g, ""); 

        if(txt=='N') {
            errorMessage.innerHTML = 'This email already taken🥲 Try another!';
            errorMessage.classList = 'error_message';
        } else{
            errorEmailBorder.classList = 'login_input';
            errorMessage.innerHTML = 'This email can use!';
            errorMessage.classList= 'valid';
        }
    }
}
}
}
xmlhttp.send();
}

function fncGetXMLHttpRequest(){
if (window.ActiveXObject){
try{
return new ActiveXObject("Msxml2.XMLHTTP");
}
catch(e){
try{
    return new ActiveXObject("Microsoft.XMLHTTP");
} 
catch(e1) { return null; }
}
//IE 외 파이어폭스 오페라 같은 브라우저에서 XMLHttpRequest 객체 구하기
} else if (window.XMLHttpRequest){
return new XMLHttpRequest();
} else{
return null;
}
}
</script>
</body>
</html>
