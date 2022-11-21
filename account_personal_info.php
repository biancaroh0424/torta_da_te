<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

$sql= "select * from members where idx =$s_idx;";

$result = mysqli_query($dbcon, $sql);

$array = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/style_menu_footer.css">

    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../torta_da_te/css/main_section5_product.css">
    <link rel="stylesheet" href="../torta_da_te/css/myinfo.css">
    <link rel="stylesheet" href="../torta_da_te/css/login_signup.css">
    <title>My Info</title>

</head>
<body>
<?php include "../torta_da_te/inc/header.php"?>
<main id="myinfo_main">
    <div class="myinfo_menu_sec">
    <section class="myinfo_sec">
    <div class="myinfo_details">
    <h3>Personal Info</h3>
    </div>
    <form action="../torta_da_te/edit.php" method="post">
        <fieldset>
        <div class="personal_info_group">
        
            <legend class="hide">My Info</legend>

            <div class="personal_info_ttl">
            <input type="hidden" name="g_idx" value="<?php echo $array["idx"]; ?>">
            <label for="user_name">First, last name</label>
            <div>
            <input type="text" name="user_name" id="user_name" value="<?php echo $array["fullname"];?>">
            <button type="button">Edit</button>
            </div>
            </div>


            <div class="personal_info_ttl">
            <label for="user_phone">Phone number</label>
            <div>
            <input type="text" name="user_phone" id="user_phone" value="<?php echo $array["tel"];?>">
           
            <button type="button">Edit</button>
            </div>
            </div>

            <div class="personal_info_ttl">
            <label for="user_email">Email</label>
            <div>
    
            <input type="text" name="user_email" id="email_signup" onkeyup="checkEmailExist(this.value)" value="<?php echo $array["email"];?>">
            
            
            <button type="button">Edit</button>
            </div>
            <span id="errorEmail"></span>
            </div>

            <div class="personal_info_ttl">
            
            <label for="user_pw">Password</label>
            <div>
            <div class="pw_ico" id="pwSignupWrap">
            <input type="password" name="user_pwd" id="pw_signup" placeholder="Password" onkeyup="pwValidation()"value="<?php echo $array["pwd"];?>">
                              
            <div class="pw_noshow"></div>
            </div>
            <span id="errorPw"></span>
            
            <button type="button">Edit</button>
            </div>
            <ul class="signup_avail">
                    <li class="signup_avail_li" id="length">More than 8 characters</li>
                    <li class="signup_avail_li" id="capital">At least one uppercase</li>
                    <li class="signup_avail_li" id="number">At least one number</li>
                    <li class="signup_avail_li" id="symbol">At least one symbol (!? & # . $ * etc)</li>
            </ul>
            </div>
</div>
    <button type="submit" class="firstable_btn">Edit My Info</button>
    <a class="secondable_btn" href="">Remove this account permanently</a>
        </fieldset>
    </form>

    </section>

    <?php include "../torta_da_te/inc/account_personal_menu.php"?>
</div>
</main>

<?php include "../torta_da_te/inc/footer.html"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../torta_da_te/js/product_celebration.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>
    <script src="../torta_da_te/js/product_filter.js"></script>
    <script src="../torta_da_te/js/signup_query.js"></script>
    <script src="../torta_da_te/js/signup.js"></script>

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
errorMessage.classList = "error_message_myinfo";
errorEmailBorder.classList="signup_error_input";
return false;

}else if (emailValid < 10 || emailValid > 64){
errorMessage.innerHTML = "Please write valid Email";
errorMessage.classList = "error_message_myinfo";
errorEmailBorder.classList="signup_error_input";
return false;
}else if(emailCheck.value == emailReg){
errorMessage.innerHTML = "Please write valid Email";
errorMessage.classList = "error_message_myinfo";
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
            errorMessage.classList = 'error_message_myinfo';
        } else{
            errorEmailBorder.classList = 'login_input';
            errorMessage.innerHTML = 'This email can use!';
            errorMessage.classList= 'valid_myinfo';
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
<script>
    function remove_account(){
        const rtn_val = confirm("Are you sure to remove this account? Once you've done you cannot recover it.");

        if (rtn_val == true){
            <?php echo $array["idx"];?>
            location.hret="../torta_da_te/member_delete.php";
        };
    };
</script>

</body>
</html>