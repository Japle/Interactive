<?php 
if(isset($_GET['invasao']) AND $_GET['invasao']=="tentou"){
	echo "<script language=\"JavaScript\" type=\"text/javascript\"> \n";
	echo "<!-- \n";
	echo "alert(\"\\tNão autorizado! \\n\\nUsuário e/ou senha incorretos\"); \n";
	echo "//--> \n";
	echo "</script> \n";
	
}
if(isset($_GET['invasao']) AND $_GET['invasao']=="url"){
	echo "<script language=\"JavaScript\" type=\"text/javascript\"> \n";
	echo "<!-- \n";
	echo "alert(\"\\t Área Restrita!!!! \\n\\nUsuario precisa ser autenticado\"); \n";
	echo "//--> \n";
	echo "</script> \n";
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
<title>Fale Conosco</title>
<script language="javascript" type="text/javascript" src="form.js"></script>

<link rel="stylesheet" type="text/css" href="form.css"/>
</head>

<body>

<center><img src="#"/></center><br/><br/>
<form name="cont" method="post" action="autentica.php">
<table align="center">
<tr>
<th colspan="2" class="titleFooter">Preencha o Formulário abaixo e entre em contato conosco!</th>
</tr>
<tr>
<td align="center">LOGIN:</td>		<td align="center"><input type="text" name="nome" size="70" /></td>
</tr>
<tr>
<td class="label">SENHA:</td>		<td align="center"> <input type="password" name="senha" size="70" /></td>
</tr>
<tr>
<th colspan="2" class="titleFooter"><input type="submit" name="enviar" value="LOGIN" />   	<a href="form.php" target="cont"> <input type="button" name="enviar" value="NOVO USUÁRIO"/></a></th>
</tr>	

</table>
<p>&nbsp;</p>
</form>
</body>

</html>
