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

<div class="faq_col">
<div class="add_ttl_category">
  <div class="img_file_ttl">
    <label for="upload_image" class="upload_image_ttl">Image</label>
    <div class="upload_image_file">
    <img src="../torta_da_te/images/add_image_file.png" alt="">
  <input type="file" id="upload_image" style="display: none;">
  <input class="add_file" type="button" value="Choose Image File" onclick="document.querySelector('#upload_image').click();">
    </div>
    </div>
    <div class="add_title">
      <label for="add_item_ttl">Title</label>
      <input type="text" name="" id="add_item_ttl" placeholder="Title">
      <textarea name="" id="" cols="20" rows="12" placeholder="Description"></textarea>
      </div>
    
</div>


<div class="add_ttl_category">
    <div class="post_type">
        <span>Post Type</span>
        <div class="post_opt">
      <div>
      <label for="faq">FaQ</label>
      <input type="radio" name="" id="faq">
      </div>
      <div>
        <label for="qna">1:1 QnA</label>
        <input type="radio" name="" id="qna">
        </div>
        </div>
    </div>
    <div class="add_category" style="width: 440px;">
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



<div class="add_ttl_category">
  <div class="post_type">
      <label style="font-weight: 700">Rating</label>
      <input
    class="rating"
    max="5"
    oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
    step="0.5"
    style="--value:2.5"
    type="range"
    value="2.5" ondrag="paintValue()">
    <span class="rating_value"></span>

  </div>
  <div class="add_category" style="width: 440px;">
    <label for="author">Author</label>
    <input type="text" name="" id="author" placeholder="Author">
    </div>
  </div>
  </div>
  </div>
</div>
</div>
    

  
  
</div>
</fieldset>
</form>


</main>
<footer></footer>

<script src="../torta_da_te/js/admin_faq_qna.js"></script>
</body>
</html>