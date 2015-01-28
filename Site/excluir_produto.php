<?php 
if ($_SERVER ['REQUEST_METHOD'] == 'GET' && isset ($_GET['id']))
{
	include 'conecta.php';
	$sql="delete from produto where IdProduto='$_GET[id]';";
	mysqli_query($con,$sql);
	
	//Retorna para a página gerenciar
	$vai ='gerenciar.php';
	header("location:".$vai);
}

?>