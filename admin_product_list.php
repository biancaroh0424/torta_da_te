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
<?php include "../torta_da_te/admin_aside.php" ?>

<div class="table_group admin_product">
  <div class="order_list_title">
  <span>Item Lists</span>
  <a href="../torta_da_te/admin_add_product.php" class="add_product_admin_btn">Add New Item<img src="../torta_da_te/images/add_ico_white.svg" alt=""></a>
</div>
<div class="admin_product_select">
  <div class="admin_product_select_right">
  <select>
    <option name="category_select" id="" value="">All Category</option>
    <option name="status_select" id="" value="clickandcollect">Click & Collect</option>
    <option name="status_select" id="" value="celebration">Celebration</option>
    <option name="status_select" id="" value="vegeterian">Vegeterian</option>
    <option name="status_select" id="" value="accessories">Accessories</option>
  </select>
  <select>
    <option name="size_select" id="" value="">Size</option>
    <option name="status_select" id="" value="8">8"</option>
    <option name="status_select" id="" value="10">10"</option>
    <option name="status_select" id="" value="12">12"</option>
  </select>
  <select>
    <option name="price_select" id="" value="">Price</option>
    <option name="status_select" id="" value="$20.00 ~ To $40.00">$20.00 ~ To $40.00</option>
    <option name="status_select" id="" value="$40.00 ~ To $60.00">$40.00 ~ To $60.00</option>
    <option name="status_select" id="" value="$80.00 ~ To $100.00">$80.00 ~ To $100.00</option>
    <option name="status_select" id="" value="$100.00 ~ ">$100.00 ~ </option>
  </select>
  <select>
    <option name="flavor_select" id="" value="">Flavor</option>
    <option name="status_select" id="" value="white">White</option>
    <option name="status_select" id="" value="chocolate">Chocolate</option>
    <option name="status_select" id="" value="mixed">White+Chocolate</option>
  </select>
  
  </div>


<select>
  <option name="price_select" id="" value="">Status</option>
  <option name="status_select" id="" value="paid">Paid</option>
  <option name="status_select" id="" value="Pending">Pending</option>
  <option name="status_select" id="" value="Cancelled">Cancelled</option>
</select>
</div>
<div class="order_list_tb_admin">
  <table class="admin_add_product">
    <thead>
      <tr>
      <th>Ref. No</th>
      <th> </th>
      <th>Based Cake Name</th>
      <th>Size</th>
      <th class="add_category">Category</th>
      <th>Flavor</th>
      <th>Price</th>
      <th>Date</th>
      <th class="add_status">Status</th>
      <th></th>
      </tr>
        
    </thead>
    <tbody>
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
      <tr>
        <td>8544</td>
        <td> <img src="../torta_da_te/images/admin1.png" alt=""></td>
        <td class="prod_name">
          VeryCherry Berry Cake</td>
        <td>
            <div class="prod_opt">
            <span>10"</span>
            <span>12"</span>
            <span>16"</span>
            </div>
        </td>
          <td>
            <div class="prod_opt">
            <span>Celebration</span>
            <span>1Hour Click and Collect</span>
            <span>Vegeterian</span>
            </div>
          </td>
        <td>
          <div>
          <span>White</span><br>
          <span>Chocolate</span><br>
          <span>White/Chocolate</span>
          </div>
        </td>
        <td>
          <div class="prod_price">
          <span>$30.00</span><br>
          <span>$35.00</span><br>
          <span>$40.00</span>
          </div>
        </td>
        <td>12.12.2022</td>
        <td><span class="order_status paid">Available</span></td>
        
        <td><img src="../torta_da_te/images/view_more.png" alt="view details"></td>
      </tr>
      
    </tbody>
  </table>
</div>
<div class="pagination_arrow">
  <a href="#"><img src="../torta_da_te/images/arrow_xs_left.png" alt="go to previous page"></a>
  <div class="pagination">
  <a href="#_none" class="pagination_active">1</a>
  <a href="#_none">2</a>
  <a href="#_none">3</a>
  <a href="#_none">4</a>
  <a href="#_none">...</a>
  <a href="#_none">10</a>
  </div>
  <a href="#"><img src="../torta_da_te/images/arrow_xs_right.png" alt="go to next page"></a>
</div>
</div>
</main>
<footer></footer>


</body>
</html>