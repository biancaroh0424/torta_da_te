<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

require '../torta_da_te/inc/dbcon.php';
include '../torta_da_te/inc/session.php';


if(isset($_POST["acc_idx"])){

    $acc_idx = $_POST["acc_idx"];
    $acc_name = $_POST["acc_name"];
    $acc_image = $_POST["acc_image"];
    $acc_price = $_POST["acc_price"];
    $acc_code = $_POST["acc_code"];
    $acc_qty = 1;

    $stmt_acc = $dbcon->prepare("SELECT idx from cart where idx=?");
    $stmt_acc->bind_param("i", $acc_idx);
    $stmt_acc->execute();
    $res_acc = $stmt_acc->get_result();
    $r_acc = $res_acc->fetch_assoc();
    $idx_acc = $r_acc['acc_idx'];


    if(!$idx_acc){
        $query_acc = $dbcon->prepare("INSERT INTO cart (product_name, price, product_image, total_price, qty, product_code)VALUES(?,?,?,?,?,?)");
        $query_acc->bind_param("ssssis", $acc_name, $acc_price, $acc_image, $acc_price, $acc_qty, $acc_code);
        $query_acc->execute();


        echo "<script>
                alert('Item added in your cart');
             </script>";
    };
};

if(isset($_GET['cart_item']) && isset($_GET['cart_item']) =='cart_item'){
    $stmt = $dbcon->prepare("SELECT * FROM cart");
    $stmt->execute();
    $stmt->store_result();
    $rows= $stmt->num_rows;

    echo $rows;
}
?>