<?php

include "../torta_da_te/inc/session.php";
include "../torta_da_te/inc/dbcon.php";


$sql = "delete from members where idx=$s_idx;";

mysqli_query($dbcon, $sql);
mysqli_close($dbcon);
unset($_SESSION["s_email"]);
unset($_SESSION["s_name"]);

echo"

";
?>