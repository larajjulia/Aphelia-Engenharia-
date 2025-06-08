<?php
require_once "ConectarDB.php";

class Post {
    private $title;
    private $text;
    private $datep;
    private $photo;
    private $abstract;
    private $cover;
    private $conn;
    
    public function __construct($title=null, $text=null, $datep=null, $photo=null, $abstract=null, $cover=null) {
        $this->title = $title;
        $this->text = $text;
        $this->datep = $datep;
        $this->photo = $photo;
        $this->abstract = $abstract;
        $this->cover = $cover;
        
        // Inicializar a conexão ao criar o objeto
        $dotenv = parse_ini_file(".env");
        $this->conn = new ConectarDB($dotenv);
    }

    // Getters e Setters permanecem os mesmos
    public function getTitle() {
        return $this->title;
    }
    
    public function getText() {
        return $this->text;
    }
    
    public function getDatep() {
        return $this->datep;
    }
    
    public function getPhoto() {
        return $this->photo;
    }
    
    public function getAbstract() {
        return $this->abstract;
    }
    
    public function getCover() {
        return $this->cover;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setText($text) {
        $this->text = $text;
    }
    
    public function setDatep($datep) {
        $this->datep = $datep;
    }
    
    public function setPhoto($photo) {
        $this->photo = $photo;
    }
    
    public function setAbstract($abstract) {
        $this->abstract = $abstract;
    }
    
    public function setCover($cover) {
        $this->cover = $cover;
    }
    
    // Métodos modificados para usar a mesma conexão
    public function listarDB() {
        try {
            $this->conn->abrirConexao();
            $sql = "SELECT * FROM `posts`";
            $dados = $this->conn->consultarSql($sql);
            return $dados;
        } catch (Exception $e) {
            error_log("Erro ao listar posts: " . $e->getMessage());
            return [];
        } finally {
            $this->conn->fecharConexao();
        }
    }
    
    public function postDB($title) {
        try {
            $this->conn->abrirConexao();
            // Usando prepared statement para prevenir SQL injection
            $sql = "SELECT FROM `posts` WHERE `title` = ?";
            $dados = $this->conn->execQueryPrep($sql, [$title]);
            return $dados;
        } catch (Exception $e) {
            error_log("Erro ao excluir post: " . $e->getMessage());
            return [];
        } finally {
            $this->conn->fecharConexao();
        }
    }

    public function excluirDB($title) {
        try {
            $this->conn->abrirConexao();
            // Usando prepared statement para prevenir SQL injection
            $sql = "DELETE FROM `posts` WHERE `title` = ?";
            $this->conn->execQueryPrep($sql, [$title]);
            return true;
        } catch (Exception $e) {
            error_log("Erro ao excluir post: " . $e->getMessage());
            return false;
        } finally {
            $this->conn->fecharConexao();
        }
    }
    
    // Método adicional para salvar um post
    public function salvarDB() {
        try {
            $this->conn->abrirConexao();
            $sql = "INSERT INTO `posts` (`title`, `text`, `datep`, `photo`, `abstract`, `cover`) 
                   VALUES (?, ?, ?, ?, ?, ?)";
            $params = [
                $this->title,
                $this->text,
                $this->datep,
                $this->photo,
                $this->abstract,
                $this->cover
            ];
            $this->conn->execQueryPrep($sql, $params);
            return true;
        } catch (Exception $e) {
            error_log("Erro ao salvar post: " . $e->getMessage());
            return false;
        } finally {
            $this->conn->fecharConexao();
        }
    }
}