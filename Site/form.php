<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
#agenda {
}
.style4 {font-size: 16px}
-->
</style>
</head>

<body>

<div id="Estoque">
  <table width="564" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
    <tr>
      <td colspan="9"><p align="center">Estoque</p></td>
    </tr>
    <tr>
      <td width="92"><div align="center">Id Usuário</div></td>
      <td width="93"><div align="center">Id Nome</div></td>
      <td width="93"><div align="center">Data Nasc</div></td>
      <td width="92"><div align="center">E-mail</div></td>
      <td width="93"><div align="center">Login</div></td>
      <td width="93"><div align="center">Telefone</div></td>
      <td width="93"><div align="center">Setor</div></td>
      <td colspan="2"> <div align="center"><a href="inserir_produto.php">Inserir Produto</a></div></td>
    </tr>
      <?php while($resposta = mysqli_fetch_array($consulta)){ ?>
    <tr>
  	 <td><div align="center"><?php echo $resposta['IdProduto'];?></div></td>
      <td><?php echo $resposta['IdFornecedor'];?></td>
      <td><?php echo $resposta['IdTipo'];?></td>
      <td><?php echo $resposta['Descricao'];?></td>
      <td><?php echo $resposta['Tipo'];?></td>
      <td><?php echo $resposta['Cor'];?></td>
      <td><?php echo $resposta['Quantidade'];?></td>
      <td width="69"><div align="center"><a href="alterar_produto.php?id=<?php echo $resposta['IdProduto'];?>">Alterar</a></div></td>
      <td width="69"><div align="center"><a href="excluir_produto.php?id=<?php echo $resposta['IdProduto'];?>">Excluir</a></div></td>
    </tr>
   <?php }?>
  </table>
</div>
<p align="center">&nbsp;</p>
</body>
</html>