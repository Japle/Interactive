<?php 
############################################################
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] != true )
{
	$vai="login.php?invasao=url";
	header ("location:".$vai);
}
############################################################
include'conecta.php';
$sql="select*from pedidos";
mysqli_query($con,$sql);
$consulta = mysqli_query($con,$sql);
//$resposta = mysqli_fetch_array($consulta);
//var_dump($resposta);
mysqli_close($con);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
<title>Cadastrar Loja</title>
<script language="javascript" type="text/javascript" src="cad_loja.js"></script>

<link rel="stylesheet" type="text/css" href="cad_loja.css"/>
</head>

<body>
<center>Produto</center><br/><br/>
<form name="cont" method="post">
<table align="center">
<tr>
<th colspan="2" class="titleFooter">PREENCHA TODOS OS CAMPOS ABAIXO PARA CADASTRAR UM NOVO PRODUTO</th>
</tr>
<tr>
<td align="center">ID Produto</td>		<td align="center"><input type="text" name="idproduto" size="70" /></td>
</tr>
<tr>
<td align="center">ID Fornecedor</td>		<td align="center"><input type="text" name="fornecedor" size="70" /></td>
</tr>
<tr>
<td class="label">ID Tipo</td>		<td align="center"><input type="text" name="idtipo" size="70" /></td>
</tr>
<tr>
<td class="label">Descri��o</td> 	<td align="center"><input type="text" name="desc" size="70"/></td>
</tr>
<tr>
<td class="label">Tipo</td> 	<td align="center"><input type="text" name="tipo" size="70"/></td>
</tr>
<tr>
<td class="label">Cor</td> 	<td align="center"><input type="text" name="cor" size="70"/></td>
</tr>
<tr>
<td class="label">Quantidade</td> 	<td align="center"><input type="text" name="quant" size="70"/></td>

<tr>
<th colspan="2" class="titleFooter"><input type="reset" name="res" value="LIMPAR" />   	<input type="submit" name="enviar" value="GERAR PEDIDO" onclick="return valida();" /></th>
</tr>	

</table>
</form>
</body>

</html>
