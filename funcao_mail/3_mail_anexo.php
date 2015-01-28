<?php 

//pegar info arquivos enviados pelo formulário
$nome=$_FILES['arquivo']['name'];
$temp=$_FILES['arquivo']['tmp_name'];
$tipo=$_FILES['arquivo']['type'];

//PARA
$para="edupretel@gmail.com";


//DE
$de_nome="eu@eeee";
$de_email="alunos@edupretel.com.br";

//COM CÓPIA
//$cc = "epfi@uol.com.br";

//COM CÓPIA OCULTA
//$bcc="edupretel@yahoo.com.br";

//header de identificação
$header="From: $de_nome <$de_email> \n";
//$header .= "Cc: $cc \r\n";
//$header .= "Bcc: $bcc \r\n";
$header .= "Reply-to: $de_email \n";
$header .= "Return-Path:  $de_email \n";

//header de formatação
$header .="X-Mailer: Script para enviar arquivo atachado \n";
$header .= "MIME-Version: 1.0\n";
$header .="Content-type: multipart/mixed; boundary=\"Message-Boundary\"\n ";


if($nome != ""){

	$fd=fopen($temp,"rb");
	$anexo=fread($fd,filesize($temp));
	$anexo=base64_encode($anexo);
	$close=fclose($fd);
	$anexo=chunk_split($anexo);

//assunto da mensagem
$assunto="Teste de email complexo";
//$mensagem="Estou enviando um arquivo atachado";
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
$mensagem .= date("Y-m-d") . " às ". date("H:i:s");
$mensagem .= "<br>";
$mensagem .= "</font>\n";
$mensagem .= "</body>\n";
$mensagem .= "</html>\r\n";


//Mensagem - Corpo do email
$corpo = "--Message-Boundary\n"; 
$corpo .= "Content-type: text/html  charset=\"ISO-8859-1\"\n\n"; 
$corpo .= "Content-Transfer-Encoding: 8bits\n"; 
$corpo .= "$mensagem \n\n"; 
$corpo .= "--Message-Boundary\n"; 
$corpo .= "Content-type: $tipo\n"; 
$corpo .= "Content-Disposition: attachment; filename=$nome\n"; 
$corpo .= "Content-Transfer-Encoding: base64 \n\n";
$corpo .= $anexo."\n"; 
$corpo .= "--Message-Boundary\n"; 

$ok=mail($para, $assunto, $corpo,$header);

if($ok){
		print "Mensagem Enviada";
}else{
		print "Mensagem NÃO Enviada";
}
}
?> 