<?php
    require_once('vendor/autoload.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $destinatario = 'joilson.lira@live.com'; //para onde será enviado

    $mensagem_envio = 'Enviado com sucesso';

    $nome = $_POST['nome_contato'];
    $email = $_POST['email_contato'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem_contato'];

    $mailer = new PHPMailer(true); //para habilitar o despaaro de exeptions

    $meu_Host = 'smtp.ethereal.email';//host do servidor de email
    $meu_username = 'guy.willms6@ethereal.email';//usuario do servidor de email
    $meu_password = '7M6yfdzUB5X2cZhr6s';//senha do servidor de email
    try{
        $mailer -> SMTPDebug = SMTP::DEBUG_SERVER;
        $mailer -> isSMTP(); //para enviar via função nativa do php utilize o $mailer -> isMail()
        
        //para se autenticar no SMTP
        $mailer -> Host = $meu_Host;
        $mailer -> SMTPAuth = true;
        $mailer -> Username = $meu_username;
        $mailer -> Password = $meu_password;
        $mailer -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mailer -> Port = 587;

        //informações do remetente
        $mailer -> setFrom($meu_username, 'Joilson');
        $mailer -> addReplyTo($meu_username, 'Joilson');

        //informações do destinatario
        $mailer -> addAddress($destinatario);

        //configurações do email
        $mailer -> isHTML(true);
        $mailer -> Subject = utf8_decode($assunto);
        $mailer -> Body = utf8_decode("Nome: <strong>".$nome."</strong></br> E-mail: <strong>" .$email."</strong></br> <strong>Mensagem:</strong></br>" .$mensagem);

        //Envia o email
        $mailer -> send();

        echo $mensagem_envio;
    }
    catch(Exception $e){

        echo 'Erro ao enviar'. $e -> getMessage();

    }

?>