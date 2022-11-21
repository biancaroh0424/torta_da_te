
<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/style_menu_footer.css">
  
    <link rel="stylesheet" href="../torta_da_te/css/order_process.css">
    <link rel="stylesheet" href="../torta_da_te/css/order_process2.css">
    <link rel="stylesheet" href="../torta_da_te/css/order_process3.css">
    <link rel="stylesheet" href="../torta_da_te/css/login_signup_popup.css">

    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">

    <title>1Hour Click & Collect</title>

</head>
<body>

<!-- 결제전 로그인 사인업팝업 -->

    <div class="login_signup_popup">
        <div class="close_popup"><span class="hide">close</span></div>


        <div class="guest_login_popup">

            <div class="signup_popup_form" style="display:none">
                <div class="login_popup_ttl">
                <h3>Sign up</h3>
                </div>
                <form class="popup_signup" action="" method="post">
                    <fieldset>
                        <legend class="popup_subttl">Thank you for become a member!</legend>
            

                        <div class="popup_form_details">
                        <label for="email_popup_login">
                            Email
                        </label>
                        <input class="popup_input" type="email" name="user_email" id="email_popup_login" placeholder="Email" required>
            
                        <label for="pw_popup_login">
                            Password
                        </label>
                        <input class="popup_input" type="password" name="user_pw" id="pw_popup_login" placeholder="Password" required>

                        <div class="popup_checkbox_group_signup">
                            <input type="checkbox" name="privacy" id="privacy" checked required>
                            <label for="privacy"><span class="terms">* I’ve read and I agree in
                            <a class="login_signup_ttl_link" href="#">Privacy Policy</a></span>
                            </label>
                        </div>
                        <div class="popup_checkbox_group_signup">
                            <input type="checkbox" name="terms" id="terms" checked required>

                            <label for="terms"><span class="terms">* I’ve read and I agree in
                            <a class="login_signup_ttl_link" href="#">Terms in Use</a></span>
                            </label>
                        </div>


                        <ul class="signup_avail_popup">
                        <li>More than 8 characters<div class="signup_check_ico"></div></li>
                        <li>At least one lowercase and one uppercase<div class="signup_check_ico"></div></li>
                        <li>At least one number<div class="signup_check_ico"></div></li>
                        <li>At least one symbol (!? & # $ *)<div class="signup_check_ico"></div></li>
                        </ul>
                    </div>

                    <div class="popup_btn_group">
                        <button class="popup_signup_btn" type="submit">Signup</button>
                        <span class="popup_login_option">or</span>
                        <div class="popup_google_login">
                            Signup with<div class="google_ico"></div>
                        </div>
                    </div>
                    </fieldset>
            
                   </form>
            </div>

        <div class="login_signup_btn">
        <div class="nomember_ttl_link">
        <h3>No account?<br>
        No problem!</h3>

        <p>To use promo coupon sign in or<br> <a href="#">create an account</a></p>
        </div>


        <div class="continue_guest_btn">Continue as a guest<div class="continue_ico"></div>
        </div>
        </div>

    
    <div class="login_popup_form">
    <div class="login_popup_ttl">
    <h3>Checkout using your Family Account</h3>
    </div>
    <form class="popup_login" action="" method="post">
        <fieldset>
            <legend class="popup_subttl">Welcome back Family!</legend>

            <div class="popup_form_details">
            <label for="email_popup_login">
                Email
            </label>
            <input class="popup_input" type="email" name="user_email" id="email_popup_login2" placeholder="Email" required>

            <label for="pw_popup_login">
                Password
            </label>
            <input class="popup_input" type="password" name="user_pw" id="pw_popup_login2" placeholder="Password" required>
            </div>
            <a class="popup_forgot" href="#">Forgot email or password?</a>
            <button class="popup_login_btn" type="submit">Login</button>
            <span class="popup_login_option">or</span>
            <div class="popup_google_login">
                Login with<div class="google_ico"></div>
            </div>

            <div class="popup_checkbox_group">
            <input type="checkbox" name="keep_signin" id="keep_signin" checked>
            <label for="keep_signin">Keep me Sign in<br>
            <span class="popup_uncheck">Uncheck if you use public device</span>
            </label>
            </div>
        </fieldset>

       </form>
    </div>
    </div>
    </div>
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
<div class="overlay_popup"></div>
<!-- 팝업메세지 오버레이 끝-->


<?php include "../torta_da_te/inc/header.php"?>
        
<main id="main">
    <section class="pickup_mycard_preview">
        <div class="pickup_preview">
            <h2>Pickup Location</h2>
            <div class="pickup_preview_ico_address">
                <img src="../torta_da_te/images/location_ico.png" alt="">
                <div class="pickup_preview_title_addr">
                <p><span class="pickup_preview_title">TORTA DA TE</span></p>
                <p>VIA ALESSANDRO VOLTA LALA 323 HAPPY COUNTRY 11313</p>
                </div>
            </div>
        </div>

        <div class="mycart_preview">
            <div class="mycart_preview_title_btn">
            <h2>My Cart</h2>
            <a href="#">View All</a>
            </div>


            <div class="card_mycart_group">
                <div class="card_mycart_preview">
                    <a href="#">
                    <div class="card_mycart_preview_img1"></div>
                    <div class="card_mycart_title_desc">
                    <p><span>Based Cake</span></p>
                    <p>La torta di formaggio con le fragole e uva</p>
                    </div>
                    </a>
                </div>
                <div class="card_mycart_preview">
                    <a href="#">
                    <div class="card_mycart_preview_img1"></div>
                    <div class="card_mycart_title_desc">
                    <p><span>Based Cake</span></p>
                    <p>La torta di formaggio con le fragole e uva</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="progress_bar">
        <div class="process_title_bar">
        <div class="process_title_group">
        <div class="process_title_num">
        <a href="../torta_da_te/order_process1.html">
        <h2 class="process_title_inactive">
            <span class="process_title_inactive_num">1</span>
            Design Your Cake</h2>
        </a>
        </div>
        <div class="process_title_num">
        <a href="#">
        <h2 class="process_title_inactive">
            <span class="process_title_inactive_num">2</span>
            Pick a Date / Time</h2>
        </a>
        </div>
        <div class="process_title_num">
            <a href="#">
        <h2 class="process_title_active"><span class="process_title_active_num">3</span>Checkout</h2>
            </a>
        </div>
        </div>


        <div class="order_progress">
            <span class="progress_result3"></span>
        </div>
        </div>
    </section>

    <!--End progress Bar, title-->
    <!--Start customer's order list / date/time picker-->
    <section class="product_order_summary_final">
        <div class="product_order_preview">
        <div class="product_cake_preview">
        <div class="preview_pickup_day_time">
        Pickup Day
        <div class="preview_date_time_edit">
        <div class="preview_date_time">
        <span class="preview_date">24 Dec 2022</span>    
        <span class="preview_time">10:00</span></div>
        <div class="checked_edit">
            <div class="checklist"><p class="hide">cheked</p></div><span class="order_list_edit">Edit</span>
        </div>
        </div>
        </div>

        <div class="preview_details">
        <div class="preview_cake_ttl_remove">
        <div class="preview_order_cake_ttl">
            Based Cake
            <span class="preview_cake_ttl">Easter Blue candy cake</span>
        </div>
        <div class="remove_product">
            <span class="hide">Remove this product</span>
        </div>
    </div>

    <div class="product_detail_preview">
    <div class="product_img_m"></div>

        <ul class="product_detail_li">
            <li>
                <div class="checklist_group_preview">
                <div class="size_m"><p class="hide">12"</p></div><div class="order_list_para_box"> 
                <span class="order_list_detail">32 Servings</span></div>
                
                <div class="checked_edit">
                <div class="checklist"><p class="hide">cheked</p></div><span class="order_list_edit">Edit</span>
                </div>
                </div>
            </li>

            <li>
                <div class="checklist_group_preview">    
                <div class="flavor_m"></div> <div class="order_list_para_box"><span class="order_list_detail">White / Chocolate</span></div>
                
                <div class="checked_edit">
                <div class="checklist"><p class="hide">cheked</p></div>Edit</div></div>
            </li>

            <li>
                <div class="checklist_group_preview">
                <div class="message_m"></div><div class="order_list_para_box"><span class="order_list_para_title">Message</span><span class="order_list_detail">Happy New Year! From Jane Doe to John Doe</span>
                </div>
                <div class="checked_edit">
                <div class="checklist"><p class="hide">cheked</p></div>Edit</div></div>
            </li>

            <li>
                <div class="checklist_group_preview">    
                    <div class="message_m"></div>
                    <div class="order_list_para_box">
                        <span class="order_list_para_title">Note</span><span class="order_list_detail">We don't want grapes! Please don't add</span>
                    </div>
                    <div class="checked_edit">
                    <div class="checklist"><p class="hide">cheked</p></div>Edit</div></div>
            </li>
            <li class="price_value">
                <span class="title_price">Total</span> <span class="value_price">$80.00</span>
            </li>
        </ul>
        </div>
        </div>
        </div>
    
        <div class="product_acc_preview">
        <div class="preview_pickup_day_time">
        Pickup Day
        <div class="preview_date_time_edit">
        <div class="preview_date_time">
        <span class="preview_date">24 Dec 2022</span>    
        <span class="preview_time">10:00</span></div>
        <div class="checked_edit">
            <div class="checklist"><p class="hide">cheked</p></div><span class="order_list_edit">Edit</span>
        </div>
        </div>
        </div>

        <div class="product_detail_preview">
        <div class="product_img_m2"></div>

        <div class="product_detail_li">
        <div class="preview_acc_ttl_remove">
            <div class="preview_order_cake_ttl">
                Accessory
                <span class="preview_acc_ttl">Happy Birthday Special Candle</span>
            </div>
            <div class="remove_product">
                <span class="hide">Remove this product</span>
            </div>
        </div>
        <div class="quantity_selector_title">
        Quantity
        <div class="quantity_selector">
            <div class="subtract_quantity">
            <span class="hide">Subtract quantity</span></div>
            <span class="result_quantity">2</span>
            <div class="add_quantity">
            <span class="hide">Add Quantity</span>
            </div>
        </div>
        </div>
        <div class="price_value">
            <span class="title_price">Total</span> <span class="value_price">$15.00</span>
        </div>
        </div>
        </div>
        </div>
        </div>

        <div class="summary">
        <div class="summary_value">
            <div class="summary_ttl">
                Summary
            </div>
        <div class="summary_subtotal_value_group">
        <div class="summary_subtotal">
            <div class="subtotal_ttl_items">
            <div class="subtotal_title">
                Subtotal
            </div> 
            <div class="subtotal_value_items">
                (5 items)
            </div>
            </div>
            <div class="subtotal_price_value">
            $ 155.00
            </div>
        </div>

        <div class="summary_subtotal">
        <div class="subtotal_ttl_items">
            Extra Taxes & Fees 
        </div>   
        <div class="subtotal_price_value"> 
            $ 8.00
        </div>
        </div>
        </div>
        <div class="summary_total_price">
           <span class="summary_price_total_ttl">Total</span>  
           <span class="summary_price_total_value">
           $ 163.00
        </span>
        </div>
        </div>
        <div class="summary_checkout_btn">
            <span>Checkout</span>
        </div>
        </div>
    </section>
    </main>

    <?php include "../torta_da_te/inc/footer.html"?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="../torta_da_te/js/navbar.js"></script>
    

</body>
</html>