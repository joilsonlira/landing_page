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
        // $mailer -> SMTPDebug = SMTP::DEBUG_SERVER;
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

    }
    catch(Exception $e){

        $mensagem_envio = 'Erro ao enviar';

    }


    
?>
<head>

<!--META-TAGS-->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--CSS-->
<link rel="stylesheet" href="./styles/fonts.css">
<link rel="stylesheet" href="./styles/index.css">
<link rel="stylesheet" href="./styles/index_media.css">

<!--FAVICON-->
<link rel="icon" type="image/x-icon" href="./components/images/facvicon.png">
<title>Seminário técnico da Abiogas 2022 </title>

</head>
<header id="main_header"><!--cabeçalho principal da pagina-->
            <nav id="main_nav"><!-- container para o Menu principal de navegação-->
                <section class="logo">
                    <img src="./components/images/logo_refeito.png" alt="logo do seminario ABiogas 2022">
                </section>
                <ul class="nav_menu"><!--Menu principal-->
                    <li class="nav_item"><a href="#inscription" class="nav_link">Inscreva-se</a></li>
                    <li class="nav_item"><a href="#call" class="nav_link">Quem somos</a></li>
                    <li class="nav_item"><a href="#schedule" class="nav_link">Programação</a></li>
                    <li class="nav_item"><a href="#secondary_slide_container" class="nav_link">Patrocinadores</a></li>
                    <li class="nav_item"><a href="#main_footer" class="nav_link" onclick="open_modal('modal_contato')">Fale conosco</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </header>
<section id="secondary_slide_container">
            <section class="patrocinadores">
                <header class="edicoes_title">
                    <div class="icon">
                        <img src="./components/images/icon_header.png" alt="">
                    </div> 
                    <h2>PATROCINADORES</h2>
                </header>
                <div class="patrocinadores_container">
                    <div class="patrocinador_content">
                        <h2>Por que patrocinar?</h2>
                        <ul>
                            <li>
                                <span>Contato direto com empresas</span> e empresários com grande poder de decição.
                            </li>
                            <li>     
                                <span>Possibilidade de visibilidade para sua empresa,</span> mediante apresentação/palestra durante a
                                programação do evento (dependo da cota).
                            </li>
                            <li>
                                <span>Entrega de folders e materiais</span> promocionais para os participantes.
                            </li>
                            <li>
                                <span>Stand para networking.</span>
                            </li>
                            <li>
                                <span>Área do patrocinador</span> no site do evento (link direcionando para o seu site, ou fale conosco).
                            </li>
                            <li>
                                <span>Mailing dos participantes</span> do evento (seguimos as normas da LGPD).
                            </li>
                        </ul>
                        <button id="myBtn">Quero ser um patrocinador</button>
                    </div>
                </div>

                <!--Modal -->
                <div id="modal_contato" class="modal" style="display: flex;">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <form class="modal_form">
                            <?php
                                echo "<h2>".$mensagem_envio."</h2>";
                            ?>
                            <input type="button" value="OK" onclick="close_modal('modal_contato')">
                        </form>
                    </div>
                </div>
            </section>
        </section><!--sessão destinada a slide automatico-->

        <footer id="main_footer">
            <section class="abiogas">
                <div class="logo_footer">
                    <a href="https://abiogas.org.br/" target="_blank"><img src="./components/images/logo_abiogas_site.png" alt=""></a>
                </div>
            </section>
                <button id="btn_contato" onclick="open_modal('modal_contato')">Fale conosco</button>
            </div>
            <ul class="social_container">
                <li class="social"><a href="https://www.instagram.com/abiogas/" target="_blank"><img src="./components/images/Instagram - Negative.svg" alt=""></a></li>
                <li class="social"><a href="https://www.facebook.com/abiogas" target="_blank"><img src="./components/images/Facebook - Negative.svg" alt=""></a></li>
                <li class="social"><a href="https://www.linkedin.com/company/abiogas" target="_blank"><img src="./components/images/LinkedIn - Negative.svg" alt=""></a></li>
            </ul>
        </footer>
    </main>
    <script>
        setTimeout(function() {
        window.location.href = "http://localhost:8000/";
        }, 1000);</script>
    <script src="./scripts/js/index.js"></script>

</body>