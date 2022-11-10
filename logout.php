<?php
session_start();

unset($_SESSION["s_idx"]);
unset($_SESSION["s_email"]);
unset($_SESSION["s_name"]);

echo"
<script>
location.href=\"../torta_da_te/index.php\";
</script>
";
?>