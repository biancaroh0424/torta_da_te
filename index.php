
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
    <title>Torta Da Te</title>
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/css_reset.css">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/style_menu_footer.css">
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/main_section1_4.css">
    <link rel="stylesheet" href="../torta_da_te/css/main_section5_product.css">
    <link rel="stylesheet" href="../torta_da_te/css/main_section9.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>




    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">
    

    <style>
      .swiper,.mySwiper,.mySwiper2 {
        z-index: 0;
        width: 100%;
          }

      .mySwiper .swiper-slide{
        width: 282px !important;
        margin-right: 10px;
        }
      .swiper-button-prev,.swiper-button-prev::after,.swiper-button-next,.swiper-button-next::after{
        width: 24px;
        height: 24px;
        color: #fff;
        font-size: 24px;
      }


      .swiper-button-prev2,.swiper-button-prev2::after,.swiper-button-next2,.swiper-button-next2::after{
        width: 24px;
        height: 24px;
        color: #000;
        font-size: 24px;
      }


      .swiper-pagination-bullet{
        opacity: 0.4;
        border: 2px solid #fff;
      }

      .swiper-pagination-bullet-active {
        opacity: 1;
        background: #fff;
      }



      
    </style>
</head>
<body>

<?php 

include "../torta_da_te/inc/header.php";

?>    
    <div class="swiper mySwiper2">
    <div class="swiper-wrapper">
      
    <div class="swiper-slide">
      <div class="main_container">
          <div class="section_main">
            <div class="textbox">
              <h3>SHARE YOUR HEART
              SHOW YOUR LOVE</h3>
              <p>
              Every custom creation is prepared with fresh Organic natural ingredients, express your heart through fully customizable cake to your family and friends
              </p>
          
      
          <a class="btn" href="#">Customize Cake</a>
          </div>
          </div>
      </div>
    </div>

    <div class="swiper-slide">
      <div class="section_main2">
            <div class="main_container">
              <div class="textbox">
                  <h3>SHARE YOUR HEART
                  SHOW YOUR LOVE</h3>
                  <p>
                  Every custom creation is prepared with fresh Organic natural ingredients, express your heart through fully customizable cake to your family and friends
                  </p>
              </div>
          
              <a class="btn" href="#">Customize Cake</a>
            </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="section_main3">
            <div class="main_container">
              <div class="textbox">
                <h3>SHARE YOUR HEART
                      SHOW YOUR LOVE</h3>
                  <p>
                    Every custom creation is prepared with fresh Organic natural ingredients, express your heart through fully customizable cake to your family and friends
                      </p>
              </div>
              
              <a class="btn" href="#">Customize Cake</a>
            </div>
      </div>
    </div>
    </div>
    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>



    <section class="sec2">
        <div class="how_to_order">


        <h3>How to order?</h3>


        <div class="how_to_step">
            <div class="how_to_detail">
        <img src="../images/Card_ico1.png" alt="">
        <div class="how_to_title_desc">
        <h4>Design your cake how you want!</h4>
        <p>Choose from our many flavors & decorative options.</p>
        </div>
        </div>
        <img src="../images/arrow_big.png" alt="">
        <div class="how_to_detail">
        <img src="../images/Card_ico2.png" alt="">
        <div class="how_to_title_desc">   
        <h4>We hand-decorate it</h4>
        <p>Our bakery will create the perfect 
        custom cake for your special occasion.</p>
    </div>
    </div>
        <img src="../torta_da_te/images/arrow_big.png" alt="">
        <div class="how_to_detail">
        <img src="../torta_da_te/images/Card_ico3.png" alt="">
        <div class="how_to_title_desc">
        <h4>Pick up & enjoy :)</h4>
        <p>Your order will be waiting for you at your local Torta da te!</p>
        </div>
    </div>
    </div>
    </div>
    </section>



    <div class="swiper mySwiper3">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="sec3">
            <div class="intro_img">
            <div class="intro_title_desc_btn">
            <h3>1 HOUR CLICK &  COLLECT</h3>
            <p>Get the party started with Torta Da Te! Click and collect cake service. Having an fresh organic ingredients such as dough, fresh cream, celebration cake! You simply click and order your chosen Torta Da Te cake online and it will be ready for you to collect in store within the hour (selected cakes only).</p>
                <a href="#">Customize Cake</a>
              
            </div>
            <img class="intro1" src="../images/intro1.png" alt="">
          </div>
          </div>
        </div>
      <div class="swiper-slide">
            <div class="sec3">
              <div class="intro_img">
              <div class="intro_title_desc_btn">
              <h3>CELEBRATION</h3>
              <p>Get the party started with Torta Da Te! Click and collect cake service. Having an fresh organic ingredients such as dough, fresh cream, celebration cake! You simply click and order your chosen Torta Da Te cake online and it will be ready for you to collect in store within the hour (selected cakes only).</p>
                  <a href="../product_celebration.html">Customize Cake</a>
                
              </div>
              <img class="intro1" src="../images/intro2.png" alt="">
            </div>
              </div>
      </div>
      <div class="swiper-slide">
      <div class="sec3">
      <div class="intro_img">
      <div class="intro_title_desc_btn">
      <h3>VEGETERIAN</h3>
      <p>Get the party started with Torta Da Te! Click and collect cake service. Having an fresh organic ingredients such as dough, fresh cream, celebration cake! You simply click and order your chosen Torta Da Te cake online and it will be ready for you to collect in store within the hour (selected cakes only).</p>
      <a href="#">Customize Cake</a>
                  
      </div>
      <img class="intro1" src="../images/intro3.png" alt="">
      </div>
      </div>
      </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>


    <section class="sec4">
        <div class="us_img_desc">
        <img src="../images/about_us.jpg" alt="">
        <div class="us_title_btn">
        <h3>ABOUT US</h3>
        <p>We pride ourselves in using the finest quality ingredients, and taking the upmost care in the production of our cakes. It is a great honour for us to share our customers' most important occasions, and we pride ourselves in delivering first-rate customer service as well as delicious and beautiful cakes.</p>
        <a href="#">View Details</a>
        </div>
        </div>
    </section>

    <!-- 프로덕트 리스트 시작 -->

    <div class="sec5">
        <div class="sec_title_btn">
          <h3>1 HOUR CLICK & COLLECT</h3>
          <a href="#">VIEW ALL</a>
          </div>
    
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
              
                
              <div class="product_card">
                <a href="../order_process.html">
                <a href="../order_process.html">
                <div class="card_img1">
                  </a>
                </div>
                </a>
                <div class="card_details">        
                  <div class="card_title">
            White cream with raspberry chocolate and fresh mint
            </div>
            <div class="price_tag">
            <div class="card_price">
            <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
            </div>
            <div class="card_tag">
            <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
            </div>
          </div>
            <div class="pickup">Free Pickup</div>
            <a href=""></a><span class="card_order_btn">Customize Cake</span>
            </div>
            <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
              </div>
              </div>
              <div class="swiper-slide">
                
              <div class="product_card">
                <a href="../torta_da_te/order_process.html">
            <div class="card_img2">
            </div>
            </a>
            <div class="card_details">        
              <div class="card_title">
        White cream with raspberry chocolate and fresh mint
        </div>
        <div class="price_tag">
        <div class="card_price">
        <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
        </div>
        <div class="card_tag">
        <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
        </div>
    </div>
        <div class="pickup">Free Pickup</div>
        <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
        </div>
        <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
              </div>
              </div>
              <div class="swiper-slide">
                
              <div class="product_card">
                <a href="../torta_da_te/order_process.html">
          <div class="card_img3">
          </div>
          </a>
          <div class="card_details">        
            <div class="card_title">
      White cream with raspberry chocolate and fresh mint
      </div>
      <div class="price_tag">
      <div class="card_price">
      <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
      </div>
      <div class="card_tag">
      <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
      </div>
    </div>
      <div class="pickup">Free Pickup</div>
      <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
      </div>
      <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
              </div>
              </div>
              <div class="swiper-sli
              de">
          <div class="product_card">
 
 <a href="../torta_da_te/order_process.html">           <div class="card_img4">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
    White cream with raspberry chocolate and fresh mint
    </div>
    <div class="price_tag">
    <div class="card_price">
    <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
    </div>
    <div class="card_tag">
    <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
    </div>
    </div>
    <div class="pickup">Free Pickup</div>
    <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
    </div>
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
          </div>
              </div>
              <div class="swiper-slide">
                
              <div class="product_card">
                <a href="../torta_da_te/order_process.html">
            <div class="card_img5">
            </div>
            </a>
            <div class="card_details">        
              <div class="card_title">
        White cream with raspberry chocolate and fresh mint
        </div>
        <div class="price_tag">
        <div class="card_price">
        <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
        </div>
        <div class="card_tag">
        <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
        </div>
        </div>
        <div class="pickup">Free Pickup</div>
        <a href="../torta_da_te/order_process.html">
        <span class="card_order_btn">Customize Cake</span>
        </a>
        </div>
        <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
              </div>
              </div>
              <div class="swiper-slide">
                
                <div class="product_card">
                <a href="../torta_da_te/order_process.html">
              <div class="card_img6">
              </div>
              </a>
              <div class="card_details">        
                <div class="card_title">
          White cream with raspberry chocolate and fresh mint
          </div>
          <div class="price_tag">
          <div class="card_price">
          <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
          </div>
          <div class="card_tag">
          <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
          </div>
          </div>
          <div class="pickup">Free Pickup</div>
          <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span>
            </a>
          </div>
          <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
                </div>
              </div>
    
            </div>
          </div>
    </div>

      <div class="sec6">
        <div class="sec_title_btn">
          <h3>CELEBRATION</h3>
          <a href="#">VIEW ALL</a>
          </div>

          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                
              <div class="product_card">
                <a href="../torta_da_te/order_process.html">
                <div class="card_img7">
                </div>
                </a>
                <div class="card_details">        
                  <div class="card_title">
            White cream with raspberry chocolate and fresh mint
            </div>
            <div class="price_tag">
            <div class="card_price">
            <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
            </div>
            <div class="card_tag">
            <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
            </div>
          </div>
            <div class="pickup">Free Pickup</div>
            <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span>
              </a>
            </div>
            <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
              </div>
              </div>
              <div class="swiper-slide">
                
              <div class="product_card">
                <a href="../torta_da_te/order_process.html">
            <div class="card_img8">
            </div>
            </a>
            <div class="card_details">        
              <div class="card_title">
        White cream with raspberry chocolate and fresh mint
        </div>
        <div class="price_tag">
        <div class="card_price">
        <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
        </div>
        <div class="card_tag">
        <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
        </div>
    </div>
        <div class="pickup">Free Pickup</div>
        <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
        </div>
        <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
              </div>
              </div>
              <div class="swiper-slide">
                
              <div class="product_card">
                <a href="../torta_da_te/order_process.html">
          <div class="card_img9">
          </div>
          </a>
          <div class="card_details">        
            <div class="card_title">
      White cream with raspberry chocolate and fresh mint
      </div>
      <div class="price_tag">
      <div class="card_price">
      <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
      </div>
      <div class="card_tag">
      <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
      </div>
    </div>
      <div class="pickup">Free Pickup</div>
      <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
      </div>
      <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
              </div>
              </div>
              <div class="swiper-sli
              de">
          <div class="product_card">
 
 <a href="../torta_da_te/order_process.html">           <div class="card_img10">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
    White cream with raspberry chocolate and fresh mint
    </div>
    <div class="price_tag">
    <div class="card_price">
    <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
    </div>
    <div class="card_tag">
    <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
    </div>
    </div>
    <div class="pickup">Free Pickup</div>
    <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
    </div>
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
          </div>
              </div>
              <div class="swiper-slide">
                
              <div class="product_card">
                <a href="../torta_da_te/order_process.html">
            <div class="card_img11">
            </div>
            </a>
            <div class="card_details">        
              <div class="card_title">
        White cream with raspberry chocolate and fresh mint
        </div>
        <div class="price_tag">
        <div class="card_price">
        <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
        </div>
        <div class="card_tag">
        <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
        </div>
        </div>
        <div class="pickup">Free Pickup</div>
        <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
        </div>
        <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
              </div>
              </div>
              <div class="swiper-slide">
                
                <div class="product_card">
                <a href="../torta_da_te/order_process.html">
              <div class="card_img12">
              </div>
              </a>
              <div class="card_details">        
                <div class="card_title">
          White cream with raspberry chocolate and fresh mint
          </div>
          <div class="price_tag">
          <div class="card_price">
          <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
          </div>
          <div class="card_tag">
          <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
          </div>
          </div>
          <div class="pickup">Free Pickup</div>
          <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
          </div>
          <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
                </div>
              </div>
    
            </div>
          </div>
      </div>

      <div class="sec7">
        <div class="sec_title_btn">
          <h3>VEGETERIAN</h3>
          <a href="#">VIEW ALL</a>
          </div>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            
          <div class="product_card">
            <a href="../torta_da_te/order_process.html">
            <div class="card_img13">
            </div>
            </a>
            <div class="card_details">        
              <div class="card_title">
        White cream with raspberry chocolate and fresh mint
        </div>
        <div class="price_tag">
        <div class="card_price">
        <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
        </div>
        <div class="card_tag">
        <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
        </div>
      </div>
        <div class="pickup">Free Pickup</div>
        <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
        </div>
        <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
          </div>
          </div>
          <div class="swiper-slide">
            
          <div class="product_card">
            <a href="../torta_da_te/order_process.html">
        <div class="card_img14">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
    White cream with raspberry chocolate and fresh mint
    </div>
    <div class="price_tag">
    <div class="card_price">
    <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
    </div>
    <div class="card_tag">
    <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
    </div>
</div>
    <div class="pickup">Free Pickup</div>
    <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
    </div>
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
          </div>
          </div>
          <div class="swiper-slide">
            
          <div class="product_card">
            <a href="../torta_da_te/order_process.html">
      <div class="card_img15">
      </div>
      </a>
      <div class="card_details">        
        <div class="card_title">
  White cream with raspberry chocolate and fresh mint
  </div>
  <div class="price_tag">
  <div class="card_price">
  <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
  </div>
  <div class="card_tag">
  <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
  </div>
</div>
  <div class="pickup">Free Pickup</div>
  <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
  </div>
  <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
          </div>
          </div>
          <div class="swiper-sli
          de">
      <div class="product_card">
 
 <a href="../torta_da_te/order_process.html">       <div class="card_img16">
    </div>
    </a>
    <div class="card_details">        
      <div class="card_title">
White cream with raspberry chocolate and fresh mint
</div>
<div class="price_tag">
<div class="card_price">
<span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
</div>
<div class="card_tag">
<span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
</div>
</div>
<div class="pickup">Free Pickup</div>
<a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
</div>
<div class="wishlist"><div class="hide">Add to Wishlist</div></div>
      </div>
          </div>
          <div class="swiper-slide">
            
          <div class="product_card">
            <a href="../torta_da_te/order_process.html">
        <div class="card_img17">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
    White cream with raspberry chocolate and fresh mint
    </div>
    <div class="price_tag">
    <div class="card_price">
    <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
    </div>
    <div class="card_tag">
    <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
    </div>
    </div>
    <div class="pickup">Free Pickup</div>
    <a href=""></a><span class="card_order_btn">Customize Cake</span>
    </div>
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
          </div>
          </div>
          <div class="swiper-slide">
            
            <div class="product_card">
            <a href="../torta_da_te/order_process.html">
          <div class="card_img9">
          </div>
          </a>
          <div class="card_details">        
            <div class="card_title">
      White cream with raspberry chocolate and fresh mint
      </div>
      <div class="price_tag">
      <div class="card_price">
      <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
      </div>
      <div class="card_tag">
      <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
      </div>
      </div>
      <div class="pickup">Free Pickup</div>
      <a href="../torta_da_te/order_process.html"><span class="card_order_btn">Customize Cake</span></a>
      </div>
      <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
            </div>
          </div>

        </div>
      </div>
      </div>
      </div>

      <div class="sec8">
        <div class="sec_title_btn">
          <h3>ACCESSORIES</h3>
          <a href="#">VIEW ALL</a>
          </div>


<div class="swiper mySwiper">
  <div class="swiper-wrapper">

    <div class="swiper-slide">
      
      <div class="product_card">
      <a href="../torta_da_te/order_process.html">
        <div class="card_img19">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
    Pink Candy Shining Star Balloons
    </div>
    <div class="price_tag">
    <div class="card_price">
  <span class="price_value">$4.30</span>
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

    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
    </div>
    </div>
    </div>
    <div class="swiper-slide">
      
      <div class="product_card">
        <a href="../torta_da_te/order_process.html">
        <div class="card_img20">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
    White cream with raspberry chocolate and fresh mint
    </div>
    <div class="price_tag">
    <div class="card_price">
    <span class="price_value">$3.20</span>
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
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
      </div>
      </div>
    </div>
    <div class="swiper-slide">
      
      <div class="product_card">
      <a href="../torta_da_te/order_process.html">
      <div class="card_img21">
      </div>
      </a>
      <div class="card_details">        
        <div class="card_title">
  White cream with raspberry chocolate and fresh mint
  </div>
  <div class="price_tag">
  <div class="card_price">
   <span class="price_value">$4.20</span>
  </div>
  <div class="card_tag">
  <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
  </div>
</div>
  <div class="pickup">Free Pickup</div>
  <div class="order_btn_wrapper">
    <span class="add_to_bag_btn" id="accAdd3">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>


    <div class="card_order_btn_active" style="display:none" id="counterBtn3">
      <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product" id="subtract3">
      <span class="counter_card_order_btn_active" id="result3">1</span>
      <img id="add3" src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">        
  </div>
</div>
  <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
      </div>
    </div>
    </div>
    <div class="swiper-slide">
      
      <div class="product_card">
      <a href="../torta_da_te/order_process.html">
        <div class="card_img22">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
    White cream with raspberry chocolate and fresh mint
    </div>
    <div class="price_tag">
    <div class="card_price">
    <span class="price_value">$6.40</span>
    </div>
    <div class="card_tag">
    <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
    </div>
    </div>
    <div class="pickup">Free Pickup</div>
    <div class="order_btn_wrapper">
      <span class="add_to_bag_btn" id="accAdd4">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>
    
    
      <div class="card_order_btn_active" style="display:none" id="counterBtn4">
        <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product" id="subtract4">
        <span class="counter_card_order_btn_active" id="result4">1</span>
        <img id="add4" src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">        
    </div>
    </div>
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
    </div>
      </div>
    </div>
    <div class="swiper-slide">
      
      <div class="product_card">
      <a href="../torta_da_te/order_process.html">
        <div class="card_img23">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
    White cream with raspberry chocolate and fresh mint
    </div>
    <div class="price_tag">
    <div class="card_price">
    <span class="price_value">$2.00</span>
    </div>
    <div class="card_tag">
    <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
    </div>
    </div>
    <div class="pickup">Free Pickup</div>
    <div class="order_btn_wrapper">
      <span class="add_to_bag_btn" id="accAdd5">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>


      <div class="card_order_btn_active" style="display:none" id="counterBtn5">
        <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product" id="subtract5">
        <span class="counter_card_order_btn_active" id="result5">1</span>
        <img id="add5" src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">        
    </div>
</div>
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
      </div></div>
    </div>
    <div class="swiper-slide">
      
      <div class="product_card">
      <a href="../torta_da_te/order_process.html">
        <div class="card_img21">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
    White cream with raspberry chocolate and fresh mint
    </div>
    <div class="price_tag">
    <div class="card_price">
     <span class="price_value">$8.00</span>
    </div>
    <div class="card_tag">
    <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
    </div>
    </div>
    <div class="pickup">Free Pickup</div>
    <div class="order_btn_wrapper">
                <span class="add_to_bag_btn" id="accAdd6">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>


            <div class="card_order_btn_active" style="display:none" id="counterBtn6">
                  <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product" id="subtract6">
                  <span class="counter_card_order_btn_active" id="result6">1</span>
                  <img id="add6" src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">        
              </div>
        </div>
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
      </div>
    </div>
    </div>
    <div class="swiper-slide">
      
      <div class="product_card">
      <a href="../torta_da_te/order_process.html">
        <div class="card_img19">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
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
      <span class="add_to_bag_btn" id="accAdd7">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>


  <div class="card_order_btn_active" style="display:none" id="counterBtn7">
        <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product" id="subtract7">
        <span class="counter_card_order_btn_active" id="result7">1</span>
        <img id="add7" src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">        
    </div>
</div>
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
      </div>
      </div>
    </div>

    <div class="swiper-slide">
      
      <div class="product_card">
      <a href="../torta_da_te/order_process.html">
        <div class="card_img22">
        </div>
        </a>
        <div class="card_details">        
          <div class="card_title">
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
      <span class="add_to_bag_btn" id="accAdd8">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>


  <div class="card_order_btn_active" style="display:none" id="counterBtn8">
        <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product" id="subtract8">
        <span class="counter_card_order_btn_active" id="result8">1</span>
        <img id="add8" src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">        
    </div>
</div>
    <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
      </div>
    </div>


    </div>


    <div class="swiper-slide">
      
    <div class="product_card">
      <a href="../torta_da_te/order_process.html">
      <div class="card_img1">
      </div>
      </a>
      <div class="card_details">        <div class="card_title">
  White cream with raspberry chocolate and fresh mint
  </div>
  <div class="price_tag">
  <div class="card_price">
  <span class="price_title">From</span> <span class="price_value">$45.00 ~ 80.00</span>
  </div>
  <div class="card_tag">
  <span class="hide">For</span> <span class="tag">Birthday</span><span class="tag">Family</span><span class="tag">Parents</span>
  </div>
</div>
  <div class="pickup">Free Pickup</div>
  <div class="order_btn_wrapper">
      <span class="add_to_bag_btn" id="accAdd9">Add to bag<img src="../torta_da_te/images/add_ico.png" alt=""></span>


  <div class="card_order_btn_active" style="display:none" id="counterBtn9">
        <img src="../torta_da_te/images/subtract_ico.png" alt="" class="subtract_product" id="subtract9">
        <span class="counter_card_order_btn_active" id="result9">1</span>
        <img id="add9" src="../torta_da_te/images/add_ico_white.png" class="add_product" alt="">        
    </div>
</div>
  <div class="wishlist"><div class="hide">Add to Wishlist</div></div>
</div>
</div>
  </div>
  </div>
</div>
      </div>
    <!-- 여기까지 프로덕트 리스트 -->
       
    
   
    <div class="sec9">
         <div class="location">
         <img src="../torta_da_te/images/location_img.jpg" alt="">
         <div class="location_title_btn">
         <h3>LOCATION</h3>
         <div class="location_details">
            <div class="location_address">
            <h4>ADDRESS</h4>
            <p>VIA ALESSANDRO VOLTA LALA 323 HAPPY COUNTRY 11313</p>
            </div>
            <div class="location_phone">
                <h4>PHONE</h4>
                <p>113-3456-9879</p>
                </div>
         </div>
         <a href="#">View Details</a>
         </div>
         </div>

    </div>
  

    <!-- 리뷰 리스트 시작 -->
    
    <div class="sec10">
        <div class="sec_title_btn">
        <h3>REVIEWS</h3>
        <a href="#">VIEW ALL</a>
        </div>

        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
        
        <div class="swiper-slide">
        <div class="review_card">
            <div class="review_img1">
            </div>
            <div class="review_detail_group">
            <div class="review_details">        
            <div class="review_title">
                LOREM IPSUM DOLOR SIT AMET
                YUMMY CAKE YUMMY YUMMY!! LOREM IPSUMDELICIOUSE TASTY HEALTHY!
            </div>
            <div class="review_author">
            JANE DOE
            </div>
            </div>
            <div class="review_star">
                <p class="hide">5 stars rated</p>
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
            </div>
        </div>
        </div>
        </div>
        <div class="swiper-slide">
        <div class="review_card">
            <div class="review_img4">
            </div>
            <div class="review_detail_group">
            <div class="review_details">        
            <div class="review_title">
                LOREM IPSUM DOLOR SIT AMET
                YUMMY CAKE YUMMY YUMMY!! LOREM IPSUMDELICIOUSE TASTY HEALTHY!
            </div>
            <div class="review_author">
            JANE DOE
            </div>
            </div>
            <div class="review_star">
                <p class="hide">5 stars rated</p>
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
            </div>
        </div>
        </div>
        </div>
        <div class="swiper-slide">
        <div class="review_card">
            <div class="review_img4">
            </div>
            <div class="review_detail_group">
            <div class="review_details">        
            <div class="review_title">
                LOREM IPSUM DOLOR SIT AMET
                YUMMY CAKE YUMMY YUMMY!! LOREM IPSUMDELICIOUSE TASTY HEALTHY!
            </div>
            <div class="review_author">
            JANE DOE
            </div>
            </div>
            <div class="review_star">
                <p class="hide">5 stars rated</p>
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
            </div>
        </div>
        </div>
        </div>
        <div class="swiper-slide">
        <div class="review_card">
            <div class="review_img3">
            </div>
            <div class="review_detail_group">
            <div class="review_details">        
            <div class="review_title">
                LOREM IPSUM DOLOR SIT AMET
                YUMMY CAKE YUMMY YUMMY!! LOREM IPSUMDELICIOUSE TASTY HEALTHY!
            </div>
            <div class="review_author">
            JANE DOE
            </div>
            </div>
            <div class="review_star">
                <p class="hide">5 stars rated</p>
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
            </div>
        </div>
        </div>
        </div>
        <div class="swiper-slide">
        <div class="review_card">
            <div class="review_img4">
            </div>
            <div class="review_detail_group">
            <div class="review_details">        
            <div class="review_title">
                LOREM IPSUM DOLOR SIT AMET
                YUMMY CAKE YUMMY YUMMY!! LOREM IPSUMDELICIOUSE TASTY HEALTHY!
            </div>
            <div class="review_author">
            JANE DOE
            </div>
            </div>
            <div class="review_star">
                <p class="hide">5 stars rated</p>
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
            </div>
        </div>
        </div>
        </div>
        <div class="swiper-slide">
        <div class="review_card">
            <div class="review_img2">
            </div>
            <div class="review_detail_group">
            <div class="review_details">        
            <div class="review_title">
                LOREM IPSUM DOLOR SIT AMET
                YUMMY CAKE YUMMY YUMMY!! LOREM IPSUMDELICIOUSE TASTY HEALTHY!
            </div>
            <div class="review_author">
            JANE DOE
            </div>
            </div>
            <div class="review_star">
                <p class="hide">5 stars rated</p>
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
                <img src="../torta_da_te/images/review_star.png" alt="">
            </div>
        </div>
        </div>
        </div>
   
    </div>
    </div>
    </div>

    <section class="sec11">
        <div class="subscribe_details">
        <h3>BE OUR FAMILY
            SUBSCRIBE
            NEWS LETTER</h3>
        <p>Sign up to receive email updates on fresh ingredients announcements,gift ideas, special promotions sales and more!</p>
        </div>
        <form class="subscribe" action="" method="get" id="subscribe" onsubmit="return formSubscribe()">
            <fieldset>
                <legend class="hide"></legend>
                <div class="subscribe_user">
                <div class="subscribe_input_group">
                <input type="text" name="name" id="user_name" placeholder="NAME">
                <span class="error_message" id="errorName"></span>
                <input type="text" name="email" id="user_email" placeholder="EMAIL">
                </div>
                <span class="error_message" id="errorEmail"></span>
                <button type="submit">Subscribe</button>
            </div>
            </fieldset>
        </form>
    </section>


</main>

<?php include "../torta_da_te/inc/footer.html"?>


  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
<script src="../torta_da_te/js/navbar.js"></script>
<script src="../torta_da_te/js/accslider.js"></script>
<script src="../torta_da_te/js/product_celebration.js"></script>



    
</body>
</html>