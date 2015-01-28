<?php 
if (isset($_POST['enviar'])&& $_SERVER['REQUEST_METHOD'] == 'POST')
{
	include'conecta.php';
	$sql="select*from usuarios where usu_login ='$_POST[login]' AND usu_senha ='$_POST[senha]'; ";
	$consulta = mysqli_query($con,$sql);
	$resposta = mysqli_num_rows($consulta);
	if ($resposta == 1) 
	{
		session_start();
		$_SESSION['logado'] = true;
		$vai='gerenciar.php';
	}
	else 
	{
		$vai = "index.php?invasao=tentou";
	}
}
else 
{
	$vai = "index.php?invasao=url";
}


header("location:".$vai);


?>