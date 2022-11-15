<?php
session_start();
$s_idx = isset($_SESSION["s_idx"])?
$_SESSION["s_idx"] : "";
$s_name = isset($_SESSION["s_name"])?
$_SESSION["s_name"] : "";
$s_email = isset($_SESSION["s_email"])?
$_SESSION["s_email"] : "";

?>