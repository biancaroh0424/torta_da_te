<?php
error_reporting(E_ALL);
ini_set("display_errors",1);


$g_idx = $_GET["g_idx"];

include "../torta_da_te/inc/session.php";
include "../torta_da_te/inc/dbcon.php";


$sql = "delete from members where idx=$g_idx;";

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
unset($_SESSION["s_idx"]);
unset($_SESSION["s_name"]);
unset($_SESSION["s_email"]);
unset($_SESSION["s_name"]);

echo"
<script>
location.href=\"../torta_da_te/admin_member_list.php\"
</script>
";
?>