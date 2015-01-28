<?php
#error_reporting(E_ALL); // Caso queira debugar eventuais erros
#error_reporting(E_ALL && E_STRICT); // Caso queira debugar eventuais erros
date_default_timezone_set('America/Sao_Paulo'); // Acerta o horário caso seu servidor caso esteja com horário diferente do seu fuso horário.
require_once('PHPMailer_v5.1/class.phpmailer.php'); // Inclui a biblioteca para instanciarmos o objeto PHPMailer
$mail = new PHPMailer(); // Criamos o objeto PHPMailer
$mail->SetLanguage('br'); // Configura a biblioteca para usar a lingua portuguesa falada no Brasil. Para outras linguas veja a pasta languages da biblioteca
$body = 'Conteúdo do E-Mail'; // Conteudo do e-mail. No caso estamos usando um html
$mail->IsSMTP(); // Configura o objeto para usar SMTP
$mail->SMTPDebug = 2; // Debug do SMTP (para teste)
// 1 = erros e mensagens
// 2 = somente mensagens
$mail->SMTPAuth = true; // ativa a autenticação SMTP. O Gmail exige autenticação, precisamos disso
$mail->SMTPSecure = "ssl"; // Configura o tipo de criptografia do SMTP do Gmail, no caso, SSL
$mail->Host = "smtp.gmail.com"; // Configura servidor SMTP do Gmail
$mail->Port = 465; // Configura porta do servidor SMTP do Gmail
$mail->Username = "edupretel@gmail.com"; // Seu Usuário do Gmail
$mail->Password = "xxxxxxxx@xxxxxxxx"; // Sua Senha do Gmail
$mail->SetFrom('seunome@dominio.com.br', 'Apelido do Fulano'); // e-mail do remetente e seu nome/apelido
$mail->AddReplyTo("ciclano@dominio.com","Ciclano"); // e-mail de resposta do e-mail que enviaremos. Ou seja, quando alguém responder a este e-mail, responderá para o e-mail aqui configurado ....e o nome/apelido do mesmo
$mail->Subject = "Teste de envio de e-mail da minha conta do Gmail pelo PHPMailer"; // Assunto do e-mail
$mail->AltBody = "Para visualizar a mensagem, por favor, use um cliente de e-mail compatível/configurado para ver mensagens HTML!"; // Mensagem alternativa caso o destinatário. Veja o e-mail em um aplicativo sem suporte ou não configurado para ver mensagens HTML
$mail->MsgHTML($body); // Configura o conteúdo do e-mail
$endereco = "edu@edupretel.com.br";
$mail->AddAddress($endereco, "Nome/Apelido do Destinatário"); // e-mail do destinatário e seu nome/apelido
#$mail->AddAttachment("images/anexo-1.gif"); // caso queira enviar um anexo no e-mail
if(!$mail->Send()) {
	echo "Erro: " . $mail->ErrorInfo;
}else {
	echo "Mensagem Enviada!";
}
?>