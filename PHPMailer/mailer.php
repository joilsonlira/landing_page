<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// $mail = new PHPMailer(true);
$phpmailer = new PHPMailer();

try{
    //Configurações referente ao servidor.
    // $phpmailer->SMTPDebug = SMTP::DEBUG_SERVER; //habilita o modo debug
    // $phpmailer->isSMTP(); //vou trabalhar com smtp
    // $phpmailer->Host = 'smtp.gmail.com'; //host
    // $phpmailer->SMTPAuth = true; //autenticação via smtp
    // $phpmailer->Username = 'lirajoilson@gmail.com'; //uer name da conta de onde ira partir o email
    // $phpmailer->Password = 'J261Poke##'; //senha de onde irá partir o email
    
    // $phpmailer->SMTPSecure = 'ssl';
    // $phpmailer->Port = 465; //porta do SMTP
    // // $phpmailer->Port = 587; // 465 or 587 

    // //configurações do email
    // $phpmailer->setFrom('lirajoilson@gmail.com'); //Email de onde esta saindo o email
    // $phpmailer->addAddress('joilson.lira@live.com'); //Email que ira receber a mensagem

    if(isset($_POST['patrocinador_email']) && !empty($_POST['patrocinador_email'])){
    
        $nome = addslashes($_POST['patrocinador_nome']);
        $email = addslashes($_POST['patrocinador_email']);
        $empresa = addslashes($_POST['patrocinador_empresa']);
        $whatsapp = addslashes($_POST['patrocinador_whatsapp']);
    
    }


    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'd733f5cc9c02c2';
    $phpmailer->Password = '01b8e6b6fded26';


    //Formatação do email
    $phpmailer->isHTML(true);
    $phpmailer->Subject = 'Teste de email via gmail e PHPMailer';
    $phpmailer->Body = 'Nome: <strong>'.$nome.'</strong><br>'.
                        'Emial: <strong>'.$email.'</strong><br>'.
                        'Empresa: <strong>'.$empresa.'</strong><br>'.
                        'WhatsApp: <strong>'.$whatsapp.'</strong><br>';

    $phpmailer->AltBody = 'Chegou o emial TESTE do lirajoilson@gmail.com';

    //configurações do email
    $phpmailer->setFrom('lirajoilson@gmail.com'); //Email de onde esta saindo o email
    $phpmailer->addAddress('lirajoilson@gmail.com'); //Email que ira receber a mensagem

    if($phpmailer->send()){
        echo 'Email enviado com sucesso';
    }else{
        echo 'Email não enviado';
    }

} catch(Exception $e){
    echo "Erro ao enviar mensagem: {$phpmailer->ErrorInfo}";
}
?>