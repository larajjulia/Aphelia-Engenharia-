<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once '../model/Post.php';
require_once '../control/ConetarDB.php';

$dotenv = parse_ini_file(".env");

$conn = new ConectarDB($dotenv);

$post = new Post("", "", "", "", "",  "");
$post->setTitle($_GET['ID_coment']);

$conn->abrirConexao();
$sql = "";

var_dump($sql);
$conn->execQuery($sql);
$conn->fecharConn();
?>
    <script>
        window.onload = function() {
            setTimeout(function() {
                window.location.href = "index.php"; 
            }, 0.01);
        };</script>
</body>
</html>