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
    
    <title>My Info</title>

</head>
<body>
<?php include "../torta_da_te/inc/header.php"?>

<main id="myinfo_main">
    <div class="myinfo_menu_sec">
    <section class="myinfo_sec">
    <div class="myinfo_details">
    <h3>Personal Info</h3>
    </div>
    <form action="" method="post">
        <fieldset>
        <div class="personal_info_group">
        
            <legend class="hide">My Info</legend>

            <div class="personal_info_ttl">
            
            <label for="user_name">First, last name</label>
            <div>
            <input type="text" name="" id="user_name" value="Jane Doe">
            <button type="button">Edit</button>
            </div>
            </div>


            <div class="personal_info_ttl">
            <label for="user_phone">Phone number</label>
            <div>
            <input type="text" name="" id="user_phone" value="+1 113-4567-8989">
           
            <button type="button">Edit</button>
            </div>
            </div>

            <div class="personal_info_ttl">
            <label for="user_email">Email</label>
            <div>
            <input type="text" name="" id="user_email" value="janedoe@gmail.com">
            
            <button type="button">Edit</button>
            </div>
            </div>

            <div class="personal_info_ttl">
            
            <label for="user_pw">Password</label>
            <div>
            <input type="password" name="" id="password" value="12341234">
            
            <button type="button">Edit</button>
            </div>
            <ul class="signup_avail">
                    <li class="signup_avail_li" id="length">More than 8 characters</li>
                    <li class="signup_avail_li" id="capital">At least one uppercase</li>
                    <li class="signup_avail_li" id="number">At least one number</li>
                    <li class="signup_avail_li" id="symbol">At least one symbol (!? & # . $ * etc)</li>
            </ul>
            </div>
</div>
        </fieldset>
    </form>

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