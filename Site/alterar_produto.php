<?php 
######################################################################
//Conecta com o banco de dados
include 'conecta.php';

######################################################################
//Consulta que altera o registro
if ($_SERVER ['REQUEST_METHOD'] == 'POST' && isset ($_POST['alterar']))
{
	//Receber as variáveis $_POST em variáveis simples
	$IdProduto = $_POST['IdProduto'];
	$IdFornecedor = $_POST['IdFornecedor'];
	$IdTipo = $_POST['IdTipo'];
	$Descricao = $_POST['Descricao'];
	$Tipo = $_POST['Tipo'];
	$Cor = $_POST['Cor'];
	$Quantidade = $_POST['Quantidade'];
	//Criar a consulta SQL
	$sql = "update produto 
		   	set
			IdFornecedor='$IdFornecedor',
			IdTipo='$IdTipo',
			Descricao= '$Descricao',
			Tipo='$Tipo',
			Cor='$Cor',
			Quantidade='$Quantidade',
			where
			IdProduto='$IdProduto'		
			";
	//echo $sql;
	mysqli_query($con,$sql);
	//Retorna para a página gerenciar
	$vai ='gerenciar_produto.php';
	header("location:".$vai);
	mysqli_close($con);
	
}
######################################################################
//Consulta que seleciona o registro que será alterado
if ($_SERVER ['REQUEST_METHOD'] == 'GET' && isset ($_GET['id']))
{
	$sql="select*from produto where IdProduto='$_GET[id]';";
	$consulta = mysqli_query($con,$sql);
	$resposta = mysqli_fetch_array($consulta);
	//var_dump($resposta);
	mysqli_close($con);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#formulario {
	font-family: Arial, Helvetica, sans-serif;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #000099;
	border-right-color: #000099;
	border-bottom-color: #000099;
	border-left-color: #000099;
	float: inherit;
}
-->
</style>
</head>

<body bgcolor="#CCCCCC">
<div id="formulario">
  <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <p>&nbsp;</p>
    <table width="494" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <tr>
        <td width="242"><div align="right">Id Fornecedor: </div></td>
        <td width="242"><input type="text" name="nome" value="<?php echo $resposta['IdFornecedor']?>" /></td>
      </tr>
      <tr>
        <td><div align="right">IdTipo: </div></td>
        <td><input type="text" name="fone" value="<?php echo $resposta['IdTipo']?>"  /></td>
      </tr>
      <tr>
        <td><div align="right">Descricao: </div></td>
        <td><input type="text" name="email" value="<?php echo $resposta['Descricao']?>" /></td>
      </tr>
      <tr>
        <td><div align="right">Tipo: </div></td>
        <td><input type="text" name="fone" value="<?php echo $resposta['Tipo']?>"  /></td>
      </tr>
      <tr>
        <td><div align="right">Cor: </div></td>
        <td><input type="text" name="email" value="<?php echo $resposta['Cor']?>" /></td>
      </tr>
      <tr>
        <td><div align="right">Quantidade: </div></td>
        <td><input type="text" name="email" value="<?php echo $resposta['Quantidade']?>" /></td>
      </tr>
                
          <br />
        </p></td>
      </tr>
      
      <tr>
     <td colspan="2"><input type="hidden" name="IdProduto" id="IdProduto" value="<?php echo $resposta['IdProduto']?>" /></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input name="alterar" type="submit" id="alterar" value="Alterar" />
        </div></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
