
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
    <link rel="stylesheet" href="../torta_da_te/css/product.css">
    <link rel="shortcut icon" href="images/" type="image/x-icon">
    <link rel="stylesheet" href="../torta_da_te/css/order_process.css">
    <link rel="stylesheet" href="../torta_da_te/css/member_order_details.css">
    <title>1Hour Click & Collect</title>

</head>
<body>
<?php include "../torta_da_te/inc/header.php"?>
        
<main id="main">
    <section class="pickup_mycard_preview">
        <div class="pickup_preview">
            <div class="pickup_preview_ttl">
            <h2>Pickup Location</h2>
            <div class="pickup_preview_ico_address">
                <img src="../torta_da_te/images/location_ico.png" alt="">
                <div class="pickup_preview_title_addr">
                <p><span class="pickup_preview_title">TORTA DA TE</span></p>
                <p>VIA ALESSANDRO VOLTA LALA 323 HAPPY COUNTRY 11313</p>
                </div>
            </div>
            </div>
            <div class="pickup_day_ttl_details">
            <div class="pickup_day_ttl_edit">
            <h2>Pickup Day</h2>
            <a href="#">Edit</a>
            </div>
            <div class="pickup_day_order_details">
            <span class="pickup_day_detail">08 Nov 2022 </span><span class="pickup_time">18:00</span>
            </div>
            </div>
        </div>

        <div class="mycart_preview">
            <div class="mycart_preview_title_btn">
            <h2>My Order</h2>
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

    <section class="pickup_person_no_member">
        <div style="display:flex; flex-direction: column;">
        <div class="pickup_person_detail">
            <div class="pickup_person_add">

                <span class="pickup_title">Enter Pickup person</span>
                <div class="pickup_form_nomember">
                <div class="pickup_label_input">
                <label for="first_last_name">*First, Last name</label>
                <input class="pickup_basic_input" type="text" name="pickup_nomember_name" id="first_last_name" placeholder="First, Last name" required>
                </div>


                <div class="pickup_label_input">
                <label for="phone_number">*Phone number</label>
                <div class="pickup_input_btn">
                <input class="pickup_basic_input" type="tel" name="pickup_nomember_phone" id="phone_number" placeholder="ex) 113-1789-0090" required>
                <div class="verify_group">
                <input class="verify" type="text" name="verify_number" id="verify_phone_number">
                <button class="verify_button" disabled>Verify<span class="verified_ico"></span></button>
                </div>
                </div>
                </div>

                <div class="pickup_label_input">
                <label for="phone_email2">*Email</label>
                <div class="pickup_input_btn">
                <input class="pickup_basic_input" type="email" name="pickup_nomember_emaile" id="phone_email2" placeholder="ex) buonatortadate@tortadate.com" required>
                <div class="verify_group">
                <input class="verify" type="text" name="verify_email" id="verify_phone_email">
                <button class="verify_button" disabled>Verify<span class="verified_ico"></span></button>
                </div>
                </div>
                </div>
                </div>

                <div class="promo_add">
                    <div class="remember_me_check">
                <div class="promo_check">
                    <label for="pickup_rememberme">Remember me for later.</label>
                    <input type="checkbox" name="checkbox_promotion" id="pickup_rememberme" checked>
                </div>
                <div class="promo_check">
                    <label for="pickup_promotion">Email me about hot items, great savings, and more.</label>
                    <input type="checkbox" name="checkbox_promotion5" checked>
                </div>
                <div class="add_another">
                    <span>Add another pickup person</span>
                    <div class="add_ico"></div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="pickup_person_add">
        <span class="pickup_title">Add another Pickup person</span>
                <div class="pickup_form_nomember">
                <div class="pickup_label_input">
                <label for="first_last_name2">*First, Last name</label>
                <input class="pickup_basic_input" type="text" name="pickup_nomember_name" id="first_last_name2" placeholder="First, Last name" required>
                </div>


                <div class="pickup_label_input">
                <label for="phone_number2">*Phone number</label>
                <div class="pickup_input_btn">
                <input class="pickup_basic_input" type="tel" name="pickup_nomember_phone" id="phone_number2" placeholder="ex) 113-1789-0090" required>
                <div class="verify_group">
                <input class="verify" type="text" name="verify_number" id="verify_phone_number2">
                <button class="verify_button" disabled>Verify<span class="verified_ico"></span></button>
                </div>
                </div>
                </div>

                <div class="pickup_label_input">
                <label for="phone_email">*Email</label>
                <div class="pickup_input_btn">
                <input class="pickup_basic_input" type="email" name="pickup_nomember_emaile" id="phone_email" placeholder="ex) buonatortadate@tortadate.com" required>
                <div class="verify_group">
                <input class="verify" type="text" name="verify_email" id="verify_phone_email2">
                <button class="verify_button" disabled>Verify<span class="verified_ico"></span></button>
                </div>
                </div>
                </div>
                </div>
                <div class="remember_me_check">
                <div class="promo_check">
                    <label for="pickup_promotion">Email me about hot items, great savings, and more.</label>
                    <input type="checkbox" name="checkbox_promotion" id="pickup_promotion" checked>
                </div>
                </div>
            </div>
        </div>
        

        


        <div class="summary_member">
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
            <div class="pickup_promocode">
            <div class="promo_label_input">
            <label for="coupon_code">Coupon code</label>
            <input class="promo_code_input" type="text" name="pickup_nomember_name" id="coupon_code" placeholder="Add Coupon code here">
            </div>
            </div>
            <div class="member_total_price">
               <span class="summary_price_total_ttl">Total</span>  
               <span class="summary_price_total_value">
               $ 163.00
            </span>
            </div>
            

                

            <div class="member_pickup_policy_check">
                <label for="pickup_promotion">I’ve read and I agree in <a href="#">Terms of Use</a></label>
                <input type="checkbox" name="checkbox_promotion" id="pickup_promotion2" checked>
            </div>
            <div class="member_pickup_policy_check">
                <label for="pickup_promotion">I’ve read and I agree in  <a href="#">Privacy Policy</a></label>
                <input type="checkbox" name="checkbox_promotion" id="pickup_promotion3" checked>
            </div>


            <div class="summary_checkout_btn_member">
                Checkout
            </div>
            </form>
            </fieldset>


            </div>
        </div>
    </section>
    
    

        
</main>

<?php include "../torta_da_te/inc/footer.html"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="../torta_da_te/js/login.js"></script>
    <script src="../torta_da_te/js/signup_query.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>
</body>
</html>