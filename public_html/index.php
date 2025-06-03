<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Aphélia Page</title>
    
    <link rel="stylesheet" href="src/styles/styles.css">
    <link rel="stylesheet" href="serviços/ppe.html">
    <link rel="stylesheet" href="serviços/ppema.html">
    <link rel="stylesheet" href="serviços/sfo.html">
    <link rel="stylesheet" href="serviços/lpe.html">
    <link rel="stylesheet" href="serviços/pe.html">
    <link rel="stylesheet" href="serviços/ce.html">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <header>
        <nav id="navbar">
            <img src="imagens/logo_completa.png" alt="Logo da empresa Aphélia Engenharia" id="nav_logo" width="100" height="63">
            
            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#services">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#enterprise">Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
                <li class="nav-item">
                    <a href="form.html">Contato</a>
                </li>            
            </ul>
            
            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>

            <button class="btn-default">
                <a href="form.html">Faça um Orçamento</a>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#services">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#enterprise">Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
                <li class="nav-item">
                    <a href="form.html">Contato</a>
                </li>            
            </ul>

            <button class="btn-default">
                <a href="form.html">Faça um Orçamento</a>
            </button>
        </div>
    </header>

    <main id="content">
        <section id="home">
            <div class="shape"></div>
            <div id="cta">
                <h1 class="title">
                    Inovando e Criando Soluções 
                    <span>Inteligentes</span>
                </h1>

                <p class="description">
                    Com a Aphélia, cada projeto é uma promessa de Excelência Elétrica e Inovação.
                </p>

                <div id="cta_buttons">
                    <a href="#services" class="btn-default">Serviços</a>
                    <a href="https://wa.me//5511965069066?text=Olá!%20Tenho%20interesse%20em%20realizar%20um%20orçamento." target="_blank" id="phone-button">
                        <button class="btn-default">
                            <i class="fa-solid fa-phone"></i>
                        </button>
                        (11) 96506-9066
                    </a>
                </div>

                <div class="social-media-buttons">
                    <a href="https://www.linkedin.com/in/cesar-antonio-de-andrade-junior-110a0944/">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://www.instagram.com/cesar.engenheiroeletricista/">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100009349100620">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
            </div>
            <div id="banner">
                <img src="imagens/bannerzito.png" alt="Capacete de Engenheiros">
            </div>
        </section>

        <section id="services">
            <h2 class="section-title">Nossos Serviços</h2>
            <h3 class="section-subtitle">Padrão de Entrada, Projetos Elétricos, Consultoria e outros</h3>
            <div id="all-services">
                <div class="work">
                    <div class="work-bulb">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>

                    <img src="imagens/work1.jpg" alt="Gerador de Energia" class="work-image" width="230" height="221">
                    <h3 class="work-title">Projeto Padrão de Entrada</h3>
                    <span class="work-description">
                        O projeto elétrico padrão de entrada define como a energia da concessionária será ligada ao imóvel.
                    </span>
                    <div class="work-ask">
                        <a href="serviços/ppe.html" style="text-decoration: none;">
                            <button class="btn-default">
                                Saiba Mais
                            </button>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <div class="work-bulb">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>

                    <img src="imagens/work8.jpg" alt="Lâmpada com coloração amarelada ligada num ambiente escuro" class="work-image" width="230" height="221">
                    <h3 class="work-title">Projeto Padrão de Entrada de Média e Alta Tensão</h3>
                    <span class="work-description">
                        É o projeto que define como a energia em média ou alta tensão será ligada da concessionária ao imóvel.
                    </span>
                    <div class="work-ask">
                        <a href="serviços/ppema.html" style="text-decoration: none;">
                            <button class="btn-default">
                                Saiba Mais
                            </button>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <div class="work-bulb">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>

                    <img src="imagens/work2.jpg" alt="Gerador de Energia" class="work-image" width="230" height="221">
                    <h3 class="work-title">Sistemas Fotovoltáicos Ongrid</h3>
                    <span class="work-description">
                        Sistemas fotovoltaicos on-grid são conectados à rede elétrica e geram energia solar para consumo imediato. 
                    </span>
                    <div class="work-ask">
                        <a href="serviços/sfo.html" style="text-decoration: none;">
                            <button class="btn-default">
                                Saiba Mais
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div id="all-services">
                <div class="work">
                    <div class="work-bulb">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
    
                    <img src="imagens/work6.png" alt="Gerador de Energia" class="work-image" width="230" height="221">
                    <h3 class="work-title">Laudos e Prontuários Elétricos</h3>
                    <span class="work-description">
                        Laudos e prontuários elétricos são documentos técnicos que avaliam as condições das instalações elétricas.
                    </span>
                    <div class="work-ask">
                        <a href="serviços/lpe.html" style="text-decoration: none;">
                            <button class="btn-default">
                                Saiba Mais
                            </button>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <div class="work-bulb">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>

                    <img src="imagens/work3.jpg" alt="Gerador de Energia" class="work-image" width="230" height="221">
                    <h3 class="work-title">Projetos Elétricos</h3>
                    <span class="work-description">
                        Projetos elétricos são documentos que planejam e detalham a instalação elétrica de um imóvel.
                    </span>
                    <div class="work-ask">
                        <a href="serviços/pe.html" style="text-decoration: none;">
                            <button class="btn-default">
                                Saiba Mais
                            </button>
                        </a>
                    </div>
                </div>
                <div class="work">
                    <div class="work-bulb">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
    
                    <img src="imagens/work7.jpg" alt="Gerador de Energia" class="work-image" width="230" height="221">
                    <h3 class="work-title">Consultorias Elétricas</h3>
                    <span class="work-description">
                        Suporte para elaboração de propostas técnico comerciais com levantamento em planta e/ou vistorias técnicas.
                    </span>
                    <div class="work-ask">
                        <a href="serviços/ce.html" style="text-decoration: none;">
                            <button class="btn-default">
                                Saiba Mais
                            </button>
                        </a>
                    </div>
                </div>
            </div>   
        </section>

        <section id="enterprise">
            <div id="about_content">
                <h2 class="section-title">Sobre</h2>
                <h3 class="section-subtitle">Aphélia Engenharia</h3>

                <div id="about_text">
                    <p> A Aphélia Engenharia atua na Consultoria de Engenharia Elétrica para Novos Empreendimentos e também para a melhoria de 
                        Empreendimentos Existentes. Atuamos com a elaboração de Projetos Elétricos Customizados com o intuito de gerar alta 
                        performance nos Sistemas Elétricos de Baixa, Média e Alta Tensão de nossos clientes. <br><br>
                        Missão:  Servir nossos clientes trazendo sempre o melhor sistema elétrico dentro da realidade econômica de cada um, sempre 
                        com muita segurança, inteligência e inovação. <br><br>
                        Visão: Estar entre as 10 maiores empresas mais reconhecidas em qualidade técnica e confiabilidade na entrega de projetos 
                        e serviços elétricos até 2030. <br><br>
                        Valores: Entender as necessidades dos clientes para oferecer soluções personalizadas, com agilidade e eficiência. <br><br>
                        E-mail: engenharia@aphelia.com.br<br><br>
                        Celular: (11) 96506-9066
                    </p>
                </div>
            </div>
            <figure>
                <img src="imagens/junior.png" id="enterprise_dono" alt="Foto personalizada do dono da Aphélia, Cesar Júnior"/>
                <figcaption>
                    Cesar Junior, 32 anos.
                </figcaption>
            </figure>
        </section>

        <section id="questions">
            <div id="questions_content">
                <h3 class="section-subtitle">Dúvidas Frequentes</h3>

                <ul id="questions_list">
                    <li class="qlist_item">Quanto tempo demora o processo de ligação?
                        <div class="qlist_content">
                            <p>
                                Em torno de 30 dias.
                            </p>
                        </div>
                    </li>
                    <li class="qlist_item">Quais são os custos com a ligação?
                        <div class="qlist_content">
                            <p>
                                O valor é muito variável, precisa ser feito o levantamento técnico.
                            </p>
                        </div>
                    </li>
                    <li class="qlist_item">Quem é responsável pela instalação do medidor?
                        <div class="qlist_content">
                            <p>
                                A concecionária de energia.
                            </p>
                        </div>
                    </li>
                    <li class="qlist_item">O que fazer se houver interrupção de energia após a instalação?
                        <div class="qlist_content">
                            <p>
                                Contate a concessionária de energia para verificação.
                            </p>
                        </div>
                    </li>
                    <li class="qlist_item">Preciso adequar o padrão existente para instalação de Energia Solar?
                        <div class="qlist_content">
                            <p>
                                Sim, é preciso trocar o medidor convencional por um bidirecional. 
                                Em alguns casos é necessário a troca do padrão existente para um 
                                mais novo e com capacidade maior.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="testimonials">
            <img src="imagens/testimonials.jpg" id="testimonials_balao" alt="Balão que simula uma fala">

            <div id="testimonials_content">
                <h2 class="section-title">Depoimentos</h2>
                <h3 class="section-subtitle">O que falam sobre nós</h3>

                <div id="feedbacks">
                    <div class="feedback">
                        <img src="imagens/testim1.png" class="feedback-avatar" alt="Foto de mulher parda, cabelos lisos e sorriso largo no rosto">
                        <div class="feedback-content">
                            <p>
                                Aline Lemos
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                "Projetos rápidos e suporte sempre nas informações 
                                necessárias para andamento da obra. Atendimento excelente!"
                            </p>
                        </div>
                    </div>
                    <div class="feedback">
                        <img src="imagens/testim2.png" class="feedback-avatar" alt="Foto de homem branco de meia idade com sorriso largo no rosto">
                        <div class="feedback-content">
                            <p>
                                Carlos Fonseca
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                "Contratei o serviço de projeto de padrão de entrada e 
                                ART para liberação na concessionária de energia. Gostamos do atendimento. 
                                Recomendo."
                            </p>
                        </div>
                    </div>
                    <div class="feedback">
                        <img src="imagens/testim3.png" class="feedback-avatar" alt="Foto de homem branco com sorriso contido no rosto">
                        <div class="feedback-content">
                            <p>
                                Jefferson Gomes
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p>
                                "Contratamos a Aphélia para elaboração de projetos elétricos e 
                                aprovação da concessionária de energia. O projeto foi aprovado e 
                                nossa instalação esta 100% Recomendo!"
                            </p>
                        </div>
                    </div>
                </div>

                <button class="btn-default">
                    <a href="https://www.google.com/search?client=opera-gx&q=aph%C3%A9lia+engenharia&sourceid=opera&ie=UTF-8&oe=UTF-8#">Ver mais avaliações</a>
                </button>
            </div>
        </section>
    </main>

    <footer>
        <img src="imagens/wave.svg" alt="">

        <div id="footer_items">
            <span id="copyright">
                &copy 2025 Lara Julia
            </span>

            <div class="social-media-buttons">
                <a href="">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>
    </footer>

    <aside class="whats">
        <a href="https://wa.me//5511965069066?text=Olá!%20Tenho%20interesse%20em%20realizar%20um%20orçamento." target="_blank">
            <img src="imagens/whatsapp.png" width="80" alt="Fale conosco pelo WhatsApp">
        </a>
    </aside>

    <script src="src/javascript/script.js"></script>
</body>
</html>