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
    <a href="../torta_da_te/admin_faq.php">
    <h3>FaQ</h3>
    </a>
    </div>
    <div>
    <a href="../torta_da_te/admin_qna.php">
    <h3>1:1 QnA</h3>
    </a>
    </div>
    <div>
    <a href="../torta_da_te/admin_reviews.php">
    <h3>Reviews</h3>
    </a>
    </div>
  </div>
  <form action="" method="post">
    <fieldset>
      <h2>1:1 QnA</h2>
    <div class="total_posts">
    <span>  
    Total : 123 posts
    </span>
    <a href="" class="add_post_btn">
      <img src="../torta_da_te/images/add_ico_white.svg" alt="">
      Write a post
    </a>
  </div>
  <div class="board_table_qna">
  <div class="board_table_header_qna">
    <div>&nbsp;</div>
    <div>Writer</div>
    <div>Title</div>
    <div>Status</div>
    <div>Date</div>
    <div>&nbsp;</div>
  </div>
  <div class="board_table_body_qna_group">
  <div class="board_table_body_qna">
  <div><input type="checkbox"></div>
    <div>davidpierre_esposito@gmail.com</div>
    <div>TITLE description description description description </div>
    <div>Replied</div>
    <div>2022.11.11</div>
    <div>
      <div class="post_setting">  
    <span>Edit</span>
    <span>Delete</span>
      </div>
    </div>
  </div>
  <div class="board_table_body_qna">
  <div><input type="checkbox"></div>
    <div>davidpierre_esposito@gmail.com</div>
    <div>TITLE description description description description </div>
    <div>Replied</div>
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
<div class="pagination_arrow">
  <a href="#"><img src="/torta_da_te/images/arrow_xs_left.png" alt="go to previous page"></a>
  <div class="pagination">
  <a href="#_none" class="pagination_active">1</a>
  <a href="#_none">2</a>
  <a href="#_none">3</a>
  <a href="#_none">4</a>
  <a href="#_none">...</a>
  <a href="#_none">10</a>
  </div>
  <a href="#"><img src="/torta_da_te/images/arrow_xs_right.png" alt="go to next page"></a>
</div>
</div>
</main>
<footer></footer>


</body>
</html>