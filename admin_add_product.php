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
  <form action="" method="post" name="" id="add_item_form">
    <div>
  <div class="add_items_ttl_btn">
  <legend>Add Items</legend>
  <div class="add_items_btn">
  <button type="button" class="secondary_button" style="width: 120px;">Save as Draft</button>
  <button type="submit" class="add_product_admin_btn" style="width: 120px;" return>Upload</button>
  </div>
</div>
<div class="add_ttl_category">
  <div class="add_title">
  <label for="add_item_ttl">Title</label>
  <input type="text" name="" id="add_item_ttl">
  </div>
  <div class="add_category">
    <span>Category</span>
    <div class="category_row">
    <div>
    <label for="click_collect">Click & Collect</label><input type="checkbox" name="" id="click_collect">
    </div>
    <div>
    <label for="celebrate">Celebrate</label><input type="checkbox" name="" id="celebrate">
    </div>
    <div>
    <label for="vegeterian">Vegeterian</label><input type="checkbox" name="" id="vegeterian">
    </div>
    </div>
    <div>
      </div>
      <div class="category_column">
      <div class="category_row">
      <div>
    <label for="accessory">Accessory</label><input type="checkbox" name="" id="accessory">
    </div>
    <div>
    <label for="drinks">Drinks</label><input type="checkbox" name="" id="drinks">
    </div>
  </div>
  </div>
  </div>
</div>

<div class="image_tag">
  <div class="img_file_ttl">
  <label for="upload_image" class="upload_image_ttl">Image</label>
  <div class="upload_image_file">
  <img src="../torta_da_te/images/add_image_file.png" alt="">
<input type="file" id="upload_image" style="display: none;">
<input class="add_file" type="button" value="Choose Image File" onclick="document.querySelector('#upload_image').click();">
  </div>
  </div>
  <div class="tag_size_price_col">
    <div class="tag_group">
    <span>Tag</span>
    <div class="tag_row">
    <div>
    <label for="tag_parents">For Parents</label><input type="checkbox" name="" id="tag_parents">
    </div>
    <div>
    <label for="tag_mom">For Mom</label><input type="checkbox" name="" id="tag_mom">
    </div>
    <div>
    <label for="tag_dad">For Dad</label><input type="checkbox" name="" id="tag_dad">
    </div>
    </div>
    <div class="tag_row">
    <div>
    <label for="tag_christmas">Christmas</label><input type="checkbox" name="" id="tag_christmas">
    </div>
    <div>
    <label for="tag_easter">Easter</label><input type="checkbox" name="" id="tag_easter">
  </div>
  <div>
    <label for="tag_graduation">Graduation</label><input type="checkbox" name="" id="tag_graduation">
  </div>
  </div>
  <div class="tag_row">
  <div>
    <label for="tag_birthday">Birthday</label><input type="checkbox" name="" id="tag_birthday">
  </div>
  <div>
    <label for="tag_kids">For Kids</label><input type="checkbox" name="" id="tag_kids">
  </div>
  </div>

  <div class="tag_row">
  <div>
    <label for="tag_year">New year</label><input type="checkbox" name="" id="tag_year">
  </div>
  <div>
    <label for="tag_anniversary">Anniversary</label><input type="checkbox" name="" id="tag_anniversary">
  </div>
</div>
    </div>

<div class="size_group">
  <span>Size & Price</span>

  <div>
  <input type="checkbox" name="" id="8_12serving">
  <label for="8_12serving">8" / 12 Serving</label>
  <input type="text" name="" id="8_12serving_price" class="serving_price" placeholder="$0.00">
  </div>
  <div>
    <input type="checkbox" name="" id="10_24serving">
    <label for="10_24serving">10" / 24 Serving</label>
    <input type="text" name="" id="10_24serving_price" class="serving_price" placeholder="$0.00">
  </div>
  <div>
    <input type="checkbox" name="" id="12_32serving">
    <label for="12_32serving">12" / 32 Serving</label>
    <input type="text" name="" id="12_32serving_price" class="serving_price" placeholder="$0.00">
  </div>
</div>
</div>
</div>
</fieldset>
</form>


</main>
<footer></footer>


</body>
</html>