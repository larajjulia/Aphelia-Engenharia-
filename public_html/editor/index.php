<?php
if(!isset($_SESSION))
{
    session_start();
}
function login($senha, $user){
    $dotenv = parse_ini_file(".env");
    $verUser = $dotenv["USER"];
    $verSenha = $dotenv["SENHA"];
    if ($senha == $verSenha && $user == $verUser) {
            $_SESSION['Usuario'] = serialize($dotenv);
            return true;
        } else {
            return false;
        }
}

switch ($_POST) {
    //Caso a variavel seja nula mostrar tela de login
    case isset($_POST[null]):
        if ($_SERVER['REQUEST_URI']=="/editor/"){
            include_once "login.php";
        } else {
            header("location: ../editor/");
        }
        break;

    case isset($_POST["btnLogin"]):
        $dotenv = parse_ini_file(".env");
        if($_POST["txtLogin"] && $_POST["txtSenha"]){
            if (login($_POST["txtLogin"], $_POST["txtSenha"])) {
                include_once "interface.php";
            } else {
                include_once "../view/loginNRealizado.php";
            }
        } else {
            include_once "../view/loginNRealizado.php";
        }
        
    break;   

        case isset($_POST["btnLoginNRealizado"]):
            header("location: ../editor/");
        break;

        case isset($_POST["btnSairTotal"]):
            header("location: ../editor/");
            break;
}   
