<?php

class ControllerUser {

    private $conn;

    public function __construct($db) {
        $this->conn = $db;  
    }
 
    // Método para criar um novo usuário
    public function create($nome_usuario, $login_usuario, $senha_usuario) {
        $query = "INSERT INTO usuarios (nome_usuario, login_usuario, senha_usuario) VALUES (:nome_usuario, :login_usuario, :senha_usuario)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome_usuario", $nome_usuario);
        $stmt->bindParam(":login_usuario", $login_usuario);
        $stmt->bindParam(":senha_usuario", sha1($senha_usuario));

        if ($stmt->execute()) {
            return $this->conn->lastInsertId();
        }

        return false;
    }

    // Método para obter todos os usuários
    public function read() {
        $query = "SELECT * FROM usuarios";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obter um único usuário por ID
    public function readOne($id_usuario) {
        $query = "SELECT * FROM usuarios WHERE id_usuario = :id_usuario";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_usuario", $id_usuario);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para atualizar um usuário
    public function update($id_usuario, $nome_usuario, $login_usuario, $senha_usuario) {
        $query = "UPDATE usuarios SET nome_usuario = :nome_usuario, login_usuario = :login_usuario, senha_usuario = :senha_usuario WHERE id_usuario = :id_usuario";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_usuario", $id_usuario);
        $stmt->bindParam(":nome_usuario", $nome_usuario);
        $stmt->bindParam(":login_usuario", $login_usuario);
        $stmt->bindParam(":senha_usuario", password_hash($senha_usuario, PASSWORD_BCRYPT));

        return $stmt->execute();
    }
    // Método para excluir um usuário
    public function delete($id_usuario) {
        $query = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id_usuario", $id_usuario);

        return $stmt->execute();
    }
}
