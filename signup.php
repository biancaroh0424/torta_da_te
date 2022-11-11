<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
include "../torta_da_te/inc/session.php"

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
                    <span id="errorEmail" class="error_message"></span>
        
                    <label for="pw_signup">
                        Password
                    </label>


                    <div class="pw_input_ico" id="pwSignupWrap">
                    <input class="signup_input_pw" type="password" name="user_pw" id="pw_signup" placeholder="Password" onkeyup="pwValidation()">
                              
                    <div class="pw_noshow"></div>
                  </div>


                    <span id="errorPw" class="error_message"></span>


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
    <link rel="import" href="../torta_da_te/email_check_ajax.php">
</body>
</html>

<?php
$user_email = $_POST["user_email"];

include "../torta_da_te/inc/dbcon.php";

$sql = "select email from members where email = '$user_email';";


$result = mysqli_query($dbcon, $sql);

$num = mysqli_num_rows($result);
?>