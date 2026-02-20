<?php

require_once "C:/turma2/xampp/htdocs/apvjprotata/model/UsuarioModel.php";

class UsuarioController
{
    private $usuarioModel;

    public function __construct($pdo)
    {
        $this->usuarioModel = new UsuarioModel($pdo);
    }

    public function cadastrar($nome, $email, $senha)
    {
        return $this->usuarioModel->cadastrar($nome, $email, $senha);

        if ($this->usuarioModel->buscar($email)) {
            return false;
        }
    }

    public function login($email, $senha)
    {
        $usuario = $this->usuarioModel->buscar($email);

        if (!$usuario) {
            return false;
        }
        if ($senha !== $usuario['senha']) {
            return false;
        }
        return $usuario;
    }
}
