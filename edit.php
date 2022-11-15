<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

include "../torta_da_te/inc/session.php";

$user_pwd = $_POST["user_pwd"];
$user_phone = $_POST["user_phone"];
$user_email = $_POST["user_email"];
$user_name = $_POST["user_name"]; 

include "../torta_da_te/inc/dbcon.php";


$sql = "update members set ";
$sql .= "pwd='$user_pwd', ";
$sql .= "tel='$user_phone', ";
$sql .= "email='$user_email', ";
$sql .= "fullname='$user_name' ";
$sql .= "where idx=$s_idx;";
//echo $sql;



$sql_nPwd = "update members set
tel='$user_phone', email='$user_email',
fullname='$user_name' where idx=$s_idx;";



if($user_pwd){
    mysqli_query($dbcon, $sql);
}else{
    mysqli_query($dbcon, $sql_nPwd);
};

mysqli_close($dbcon);

echo "
<script>
location.href=\"../torta_da_te/account_personal_info.php\";
</script>
"
?>