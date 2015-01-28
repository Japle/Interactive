<?php 

if($_SERVER ['REQUEST_METHOD']== 'POST'&& isset ($_POST['Incluir']));
{
	// Faz a conexão com o banco de dados
	include 'conecta.php';
	//receber as variáveis $_POST e atribuí-las à variáveis simples
	foreach ($_POST as $ind=>$valor)
		$$ind = $valor;
	//Criar a consulta SQL
	$data = date("Y-m-d");
	$sql ="insert into usuario
			(IdUsuario,Nome,DataNasc,email,Login,Senha,Telefone,Setor)
			values
			('$id','$nome','$dn','$email', '$login', '$senha', '$tel','$set');
			";
	//echo $sql;
	//Envia a consulta
	mysqli_query($con,$sql);
	//fechar a conexão com o banco de dados
	mysqli_close($con);
	//retornar para a pagina gerenciar.php
	//header ("location:gerenciar.php"); 
	$vai = "login.php";
	header ("location:".$vai);
	var_dump($valor);
}
?>
<?php 

if($_SERVER ['REQUEST_METHOD']== 'POST'&& isset ($_POST['Incluir']));
{
	// Faz a conexão com o banco de dados
	include 'conecta.php';
	//receber as variáveis $_POST e atribuí-las à variáveis simples
	
	$IdUsuario = $_POST['id'];
	$Nome = $_POST['nome'];
	$DataNasc = $_POST['dn'];
	$Email = $_POST['email'];
	$Login = $_POST['login'];
	$Senha = $_POST['senha'];
	$Telefone = $_POST['tel'];
	$Setor = $_POST['sel'];
	//Criar a consulta SQL
	$data = date("Y-m-d");
	$sql ="insert into usuario
			(IdUsuario, Nome, DataNasc, Email,Login, Senha, Telefone, Setor)
			values
			(null,'$Nome','$DataNasc','$Email', '$Login', '$Senha', '$Telefone',$Setor);
			";
	//echo $sql;
	//Envia a consulta
	mysqli_query($con,$sql);
	//fechar a conexão com o banco de dados
	mysqli_close($con);
	//retornar para a pagina gerenciar.php
	//header ("location:gerenciar.php"); 
	$vai = "login.php";
	header ("location:".$vai);
	
}
?>