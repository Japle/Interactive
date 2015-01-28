<?php 

//MENSAGEM
$mensagem="<html>\n";
$mensagem .= "<head>\n";
$mensagem .= "<title> TESTE DE EMAIL </title>\n";
$mensagem .= "</head>\n";
$mensagem .= "<body leftmargin=\"0\" topmargin=\"0\" >\n";
$mensagem .= "<img src= \"http://www.php.net/images/php.gif\" alt=\"Imagem de PHP\">\n";
$mensagem .= "<br>\n";
$mensagem .= "<font face =\"arial\" size=\"7\" color=\"red\">\n";
$mensagem .= "Mar&eacute; po&ccedil;o p&atilde;o ma&ccedil;&atilde; &lt;entre sinais&gt;\n";
$mensagem .= "<br>\n";
$mensagem .= date("d-m-Y") . " às ". date("H:i:s");
$mensagem .= "<br>";
$mensagem .= "</font>\n";
$mensagem .= "</body>\n";
$mensagem .= "</html>\r\n";


?>