<!-- <?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "../torta_da_te/inc/session.php";
//include "../torta_da_te/loggedin.php";
include "../torta_da_te/inc/dbcon.php";
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="/torta_da_te/css/css_reset.css">
    <link rel="stylesheet" href="/torta_da_te/css/admin_home.css">
    <link rel="stylesheet" href="/torta_da_te/css/admin_order_list.css">
    <link rel="stylesheet" href="/torta_da_te/css/admin_add_product.css">
    
    <link rel="shortcut icon" href="images/logo_favicon.ico" type="image/x-icon">

    <title>Torta Da Te</title>

    
</head>

<body>
  <?php include "../torta_da_te/admin_header.php" ?>
  <main>
  <?php include "../torta_da_te/admin_aside.php" ?>
  <div class="board_column_layout">
  <div class="sub_menu_board">
    <div>
    <a href="">
    <h3>FaQ</h3>
    </a>
    </div>
    <div>
    <a href="">
    <h3>1:1 QnA</h3>
    </a>
    </div>
  </div>
  <form action="" method="post">
    <fieldset>
      <h2>FaQ</h2>
    <div class="total_posts">
    <span>  
    Total : 123 posts
    </span>
    <a href="" class="add_post_btn">
      <img src="../torta_da_te/images/add_ico_white.svg" alt="">
      Write a post
    </a>
  </div>
  <div class="board_table">
  <div class="board_table_header">
    <div>&nbsp;</div>
    <div>Title</div>
    <div>View</div>
    <div>Date</div>
    <div>&nbsp;</div>
  </div>
  <div class="board_table_body_group">
  <div class="board_table_body">
  <div><input type="checkbox">
  </div>
    <div>TITLE description description description description </div>
    <div>0</div>
    <div>2022.11.11</div>
    <div>
      <div class="post_setting">  
    <span>Edit</span>
    <span>Delete</span>
      </div>
    </div>
  </div>
  <div class="board_table_body">
  <div><input type="checkbox">
  </div>
    <div>TITLE description description description description </div>
    <div>0</div>
    <div>2022.11.11</div>
    <div>
      <div class="post_setting">  
    <span>Edit</span>
    <span>Delete</span>
      </div>
    </div>
  </div>
</div>
</div>
    </fieldset>
</form>
</div>
</div>


  

</body>
</html>