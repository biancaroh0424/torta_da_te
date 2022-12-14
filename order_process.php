
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
    <link rel="stylesheet" href="../torta_da_te/css/main_section5_product.css">
    <link rel="stylesheet" href="../torta_da_te/css/product.css">
    <link rel="stylesheet" href="../torta_da_te/css/order_process.css">
    <link rel="stylesheet" href="../torta_da_te/css/order_process2.css">
    <link rel="stylesheet" href="../torta_da_te/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="../torta_da_te/css/order_process3.css">
    <link rel="stylesheet" href="../torta_da_te/css/member_order_details.css">

    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">

    <title>Order Customizable Cake</title>

</head>
<body>
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
            <a href="../torta_da_te/my_cart.html">View All</a>
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
        <div class="process_title_num" id="process1">
        <h2 id="processTitle1"><span class="process_title_active_num" id="processTitleNum1">1</span>Design Your Cake</h2>
        </div>
        <div class="process_title_num" id="process2">
        <h2 class="process_title_inactive" id="processTitle2"><span class="process_title_inactive_num" id="processTitleNum2">2</span>Pick a Date / Time</h2>
        </div>
        <div class="process_title_num" id="process3">
        <h2 class="process_title_inactive" id="processTitle3"><span class="process_title_inactive_num" id="processTitleNum3">3</span>Checkout</h2>
        </div>
        </div>


        <div class="order_progress">
            <span class="progress_result"></span>
        </div>
        </div>
    </section>
    
<fieldset>
<legend class="hide">Choose cake options you like</legend>
<form class="process_form" action="" method="post">
<div id="productOptionChooseGroup">
<div class="process_img_product_size">
<div class="process_product_img"></div>



<div class="product_detail_group_btn">
<div class="product_detail_group">



    <div class="process_product_detail" id="chooseSize">
    <h3>Size</h3>
    <div class="process_product_size_price">
                    
    <div class="process_product_li">
        
    <input class="process_form_select" type="radio" name="process_form" id="12inch" style="display: none;" value="12inch">
    <label for="12inch" class="image_message_process">
    <span class="inactive_border" id="size12">12"</span> 
    <span class="inactive_servings" id="serving32">32 Servings</span> 
    <span class="inactive_price" id="price80">$80.00</span></label>
            


    <div class="process_product_size_li">
    <input class="process_form_select" type="radio" name="process_form" id="10inch"  style="display: none;" value="10inch">
    <label for="10inch" class="image_message_process">
    <span class="inactive_border" id="size10">
        10"</span> 
    <span class="inactive_servings" id="serving24">24 Servings</span> 
    <span class="inactive_price" id="price60">$60.00</span></label>
    </div>


    <div class="process_product_size_li">
    <input class="process_form_select" type="radio" name="process_form" id="8inch" style="display: none;" value="8inch">

    <label for="8inch" class="image_message_process"><span class="inactive_border" id="size8">8"</span>
    <span class="inactive_servings" id="serving16">16 Servings </span>
    <span class="inactive_price" id="price50">$50.00</span></label>            
    </div>
    </div>
    </div>
    </div>


    <div class="process_product_detail" id="chooseFlavor" style="display:none">
    <h3>Flavor</h3>
    <div class="process_product_size_price">
    <div class="process_product_li"> 
                                
    <input class="chocolate" type="radio" name="process_form" id="chocolate" style="display: none;" value="chocolate">
    <label for="chocolate" class="image_message_process">
                                
    <span class="process_product_size_img1" style="opacity: 0.4" id="productImg1"></span>
    <span class="inactive_servings" id="flavor1">Chocolate</span></label>
            
            
    <input class="process_form_select" type="radio" name="process_form" id="white" style="display: none;" value="white">
    <label for="white" class="image_message_process">
    <span class="process_product_size_img2" style="opacity: 0.4" id="productImg2"></span>
    <span class="inactive_servings" id="flavor2">White</span></label>
        
        
                                
    <input class="process_form_select" type="radio" name="process_form" id="mix" style="display: none;" value="mix">
    <label for="mix" class="image_message_process">
    <span class="process_product_size_img3" style="opacity: 0.4" id="productImg3"></span><span class="inactive_servings" id="flavor3">mix</span></label>

    </div>
    </div>
    </div>

    <div class="process_product_detail" id="messageGift" style="display:none">
    <h3>Message</h3>
    <div class="process_product_size_price">
    <div class="process_product_li">
                        

    <div class="no_message_group" id="noMessageGroupGift">
    <input class="process_form_select" type="radio" name="process_form" style="display: none;" value="no_message_gift" id="noMessageGift">

    <label for="noMessageGift" class="image_message_process">   

    <span class="process_product_no_select_img1 inactive_img" id="messageNoGiftImg"></span>
    <span class="inactive_servings" id="noSelectGiftMessage">No Selection</span>
    </label>
    </div>

                        
    <div class="yes_message_group" id="yesMessageGroupGift">
    <input class="process_form_select" type="radio" name="process_form" id="yesMessageGift" style="display: none;" value="yes_message_gift">

    <label for="yesMessageGift" class="image_message_process">
                        
    <span class="process_product_no_select_img2 inactive_img" id="messageYesGiftImg"></span>
                        
    <span class="inactive_servings" id="yesSelectGiftMessage">Leave a Message to Bakery</span>
    </label>
    </div>                
    </div>


    <div class="make_message" id="makeMessageGiftDetails" style="display:none">
    <input class="process_form_select" type="radio" name="process_form" id="message_details_gift" style="display: none;" value="message_details">
                        
    <label for="message_details_gift" class="image_message_process">
    <span class="process_product_no_select_img2"></span>
    <span class="process_product_servings">Make on Message</span>
    </label>
                        

    <textarea class="make_on_message" name="process_form" id="makeOnMessageGift" maxlength="50" placeholder="Leave your Message. Max. 50 Characters"></textarea>
    </div>
    </div>
    </div>

    <div class="process_product_detail" id="messageBakery" style="display:none">
    
    <h3>Leave a Message to Torta Da Te</h3>
    <div class="process_product_size_price">
    <div class="process_product_li">
                    
    

    <div class="no_message_group" id="noMessageGroupBakery">
    <input class="process_form_select" type="radio" name="process_form" id="noMessageBakery" style="display: none;" value="no_message_bakery">


    <label for="noMessageBakery" class="image_message_process">              
    <span class="process_product_no_select_img1 inactive_img" id="noMsgBakeryImg"></span>
    <span class="inactive_servings" id="noMsgSelectBakery">No Selection</span>
    </label>
    </div>
    

    
    <div class="yes_message_group" id="yesMessageGroupBakery">
    <input class="process_form_select" type="radio" name="process_form" id="yesMessageBakery" style="display: none;" value="yes_message_bakery">

    <label for="yesMessageBakery" class="image_message_process">
                    
    <span class="process_product_no_select_img2 inactive_img" id="yesMsgBakeryImg"></span>
                    
    <span class="inactive_servings" id="yesMsgSelectBakery">Leave a Message to Bakery</span>
    </label>
    </div>
    </div>
    </div>
    
    <div class="make_message" id="makeMessageBakeryDetails" style="display:none">
    <input class="process_form_select" type="radio" name="process_form" id="message_details_bakery" style="display: none;" value="message_details">
                    
    <label for="message_details_bakery" class="image_message_process">
    <span class="process_product_no_select_img2"></span>
    <span class="process_product_servings">Make on Message</span>
    </label>
                    

    <textarea name="process_form" id="makeOnMessageBakery" class="make_on_message" maxlength="50" placeholder="Leave your Message. Max. 50 Characters"></textarea>
    
    </div>
    </div>

    <div class="pagination_btn_1st" id="paginationBtn1">
        <div class="process_pagination"><span  class="pagination_details">
        1</span>
        <span class="pagination_details">/</span>
        <span class="pagination_details inactive">4</span></div>
    <button type="button" class="inactive_btn" id="orderprocess_cake_btn1">flavor<img src="/images/arrow_xs_white.png" alt="go to select flavor"></button>
    </div>
    
    <div class="pagination_btn_2nd" style="display: none" id="paginationBtn2">
    <button type="button" class="btn_process_before">
    <img src="/images/arrow_xs_left.png" alt="">Size</button>
    
    <div class="pagination_right_btn">
    <div class="process_pagination"><span class="pagination_details">
    2</span>
    <span class="pagination_details">/</span>
    <span class="pagination_details inactive">4</span></div>
    <button type="button" class="inactive_btn" id="orderprocess_cake_btn2">Message<img src="../torta_da_te/images/arrow_xs_white.png" alt="go to select flavor"></button>
    </div>
                
    </div>
    
    <div class="pagination_btn_2nd" style="display: none" id="paginationBtn3">
    <button type="button" class="btn_process_before">
    <img src="../torta_da_te/images/arrow_xs_left.png" alt="">Flavor</button>
    
    <div class="pagination_right_btn2">
    <div class="process_pagination">
    <span class="pagination_details">3</span>
    <span class="pagination_details">/</span>
    <span class="pagination_details inactive">4</span></div>
    <button type="button" class="inactive_btn" id="orderprocess_cake_btn3">
    Note to Bakery<img src="../torta_da_te/images/arrow_xs_white.png" alt="go to select flavor"></button>
    </div>
                
    </div>
    
     <div class="pagination_btn_2nd" style="display: none" id="paginationBtn4">
    <button type="button" class="btn_process_before">
    <img src="../torta_da_te/images/arrow_xs_left.png" alt="">Message</button>
    
    <div class="pagination_right_btn4">
    <div class="process_pagination"><span class="pagination_details">4</span><span  class="pagination_details">/</span><span class="pagination_details inactive">4</span></div>
    <button type="button" class="inactive_btn" id="orderprocess_cake_btn4">Date / Time<img src="../torta_da_te/images/arrow_xs_white.png" alt="go to select flavor"></button>
    </div>

    </div> 
</div>
</div>
</div>
</div>

<!--End progress Bar, title-->
    <!--Start customer's order list / date/time picker-->
<div class="orderlist_date_time_picker" id="orderListDateTimeGroup" style="display:none">

<div class="orderlist_date_time_group">
<div class="orderlist_details">  
<div class="orderlist_title_photo">
<div class="order_product_title_price">
<h3><span class="order_product_title">Your Custom Cake</span>
<span>$ 80.00</span></h3>
</div>
</div>


<div>
<div class="order_list_value">
<div class="order_product_typeof_name">
<div class="order_product_preview"></div>
<div class="typeof_cake_name">
<span class="typeof">Based Cake</span>
<span class="cake_name">La torta di formaggio con le fragole e uva</span>
</div>
</div>
</div>
            
        
<div>
<div class="checklist_group" id="servingOptionEdit">
<div class="size_xxs"><p class="hide">12"</p></div><div class="order_list_para_box"> 
<span class="order_list_detail">32 Servings</span></div>
            

<div class="checked_edit" id="dateSizeEdit">
<div class="checklist"><p class="hide">cheked</p></div><span>Edit</span>
</div>

</div>
</div>

<div>
<div class="checklist_group" id="flavorOptionEdit">    
<div class="flavor_xs"></div> <div class="order_list_para_box"><span class="order_list_detail">White / Chocolate</span></div>
            

<div class="checked_edit" id="dateFlavorEdit">
<div class="checklist"><p class="hide">checked</p></div>
<span>Edit</span>
</div>

</div>
</div>

<div>
<div class="checklist_group" id="messageGiftOptionEdit">
<div class="message_xs"></div>
<div class="order_list_para_box">
<span class="order_list_para_title">Message</span>
<span class="order_list_detail">Happy New Year! From Jane Doe to John Doe</span>
</div>

<div class="checked_edit" id="dateMessageGiftEdit">
<div class="checklist"><p class="hide">cheked</p></div>
<span>Edit</span></div>

</div>
</div>

            
<div>
<div class="checklist_group" id="messageBakeryOptionEdit">    
<div class="message_xs"></div>
<div class="order_list_para_box">
<span class="order_list_para_title">Note</span><span class="order_list_detail">We don't want grapes! Please don't add</span>
</div>

<div class="checked_edit" id="dateMessageBakeryEdit">
<div class="checklist"><p class="hide">checked</p></div>
<span>Edit</span>
</div>

</div>
</div>
</div>
</div>
        


<div id="wrapper">
    <div id="demo2"></div>  
</div>

<div class="time_picker">
    <div class="timepicker_title">
    <span>What time would you like to pickup?</span>
    </div>
    <div class="time_slot_group">
    <div class="time_slot">
    <div class="time_details">
    <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1000" value="10:00">
    <label class="pick_time" for="time_pick_detail_1000">
    <span class="time_inactive">10:00</span>
    </label>
    </div>
<div class="time_details">
    <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1030" value="10:30">
    <label class="pick_time"  for="time_pick_detail_1030">
    <span class="time_inactive">10:30</span>
    </label>
    </div>
    <div class="time_details">
    <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1100" value="11:00">
    <label class="pick_time"  for="time_pick_detail_1100">
    <span class="time_inactive">11:00</span>
    </label>
    </div>
    <div class="time_details">
    <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1130" value="11:30">
    <label class="pick_time"  for="time_pick_detail_1130">
    <span class="time_inactive">11:30</span>
    </label>
    </div>
    <div class="time_details">
        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1200" value="12:00">
        <label class="pick_time"  for="time_pick_detail_1200">
        <span class="time_inactive">12:00</span>
        </label>
    </div>
    <div class="time_details">
    <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1230" value="12:30">
    <label class="pick_time"  for="time_pick_detail_1230">
    <span class="time_inactive">12:30</span>
    </label>
    </div>
    <div class="time_details">
    <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1300" value="13:00">
    <label class="pick_time"  for="time_pick_detail_1300">
    <span class="time_inactive">13:00</span>
    </label>
    </div>
    <div class="time_details">
        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1330" value="13:30">
        <label class="pick_time"  for="time_pick_detail_1330">
        <span class="time_inactive">13:30</span>
        </label>
    </div>
    </div>
    <div class="time_slot">
    <div class="time_details">
        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1400" value="14:00">
        <label class="pick_time"  for="time_pick_detail_1400">
        <span class="time_inactive">14:00</span>
        </label>
    </div>
<div class="time_details">
    <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1430" value="14:30">
    <label class="pick_time"  for="time_pick_detail_1430">
    <span class="time_inactive">14:30</span>
    </label>
    </div>
    <div class="time_details">
        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1500" value="15:00">
        <label class="pick_time"  for="time_pick_detail_1500">
        <span class="time_inactive">15:00</span>
                        </label>
                    </div>
                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1530" value="15:30">
                        <label class="pick_time"  for="time_pick_detail_1530">
                        <span class="time_inactive">15:30</span>
                        </label>
                    </div>
                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1600" value="16:00">
                        <label class="pick_time"  for="time_pick_detail_1600">
                        <span class="time_inactive">16:00</span>
                        </label>
                    </div>
                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1630" value="16:30">
                        <label class="pick_time"  for="time_pick_detail_1630">
                        <span class="time_inactive">16:30</span>
                        </label>
                    </div>

                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1700" value="17:00">
                        <label class="pick_time"  for="time_pick_detail_1700">
                        <span class="time_inactive">17:00</span>
                        </label>
                    </div>

                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1730" value="17:30">
                        <label class="pick_time"  for="time_pick_detail_1730">
                        <span class="time_inactive">17:30</span>
                        </label>
                    </div>
                    
                </div>
                <div class="time_slot">

                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1800" value="18:00">
                        <label class="pick_time"  for="time_pick_detail_1800">
                        <span class="time_inactive">18:00</span>
                        </label>
                    </div>
                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1830" value="18:30">
                        <label class="pick_time"  for="time_pick_detail_1830">
                        <span class="time_inactive">18:30</span>
                        </label>
                    </div>

                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1900" value="19:00">
                        <label class="pick_time"  for="time_pick_detail_1900">
                        <span class="time_inactive">19:00</span>
                        </label>
                    </div>
                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_1930" value="19:30">
                        <label class="pick_time"  for="time_pick_detail_1930">
                        <span class="time_inactive">19:30</span>
                        </label>
                    </div>
                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_2000" value="20:00">
                        <label class="pick_time"  for="time_pick_detail_2000">
                        <span class="time_inactive">20:00</span>
                        </label>
                    </div>
                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_2030" value="20:30">
                        <label class="pick_time"  for="time_pick_detail_2030">
                        <span class="time_inactive">20:30</span>
                        </label>
                    </div>
                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_2100" value="21:00">
                        <label class="pick_time"  for="time_pick_detail_2100">
                        <span class="time_inactive">21:00</span>
                        </label>
                    </div>
                    <div class="time_details">
                        <input class="hide" type="radio" name="time_pick_detail" id="time_pick_detail_2130" value="21:30">
                        <label class="pick_time"  for="time_pick_detail_2130">
                        <span class="time_inactive">21:30</span>
                        </label>
                    </div>
                    
                </div>
                </div>
            
           
        </div>

        
    </div>
    <div class="date_time_picker_btn_g" id="paginationBtn5">
    <a class="btn_process_before" href="../torta_da_te/order_process1.html"><img src="../torta_da_te/images/arrow_xs_left.png" alt="">Note</a>
    <button type="button" class="inactive_btn" style="width: 128px; height: 52px;" id="orderprocess_cake_btn5">Checkout<img src="../torta_da_te/images/arrow_xs_white.png" alt="go to checkout"></button>
    </div>
</div>
<div class="product_order_summary_final" id="orderSummaryDateTimeGroup" style="display:none;">
<div style="display: flex; flex-direction: column;">
<div class="pickup_person_group_member">
    <div class="pickup_person_detail">
        <div class="pickup_person_add">

            <span class="pickup_title">Enter Pickup person</span>

            <div class="pickup_form_nomember">
            <div class="pickup_label_input">
            <label for="fullName">*First, Last name</label>

            <div class="phone_message_wrapper">
            <input class="pickup_basic_input" type="text" name="pickup_nomember_name" id="fullName" placeholder="First, Last name">
            <span class="error_message" id="errorMessageName" style="display:none">Please write your Name</span>
            </div>
            </div>


            <div class="pickup_label_input">
            <label for="phone_number">*Phone number</label>
            


            <div class="phone_message_wrapper">
            <input class="pickup_basic_input" type="tel" name="pickup_nomember_phone" id="phone_number" placeholder="ex) 11317890090">
            <span class="error_message" id="errorMessagePhone" style="display:none">Please Write Valid Phone Number</span>
            </div>
            </div>
            

            
            <div class="pickup_label_input">
            <label for="orderEmail1">*Email</label>
            
            <div class="phone_message_wrapper">
            <input class="pickup_basic_input" type="email" name="pickup_nomember_emaile" id="orderEmail1" placeholder="ex) buonatortadate@tortadate.com" required>
            <span class="error_message" id="errorMessageEmail" style="display:none">Please Write Valid Eamil Address</span>
            </div>
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
            <div class="add_another" id="addPickupPersonBtn">
                <span>Add another pickup person</span>
                <div class="add_ico" id="addPickupIcon"></div>
            </div>
            </div>
            </div>
    <div class="pickup_person_add" id="addAnotherPickup" style="display:none">
    <span class="pickup_title">Add another Pickup person</span>

            <div class="pickup_form_nomember">
            <div class="pickup_label_input">
            <label for="first_last_name2">*First, Last name</label>
            <input class="pickup_basic_input" type="text" name="pickup_nomember_name" id="first_last_name2" placeholder="First, Last name">
            </div>


            <div class="pickup_label_input">
            <label for="phone_number2">*Phone number</label>
            <div class="pickup_input_btn">
            <input class="pickup_basic_input" type="tel" name="pickup_nomember_phone" id="phone_number2" placeholder="ex) 113-1789-0090">
            
            </div>
            </div>

            <div class="pickup_label_input">
            <label for="phone_email">*Email</label>
            <div class="pickup_input_btn">
            <input class="pickup_basic_input" type="email" name="pickup_nomember_email" id="phone_email" placeholder="ex) buonatortadate@tortadate.com">
           
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
                <label for="pickup_promotion">I???ve read and I agree in <a href="#">Terms of Use</a></label>
                <input type="checkbox" name="checkbox_promotion" id="pickup_promotion2" checked>
            </div>
            <div class="member_pickup_policy_check">
                <label for="pickup_promotion">I???ve read and I agree in  <a href="#">Privacy Policy</a></label>
                <input type="checkbox" name="checkbox_promotion" id="pickup_promotion3" checked>
            </div>
    
    
            <button type="button" class="summary_checkout_btn_member">
                Checkout
            </button>
    
            </div>
        </div>
</div>

</form>
</fieldset>
        

 <section class="recommended_prod">
        <div class="recommended_prod_ttl">
            <h3>Accessories for Your Peronalized Cake</h3>
        </div>
    
<ul class="bxslider3">
        <li class="card_horiz_img_btn_wish">
            <div class="card_horiz_img_btn">
            <div class="card_horiz_product_img1"></div>
    
            <div class="card_horiz_ttl_btn">
            <div class="card_horiz_tag_title_price">
            <div class="card_horiz_title_tag">
            <div class="card_horiz_title card_horiz">Happy Birthday Special Candle</div>
            <div class="card_tag card_horiz"><span class="hide">For</span> <span class="tag">Birthday</span> <span class="tag">Family</span> <span class="tag">Parents</span></div>
            </div>
            <span class="card_horiz_price">$ 3.00</span>
            </div>
            <span class="add_to_bag_btn">Add to bag<img src="..torta_da_te/images/add_ico.png" alt=""></span>
    
    
            </div>
        </div>
        <div class="horiz_wish"><div class="hide">Add to Wishlist</div></div>
        </li>

        <li class="card_horiz_img_btn_wish">
            <div class="card_horiz_img_btn">
            <div class="card_horiz_product_img2"></div>
    
            <div class="card_horiz_ttl_btn">
            <div class="card_horiz_tag_title_price">
            <div class="card_horiz_title_tag">
            <div class="card_horiz_title card_horiz">Happy Birthday Special Candle</div>
            <div class="card_tag card_horiz"><span class="hide">For</span> <span class="tag">Birthday</span> <span class="tag">Family</span> <span class="tag">Parents</span></div>
            </div>
            <span class="card_horiz_price">$ 3.00</span>
            </div>
            <span class="add_to_bag_btn">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>
    
    
    
            </div>
        </div>
        <div class="horiz_wish"><div class="hide">Add to Wishlist</div></div>
        </li>

        <li class="card_horiz_img_btn_wish">
            <div class="card_horiz_img_btn">
            <div class="card_horiz_product_img3"></div>
    
            <div class="card_horiz_ttl_btn">
            <div class="card_horiz_tag_title_price">
            <div class="card_horiz_title_tag">
            <div class="card_horiz_title card_horiz">Happy Birthday Special Candle</div>
            <div class="card_tag card_horiz"><span class="hide">For</span> <span class="tag">Birthday</span> <span class="tag">Family</span> <span class="tag">Parents</span></div>
            </div>
            <span class="card_horiz_price">$ 3.00</span>
            </div>
            <span class="add_to_bag_btn">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>
    
    
    
    
            </div>
        </div>
        <div class="horiz_wish"><div class="hide">Add to Wishlist</div></div>
        </li>

        <li class="card_horiz_img_btn_wish">
            <div class="card_horiz_img_btn">
            <div class="card_horiz_product_img4"></div>
    
            <div class="card_horiz_ttl_btn">
            <div class="card_horiz_tag_title_price">
            <div class="card_horiz_title_tag">
            <div class="card_horiz_title card_horiz">Happy Birthday Special Candle</div>
            <div class="card_tag card_horiz"><span class="hide">For</span> <span class="tag">Birthday</span> <span class="tag">Family</span> <span class="tag">Parents</span></div>
            </div>
            <span class="card_horiz_price">$ 3.00</span>
            </div>
            <span class="add_to_bag_btn">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>
    
           
            </div>
        </div>
        <div class="horiz_wish"><div class="hide">Add to Wishlist</div></div>
        </li>
    </ul>
    
    </section>
    
</main>

<?php include "../torta_da_te/inc/footer.html"?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="../torta_da_te/js/product_celebration.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>
    <script src="../torta_da_te/js/orderprocess1.js"></script>
    <script src="../torta_da_te/js/orderprocess2.js"></script>
    <script src="../torta_da_te/js/jquery.datetimepicker.min.js"></script>
    
    <script src="../torta_da_te/js/jquery.bxslider.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>

    <script>
        $(document).ready(function(){
    
        $('.bxslider3').bxSlider({
                mode: 'horizontal',
                moveSlides: 1,
                slideMargin: 10,
                infiniteLoop: true,
                slideWidth: 1180,
                minSlides: 4,
                maxSlides: 4,
                speed: 600,
                pager: false,
                controls:false
            });
        });
    </script>

<script type="text/javascript">
    $(document).ready(function(){
        function logEvent(type, date) {
            $("<div class='log__entry'/>").hide().html("<strong>"+type + "</strong>: "+date).prependTo($('#eventlog')).show(200);
        }
        $('#clearlog').click(function() {
            $('#eventlog').html('');
        });


        $('#demo2').datetimepicker({
            date: new Date(),
            viewMode: 'YMD',
            onDateChange: function(){
                $('#date-text2').text(this.getText());
                $('#date-text-ymd2').text(this.getText('yyyy-MM-dd'));
                $('#date-value2').text(this.getValue());
            }
        });

    });
</script>


</body>
</html>