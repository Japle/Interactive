k<?php 
############################################################
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] != true )
{
	$vai="index.php?invasao=url";
	header ("location:".$vai);
}
############################################################
include'conecta.php';
$sql="select*from contatos";
mysqli_query($con,$sql);
$consulta = mysqli_query($con,$sql);
//$resposta = mysqli_fetch_array($consulta);
//var_dump($resposta);
mysqli_close($con);
?>

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
<?php include'menu.php' ?>
<div id="agenda">
  <table width="564" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
    <tr>
      <td colspan="5"><p align="center">Agenda</p></td>
    </tr>
    <tr>
      <td width="92"><div align="center">Identifica&ccedil;&atilde;o</div></td>
      <td width="219"><div align="center">Nome</div></td>
      <td width="93"><div align="center">telefone</div></td>
      <td colspan="2"> <div align="center"><a href="inserir.php">Inserir</a></div></td>
    </tr>
      <?php while($resposta = mysqli_fetch_array($consulta)){ ?>
    <tr>
  	 <td><div align="center"><?php echo $resposta['con_id'];?></div></td>
      <td><?php echo $resposta['con_nome'];?></td>
      <td><?php echo $resposta['con_fone'];?></td>
      <td width="69"><div align="center"><a href="alterar.php?id=<?php echo $resposta['con_id'];?>">alterar</a></div></td>
      <td width="69"><div align="center"><a href="excluir.php?id=<?php echo $resposta['con_id'];?>">excluir</a></div></td>
    </tr>
   <?php }?>
  </table>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
