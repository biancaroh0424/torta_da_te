<?php
include "../torta_da_te/inc/session.php";

error_reporting(E_ALL);
ini_set("display_errors",1);

?>

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
  <form action="admin_insert_product.php" method="post" name="product_form" id="add_item_form" enctype="multipart/form-data">
  <div>
  <div class="add_items_ttl_btn">
  <legend>Add Product</legend>
  <div class="add_items_btn">
  <button type="submit" class="add_product_admin_btn" style="width: 120px;" return>Upload</button>
  </div>
</div>
<div class="add_ttl_category">
  <div class="add_title">
  <label for="add_item_ttl">Title</label>
  <input type="text" name="p_title" id="add_item_ttl">
  </div>
  <div class="add_category">
    <span>Category</span>
    <div class="category_row">
    <div>
    <label for="click_collect">Click & Collect</label>
    <input type="checkbox" name="category[]" id="click_collect" value="Click and Collect">
    </div>
    <div>
    <label for="celebrate">Celebrate</label><input type="checkbox" name="category[]" id="celebrate" value="Celebrate">
    </div>
    <div>
    <label for="vegeterian">Vegeterian</label>
    <input type="checkbox" name="category[]" id="vegeterian" value="Vegeterian">
    </div>
    </div>
    <div>
      </div>
      <div class="category_column">
      <div class="category_row">
      <div>
    <label for="accessory">Accessory</label>
    <input type="checkbox" name="category[]" id="accessory" value="Accessory">
    </div>
    <div>
    <label for="drinks">Drinks</label>
    <input type="checkbox" name="category[]" id="drinks" value="Drinks">
    </div>
  </div>
  </div>
  </div>
</div>

<div class="image_tag">
<div class="img_file_ttl">
    <span class="upload_image_ttl">Image</span>
    <label for="up_file" class="upload_image_file">
    <img src="../torta_da_te/images/add_image_file.svg" alt="">
  <input type="file" id="up_file"  name="up_file">
    <span class="add_file">Choose File Image</span>

    </label>
    </div> 


  <div class="tag_size_price_col">
    <div class="tag_group">
    <span>Tag</span>
    <div class="tag_row">
    <div>
    <label for="tag_parents">For Parents</label>
    <input type="checkbox" name="product_tag[]" id="tag_parents" value="For Parents">
    </div>
    <div>
    <label for="tag_mom">For Mom</label>
    <input type="checkbox" name="product_tag[]" id="tag_mom" value="For Mom">
    </div>
    <div>
    <label for="tag_dad">For Dad</label>
    <input type="checkbox" name="product_tag[]" id="tag_dad" value="For Dad">
    </div>
    </div>
    <div class="tag_row">
    <div>
    <label for="tag_christmas">Christmas</label>
    <input type="checkbox" name="product_tag[]" id="tag_christmas" value="Christmas">
    </div>
    <div>
    <label for="tag_easter">Easter</label>
    <input type="checkbox" name="product_tag[]" id="tag_easter" value="Easter">
  </div>
  <div>
    <label for="tag_graduation">Graduation</label>
    <input type="checkbox" name="product_tag[]" id="tag_graduation" value="Graduation">
  </div>
  </div>
  <div class="tag_row">
  <div>
    <label for="tag_birthday">Birthday</label>
    <input type="checkbox" name="product_tag[]" id="tag_birthday" value="Birthday">
  </div>
  <div>
    <label for="tag_kids">For Kids</label>
    <input type="checkbox" name="product_tag[]" id="tag_kids" value="For Kids">
  </div>
  </div>

  <div class="tag_row">
  <div>
    <label for="tag_year">New Year</label><input type="checkbox" name="product_tag[]" id="tag_year" value="New Year">
  </div>
  <div>
    <label for="tag_anniversary">Anniversary</label><input type="checkbox" name="product_tag[]" id="tag_anniversary" value="Anniversary">
  </div>
</div>
</div>

<div class="size_group">
  <span>Size & Price</span>

  <div>
  <label for="8_12serving">8" / 12 Serving</label>
  <input type="text" name="size_price_8" id="8_12serving_price" class="serving_price" placeholder="0.00">
  </div>
  <div>
    <label for="10_24serving">10" / 24 Serving</label>
    <input type="text" name="size_price_10" id="10_24serving_price" class="serving_price" placeholder="0.00">
  </div>
  <div>
    <label for="12_32serving">12" / 32 Serving</label>
    <input type="text" name="size_price_12" id="12_32serving_price" class="serving_price" placeholder="0.00">
  </div>
</div>
</div>
</div>
</div>
</fieldset>
</form>


</main>
<footer></footer>
<script src="../torta_da_te/js/navmyaccount.js">
</script>
</body>
</html>