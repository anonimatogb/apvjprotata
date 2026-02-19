<?php

class UsuarioModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function cadastrar($nome, $email, $senha)
    {
        try{

        $sql = "INSERT INTO usuarios (nome, email, senha) 
            VALUES (:nome, :email, :senha)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();

        return $this->pdo->lastInsertId();

    } catch (PDOException $e) {

        if ($e->getCode() == 23000) {
            return false;
        }

        throw $e; 
    }
}


    public function buscar($email)
    {
        $sql = "SELECT * FROM usuarios WHERE email = :email LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
