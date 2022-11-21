<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
include "../torta_da_te/inc/session.php";

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
  <form action="../torta_da_te/admin_insert_faq.php" method="post" name="notice_form" id="add_item_form" onsubmit="return notice_check()" enctype="multipart/form-data">
    <fieldset>
    <div>
  <div class="add_items_ttl_btn">
  <legend>Add Reviews</legend>
  <div class="add_items_btn">
  <button type="submit" class="add_product_admin_btn" style="width: 120px;" return>Upload</button>
  </div>
</div>

<div class="faq_col">
<div class="add_ttl_category">
  <div class="img_file_ttl">
    <span class="upload_image_ttl">Image</span>
    <label for="up_file" class="upload_image_file">
    <img src="../torta_da_te/images/add_image_file.svg" alt="">
  <input type="file" id="up_file"  name="up_file">
    <span class="add_file">Choose File Image</span>

    </label>
    </div>
    <div class="add_title_image">
      <label for="n_title">Title</label>
      <input type="text" name="n_title" id="n_title" placeholder="Title" class="post_title">

    
      <textarea name="n_content" id="n_content" cols="20" rows="15" placeholder="Description"></textarea>
      </div>
    
</div>


<div class="add_ttl_category">
    <div class="post_type">
        <label for="n_type">Post Type</label>
        <div class="post_opt">
      <div>
      <span>FaQ</span>
      <input type="radio" name="n_type" value="faq">
      </div>
      <div>
        <span>1:1 QnA</span>
        <input type="radio" name="n_type" value="qna">
        </div>
        <div>
        <span>Reviews</span>
        <input type="radio" name="n_type" value="reviews">
        </div>
        </div>
    </div>
    <div class="add_category_bottom" style="width: 440px;">
      <label for="n_cate" id="n_cate" >Category</label>
      <div class="category_row">
      <div>
      <span>Click & Collect</span>
      <input type="checkbox" id="click_collect" value="Click and Collect" name="n_cate">
      </div>
      <div>
      <span for="celebrate">Celebrate</span><input type="checkbox"  value="Celebrate" name="n_cate">
      </div>
      <div>
      <span for="vegeterian">Vegeterian</span><input type="checkbox" value="Vegeterian" name="n_cate">
      </div>
      </div>
      <div>
        </div>
        <div class="category_column">
        <div class="category_row">
        <div>
      <span for="accessory">Accessory</span><input type="checkbox" value="Accessory" name="n_cate">
      </div>
      <div>
      <span for="drinks">Drinks</span><input type="checkbox" value="Drinks" name="n_cate">
      </div>
    </div>
    </div>
    </div>
</div>

<div class="add_ttl_category">
  
  <div class="post_type">
      <label for="r_rate" style="font-weight: 700">Rating</label>
      <div class="row_layout">
      <input
    class="rating"
    max="5"
    oninput="this.style.setProperty('--value', `${this.valueAsNumber}`)"
    step="0.5"
    style="--value:2.5"
    type="range"
    name="r_rate"
    >
    <span class="rating_value"></span>
  </div>
  </div>
  <div class="add_category" style="width: 440px;">
    <label for="b_author">Author</label>
    <input type="text" name="b_author" id="author" placeholder="Author">
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


<script>
  function notice_check(){
    const n_title = document.querySelector("#n_title");
    const n_content = document.querySelector("#n_content");

    if(!n_title.value){
      alert("Please write a title");
      n_title.focus();
      return false;
    };
    if(!n_content.value){
      alert("Please write some content");
      n_content.focus();
      return false;
    };
  };

  let ratingValue = document.querySelector('.rating');

  let printValue = document.querySelector('.rating_value');
  printValue.innerHTML = ratingValue.value;

  ratingValue.onclick = function(){
  printValue.innerHTML = this.value;
};

</script>



</body>
</html>
