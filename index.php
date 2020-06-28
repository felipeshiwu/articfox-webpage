<?php 
if (!empty($_POST))
{
    echo "post php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent=" From: $name \n E-mail: $email \n Message: $message";
    $recipient = "lin@articfox.com.br";
    $subject = "Articfox - Formulário de contato";
    $mailheader = "From: contato@articfox.com.br \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Erro ao enviar mensagem! Tente novamente ou entre em contato direto pelo e-mail contato@articfox.com.br!");

    header("Location: sucesso.html");
    exit();
}
include("telaprincipal.html");
 ?>