<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

$n_idx = $_GET["n_idx"];


include "../torta_da_te/inc/dbcon.php";


$sql = "delete from notice where idx=$n_idx;";


mysqli_query($dbcon, $sql);

mysqli_close($dbcon);

echo "
<script>
location.href=\"../torta_da_te/admin_faq.php\";
</script>
"

?>