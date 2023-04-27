<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem']

$to = 'atendimento@sorrochetech.com.br';
$subject = 'Formulário de Contato';
$body = '
    <html>
        <p><b>Nome: </b>$nome</p>
        <p><b>Email: </b>$email</p>
        <p><b>Telefone: </b>$telefone</p>
        <p><b>Assunto: </b>$assunto</p>
        <p><b>Mensagem: </b>$mensagem</p>
    </html>';

$headers = 'MIME-Version 1.0\n';
$headers .= 'Content-type: text/html; charset=iso-8859-1\n';
$headers .= 'From: $nome <$email>';

if(mail($to, $subject, $body, $headers)){
    echo 'Email enviado com sucesso!';
} else{
    echo 'Houve um problema ao enviar o email.';
}

?>
