<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Aphélia Blog</title>

    <link rel="stylesheet" href="src/styles/styles.css">
    <link rel="stylesheet" href="serviços/ppe.html">
    <link rel="stylesheet" href="serviços/ppema.html">
    <link rel="stylesheet" href="serviços/sfo.html">
    <link rel="stylesheet" href="serviços/lpe.html">
    <link rel="stylesheet" href="serviços/pe.html">
    <link rel="stylesheet" href="serviços/ce.html">
    <link rel="stylesheet" href="src/styles/blog.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <header>
        <nav id="navbar">
            <img src="imagens/logo_completa.png" alt="Logo da empresa Aphélia Engenharia" id="nav_logo" width="100" height="63">
            
            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="index.php#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#services">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#enterprise">Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#testimonials">Avaliações</a>
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
                    <a href="index.php#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#services">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#enterprise">Empresa</a>
                </li>
                <li class="nav-item">
                    <a href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="index.php#testimonials">Avaliações</a>
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
    <main>
        <section id="services">
            <h2 class="section-title">Blog da Aphélia Engenharia</h2>
            <h3 class="section-subtitle">Veja as novas publicações!</h3>
            <?php
require_once "./control/Post.php";

try {
    // Inicializa a classe Post
    $post = new Post();
    
    // Obtém os dados do banco
    $dados = $post->listarDB();
    
    // Verifica se há posts para exibir
    if (empty($dados)) {
        echo '<div class="no-posts">Nenhum post encontrado.</div>';
    } else {
        // Loop pelos posts encontrados
        foreach ($dados as $linha) {
            // Corrige a URL para o post específico (estava incorreta - $linha[''])
            $url = "./post.php?title=" . urlencode($linha["title"]);
            
            // Sanitiza as saídas para prevenir XSS
            $titulo = htmlspecialchars($linha['title']);
            $abstract = htmlspecialchars($linha['abstract']);
            $coverImage = htmlspecialchars($linha['cover']);
            
            // Adiciona verificação se a imagem existe
            $imageSrc = !empty($coverImage) ? $coverImage : "./images/placeholder.jpg";
            
            echo '<div class="work">
                <img src="'. $imageSrc . '" alt="'. $titulo .'" class="work-image" width="230" height="221">
                <div>
                    <h3 class="work-title">'. $titulo . '</h3>
                    <span class="work-description">'. $abstract .'</span>
                    <div class="work-ask">
                        <a href="'. $url .'" style="text-decoration: none;">
                            <button class="btn-default">
                                Saiba Mais
                            </button>
                        </a>
                    </div>
                </div>
            </div>';
        }
    }
} catch (Exception $e) {
    // Tratamento de erro amigável para o usuário
    echo '<div class="error-message">
        <p>Não foi possível carregar os posts neste momento. Por favor, tente novamente mais tarde.</p>
    </div>';
    
    // Registro do erro para debug (não visível ao usuário)
    error_log("Erro ao listar posts no blog.php: " . $e->getMessage());
}
?>
            
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