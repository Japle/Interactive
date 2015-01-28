<?php 

if($_SERVER ['REQUEST_METHOD']== 'POST'&& isset ($_POST['Incluir']));
{
	// Faz a conexão com o banco de dados
	include 'conecta.php';
	//receber as variáveis $_POST e atribuí-las à variáveis simples
	foreach ($_POST as $ind=>$valor)
		$array[$ind] = $valor;
	//Criar a consulta SQL
	$data = date("Y-m-d");
	$sql ="insert into contatos
			(con_id, con_nome,con_email ,con_fone, con_sexo, con_tipo, con_data)
			values
			(null,'$nome','$email','$fone', '$sexo', '$tipo', '$data');
			";
	echo $sql;
	//Envia a consulta
	mysqli_query($con,$sql);
	//fechar a conexão com o banco de dados
	mysqli_close($con);
	//retornar para a pagina gerenciar.php
	//header ("location:gerenciar.php"); 
	$vai = "gerenciar.php";
	header ("location:".$vai);
	
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
  <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <p>&nbsp;</p>
    <table width="494" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <tr>
        <td width="242"><div align="right">Nome: </div></td>
        <td width="242"><input type="text" name="nome" /></td>
      </tr>
      <tr>
        <td><div align="right">Telefone: </div></td>
        <td><input type="text" name="fone" /></td>
      </tr>
      <tr>
        <td><div align="right">email: </div></td>
        <td><input type="text" name="email" /></td>
      </tr>
      <tr>
        <td valign="top"><div align="right">sexo: </div></td>
        <td><p>
          <label>
            <input type="radio" name="sexo" value="m" id="sexo_0" />
            Masculino</label>
          <br />
          <label>
            <input type="radio" name="sexo" value="f" id="sexo_1" />
            Feminino</label>
          <br />
        </p></td>
      </tr>
      <tr>
        <td><div align="right">tipo: </div></td>
        <td><select name="tipo" id="tipo">
          <option value="par">Particular</option>
          <option value="esc">Escola</option>
          <option value="fam">Familia</option>
          <option value="tra">Trabalho</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input name="Incluir" type="submit" id="Incluir" value="Incluir" />
        </div></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
