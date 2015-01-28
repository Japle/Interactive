<?php
$host="localhost";
$login="root";
$senha="";

$basedados = "agenda";




//$con = mysql_connect($host,$login,$senha) or die (mysql_error());
//mysql_select_db($basedados,$con)or die ("Base de dados não foi localizada");

$con = mysqli_connect($host, $login, $senha, $basedados);
?>