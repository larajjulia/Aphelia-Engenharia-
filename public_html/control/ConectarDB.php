<?php
class ConectarDB {
    private $db;
    private $db_host;
    private $db_user;
    private $db_password;
    private $port;
    private $conexao;
    
    public function __construct($dotenv) {
        // Validação das variáveis de ambiente
        $requiredKeys = ['DB', 'DB_HOST', 'DB_USER', 'DB_PASSWORD'];
        foreach ($requiredKeys as $key) {
            if (!isset($dotenv[$key])) {
                throw new Exception("Erro: Variável de ambiente $key não definida");
            }
        }
        
        $this->db = $dotenv["DB"];
        $this->db_host = $dotenv["DB_HOST"];
        $this->db_user = $dotenv["DB_USER"];
        $this->db_password = $dotenv["DB_PASSWORD"];
        $this->port = isset($dotenv["DB_PORT"]) ? $dotenv["DB_PORT"] : 3306;
        $this->conexao = null;
    }

    public function setConexao($conexao) {
        $this->conexao = $conexao;
    }

    public function abrirConexao() {
        try {
            // Se já existe uma conexão, não precisa conectar novamente
            if ($this->conexao !== null) {
                return true;
            }
            
            $dsn = "mysql:host={$this->db_host};port={$this->port};dbname={$this->db}";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_TIMEOUT => 15, // Timeout maior para o InfinityFree
                PDO::ATTR_PERSISTENT => true // Conexão persistente pode ajudar
            ];
            
            $this->conexao = new PDO($dsn, $this->db_user, $this->db_password, $options);
            $this->conexao->exec("SET NAMES 'utf8'");
            return true;
        } catch (PDOException $e) {
            error_log("Erro na conexão PDO: " . $e->getMessage());
            throw new Exception("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }

    public function isConectado() {
        return $this->conexao !== null;
    }

    public function consultarSql($sql, $params = []) {
        try {
            // Se não estiver conectado, tenta conectar
            if (!$this->isConectado()) {
                $this->abrirConexao();
            }
            
            if (empty($params)) {
                $stmt = $this->conexao->query($sql);
            } else {
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute($params);
            }
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erro na consulta SQL: " . $e->getMessage());
            throw new Exception("Erro ao executar consulta: " . $e->getMessage());
        }
    }

    public function execQuery($sql) {
        try {
            // Se não estiver conectado, tenta conectar
            if (!$this->isConectado()) {
                $this->abrirConexao();
            }
            
            return $this->conexao->exec($sql);
        } catch (PDOException $e) {
            error_log("Erro ao executar SQL: " . $e->getMessage());
            throw new Exception("Erro ao executar comando: " . $e->getMessage());
        }
    }
    
    // Novo método para executar queries com prepared statements
    public function execQueryPrep($sql, $params = []) {
        try {
            // Se não estiver conectado, tenta conectar
            if (!$this->isConectado()) {
                $this->abrirConexao();
            }
            
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            error_log("Erro ao executar SQL preparado: " . $e->getMessage());
            throw new Exception("Erro ao executar comando: " . $e->getMessage());
        }
    }

    public function fecharConexao() {
        $this->conexao = null;
    }
    
    // Método legado para compatibilidade com seu código
    public function fecharConn() {
        $this->fecharConexao();
    }
    
    public function getCountDB() {
        $sql = "SELECT COUNT(*) as total FROM comentarios WHERE `verifier` = 0";
        $result = $this->consultarSql($sql);
        return isset($result[0]['total']) ? $result[0]['total'] : 0;
    }
}