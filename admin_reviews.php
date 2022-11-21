<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "../torta_da_te/inc/session.php";

include "../torta_da_te/inc/dbcon.php";

$sql = "select * from notice;";


$result = mysqli_query($dbcon, $sql);

$total = mysqli_num_rows($result);

$list_num = 10;

$page_num = 5;

$page = isset($_GET["page"])? $_GET["page"] : 1;


$total_page = ceil($total / $list_num);

$total_block = ceil($page / $page_num);

$current_block = ceil($page / $page_num);

$s_pageNum = ($current_block - 1) * $page_num + 1;
if($s_pageNum <=0){
  $s_pageNum = 1;
};

$e_pageNum = $current_block * $page_num;

if($e_pageNum > $total_page){
  $e_pageNum = $total_page;
};
?> 


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
  <form action="" method="get">
    <fieldset>
      <h2>Reviews</h2>
    <div class="total_posts">
    <span>  
    Total : <?php echo $total; ?> posts
    </span>
    <a href="../torta_da_te/admin_upload_reviews.php" class="add_post_btn">
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
  <?php 
  $start = ($page - 1) * $list_num;

  $sql = "select * from notice order by idx desc limit $start, $list_num;";


  $result = mysqli_query($dbcon, $sql);

  $i = $total - (($page - 1)* $list_num);
  while($array = mysqli_fetch_array($result)){
    ?>
  <div class="board_table_body_group">
  
  <div class="board_table_body">
  <div>
  <?php echo $i; ?>
  </div>
    <div>
    <a href="admin_faq_modify.php?n_idx=<?php echo $array["idx"]; ?>">
    <?php echo $array["n_title"]; ?>
    </a>
    </div>
    <div>
      <?php echo $array["cnt"]; ?>
    </div>
    <?php $w_date = substr($array["w_date"],0, 10);?>
    <div>
    <?php echo $w_date; ?>
    </div>
    <div>
      <div class="post_setting">  
      <span><a href="../torta_da_te/admin_faq_modify.php?n_idx=<?php echo $array ["idx"]; ?>">Edit</a></span>
    <a style="font-weight: 700" onclick="myTest()" href="../torta_da_te/admin_faq_delete.php?n_idx=<?php echo $array ["idx"]; ?>">Delete</a>
  </span>
      </div>
    </div>
  </div>

  <?php
  
      $i--;
  };
  ?>
</div>
</div>
    </fieldset>
</form>

<div class="pagination_arrow">
<?php
if($page <=1){
?>
  <a href="../torta_da_te/admin_faq.php?page=1"><img src="../torta_da_te/images/arrow_xs_left.svg" alt="go to previous page"></a>
  <?php }else { ?>
  <a href="../torta_da_te/admin_member_list.php?page=<?php echo($page - 1);?>"><img src="../torta_da_te/images/arrow_xs_left.svg" alt="go to previous page"></a>
  <?php }; ?>


  
  <div class="pagination">
  <?php 
  for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
    ?>
  
  <a class="pagiation_number" onclick='addActive()' href="../torta_da_te/admin_faq.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
  <?php }; ?>
  </div>
  <?php 
  if($page >= $total_page){
  ?>
  <a href="../torta_da_te/admin_faq.php?page=<?php echo $total_page; ?>"><img src="../torta_da_te/images/arrow_xs_right.svg" alt="go to next page"></a>
  <?php } else { ?>
  <a href="../torta_da_te/admin_faq.php?page=<?php echo ($page + 1); ?>"><img src="../torta_da_te/images/arrow_xs_right.svg" alt="go to next page"></a>
  <?php };?>

</div>
</div>

</body>
</html>