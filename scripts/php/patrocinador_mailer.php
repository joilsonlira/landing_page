<?php

$name = $_POST['nome'];
//pega os dados que foi digitado no ID name.

$email = $_POST['email'];
//pega os dados que foi digitado no ID email.

$empresa = $_POST['empresa'];

$whatsapp = $_POST['whatsapp'];

$subject = "Quero ser um patrocinador";


//pega os dados que foi digitado no ID message.
$myEmail = "joilson@joilsonlira.com.br";//é necessário informar um e-mail do próprio domínio
$headers = "From: $myEmail\r\n";
$headers .= "Reply-To: $email\r\n";

/*abaixo contém os dados que serão enviados para o email
cadastrado para receber o formulário*/

$corpo = "Quero ser um patrocinador\n";
$corpo .= "Nome: " . $name . "\n";
$corpo .= "Email: " . $email . "\n";
$corpo .= "Empresa: " . $empresa . "\n";
$corpo .= "WhatsApp: " . $whatsapp . "\n";

$email_to = 'lirajoilson@gmail.com';
//não esqueça de substituir este email pelo seu.

$status = mail($email_to, $subject, $corpo, $headers);
//enviando o email.

if ($status) {
    echo "<script> alert('Formulário enviado com sucesso!'); </script>";

//mensagem de form enviado com sucesso.

} else {
    echo "<script> alert('Falha ao enviar o Formulário.'); </script>";

//mensagem de erro no envio. 

}

?>