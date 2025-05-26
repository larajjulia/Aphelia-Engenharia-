<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Aphélia Page</title>
    
    <link rel="stylesheet" href="../src/styles/styles.css">
    <link rel="stylesheet" href="../serviços/ppe.html">
    <link rel="stylesheet" href="../serviços/ppema.html">
    <link rel="stylesheet" href="../serviços/sfo.html">
    <link rel="stylesheet" href="../serviços/lpe.html">
    <link rel="stylesheet" href="../serviços/pe.html">
    <link rel="stylesheet" href="../serviços/ce.html">
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
                    <a href="blog.html">Blog</a>
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
                    <a href="blog.html">Blog</a>
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
        <?php
            require_once '../model/Post.php';
            require_once '../control/ConectarDB.php';
            $dotenv = parse_ini_file(".env");

            $conn = new ConectarDB($dotenv);

            $post  = new Post("", "", "", "", "",  "");
            $post ->setTitle($_GET['title']);
            $post ->setText($_GET['text']);
            $post ->setDatep(null);   
            $post ->setPhoto($_GET['photo']);
            $post ->setAbstract($_GET['setAbstract']);
            $post ->setCover(null);

        $conn->abrirConexao();
        $sql = "";

        var_dump($sql);
        $conn->execQuery($sql);
        $conn->fecharConn();
    ?>
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

    <script src="../src/javascript/script.js"></script>
    <script>
        window.onload = function() {
            setTimeout(function() {
                window.location.href = "../editor/"; 
        }, 0.001);
        }   
        
        </script>
</body>
</html>