<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

require "../torta_da_te/inc/dbcon.php";


if(isset($_POST['action'])){
    $sql = "SELECT * FROM accessories WHERE idx !=''";

    if(isset($_POST['tag'])){
        $tag = implode("','", $_POST['tag']);
        $sql .= "AND tag IN('".$tag."')";
    }
    if(isset($_POST['price'])){
        $price = implode("','", $_POST['price']);
        $sql .= "AND price IN('".$price."')";
    }

    $result = mysqli_query($dbcon, $sql);

    $output = "";


    if($result -> num_rows > 0){
        while($row=$result->fetch_assoc()){
            $output .= '
            <li class="product_card">
            <a href="../torta_da_te/order_process.php">
                <div class="card_img">
                    <img src="'.$row['image'].'">
                </div>
            </a>
                
            <div class="card_details">
            <div class="card_tag">
            <span class="tag">
                '.$row['tag'].'
            </span>
            </div>        
            <div class="card_title_acc">
                '.$row['acc_name'].'
            </div>
            <div class="price_tag">
            <div class="card_price">
            <span class="price_value">
                '.$row['price'].'
            </span>
            </div>
            </div>
            <div class="pickup">
                Free Pickup
            </div>
            <div class="order_btn_wrapper">
                <a href="../torta_da_te/order_process.php">
                <span class="add_to_bag_btn">Add to bag<img src="..torta_da_te/images/add_ico.png" alt=""></span>
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
        </ul>
        </div>';
        }
    }
    else{
        $output = "<h3>There is no product!</h3>";
    }
    echo $output;
};
?>