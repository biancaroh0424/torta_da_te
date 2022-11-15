
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
    <link rel="stylesheet" type="text/css" href="../torta_da_te//css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../torta_da_te//css/style_menu_footer.css">
    <link rel="stylesheet" href="../torta_da_te//css/main_section5_product.css">
    <link rel="stylesheet" href="../torta_da_te//css/product.css">
    <link rel="stylesheet" href="../torta_da_te//css/order_process.css">
    <link rel="stylesheet" href="../torta_da_te//css/order_process2.css">
    <link rel="stylesheet" href="../torta_da_te//css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="../torta_da_te//css/order_process3.css">
    <link rel="stylesheet" href="../torta_da_te//css/member_order_details.css">

    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">

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


<div class="popup_msg_remove_pd" style="display:none">
    <div class="close_popup"><span class="hide">close</span></div>
    <div class="popup_msg_ttl_btn">
    <span>Are you sure to remove it?</span>
    <div class="popup_msg_btn_group">
        <span class="popup_btn_cancel">Cancel</span>
        <span class="popup_btn_confirm">Confirm</span>
    </div>
    </div>
</div>
<div class="overlay_popup" style="display:none"></div>
<!-- 팝업메세지 오버레이 끝-->


<?php include "../torta_da_te/inc/header.php"?>
        
<main id="main">
    
    <section class="mycart">
        <h2>My Cart</h2>
        <div class="product_order_summary_final" id="orderSummaryDateTimeGroup">
            <div style="display: flex; flex-direction: column;">
                <div class="product_order_preview">
                    <div class="product_cake_preview" id="finalSummaryCakePreview">
                    <div class="preview_pickup_day_time">
                    Pickup Day
                    <div class="preview_date_time_edit">
                    <div class="preview_date_time">
                    <span class="preview_date">24 Dec 2022</span>    
                    <span class="preview_time">10:00</span></div>
                    <div class="checked_edit" id="finalCakeTimeDateEdit">
                        <div class="checklist"><p class="hide">cheked</p></div><span>Edit</span>
                    </div>
                    </div>
                    </div>
                
                    <div class="preview_details">
                    <div class="preview_cake_ttl_remove">
                    <div class="preview_order_cake_ttl">
                        Based Cake
                        <span class="preview_cake_ttl">Easter Blue candy cake</span>
                    </div>
                    <div class="remove_product" id="summaryFinalCakeRemove">
                        <span class="hide">Remove this product</span>
                    </div>
                    </div>
                    </div>
                <div class="product_detail_preview">
                <div class="product_img_m"></div>
                
                    <ul class="product_detail_li">
                        <li>
                            <div class="checklist_group_preview">
                            <div class="size_m"><p class="hide">12"</p></div><div class="order_list_para_box"> 
                            <span class="order_list_detail">32 Servings</span></div>
                            
                            <div class="checked_edit" id="finalSizeEdit">
                            <div class="checklist"><p class="hide">cheked</p></div><span>Edit</span>
                            </div>
                            </div>
                        </li>
                
                        <li>
                            <div class="checklist_group_preview">    
                            <div class="flavor_m"></div> <div class="order_list_para_box"><span class="order_list_detail">White / Chocolate</span></div>
                            
                            <div class="checked_edit" id="finalFalvorEdit">
                            <div class="checklist"><p class="hide">cheked</p></div>Edit</div></div>
                        </li>
                
                        <li>
                            <div class="checklist_group_preview">
                            <div class="message_m"></div><div class="order_list_para_box"><span class="order_list_para_title">Message</span><span class="order_list_detail">Happy New Year! From Jane Doe to John Doe</span>
                            </div>
                            <div class="checked_edit" id="finalMessageGiftEdit">
                            <div class="checklist"><p class="hide">cheked</p></div>Edit</div></div>
                        </li>
                
                        <li>
                            <div class="checklist_group_preview">    
                                <div class="message_m"></div>
                                <div class="order_list_para_box">
                                    <span class="order_list_para_title">Note</span><span class="order_list_detail">We don't want grapes! Please don't add</span>
                                </div>
                                <div class="checked_edit" id="finalMessageBakeryEdit">
                                <div class="checklist"><p class="hide">checked</p></div>Edit</div></div>
                        </li>
                        <li class="price_value">
                            <span class="title_price">Total</span> <span class="value_price">$80.00</span>
                        </li>
                    </ul>
                    </div>
                    </div>
                
                
                    <div class="product_acc_preview" id="finalSummaryAccPreview">
                    <div class="preview_pickup_day_time">
                    Pickup Day
                    <div class="preview_date_time_edit">
                    <div class="preview_date_time">
                    <span class="preview_date">24 Dec 2022</span>    
                    <span class="preview_time">10:00</span></div>
                    <div class="checked_edit" id="finalAccTimeDateEdit">
                        <div class="checklist"><p class="hide">cheked</p></div><span>Edit</span>
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
                        <div class="remove_product" id="summaryFinalAccRemove">
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
                        <div class="member_total_price">
                           <span class="summary_price_total_ttl">Total</span>  
                           <span class="summary_price_total_value">
                           $ 163.00
                        </span>
                        </div>
                        
                        <button type="button" class="summary_checkout_btn_member" id="goToCheckout">
                        <a href="order_error.html" style="color: #fff">
                            Checkout
                        </a>
                        </button>
                
                        </div>
                    </div>
            </div>
    </section>
</main>

<?php include "../torta_da_te/inc/footer.html"?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="../torta_da_te/js/login.js"></script>
    <script src="../torta_da_te/js/signup_query.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>
    <script src="../torta_da_te/js/my_cart.js"></script>
</body>
</html>