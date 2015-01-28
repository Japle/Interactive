<?php 
######################################################################
//Conecta com o banco de dados
include 'conecta.php';

######################################################################
//Consulta que altera o registro
if ($_SERVER ['REQUEST_METHOD'] == 'POST' && isset ($_POST['alterar']))
{
	//Receber as variáveis $_POST em variáveis simples
	foreach ($_POST as $ind => $valor)
		$$ind = $valor;
	//Criar a consulta SQL
	$sql = "update contatos 
		   	set
			con_nome = '$nome',
			con_fone= '$fone',
			con_email= '$email',
			con_sexo= '$sexo',
			con_tipo= '$tipo'
			where
			con_id = '$id_contato'		
			";
	//echo $sql;
	mysqli_query($con,$sql);
	//Retorna para a página gerenciar
	$vai ='gerenciar.php';
	header("location:".$vai);
	mysqli_close($con);
	
}
######################################################################
//Consulta que seleciona o registro que será alterado
if ($_SERVER ['REQUEST_METHOD'] == 'GET' && isset ($_GET['id']))
{
	$sql="select*from contatos where con_id='$_GET[id]';";
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
        <td width="242"><div align="right">Nome: </div></td>
        <td width="242"><input type="text" name="nome" value="<?php echo $resposta['con_nome']?>" /></td>
      </tr>
      <tr>
        <td><div align="right">Telefone: </div></td>
        <td><input type="text" name="fone" value="<?php echo $resposta['con_fone']?>"  /></td>
      </tr>
      <tr>
        <td><div align="right">email: </div></td>
        <td><input type="text" name="email" value="<?php echo $resposta['con_email']?>" /></td>
      </tr>
      <tr>
        <td valign="top"><div align="right">sexo: </div></td>
        <td><p>
          <label>
            <input type="radio" name="sexo" value="m" id="sexo_0" <?php echo ($resposta['con_sexo'] == 'm')? ("checked =\"checked\""):(null); ?> />
            Masculino</label>
          <br />
          <label>
            <input type="radio" name="sexo" value="f" id="sexo_1" <?php echo ($resposta['con_sexo'] == 'f')? ("checked =\"checked\""):(null); ?>  />
            Feminino</label>
          <br />
        </p></td>
      </tr>
      <tr>
        <td><div align="right">tipo: </div></td>
        <td><select name="tipo" id="tipo">
          <option value="par" <?php echo ($resposta['con_tipo'] == 'par')? ("selected =\"selected\""):(null); ?>>Particular</option>
          <option value="esc"<?php echo ($resposta['con_tipo'] == 'esc')? ("selected =\"selected\""):(null); ?>>Escola</option>
          <option value="fam"<?php echo ($resposta['con_tipo'] == 'fam')? ("selected =\"selected\""):(null); ?>>Familia</option>
          <option value="tra"<?php echo ($resposta['con_tipo'] == 'tra')? ("selected =\"selected\""):(null); ?>>Trabalho</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><input type="hidden" name="id_contato" id="id_contato" value="<?php echo $resposta['con_id']?>" /></td>
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
