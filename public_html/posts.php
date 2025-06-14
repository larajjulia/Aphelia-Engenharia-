<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laudos e Prontuários Elétricos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../src/styles/styles.css">
    <link rel="stylesheet" href="../index.html">
    <link rel="stylesheet" href="src/styles/post.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <header>
        <nav id="navbar">
            <img src="../imagens/logo_completa.png" alt="Logo da empresa Aphélia Engenharia" id="nav_logo" width="100" height="63">
            
            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="../index.html#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="../index.html#services">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="../index.html#enterprise">Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="../blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="../index.html#testimonials">Avaliações</a>
                </li>
                <li class="nav-item">
                    <a href="../form.html">Contato</a>
                </li>            
            </ul>
            
            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>

            <button class="btn-default">
                <a href="../form.html">Faça um Orçamento</a>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="../index.html#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="../index.html#services">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="../index.html#enterprise">Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="../blog.html">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="../index.html#testimonials">Avaliações</a>
                </li>
                <li class="nav-item">
                    <a href="../form.html">Contato</a>
                </li>            
            </ul>

            <button class="btn-default">
                <a href="../form.html">Faça um Orçamento</a>
            </button>
        </div>
    </header>
    <main>
        <?php

            require_once "Post.php";
            $post = new Post();
            $dados = $post->postDB($_POST['title']);
            
            if(empty($dados)){
               echo '<div class="no-posts">Nenhum post encontrado.</div>';
            } else {
                    echo '<div class="banner">
                        <img src="../imagens/cehtml/meetings.jpg" alt="pessoas reunidas em uma mesa com seus notebooks" width="100%" height="200px">
                    </div> 

                    <h2 class="section-subtitle">
                        '.$dados['title'].'
                    </h2>
                    <p id="ce_description">
                        '.$dados['abstract'].'
                    </p>

                    <p id="ce_text">
                        '.$dados['text'].'
                    </p>';
                
            }
        ?>
    </main>
    

    <div id="contact_content">
        <h2 class="section-subtitle">Orçamento via WhatsApp</h2>
        <br>
        <p id="wpp_contact">
            Fale com um Engenheiro Eletricista agora e faça seu orçamento!
        </p>
        <br>
        <a href="https://wa.me//5511965069066?text=Olá!%20Tenho%20interesse%20em%20realizar%20um%20orçamento." target="_blank" id="contact_item" style="text-decoration: none;">
            <button class="btn-default">Mensagem Aqui</button>
        </a>
    </div>

    <footer>
        <img src="../imagens/wave.svg" alt="onda com cor amarela apresentando as redes sociais de contato">

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
        <a href="https://wa.me//5511965069066?text=Olá!%20Tenho%20interesse%20em%20obter%20um%20laudo%20e/ou%20prontuário%20elétrico." target="_blank">
            <img src="../imagens/whatsapp.png" width="80" alt="Fale conosco pelo WhatsApp">
        </a>
    </aside>

    <script src="../src/javascript/script.js"></script>
</body>
</html>