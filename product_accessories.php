<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require "../torta_da_te/inc/dbcon.php";
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
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../torta_da_te/css/main_section5_product.css">
    
    <title>Accessories</title>


</head>
<body>
<?php include "../torta_da_te/inc/header.php"?>
        

<main id="product_main">
<div class="product_li_filter">

    <section class="product_filter">
        <div class="filter_details">
        <div>
            <form method="post" name="1hour_filter" id="action" name="action">
                <fieldset>
                <legend class="hide">Simply pick and choose your customazable cake!</legend>
                <div class="filter_details_title">Tags</div>

                <ul class="input_group">
                <?php
                $sql = "SELECT DISTINCT tag FROM accessories ORDER BY tag";

                $result = mysqli_query($dbcon, $sql);
                while($row=$result->fetch_assoc()){
                ?>
                
                <li class="filter_option">
                <label>
                <input type="checkbox" id="tag" class="product_check" value="<?= $row['tag']; ?>"> 
                <?= $row['tag'];?>
                </label>
                </li>
                <?php }; ?>
                </ul>
                
                <div class="filter_details_title">Price</div>
                <ul class="input_group">
                <?php
                $sql = "SELECT DISTINCT price FROM accessories ORDER BY price";

                $result = mysqli_query($dbcon, $sql);
                while($row=$result->fetch_assoc()){
                ?>
                
                <li class="filter_option">
                <label>
                <input type="checkbox" id="price" class="product_check" value="<?= $row['price']; ?>">
                $ <?= number_format($row['price'],2);?>
                </label>
                </li>
                <?php };?>
                </ul>
                </div>
                </div>
                </fieldset>
                </form>
    </section>

    <section class="product_cele_list">
    <div class="product_title_desc">
    <h3>Accessories</h3>
    <p>Get the party started with Torta Da Te! Click and collect cake service. Having an fresh organic ingredients such as dough, fresh cream, celebration cake! You simply click and order your chosen Torta Da Te cake online and it will be ready for you to collect in store within the hour (selected cakes only).</p>
    </div>
    <div class="cardlist_col">
        <ul class="cardlist_row" id="result">
            <?php
                $sql = "SELECT * FROM accessories";
                $result = mysqli_query($dbcon, $sql);
                while($row=$result->fetch_assoc()){
            ?>
    <li class="product_card">
            <a href="../torta_da_te/order_process.php">
                <div class="card_img">
                    <img src="<?= $row['image'];?>">
                </div>
            </a>
                
            <div class="card_details">
            <div class="card_tag">
            <span class="tag">
                <?= $row['tag'];?>
            </span>
            </div>        
            <div class="card_title_acc">
                <?= $row['acc_name'];?>
            </div>
            <div class="price_tag">
            <div class="card_price">
            <span class="price_value">
            $ <?= number_format($row['price'],2);?>
            </span>
            </div>
            </div>
            <div class="pickup">
                Free Pickup
            </div>
            <div class="order_btn_wrapper">
                <a href="../torta_da_te/order_process.php">
                <span class="add_to_bag_btn">Add to bag<img src="../torta_da_te/images/add_ico.svg" alt=""></span>
                </a>

            
            <div class="card_order_btn_active">
                <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product">
                <span class="counter_card_order_btn_active">1</span>
                <img src="../torta_da_te/images/add_ico_white.svg" class="add_product" alt="">
                
            </div>
            

            </div>
            <div class="wishlist">
                <div class="hide">Add to Wishlist</div>
            </div>
    </li>
            <?php };?>
        </ul>
        <!-- <?php
            // $i--;
            //     };
        ?> -->

    </section>
</div>


</main>

<?php include "../torta_da_te/inc/footer.html"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="../torta_da_te/js/product_celebration.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>
    <script src="../torta_da_te/js/product_filter.js"></script>

<script>

$(document).ready(function(){

    $(".product_check").click(function(){
        var action = 'data';
        var tag = get_filter_text('tag');
        var price = get_filter_text('price');

        $.ajax({
            url:'../torta_da_te/action_product_acc.php',
            type: 'POST',
            data: { action: action, tag: tag, price: price},
            success: function(response){
                $("#result").html(response);
            }
        });

    });

    function get_filter_text(text_id){
        var filterData = [];
        $('#'+text_id+':checked').each(function(){
            filterData.push($(this).val());
        });
        return filterData;
    }
 
});


</script>
</body>
</html>

