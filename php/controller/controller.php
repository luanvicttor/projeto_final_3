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

    // Função para validar o login
    public function validarLogin($login_usuario, $senha_usuario) {
        $query = "SELECT * FROM usuarios WHERE login_usuario = :login_usuario";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":login_usuario", $login_usuario);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($usuario && sha1($senha_usuario) === $usuario['senha_usuario']) {
            header('Location: tela_home.php');  // Redireciona para a tela principal
            exit();
        } else {
            // Login inválido
            return false;
        }
    }

    // Função para registrar um novo usuário
    public function registrarUsusario($nome_usuario, $login_usuario, $senha_usuario) {
        try {
            $query = "INSERT INTO usuarios (nome_usuario, login_usuario, senha_usuario) VALUES (:nome_usuario, :login_usuario, :senha_usuario)";
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':nome_usuario', $nome_usuario);
            $stmt->bindParam(':login_usuario', $login_usuario);
            $stmt->bindParam(':senha_usuario', $senha_usuario);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            return false;
        }
    }
    
}