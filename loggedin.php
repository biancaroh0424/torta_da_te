<!-- link 써서 css 불러오기
모달 박스 만드는 div , script  -->

<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
include "../torta_da_te/inc/session.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torta Da Te</title>

<link rel="stylesheet" href="../torta_da_te/css/style_menu_footer.css">
<link rel="stylesheet" type="text/css" href="../torta_da_te/css/css_reset.css">
<link rel="stylesheet" type="text/css" href="../torta_da_te/css/style_menu_footer.css">
<link rel="stylesheet" href="../torta_da_te/css/product.css">
<link rel="stylesheet" href="../torta_da_te/css/order_confirm_error.css">
<link rel="stylesheet" href="../torta_da_te/css/login_signup.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">
</head>

<body>
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
      
        <legend class="hide">Search Fully Customizable Cake</legend>
        <form action="" method="get" name="search_active">
        <fieldset>
                <button type="submit" class="nav_search_ico">Search</button>
                
                <input type="text" name="search_nav" id="searchNav">
                </fieldset>
              </form>
        
        
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
                <li><a href="../torta_da_te/login.php"><img src="../torta_da_te/images/myaccount.png" alt=""><p class="hide">Login</p></a></li>
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

    <?php if (!$s_idx){ ?>
    <div class="menu_group">
        <div class="logo_slide_menu">
        </div>
        
        <div class="option">

        <div class="slide_title_mypage" onclick="location.href='../torta_da_te/login.php'">
        <div class="user_ico_name">
        <img src="../images/myaccount.png" alt=""><h4 class="user_name">Login</h4>
        </div>
        </div>
        </div>
        
       <?php }else if($s_email == "admin@tortadate.it") { ?>
        <div class="slide_title_mypage" id="logged_in_mypage" style="display:none">
        <div class="user_ico_name">
        <img src="../torta_da_te/images/myaccount_logedin.png" alt=""><?php echo $s_name; ?><h4 class="user_name"></h4>
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





        <?php } else { ?>
        <div class="slide_title_mypage" id="logged_in_mypage" style="display:none">
        <div class="user_ico_name">
        <img src="../torta_da_te/images/myaccount_logedin.png" alt=""><h4 class="user_name"><?php echo $s_email; ?></h4>
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
        <?php };?>
        </div>
  

        <h4><a href="../torta_da_te/product_1hour.html">1 HOUR CLICK AND COLLECT</a></h4>
        <div class="option">
        <div class="slide_title" id="celebration">
        <h4>CELEBRATION</h4><div class="see_more">
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
        <h4>VEGETERIAN</h4><div class="see_more">
            <p class="hide">See more</p>
        </div></div>
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
        <h4>ACCESSORIES</h4><div class="see_more">
            <p class="hide">See more</p>
        </div></div>
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

<!--슬라이드메뉴+오버레이 효과 끝-->
</header>
<main id="main">


    <section class="login">
        <div class="login_section">
        <div class="login_ttl">
        <h3>Login</h3>
        </div>
        <form class="login_form" action="loggedin.php" method="post" onsubmit="return formLogin()">
            <fieldset>
                
                <div class="login_signup_dbl_ttl">
                <legend class="login_subttl">Welcome back to Torta da te! Fresh & fully customizable cakes are waiting for you!</legend>
                <span class="signup_ttl">Haven't Signup yet? Please&nbsp;<a href="../torta_da_te/signup.html"> <b>Signup here!</b></a></span>
                </div>
    
                <div class="form_details">
                <label for="email_login">
                    Email
                </label>
                <input class="login_input" type="email" name="user_email" id="email_login" placeholder="Email">

                <span class="error_message" id="errorEmail"></span>
    
                <label for="pw_login">
                    Password
                </label>

                
                <div class="pw_input_ico" id="pwSignupWrap">
                <input class="login_input_pw" type="password" name="user_pw" id="pw_login" placeholder="Password">


                <div class="pw_noshow"></div>

                </div>
                <span class="error_message" id="errorMessage"></span>


                </div>
                <a class="login_forgot" href="#">Forgot email or password?</a>
                <button class="login_btn" type="submit">Login</button>
                <span class="login_option">or</span>
                <div class="google_login">
                    Login with<div class="google_ico"></div>
                </div>
                
                <div class="checkbox_group_login">
                <input type="checkbox" name="keep_signin" id="keep_signin" checked>
                
                <label for="keep_signin">Keep me Sign in<br>
                <span class="uncheck">Uncheck if you use public device</span>
                </label>
                
                </div>

                
                
            </fieldset>
    
           </form>
        </div>
        </section>
    </main>
    
    <?php include "../torta_da_te/inc/footer.html" 
    ?>

    <script src="../torta_da_te/js/login.js"></script>
    <script src="../torta_da_te/js/signup_query.js"></script>
    <script src="../torta_da_te/js/navbar.js"></script>
    <!-- <script src="../torta_da_te/js/login_popup.js"></script> -->
    
</body>
</html>
<?php


$email_login = $_POST["user_email"];
$pw_login = $_POST["user_pw"];

// echo $email_login."+".$pw_login;

include "../torta_da_te/inc/dbcon.php";

$sql = "select idx, email, pwd from members where email ='$email_login'";
//echo $sql;

$result = mysqli_query($dbcon, $sql);

$num = mysqli_num_rows($result);
// echo $num;


if(!$num){
    echo "

    <div class=\"popup_msg_id\" style=\"display:none\">
    <div class=\"close_popup\"><span class=\"hide\">close</span></div>
    <div class=\"no_id_msg\">
    <span class=\"no_id\">Sorry, there is no ID.<br>
    Please make sure your ID<br><a href=\"../torta_da_te/signup.html\">Signup now!</a></span>
    <div class=\"popup_msg_btn_group\">
        <span class=\"popup_btn_signup\" onclick=\"location.href='signup.html';\">Signup</span>
    </div>
    </div>
    </div>
    <div class=\"overlay_popup\" style=\"display:none\"></div>

        <script type=\"text/javascript\">
        const closeBtn = document.querySelector('.close_popup');
        const overlayModal = document.querySelector('.overlay_popup');
        const idErrorModal = document.querySelector('.popup_msg_id');

        closeBtn.onclick = function(){
            idErrorModal.style.display = 'none';
            overlayModal.style.display='none';
            location.href='login.php'
            };

        function displayErrorMsg(){
            idErrorModal.style.display = 'flex';
            overlayModal.style.display='flex';
            };
            
            displayErrorMsg();
        </script>
    ";
}else{
    $array = mysqli_fetch_array($result);
    $g_pwd = $array["pwd"];

    if($pw_login != $g_pwd){

        echo"
<script>
const errorMessage = document.querySelector(\"#errorMessage\");

errorMessage.innerHTML = \"Wrong password🥲 Please Try again!\";
    
document.getElementById(\"pw_login\").style.borderColor=\"#C53F3F\";

</script>

            ";
    }else{
        echo
        "<script>
        location.href=\"index.php\"
        </script>";

        $_SESSION["s_idx"] = $array["idx"];
        $_SESSION["s_email"] = $array["email"];
        $_SESSION["s_name"] = $array["fullname"];

    };


};
mysqli_close($dbcon);



?>
