<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" type="text/css" href="../torta_da_te/css/css_reset.css">
    <link rel="stylesheet" href="../torta_da_te/css/admin_home.css">
    <link rel="stylesheet" href="../torta_da_te/css/admin_add_product.css">
    
    <link rel="shortcut icon" href="../torta_da_te/images/logo_favicon.ico" type="image/x-icon">

    <title>Torta Da Te</title>

    
</head>

<body>
<?php include "../torta_da_te/admin_header.php" ?>
<main>
<?php include "../torta_da_te/admin_aside" ?>

<div class="table_group admin_product">
  <form action="" name="" method="post" class="admin_note">
    <fieldset>
  <div class="order_list_title">
  <span>Order details</span>
  <div class="admin_options_right">
  <select>
    <option name="category_select" id="" value="">All Category</option>
    <option name="status_select" id="" value="clickandcollect">Click & Collect</option>
    <option name="status_select" id="" value="celebration">Celebration</option>
    <option name="status_select" id="" value="vegeterian">Vegeterian</option>
    <option name="status_select" id="" value="accessories">Accessories</option>
  </select>
  <button type="submit" class="secondary_button">Save</button>
  <button type="button" class="add_product_admin_btn" onclick="window.print()"><img src="../torta_da_te/images/print.png" alt=""> Print</button>
</div>
</div>

  <div class="admin_details_sub">
  <span>Ref. ID:  8544</span>
  </div>
  <div class="admin_customer_order_details">
    <div class="customer_prof_img">
      <img src="../torta_da_te/images/admin_profile_default.png" alt="My profile image">
      <span class="profile_name">Jane Doe</span>
    </div>
    <div class="customer_contact">
      <span>janedoe1133@gmail.com</span>
      <span>323-562-9979</span>
    </div>
    <div class="customer_method">
      <span>Method</span>
      <span>Visa / **09-8080</span>
    </div>
    <div class="customer_status">
      <span>Status</span>
      <span class="order_status paid">Paid</span>
    </div>
  </div>
  <div class="admin_order_details">
    <div>
      <span class="order_details_ttl">Ordered Date</span>
      <div class="order_details_order_time">
      <div class="order_details_order_date">
      <img src="../torta_da_te/images/calander.png" alt="">
      <span>12 December 2022</span>
      </div>
      <span>12:30 PM</span>
      </div>
    </div>
    <div>
      <span class="order_details_ttl">Pickup Date</span>
      <div class="order_details_order_time">
      <div class="order_details_order_date">
      <img src="../torta_da_te/images/calander.png" alt="">
      <span>24 December 2022</span>
      </div>
      <span>10:00 AM</span>
      </div>
    </div>
    <div>
      
      <legend>Admin Note</legend>
          <textarea name="" id="" cols="40" rows="8" placeholder="Add admin note"></textarea>
      </fieldset>
      </form>
      <div class="admin_order_details_sec">
        <span class="admin_ttl_pic">Item</span>
        <span class="admin_prod_price">Price</span>
        <span class="admin_prod_quantity">Quantity</span>
        <span class="admin_what_ordered">Customized Option</span>
        <span class="admin_total_price">Total</span>
      </div>
      <div class="admin_order_details_sec">
        <div class="admin_ttl_pic">
          <img src="../torta_da_te/images/admin1.png" alt="">
          <span>Veryberry Cherry Cake</span>
        </div>
        <div class="admin_prod_price">
          <span>$45.00</span>
        </div>
        <div class="admin_prod_quantity">
          <span>2</span>
        </div>
        <div class="admin_what_ordered">
          <ul>
            <li>10” / 24 People Serving</li>
            <li>White</li>
            <li>Congratulations!</li>
          </ul>
          <ul>
            <li>10” / 24 People Serving</li>
            <li>Chocolate</li>
            <li>BIG BROTHER</li>
          </ul>
        </div>
        <div class="admin_total_price">
          <span>$ 90.00</span>
        </div>
    </div>
    <div class="admin_order_details_sec">
      <div class="admin_ttl_pic">
        <img src="../torta_da_te/images/admin2.png" alt="">
        <span>Special Day Balloon</span>
      </div>
      <div class="admin_prod_price">
        <span>$3.00</span>
      </div>
      <div class="admin_prod_quantity">
        <span>20</span>
      </div>
      <div class="admin_what_ordered">
        <ul>
          <li>-</li>
        </ul>
      </div>
      <div class="admin_total_price">
        <span>$60.00</span>
      </div>
    </div>
    <div class="admin_order_details_sec">
      <div class="admin_ttl_pic">
        <span>&nbsp;</span>
        <span>&nbsp;</span>
      </div>
      <div class="admin_prod_price">
        <span>&nbsp;</span>
      </div>
      <div class="admin_prod_quantity">
        <span>&nbsp;</span>
      </div>
      <div class="admin_what_ordered">
        <ul>
          <li style="font-weight:normal">Sub Total</li>
          <li style="font-weight:normal">Promo Discount</li>
          <li style="font-weight:normal">Total</li>
        </ul>
      </div>
      <div class="admin_total_price">
        <span>$60.00</span>
        <span>$0.00</span>
        <span>$60.00</span>
      </div>
    </div>
    <div class="admin_details_sub">
      <span>Added Pickup Person</span>
    </div>
    <div class="admin_pickup_order_details">
      <div class="admin_pickup_details">
        <img src="../torta_da_te/images/admin_profile_default.png" alt="My profile image">
        <div class="pickup_ttl_name">
        <span>Pickup Person</span>
        <span class="profile_name">Won Doe</span>
        </div>
      </div>
      <div class="pickup_contact">
        <span>janedoe1133@gmail.com</span>
        <span>323-562-9979</span>
      </div>
      <div class="customer_message">
        <span>Memo: </span>
        <span>Hello! If I can I would like to pickup! but Lorem ipsum dolor sit amet amet Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
      </div>
    </div>
  </div>


</div>
</main>
<footer></footer>


</body>
</html>