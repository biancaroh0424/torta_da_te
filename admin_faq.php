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

<form action="" method="get">
  <fieldset>
<div class="table_group">
  <div class="order_list_title">
  <span>
  1:1 Q&A
  </span>
  
</div>
<div class="order_list_sub_ttl">
  <div>
  <span>Total:</span><span style="font-size: 16px;">8544 Orders</span>
  </div>
  <select>
    <option name="status_select" id="" value="">Status</option>
    <option name="status_select" id="" value="paid">Paid</option>
    <option name="status_select" id="" value="pending">Pendig</option>
    <option name="status_select" id="" value="cancelled">Cancelled</option>
  </select>
</div>
<div class="order_list_tb_admin">
  <table>
    <thead>
      
      <tr>
        <th></th>
        <th>Date</th>
        <th>Title</th>
        <th>Status</th>
      <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>12.12.2022</td>
        <td>
          <span class="prod_name">
          Lorem Ipsum dolor sit amet lalala ghghgha</span></td>
        <td><span class="paid">Published</span></td>
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>12.12.2022</td>
        <td>
          <span class="prod_name">
          Lorem Ipsum dolor sit amet lalala ghghgha</span></td>
        <td><span class="paid">Published</span></td>
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      <tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>12.12.2022</td>
        <td>
          <span class="prod_name">
          Lorem Ipsum dolor sit amet lalala ghghgha</span></td>
        <td><span class="paid">Published</span></td>
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
  
    </tbody>
  </table>
</div>
</div>
</fieldset>
</form>
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