<?php 

if($_SERVER ['REQUEST_METHOD']== 'POST'&& isset ($_POST['Incluir']));
{
	// Faz a conexão com o banco de dados
	include 'conecta.php';
	//receber as variáveis $_POST e atribuí-las à variáveis simples
	
	$IdProduto = $_POST['IdProduto'];
	$IdFornecedor = $_POST['IdFornecedor'];
	$IdTipo = $_POST['IdTipo'];
	$Descricao = $_POST['Descricao'];
	$Tipo = $_POST['Tipo'];
	$Cor = $_POST['Cor'];
	$Quantidade = $_POST['Quantidade'];
	
	//Criar a consulta SQL
	$data = date("Y-m-d");
	$sql ="insert into produto
			(IdProduto, IdFornecedor, IdTipo, Descricao, Tipo, Cor, Quantidade)
			values
			(null,'$IdFornecedor','$IdTipo','$Descricao', '$Tipo', '$Cor', '$Quantidade');
			";
	//echo $sql;
	//Envia a consulta
	mysqli_query($con,$sql);
	//fechar a conexão com o banco de dados
	mysqli_close($con);
	//retornar para a pagina gerenciar.php
	//header ("location:gerenciar.php"); 
	$vai = "gerenciar_produto.php";
	header ("location:".$vai);
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inserir Produto</title>
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
  <form id="formulario" name="formulario" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <p>&nbsp;</p>
    <table width="494" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <tr>
        <td width="242"><div align="right">Id Produto: </div></td>
        <td width="242"><input type="text" name="IdProduto"/> </td>
      </tr>
      <tr>
        <td><div align="right">Id Fornecedor: </div></td>
        <td><input type="text" name="IdFornecedor" /></td>
      </tr>
      <tr>
        <td><div align="right">Id Tipo: </div></td>
        <td><input type="text" name="IdTipo" /></td>
      </tr>
      <tr>
        <td><div align="right">Descrição: </div></td>
        <td><input type="text" name="Descricao" /></td>
      </tr>
      <tr>
        <td><div align="right">Tipo: </div></td>
        <td><input type="text" name="Tipo" /></td>
     </tr> 
       <tr>
        <td><div align="right">Cor: </div></td>
        <td><input type="text" name="Cor" /></td>
     </tr> 
     <tr>
        <td><div align="right">Quantidade: </div></td>
        <td><input type="text" name="Quantidade" /></td>
     </tr>      
        <td colspan="2"><div align="center">
          <input name="Incluir" type="submit" id="Incluir" value="Incluir" />
        </div></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
