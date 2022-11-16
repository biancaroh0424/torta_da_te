<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

include "../torta_da_te/inc/session.php";
//include "../torta_da_te/loggedin.php";
include "../torta_da_te/inc/dbcon.php";

$sql = "select * from members;";

$result = mysqli_query($dbcon, $sql);
$total = mysqli_num_rows($result);

$list_num = 10;
$page_num = 5;
$page = isset($_GET["page"])? $_GET["page"] : 1;

$total_page = ceil($total / $list_num);

$current_block = ceil($total_page / $page_num);
$s_pageNum = ($current_block - 1) * $page_num +1;

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
   
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/css_reset.css">
    <link rel="stylesheet" href="../torta_da_te/css/admin_home.css">
    <link rel="stylesheet" href="../torta_da_te/css/admin_order_list.css">
    <link rel="stylesheet" href="../torta_da_te/css/admin_add_product.css">
    
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">

    <title>Torta Da Te</title>

    
</head>

<body>

<?php 
    include "../torta_da_te/admin_header.php";
  ?> 
<main>
     <?php
     include "../torta_da_te/admin_aside.php";
     ?>

<div class="board_column_layout">
  <form action="" method="post">
    <fieldset>
      <h2>Members</h2>
    <div class="total_posts">
    <span>  
    Total : <?php echo $total; ?>&nbsp;Members
    </span>
    <a href="" class="add_post_btn">
      <img src="../torta_da_te/images/add_ico_white.svg" alt="">
      Write a post
    </a>
  </div>
  <div class="board_table_member">
  <div class="board_table_header_member">
    <div>&nbsp;</div>
    <div>Fullname</div>
    <div>Email</div>
    <div>Signup Date</div>
    <div>Method</div>
    <div>&nbsp;</div>
  </div>
  <div class="board_table_body_member_group">
  <?php
      $start = ($page - 1) * $list_num;
      $sql = "select * from members limit $start, $list_num;";
      // echo $sql;
      // exit;

      $result = mysqli_query($dbcon, $sql);
      $i = $start+1;
      while($array = mysqli_fetch_array($result)){
      ?>
  <div class="board_table_body_member">
  <div>
    <input type="checkbox">
  </div>
    <div><?php echo $array["fullname"]?></div>
    <div><?php echo $array["email"]?></div>
    <div><?php echo $array["reg_date"]?></div>
    <div>Google Signup</div>
    <div>
      <div class="post_setting_member">  
      <a class="remove_btn" href="member_info.php?g_idx=<?php echo $array["idx"]; ?>"><img src="../torta_da_te/images/myaccount.svg" alt="" width="20" height="20" alt="">Info</a>
        <span class="remove_btn" onclick="removeUser(<?php echo $array['idx']; ?>)"><img src="../torta_da_te/images/admin_delete.svg">Remove</span>
      </div>
    </div>
  </div>
  <?php
        $i++;
      };
      ?>
</div>
      </div>


    </fieldset>
</form>
</div>


<div class="pagination_arrow">
<?php
if($page <=1){
?>
  <a href="../torta_da_te/admin_member_list.php?page=1"><img src="../torta_da_te/images/arrow_xs_left.svg" alt="go to previous page"></a>
  <?php }else { ?>
  <a href="../torta_da_te/admin_member_list.php?page=<?php echo($page - 1);?>"><img src="../torta_da_te/images/arrow_xs_left.svg" alt="go to previous page"></a>
  <?php }; ?>


  
  <div class="pagination">
  <?php 
  for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){
    ?>
  
  <a class="pagiation_number" onclick='addActive()' href="../torta_da_te/admin_member_list.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
  <?php }; ?>
  </div>
  <?php 
  if($page >= $total_page){
  ?>
  <a href="../torta_da_te/admin_member_list.php?page=<?php echo $total_page; ?>"><img src="../torta_da_te/images/arrow_xs_right.svg" alt="go to next page"></a>
  <?php } else { ?>
  <a href="../torta_da_te/admin_member_list.php?page=<?php echo ($page + 1); ?>"><img src="../torta_da_te/images/arrow_xs_right.svg" alt="go to next page"></a>
  <?php };?>

</main>
<footer></footer>
<script src="../torta_da_te/js/navmyaccount.js"></script>
<script src="../torta_da_te/js/admin_member_list.js"></script>

<script>
  function removeUser(g_no){
    let confirmMessage = confirm("Are you sure to remove? Once you remove this member, you cannot recover it");

    if(confirmMessage == true){
        location.href="member_delete.php?g_idx=" + g_no;
    };
};
  </script>

</body>
</html>