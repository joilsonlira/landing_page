<!DOCTYPE html>
<html lang="pt-br">
<head>

    <!--META-TAGS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="./styles/fonts.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/index_media.css">

    <script src="./scripts/js/index.js"></script>

    <!--FAVICON-->
    <link rel="icon" type="image/x-icon" href="./components/images/facvicon.png">
    <title>Seminário técnico da Abiogas 2022 </title>

</head>
<body>
    <main>
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

        <section id="inscription">
            <div class="logo_inscription">
                <img src="./components/images/logo_refeito.png" alt="">
            </div>
            <article class="inscription_detail"><!--sessão destinada a descrição do evento com um botão de inscrição-->
                <h2>Seminário técnico da <span>ABiogás <br> 2022 </span></h2>
                <h3><span class="tema">Tema:</span> BIOGÁS NA ROTA DE ZERO EMISSÕES</h3>
                <p>A A<span>B</span>iogás organiza, anualmente, eventos focados no desenvolvimento do mercado de biogás. Com o objetivo de abordar as principais demandas do setor. ada evento aborda um assunto específico atual e reúne os principais especialistas do setor no Brasil e no exterior para uma troca de conhecimento e oportunidades de negócios.</p>
                <button class="btn_inscription">Inscreva-se</button>
            </article>
        </section>

        <sectiom id="call">
            <header class="edicoes_title">
                <div class="icon">
                    <img src="./components/images/icon_header.png" alt="">
                </div> 
                <h2>SOBRE A ABIOGÁS</h2>
            </header><!--FIM HEADER-->
            <div class="mobile">
                <p><span>A Associação Brasileira do Biogás</span> (<span>ABiogás</span>), que reúne <span>mais de 110 associados integrados a cadeia de valor do biogás</span> e biometano, tem como principal objetivo trabalhar em prol da inserção e consolidação desse biocombustível na matriz energética brasileira por meio do trabalho junto às instituições que fazem a política, regulação e o desenvolvimento de mercado do setor.</p>
            </div>
            <div class="slider">
                <div class="slides">
                    <!--inicio radio buttons-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <!--fim radio buttons-->

                    <!--inicio dos conteudo dos slides-->
                    <div class="call_frame first">
                        <p><span>A Associação Brasileira do Biogás</span> (<span>ABiogás</span>), que reúne <span>mais de 110 associados integrados a cadeia de valor do biogás</span> e biometano, tem como principal objetivo trabalhar em prol da inserção e consolidação desse biocombustível na matriz energética brasileira por meio do trabalho junto às instituições que fazem a política, regulação e o desenvolvimento de mercado do setor.</p>
                    </div>
                    <div class="call_frame">
                        <p><span>A ABiogás</span> conta com empresas associadas que representam todos os setores da cadeia de produção, aproveitamento e beneficiamento do segmento de biogás. Com responsabilidade na atuação junto aos órgãos competentes e o compromisso com a divulgação de informações relevantes, a ABiogás, <span>seus associados e parceiros visam sempre alcançar os melhores e mais transformadores resultados para a sociedade brasileira</span>.</p>
                    </div>
                    <!--Fim dos conteudos dos slides-->

                    <!--inicio da navegação-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                    </div>
                    <!--fim da navegação-->
                </div>

                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                </div>
            </div><!--FIM SLIDE-->
        </sectiom><!--sessão para chamada de ação e acontecimentos-->

        <section id="information_container">
            <header class="edicoes_title">
                <div class="icon">
                    <img src="./components/images/icon_header.png" alt="">
                </div> 
                <h2>EDIÇÕES ANTERIORES</h2>
            </header>
            <article class="information">
                <section class="edicoes_anteriores">
                    <article class="frame_edicoes">
                        <header>
                            <h2>2019</h2>
                        </header>
                        <span class="inscritos">205 presentes</span>
                        <section class="edicoes_txt">
                            <p>número de participantes edição presencial (evento pago)</p>
                        </section>
                    </article>
                    <article class="frame_edicoes">
                        <header>
                            <h2>2020</h2>
                        </header>
                        <span class="inscritos">729 presentes</span>
                        <section class="edicoes_txt">
                            <p>número de participantes edição online (Durante a pandemia, evento gratuito)</p>
                        </section>
                    </article>
                    <article class="frame_edicoes">
                        <header>
                            <h2>2021</h2>
                        </header>
                        <span class="inscritos">326 presentes</span>
                        <section class="edicoes_txt">
                            <p>número de participantes edição online (Durante a pandemia, evento gratuito)</p>
                        </section>
                    </article>
                </section>
            </article>
        </section>
        </section><!--sessão destinada a textos simples-->

        <section id="main_slide_container">
            <header class="edicoes_title">
                <div class="icon">
                    <img src="./components/images/icon_header.png" alt="">
                </div> 
                <h2>SEMINÁRIO TÉCNICO ABIOGÁS 2022</h2>
            </header>
            <div class="videos">
                <video src="" poster="./components/images/thumb.png"></video>
            </div>
        </section>
        <!--sessão destinada a slide com controle e (ou) de video-->

        <section id="schedule">
            <section class="text">
                <p>O Seminário Técnico ABiogás será realizado em São Paulo, no dia <span>30 DE JUNHO DE 2022</span>, das <span>9h às 18h</span>.</p>
                <p>Local: Espaço APAS - Lapa - São Paulo</p>

                <button class="btn_endereco"><a href="https://www.google.com/maps/place/APAS+-+Associa%C3%A7%C3%A3o+Paulista+de+Supermercados/@-23.533824,-46.713912,10z/data=!4m5!3m4!1s0x0:0x8212404881c7839!8m2!3d-23.5338238!4d-46.7139116?hl=pt-BR" target="_blank">R. Pio XI, 1200 - Alto da Lapa, São Paulo - SP, 05060-001</a></button>
                <!--Sugestões de hoteis-->
                <div class="hotel_container">
                    

                    <header class="sugestao_header">
                        <h3>Sugestão de hotéis</h3>
                    </header>
                    <section class="sugestao">
                        <ul class="sugestao_nav">
                            <a href="https://www.wzhoteljardins.com.br/" target="_blank" class="hotel">
                                <img src="./components/images/fi_map-pin.svg" alt="">
                                <li>
                                    WZ HOTEL JARDINS
                                </li>
                            </a>
                            <a href="https://www.wzhoteljardins.com.br/" target="_blank" class="hotel">
                                <img src="./components/images/fi_map-pin.svg" alt="">
                                <li>
                                    IBIS STYLES
                                </li>
                            </a>
                            <a href="https://www.wzhoteljardins.com.br/" target="_blank" class="hotel">
                                <img src="./components/images/fi_map-pin.svg" alt="">
                                <li>
                                    PANAMBY HOTEL SÃO PAULO
                                </li>
                            </a>
                        </ul>
                    </section>
                </div>

                <header class="edicoes_title">
                    <div class="icon">
                        <img src="./components/images/icon_header.png" alt="">
                    </div> 
                    <h2>PROGRAMAÇÃO</h2>
                </header>
                <p>Seminário Técnico 2022 - tema: <span>Biogás na rota de zero emissão</span></p>
            </section>
            <section class="event_container">
                <article class="event_article">
                    <header class="event_header">
                        <h3>9h-10h</h3>
                    </header>
                    <main class="event_content">
                        <p>Credenciamento + Welcome coffee</p>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>10h-10h30</h3>
                    </header>
                    <main class="event_content">
                        <p>Abertura</p>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>10h30-12h</h3>
                    </header>
                    <main class="event_content painel">
                        <p>Painel 1 - Critérios técnicos para a redução efetiva de emissões com o biogás</p>
                        <div class="palestrante">
                            <div class="palestrante_foto">
                                <img src="./components/images/empresario.jpg" alt="">
                            </div>
                            <div class="palestrante_info">
                                <h4 class="nome">Lorem ipsum dolor</h4>
                                <p class="palestrante_description">consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>12h-12h30</h3>
                    </header>
                    <main class="event_content">
                        <p>Mesa redonda temática</p>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>12h30-14h</h3>
                    </header>
                    <main class="event_content">
                        <p>Almoço</p>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>14h-15h30</h3>
                    </header>
                    <main class="event_content painel">
                        <p>Painel 2 - Critérios de sustentabilidade em certificações de biogás e biometano</p>
                        <div class="palestrante">
                            <div class="palestrante_foto">
                                <img src="./components/images/empresario.jpg" alt="">
                            </div>
                            <div class="palestrante_info">
                                <h4 class="nome">Lorem ipsum dolor</h4>
                                <p class="palestrante_description">consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>15h30</h3>
                    </header>
                    <main class="event_content">
                        <p>Mesa redonda temática</p>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>16h00 -16h30</h3>
                    </header>
                    <main class="event_content">
                        <p>Coffee break</p>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>16h30-17h30</h3>
                    </header>
                    <main class="event_content painel">
                        <p>Painel 3 - Biogás em pequena e média escala</p>
                        <div class="palestrante">
                            <div class="palestrante_foto">
                                <img src="./components/images/empresario.jpg" alt="">
                            </div>
                            <div class="palestrante_info">
                                <h4 class="nome">Lorem ipsum dolor</h4>
                                <p class="palestrante_description">consectetur adipiscing elit</p>
                            </div>
                        </div>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>17h30-18h</h3>
                    </header>
                    <main class="event_content">
                        <p>Encerramento</p>
                    </main>
                </article>
                <article class="event_article">
                    <header class="event_header">
                        <h3>18h</h3>
                    </header>
                    <main class="event_content">
                        <p>Coquetel</p>
                    </main>
                </article>
            </section>
        </section><!--sessão destinada ao cronograma-->

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
                        <button id="myBtn" onclick="open_modal('modal_patrocinar')">Quero ser um patrocinador</button>
                    </div>
                </div>

                <!--Modal -->
                <div id="modal_patrocinar" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <form class="modal_form">
                            <h2>Quero ser um patrocinador</h2>
                            <input type="text" name="nome_patrocinador" placeholder="Nome">
                            <input type="text" name="empresa_patrocinador" placeholder="Empresa">
                            <input type="text" name="email_patrocinador" placeholder="E-mail">
                            <input type="text" name="whatsapp_patrocinador" placeholder="WhatsApp">
                            <input type="submit"value="Enviar">
                        </form>
                    </div>
                </div>
                <div id="modal_contato" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <form class="modal_form" action="contato_mailer.php" method="POST">
                            <h2>Fale conosco</h2>
                            <input type="text" name="nome_contato" placeholder="Nome">
                            <input type="email" name="email_contato" placeholder="E-mail">
                            <input type="text" name="assunto" placeholder="Assunto">
                            <textarea name="mensagem_contato" placeholder="Mensagem"></textarea>
                            <input type="submit" value="Enviar">
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
    <script src="./scripts/js/index.js"></script>
</body>