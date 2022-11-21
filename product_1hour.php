

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
    
    <title>1Hour Click & Collect</title>


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
                $sql = "SELECT DISTINCT tag FROM 1hour_click_collect ORDER BY tag";

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
                
                
                <!-- <div class="filter_details_title">Size</div>
                <ul class="input_group">
                <?php
                $sql = "SELECT DISTINCT size FROM 1hour_click_collect ORDER BY size";

                $result = mysqli_query($dbcon, $sql);
                while($row=$result->fetch_assoc()){
                ?>
                
                <li class="filter_option">
                <label>
                <input type="checkbox" id="size" class="product_check" value="<?= $row['size']; ?>">
                <?= $row['size']; ?>
                </label>
                </li>
                <?php };?>
                </ul> -->
                

                <div class="filter_details_title">Flavor</div>
                <ul class="input_group">
                <?php
                $sql = "SELECT DISTINCT flavor FROM 1hour_click_collect ORDER BY flavor";

                $result = mysqli_query($dbcon, $sql);
                while($row=$result->fetch_assoc()){
                ?>
                
                <li class="filter_option">
                <label>
                <input type="checkbox" id="flavor" class="product_check" value="<?= $row['flavor']; ?>">
                <?= $row['flavor']; ?>
                </label>
                </li>
                <?php };?>
                </ul>
                
                <div class="filter_details_title">Price</div>
                <ul class="input_group">
                <?php
                $sql = "SELECT DISTINCT price_group FROM 1hour_click_collect ORDER BY price_group";

                $result = mysqli_query($dbcon, $sql);
                while($row=$result->fetch_assoc()){
                ?>
                
                <li class="filter_option">
                <label>
                <input type="checkbox" id="price_group" class="product_check" value="<?= $row['price_group']; ?>">
                <?= $row['price_group']; ?>
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
    <h3>1 Hour Click & Collect</h3>
    <p>Get the party started with Torta Da Te! Click and collect cake service. Having an fresh organic ingredients such as dough, fresh cream, celebration cake! You simply click and order your chosen Torta Da Te cake online and it will be ready for you to collect in store within the hour (selected cakes only).</p>
    </div>
    <div class="cardlist_col">
        <ul class="cardlist_row" id="result">
            <?php
                $sql = "SELECT * FROM 1hour_click_collect";
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
            <div class="card_title">
                <?= $row['cake_name'];?>
            </div>
            <div class="price_tag">
            <div class="card_price">
            <span class="price_value">
                <?= $row['price_group'];?>
            </span>
            </div>
            <div class="card_tag">
            <span class="size">
                <?= $row['size'];?>
            </span>
            </div>
            </div>
            <div class="pickup">
                Free Pickup
            </div>
            <div class="order_btn_wrapper">
                <a href="../torta_da_te/order_process.php">
                    <span class="card_order_btn">
                        Customize Cake
                    </span>
                </a>

            
            <div class="card_order_btn_active">
                <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product">
                <span class="counter_card_order_btn_active">1</span>
                <img src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">
                
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
        var size = get_filter_text('size');
        var flavor = get_filter_text('flavor');
        var price_group = get_filter_text('price_group');

        $.ajax({
            url:'../torta_da_te/action_product_1hour.php',
            type: 'POST',
            data: { action: action, tag: tag, size: size, flavor: flavor, price_group: price_group},
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

