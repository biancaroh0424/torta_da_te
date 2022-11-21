<?php
error_reporting(E_ALL);
ini_set("display_errors",1);


include "../torta_da_te/inc/session.php";
include "../inc/dbcon.php";



$p_title = $_POST["p_title"];



if(isset($_POST['category'])){

$category = $_POST['category'];

}foreach($category as $category){
    $sql = "insert into product(category)
    values('$category')";
};



if($_FILES["up_file"] != NULL){
    $tmp_name = $_FILES["up_file"]["tmp_name"];
    $f_name = $_FILES["up_file"]["name"];
    $up = move_uploaded_file($tmp_name, "../torta_da_te/data/$f_name");
};

if(isset($_POST['product_tag'])){
    $product_tag = $_POST['product_tag'];
}foreach($product_tag as $product_tag){
    $sql = "insert into product(tag)values('$product_tag')";
};



// echo $_FILES["up_file"]["tmp_name"]."/";
// echo $_FILES["up_file"]["name"]."/";
// echo $_FILES["up_file"]["type"]."/";
// echo $_FILES["up_file"]["size"];
// exit; 


$f_type = $_FILES["up_file"]["type"];
$f_size = $_FILES["up_file"]["size"];

// include "../torta_da_te/dbcon.php";
// $sql = "insert into product(";
// $sql .= ""




?>