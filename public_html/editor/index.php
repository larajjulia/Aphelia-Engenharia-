<?php
if (!isset($_SESSION)) {
    session_start();
}

function login($user, $senha) {
    $dotenv = parse_ini_file(".env");
    $verUser = $dotenv["USER"];
    $verSenha = $dotenv["SENHA"];
    
    if ($senha === $verSenha && $user === $verUser) {
        $_SESSION['Usuario'] = serialize($dotenv);
        return true;
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST["btnLogin"])) {
        if (!empty($_POST["txtLogin"]) && !empty($_POST["txtSenha"])) {
            $usuario = $_POST["txtLogin"];
            $senha = $_POST["txtSenha"];
            
            if (login($usuario, $senha)) {
                include_once "interface.php";
            } else {
                include_once "loginNRealizado.php";
            }
        } else {
            include_once "LoginNRealizado.php";
        }

    } elseif (isset($_POST["btnLoginNRealizado"])) {
        header("Location: ../editor/");
        exit;

    } elseif (isset($_POST["btnSairTotal"])) {
        session_destroy();
        header("Location: ../editor/");
        exit;
    }

} else {
    if ($_SERVER['REQUEST_URI'] === "/editor/") {
        include_once "login.php";
    } else {
        header("Location: ../editor/");
        exit;
    }
}
