<?php 
//Autor do email
$de_nome= "Moranguinho da torta";
$de_mail = "moranguinho@datorta.com";

//PARA
$para="edupretel@gmail.com";
//separar com virgula
// $para .= ", anapretel@123.com.br"

//COM CÓPIA
$cc = "edupretel@yahoo.com.br";

//COM CÓPIA OCULTA
$Bcc="edupretel@uol.com.br";

//HEADERS DE IDENTIFICAÇÃO
$header = "From: $de_nome <$de_mail> \r\n";
$header .= "Cc: $cc \r\n";//$header = $header."Cc: $cc \r\n"; 
$header .= "Bcc: $Bcc \r\n";
$header .= "Reply-to: $de_mail\r\n";//para quem sera
$header .= "Return-Path:  $de_email \r\n";//


//HEADER
$header .= "MIME-Version: 1.0 \r\n";
$header .= "Content-type: text/html; charset=iso-8859-1\r\n";


//ASSUNTO - SUBJECT
$assunto="Teste de email 1000 em html usando PHP\r\n";

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

$enviado = mail($para,$assunto,$mensagem,$header);

if($enviado){
		print "Mensagem enviada com sucesso";
}else{
		print "nao foi";	
}
?>