<?php 
session_start();
unset($_SESSION['logado']);
$vai="index.php";
header("location:".$vai);
?>