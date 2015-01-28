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
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="POST" action="autentica.php">
  <table width="50%" border="0" align="center">
    <tr>
      <td style="text-align: right"><span class="centro">Usuario: </span></td>
      <td style="text-align: left"><span class="centro">
        <input type="text" name="login">
      </span></td>
    </tr>
    <tr>
      <td style="text-align: right"> Senha: </td>
      <td style="text-align: left">
        <input type="password" name="senha">
      </td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: center">
        <input type="submit" value="Login" name ="enviar">
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p><BR>
  </p>
</form>
</body>
</html>


