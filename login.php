
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
    <link rel="stylesheet" href="../torta_da_te/css/product.css">
    <link rel="shortcut icon" href="images/" type="image/x-icon">
    <link rel="stylesheet" href="../torta_da_te/css/order_confirm_error.css">
    <link rel="stylesheet" href="../torta_da_te/css/login_signup.css">
    <title>Login</title>
</head>
<body>

<?php include "../torta_da_te/inc/header.php"?>
<main id="main">


    <section class="login">
        <div class="login_section">
        <div class="login_ttl">
        <h3>Login</h3>
        </div>
        <form class="login_form" action="loggedin.php" method="post" onsubmit="return formLogin()">
            <fieldset>
                
                <div class="login_signup_dbl_ttl">
                <legend class="login_subttl">Welcome back to Torta da te! Fresh & fully customizable cakes are waiting for you!</legend>
                <span class="signup_ttl">Haven't Signup yet? Please&nbsp;<a href="../torta_da_te/signup.html"> <b>Signup here!</b></a></span>
                </div>
    
                <div class="form_details">
                <label for="email_login">
                    Email
                </label>
                <input class="login_input" type="email" name="user_email" id="email_login" placeholder="Email">

                <span class="error_message" id="errorEmail"></span>
    
                <label for="pw_login">
                    Password
                </label>

                
                <div class="pw_input_ico" id="pwSignupWrap">
                <input class="login_input_pw" type="password" name="user_pw" id="pw_login" placeholder="Password">


                <div class="pw_noshow"></div>

                </div>
                <span class="error_message" id="errorMessage"></span>


                </div>
                <a class="login_forgot" href="#">Forgot email or password?</a>
                <button class="login_btn" type="submit">Login</button>
                <span class="login_option">or</span>
                <div class="google_login">
                    Login with<div class="google_ico"></div>
                </div>
                
                <div class="checkbox_group_login">
                <input type="checkbox" name="keep_signin" id="keep_signin" checked>
                
                <label for="keep_signin">Keep me Sign in<br>
                <span class="uncheck">Uncheck if you use public device</span>
                </label>
                
                </div>

                
                
            </fieldset>
    
           </form>
        </div>
        </section>
    </main>

    <?php include "../torta_da_te/inc/footer.html"?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="../torta_da_te/js/login.js"></script>
    <script src="../torta_da_te/js/signup_query.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>
    <script src="../torta_da_te/js/login_popup.js"></script>
    
</body>
</html>