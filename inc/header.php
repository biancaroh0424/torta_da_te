<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
?>

<header id="header">
    <nav>
    <h1 class="hide">Torta Da Te</h1>

    <div class="promo_background">
    <div class="promo_banner">
        <a href="#">
    <h3 class="hide">Promotion</h3>
        <p>SIGNUP TODAY :) GET 30% OFF COUPON! CUSTOMIZE CAKE
        NOW</p>
    </a>
    </div>
  </div>

  <div class="gnb">
    <div class="gnb_top">
    <div class="quickmenu_gnb">
        <div class="gnb_menu_slider">
        </div>
        <div class="search_icon"></div>
        <div class="logo_sub" style="display:none"></div>
    </div>


    <div class="search_active" style="display:none">
      <fieldset>
        <legend class="hide">Search Fully Customizable Cake</legend>
        <form action="" method="get" name="search_active">
                <button type="submit" class="nav_search_ico">Search</button>
                
                <input type="text" name="search_nav" id="searchNav">
              </form>
        </fieldset>
        
    </div>
        <div class="logo_right_menu">
          <div class="logo_main">
          <a href="index.html">
        
          <img src="../images/logo_main.png" alt="" width="196" height="26">
        </a>
        </div>
          
        
        <div class="gnb_right">
        <div class="gnb_business">
            <h2 class="hide">Business Pages</h2>
            <ul>
                <li><a href="../torta_da_te/location.html">Location</a></li>
                <li><a href="../torta_da_te/about_us.html">About us</a></li>
                <li><a href="../torta_da_te/faq.html">FAQ</a></li>
            </ul>
        </div>
    
        <div class="gnb_mypage">
            <h2 class="hide">Mypage</h2>
            <ul>
                <?php if (!$s_idx){ ?> 
                <li>
                    <a href="../torta_da_te/login.php"><img src="../torta_da_te/images/myaccount.png" alt=""><p class="hide">Login</p></a>
                </li>
                <?php } else if($s_email == "admin@tortadate.it") { ?>


                <li>
                <a href="../torta_da_te/login.php"><img src="../torta_da_te/images/myaccount_logedin.png" alt=""><p class="hide">Admin</p></a>
                </li>
                <?php } else {?>
                <li>
                <a href="../torta_da_te/login.php"><img src="../torta_da_te/images/myaccount_logedin.png" alt=""><p class="hide">Admin</p></a>
                </li>
                <?php };?>

                <li><a href="../torta_da_te/my_cart.html"><img src="../torta_da_te/images/cart_nav.png" alt=""><p class="hide">My Cart</p></a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>




    <div class="gnb_sub">
    <h2 class="hide">Sub Menu</h2>
    <div class="gnb_sub_area">
    <ul>
        <li><a href="../torta_da_te/product_1hour.html">1 HOUR CLICK & COLLECT</a></li>
        <li><a href="../torta_da_te/product_celebration.html">CELEBRATION</a></li>
        <li><a href="../torta_da_te/product_vegeterian.html">VEGETERIAN</a></li>
        <li><a href="../torta_da_te/product_accessories.html">ACCESSORIES</a></li>
    </ul>
</div>
    </div>
    <div class="gnb_sub2">
        <h2 class="hide">Sub Menu</h2>
        <div class="gnb_sub_area">
        <ul>
            <li><a href="../torta_da_te/product_1hour.html">1 HOUR CLICK & COLLECT</a></li>
            <li><a href="../torta_da_te/product_celebration.html">CELEBRATION</a></li>
            <li><a href="../torta_da_te/product_vegeterian.html">VEGETERIAN</a></li>
            <li><a href="../torta_da_te/product_accessories.html">ACCESSORIES</a></li>
        </ul>
    </div>
        </div>
    
    </div>
    </nav>
<!--아이콘클릭시 나오는 슬라이드 메뉴-->
<div class="slide_menu" style="display:none">
    <h2 class="hide">OUR PRODUCTS</h2>
    <h3 class="hide">VIEW DETAILS</h3>
    <div class="close_nav"><p class="hide">Close menu</p></div>

    
    <div class="menu_group">
        <div class="logo_slide_menu">
        </div>
        <?php if (!$s_idx){ ?>
        <div class="option">
        <div class="slide_title_mypage" onclick="location.href='../torta_da_te/login.php'">
        <div class="user_ico_name">
        <img src="../images/myaccount.png" alt=""><h4 class="user_name">Login</h4>
        </div>
        </div>
        </div>

        
       <?php }else if($s_email == "admin@tortadate.it") { ?>
        <div class="option">
        <div class="slide_title_mypage" id="logged_in_mypage">
        <div class="user_ico_name">
        <img src="../torta_da_te/images/myaccount_logedin.png" alt=""><?php echo $s_email; ?><h4 class="user_name"></h4>
        </div>
        <div class="see_more">
            <p class="hide">See more</p>
        </div>
        </div>
        <ul id="user_menu" style="display:none">
            <li><a href="#">My Cart</a></li>
            <li><a href="#">My Wishlist</a></li>
            <li><a href="#">My Order </a></li>
            <li><a href="../torta_da_te/logout.php">Logout</a></li>
        </ul>
       </div>




        <?php } else { ?>
        <div class="option">
        <div class="slide_title_mypage" id="logged_in_mypage">
        <div class="user_ico_name">
        <img src="../torta_da_te/images/myaccount_logedin.png" alt="">
        <h4 class="user_name"><?php echo $s_email; ?></h4>
        </div>
        <div class="see_more">
            <p class="hide">See more</p>
        </div>
        </div>
        <ul id="user_menu" style="display:none">
            <li><a href="#">My Cart</a></li>
            <li><a href="#">My Wishlist</a></li>
            <li><a href="#">My Order </a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
        </div>
        <?php };?>
  

        <h4><a href="../torta_da_te/product_1hour.html">1 HOUR CLICK AND COLLECT</a></h4>

        <div class="option">
        <div class="slide_title" id="celebration">
        <h4>CELEBRATION</h4>
        <div class="see_more">
            <p class="hide">See more</p>
        </div>
        </div>
        
        <ul id="celebration_menu" style="display:none">
            <li><a href="#">Birthday</a></li>
            <li><a href="#">Anniversary</a></li>
            <li><a href="#">For Parents</a></li>
            <li><a href="#">For Kids</a></li>
            <li><a href="#">Wedding</a></li>
        </ul>
        </div>
        
        <div class="option">
        <div class="slide_title" id="vegeterian">
        <h4>VEGETERIAN</h4>
        <div class="see_more">
            <p class="hide">See more</p>
        </div>
       </div>
        <ul id="vegeterian_menu" style="display:none">
            <li><a href="#">Birthday</a></li>
            <li><a href="#">Anniversary</a></li>
            <li><a href="#">For Parents</a></li>
            <li><a href="#">For Kids</a></li>
            <li><a href="#">Wedding</a></li>
        </ul>
        </div>
        
        <div class="option">
        <div class="slide_title" id="accessories">
        <h4>ACCESSORIES</h4>
        <div class="see_more">
            <p class="hide">See more</p>
        </div>
        </div>
        <ul id="accessories_menu" style="display:none">
            <li><a href="#">Candles</a></li>
            <li><a href="#">Flowers</a></li>
            <li><a href="#">Balloons</a></li>
            <li><a href="#">Drinks</a></li>
        </ul>
        </div>
        <h4><a href="#">ABOUT US</a></h4>
        <h4><a href="faq.html">FAQ</a></h4>
        <h4><a href="1to1_qna.html">1:1 Q&A</a></h4>
        </div>
        </div>
     
<div class="overlay" style="display:none"></div>

<!--슬라이드메뉴+오버레이 효과 끝-->
  </header>   