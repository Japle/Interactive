<?php 
if (isset($_POST['enviar'])&& $_SERVER['REQUEST_METHOD'] == 'POST')
{
	//include'Banco.php';
	function __autoload($class)
	{
		include_once "$class.php";		
	}
	$my=new Banco();
	
	$sql="select*from usuarios where usu_login ='$_POST[login]' AND usu_senha ='$_POST[senha]'; ";
	$resposta =$my->linhas($sql);
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