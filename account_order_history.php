<?php

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
    <link rel="stylesheet" href="../torta_da_te/css/account_order_history.css">


    <title>Order History</title>

</head>
<body>
<?php include "../torta_da_te/inc/header.php"?>

<main id="myinfo_main">
    <div class="myinfo_menu_sec">
    <section class="myinfo_sec">
    <div class="myinfo_details">
    <h3>Order History</h3>
    <p>*Purchase History will automatically be discarded after 1 year.</p>
    <div class="order_history_table">
        <div class="order_history_header">
        <div>
        <span>Item</span>
        </div>
        <div>
        <span>Date</span>
        </div>
        <div>
        <span>Payment Type</span>
        </div>
        <div>
        <span>Price</span>
        </div>
        <div>
        <span>&nbsp;</span>
        </div>
        </div>
        <div class="order_history_body">
            <div class="order_history_pic_ttl">
        <div>
            <img src="../torta_da_te/images/admin1.png" alt="">
        </div>
        <div class="order_history_table_ttl">
            <span>Based Cake</span>
            <span>Sweet dream candy Cake</span>
        </div>
        </div>
        <div>
            <span>22-08-2022</span>
        </div>
        <div>
            <span>Card</span>
        </div>
        <div>
            <span>$ 80.00</span>
        </div>
        <div>
            <a href="" class="reorder_btn">Re-order</a>
        </div>
        </div>
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