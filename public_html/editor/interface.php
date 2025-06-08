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
    <link rel="stylesheet" href="../src/styles/interface.css">
    <link rel="stylesheet" href="../src/styles/popup.css">

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <div id="popup" class="popup-overlay">
        <div class="popup-content">
            <h3>
                Tem certeza que deseja excluir?
            </h3>
            <form action="" method="get">
                <?php
                    echo '<input type="hidden" name=".$.">';
                ?>
                <button id="confirmbtn">Sim</button>
                <button id="cancelbtn">Não</button>
            </form>
    
        </div>
    </div>

    <header id="admin">
        <nav id="navbar2">
            <img src="imagens/logo_completa.png" alt="Logo da empresa Aphélia Engenharia" id="nav_logo" width="100" height="63">
            
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Pesquisar...">
                <button class="search-button">Buscar</button>
            </div>
        </nav>
    </header>

    <h1 class="section-title">
        Publique e Edite,
    </h1>
    <h1 class="section-subtitle">
       Crie ou reveja suas postagens aqui!
    </h1>

    <?php
        include_once "../control/ConectarDB.php";
        $dotenv = parse_ini_file(".env");

        $conn = new ConectarDB($dotenv);

        $count = $conn->getCountDB(); // Conta os comentários
        $paginas = ceil($count / 10); // Calcula o total de páginas necessárias
        $abaAtual = isset($_GET['abaAtual']) ? (int)$_GET['abaAtual'] : 1;
        // Validação para garantir que abaAtual está dentro do intervalo
        if ($abaAtual <= 1) {
            $abaAtual = 1;
        } elseif ($abaAtual > $paginas) {
            $abaAtual = $paginas;
        }

        $offset = ($abaAtual - 1) * 10;
        $sql = "SELECT * FROM posts LIMIT 10 OFFSET $offset;";
        $posts = $conn ->consultarSql($sql); 
                   
        if ($posts) {

            foreach ($posts as $post) {
                echo "<div class='coment' id=" . $post['title'] . ">ID:". $post['title'] . "<br>";
                echo $post['Title_coment'] . "<br>";
                echo $post['Who_coment'] . "<br>";
                echo $post['Content_coment'] . "<br>";
                echo $post['Date_coment'] . "<br>";
                echo "
                     <button onclick='excluirComentModal(" . $post['title'] . ")'>Excluir</button>
                    <button onclick='atualizarComentModal(" . $post['title'] . ")'>Atualizar</button>
                  
                ";
                echo "</div>";

            }} else {
            echo "<h1>Nenhum comentário encontrado.</h1>";
        }
    ?>

    <ul style="display: flex; flex-direction: row; list-style-type: none; padding: 0;">
        <?php
            for ($i = 1; $i <= $paginas; $i++) {
                $active = $i == $abaAtual ? 'style="font-weight: bold;"' : '';
                echo "<li><a href='?abaAtual=$i' $active>" . $i . "</a></li>";
            }
        ?>
    </ul>

    <div class="work">
        <img src="imagens/work1.jpg" alt="Gerador de Energia" class="work-image" width="230" height="221">
        <div>
            <h3 class="work-title">Projeto Padrão de Entrada</h3>
            <span class="work-description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Suspendisse in tellus quis nunc consequat ultricies.
            </span>
            <div class="edition-ask">
                <a href="editor/index.html" style="text-decoration: none;" id="editar">
                    <button class="btn-default">
                        Editar
                    </button>
                </a>
                <button class="btn-default" id="delete">
                    Excluir
                </button>
            </div>
        </div>
        
    </div>



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

    <script src="src/javascript/script.js"></script>
    <script src="src/javascript/popup.js"></script>
    <script>    
            function excluirComentModal(title){
                  var result = confirm("Você deseja *EXCLUIR* o Post?");
                if(result){
               window.location.href = "excluido.php?title="+ title;   
             }
            }
            function atualizarComentModal(title){
                 var result = confirm("Você deseja *ATUALIZAR* o Post?");
                if(result){
               window.location.href = "atualizar.php?title="+ title;   
             }
            }
            </script>
</body>
</html>