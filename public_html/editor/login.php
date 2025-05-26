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
    <link rel="stylesheet" href="../src/styles/login.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <header id="admin">
        <nav id="navbar_login">
            <img src="../imagens/logo_completa.png" alt="Logo da empresa Aphélia Engenharia" id="nav_logo" width="100" height="63">
            
            <h1 class="title_login">
                Página de Administrador
            </h1>
        </nav>
    </header>
    <main>
        <div id="login_content">
            <img src="../imagens/do-utilizador (1).png" alt="" width="100px" height="100px">

            <h1 class="title_login">
                LOGIN
            </h1>

            <form action="" id="login_form" target="_self" method="post">
                <label for="" class="login_label">Nome de Usuário:</label>
                <input type="text" name="user" placeholder="Digite o nome de usuário aqui" class="login_input" required>
                <label for="" class="login_label">Senha:</label>
                <input type="password" name="password" placeholder="Digite sua senha aqui" class="login_input" required>
                <button class="btn-default" type="submit" name="btnLogin">Entrar</button>
            </form>
        </div>
    </main>

    <script src="../src/javascript/script.js"></script>
    <script src="../src/javascript/popup.js"></script>
</body>
</html>