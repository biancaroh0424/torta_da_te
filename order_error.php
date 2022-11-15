
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
    <link rel="stylesheet" href="../torta_da_te/css/order_confirm_error.css">
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">

    <title>1Hour Click & Collect</title>

</head>
<body>

    <!-- 팝업메세지 오버레이-->

<div class="popup_msg_confirm" style="display: none;">
        <div class="close_popup"><span class="hide">close</span></div>
        <div class="popup_msg_ttl_btn_confirm">
        <div class="popup_confirm_ico"></div>
        <span>Successfuly removed!</span>
        </div>
</div>


<div class="popup_msg_remove_pd" style="display: none;">
    <div class="close_popup"><span class="hide">close</span></div>
    <div class="popup_msg_ttl_btn">
    <span>Are you sure to remove it?</span>
    <div class="popup_msg_btn_group">
        <span class="popup_btn_cancel">Cancel</span>
        <span class="popup_btn_confirm">Confirm</span>
    </div>
    </div>
</div>
<div class="overlay_popup" style="display: none"></div>
<!-- 팝업메세지 오버레이 끝-->

<?php include "../torta_da_te/inc/header.php"?>


<main id="main">
    <section class="order_confirm_error">
    <div class="goback_btn">
        <div class="back_ico"></div>
    Go Back to the page
    </div>

    <div class="confirm_msg_btn">
    <div class="confirm_ttl_msg">
    <div class="confirm_ico_ttl">
    <div class="order_error_ico"></div>
    
    <h3>Unfortunately, your payment has not<br> been processed successfully.</h3>
    </div>  


    <div class="confirm_message">
    <p>Sorry, the payment attempt is failed.<br>
    Please try again, or try another payment method</p>
    </div>
    </div>
<div class="confirm_continue_btn">Continue to Shopping<div class=continue_ico></div></div> 
</div>

<div class="confirm_contact">
<span>Contact us</span>
<div class="confirm_mail_tel">
<a class="confirm_email" href="mailto:ustomerservice@buonatortadate.com">customerservice@buonatortadate.com</a>
<a class="confirm_phone" href="tel:113-9871-998">113-9871-998</a>
</div>
</div>
</section>
</main>

<?php include "../torta_da_te/inc/footer.html"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="../torta_da_te/js/navbar.js"></script>
</body>
</html>