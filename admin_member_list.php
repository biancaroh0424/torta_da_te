<?php
error_reporting(E_ALL);
ini_set("display_errors",1);


include "../torta_da_te/inc/session.php";
include "../torta_da_te/loggedin.php";

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
<!-- <div class="popup_msg_remove_pd" style="display:none">
    <div class="close_popup" onclick="closePopup()"><span class="hide">close</span></div>
    <div class="popup_msg_ttl_btn">
      <div class="popup_msg_group">
    <span>Are you sure to remove it?</span>
    <span>Once you delete this member,<br> you cannot recover it</span>
  </div>
    <div class="popup_msg_btn_group">
        <span class="popup_btn_cancel">Cancel</span>
        <span class="popup_btn_confirm" onclick="removeConfirm()">Confirm</span>
    </div>
    </div>
</div>
<div class="overlay_popup" style="display:none"></div> -->
  <?php 
    include "../torta_da_te/admin_header.php";
  ?>
<main>
     <?php
     include "../torta_da_te/admin_aside.php";
     ?>

<form action="" method="get">
  <fieldset>
<div class="table_group">
  <div class="order_list_title">
  <span>Members</span>
  <button type="submit" class="add_product_admin_btn">Send Newsletter<img src="../torta_da_te/images/newsletter.svg" alt=""></button>
</div>
<div class="sub_title_total">
<span>Total: <?php echo $total; ?> &nbsp; Members</span>
<label for="select_member" class="select_all_btn">Select All</label>
</div>
<div class="order_list_tb_admin">
  <table>
    <thead>
      
      <tr>
        <th><input type="checkbox" name="" id="select_all"></th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Signup Date</th>
        <th>Method</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
      <?php
      $start = ($page - 1) * $list_num;
      $sql = "select * from members limit $start, $list_num;";
      // echo $sql;
      // exit;

      $result = mysqli_query($dbcon, $sql);
      $i = $start+1;
      while($array = mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><input type="checkbox" name="" id="select_member"></td>
        <td><?php echo $array["fullname"]?></td>
        <td><?php echo $array["email"]?></td>
        <td><?php echo $array["reg_date"]?></td>
        <td>Google Signup</td>
        <td class="last_td">
        <a class="remove_btn" href="member_info.php?g_idx=<?php echo $array["idx"]; ?>"><img src="../torta_da_te/images/myaccount.svg" alt="" width="20" height="20" alt="">Info</a>
        <span class="remove_btn" onclick="removeUser(<?php echo $array['idx']; ?>)"><img src="../torta_da_te/images/admin_delete.svg">Remove</span>
      </td>
      </tr>
      <?php
        $i++;
      };
      ?>

    </tbody>
  </table>
</div>
</div>
</fieldset>
</form>


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

</div>
</div>
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