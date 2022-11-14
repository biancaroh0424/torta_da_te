<?php
 error_reporting(E_ALL);
ini_set("display_errors",1);

$user_email= $_GET["user_email"];

$connect = mysqli_connect("localhost","root","");
$db_con = mysqli_select_db($connect,"torta_da_te");

$sql = "select * from members where email='$user_email'";
$result=mysqli_query($connect, $sql);
$num_match=mysqli_num_rows($result);

if(!$num_match){
    echo "Y";
}else{
    echo "N";
}

?>