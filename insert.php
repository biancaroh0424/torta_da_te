<?php


error_reporting(E_ALL);
ini_set("display_errors",1);

$user_email = $_POST["user_email"];
$user_pw = $_POST["user_pw"];


$signup_date = date("Y-d-m");
// echo "$user_email";
// echo "$user_pw";

include "../torta_da_te/inc/dbcon.php";


$sql = "insert into members(";
$sql .= "email, pwd, reg_date";
$sql .= ") values (";
$sql .= "'$user_email', '$user_pw', '$signup_date');";

// echo $sql;

mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "<script>
        location.href=\"index.php\";
        </script>
"

?>