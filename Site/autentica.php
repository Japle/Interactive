<?php 
if (isset($_POST['enviar'])&& $_SERVER['REQUEST_METHOD'] == 'POST')
{
	include'conecta.php';
	$sql="select*from usuario where Login ='$_POST[nome]' AND Senha ='$_POST[senha]'; ";
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
		$vai = "login.php?invasao=tentou";
	}
}
else 
{
	$vai = "login.php?invasao=url";
}


header("location:".$vai);


?>