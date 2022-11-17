<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
include "../torta_da_te/inc/session.php";
include "../torta_da_te/inc/dbcon.php";

$n_idx = $_GET["n_idx"];
$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
// $file_del = isset($_POST["file_del"]) ? $_POST["file_del"]:"off";


$w_date = date('Y-m-d');

$sql = "update notice set ";
$sql .= "n_title='$n_title', ";
$sql .= "n_content='$n_content', ";
$sql .= "w_date='$w_date' ";
$sql .= "where idx=$n_idx;";

// echo $sql;
// exit;

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);

echo "
<script>
location.href=\"../torta_da_te/admin_faq.php?n_idx=$n_idx\";
</script>
";

?>