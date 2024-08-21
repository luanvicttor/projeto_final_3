<?php

class Conexao {
    private $conexao = null;

    public function __construct() {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=bd_biblioteca;port=3306', 'root', '');
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
    }

    public function getConexao() {
        return $this->conexao;
    }
}

class ControllerUser {
    private $conn;

    public function __construct($db) {
        $this->conn = $db->getConexao();  
    }

    public function validateLogin($login_usuario, $senha_usuario) {
        $query = "SELECT * FROM usuarios WHERE login_usuario = :login_usuario";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":login_usuario", $login_usuario);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($usuario && sha1($senha_usuario) === $usuario['senha_usuario']) {

            // Login válido
            return $usuario;
        } else {
            // Login inválido
            return false;
        }
    }
    
}