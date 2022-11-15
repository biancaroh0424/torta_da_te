
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
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../torta_da_te/css/main_section5_product.css">
    <link rel="stylesheet" href="../torta_da_te/css/myinfo.css">
    
    <title>My Wishlist</title>

</head>
<body>
<?php include "../torta_da_te/inc/header.php"?>

<main id="myinfo_main">
    <div class="myinfo_menu_sec">
    <section class="myinfo_sec">
    <div class="myinfo_details">
    <h3>My Wishlist</h3>
    </div>
    <div class="cardlist_col">
        <ul class="cardlist">
            <li class="product_card">
                <div class="card_img1">
                </div>
                <div class="card_details">        <div class="card_title">
            White cream with raspberry chocolate and fresh mint
            </div>
            <div class="price_tag">
                <div class="card_price">
                <span class="price_value">$12.00</span>
                </div>
            <div class="card_tag">
            <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
            </div>
        </div>
            <div class="pickup">Free Pickup</div>
            <div class="order_btn_wrapper">
                <span class="add_to_bag_btn" id="accAdd">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>


                <div class="card_order_btn_active" style="display:none" id="counterBtn1">
                  <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product" id="subtract1">
                  <span class="counter_card_order_btn_active" id="result1">1</span>
                  <img id="add1" src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">        
              </div>
        </div>
        <div class="remove_wish"><div class="hide">Remove wishlist</div></div>
            </li>
    
        <li class="product_card">
                <div class="card_img1">
                </div>
                <div class="card_details">        <div class="card_title">
            White cream with raspberry chocolate and fresh mint
            </div>
            <div class="price_tag">
                <div class="card_price">
                <span class="price_value">$12.00</span>
                </div>
            <div class="card_tag">
            <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
            </div>
        </div>
            <div class="pickup">Free Pickup</div>
            <div class="order_btn_wrapper">
                <span class="add_to_bag_btn" id="accAdd2">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>


                <div class="card_order_btn_active" style="display:none" id="counterBtn2">
                  <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product" id="subtract2">
                  <span class="counter_card_order_btn_active" id="result2">1</span>
                  <img id="add2" src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">        
              </div>
        </div>    
            <div class="remove_wish"><div class="hide">Remove Wishlist</div></div>
            </li>
        </ul>
    
    
        <div class="pagination_arrow">
            <a href="#"><img src="../torta_da_te/images/arrow_xs_left.png" alt="go to previous page"></a>
            <div class="pagination">
            <a href="#_none" class="pagination_active">1</a>
            <a href="#_none">2</a>
            <a href="#_none">3</a>
            <a href="#_none">4</a>
            <a href="#_none">...</a>
            <a href="#_none">10</a>
            </div>
            <a href="#"><img src="../torta_da_te/images/arrow_xs_right.png" alt="go to next page"></a>
        </div>
    
    </div>

    </section>

    <?php include "../torta_da_te/inc/account_personal_menu.php"?>
</div>
</main>

<?php include "../torta_da_te/inc/footer.html"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../torta_da_te/js/product_celebration.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>
    <script src="../torta_da_te/js/product_filter.js"></script>
    

</body>
</html>