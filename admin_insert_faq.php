<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

include "../torta_da_te/inc/session.php";

$n_title = $_POST["n_title"];
$n_content = $_POST["n_content"];
// $n_type = $_POST["n_type"];
// $n_cate = $_POST["n_cate"];

// if($_FILES["up_file"] != NULL){
//     $tmp_name = $_FILES["up_file"]["tmp_name"];
//     $f_name = $_FILES["up_file"]["name"];
//     $up = move_uploaded_file($tmp_name, "../torta_da_te/data/$f_name");
// };





// $f_type = $_FILES["up_file"]["type"];
// $f_size = $_FILES["up_file"]["size"];


$w_date = date ("Y-m-d");

// echo "<p> 제목 : ".$n_title."</p>";
// echo "<p> 내용 : ".$n_content."</p>";
// echo "<p> 작성자 : ".$s_name."</p>";
// echo "<p> 가입일 : ".$w_date."</p>";
// echo "<p> 파일이름 : ".$f_name."</p>";


include "../torta_da_te/inc/dbcon.php";

$sql = "insert into notice(";
$sql .= "n_title, n_content, w_date";
$sql .= ") values (";
$sql .= "'$n_title', '$n_content','$w_date'";
$sql .= ");";


mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
<script>
location.href=\"../torta_da_te/admin_faq.php\"
</script>
"
// echo $sql;
// exit; 
?>