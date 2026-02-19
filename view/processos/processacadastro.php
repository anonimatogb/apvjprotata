<?php
session_start();

require_once "../../db/database.php";
require_once "../../controller/UsuarioController.php";


$usuariocontroler = new UsuarioController($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuarioId = $usuariocontroler->cadastrar($nome, $email, $senha);

if (!$usuarioId) {
    $_SESSION['erro'] = "Este e-mail já está cadastrado";
    header("Location: ../cadastro.php");
    exit;
}

    $_SESSION['usuario'] = [
        'id' => $usuarioId,
        'nome' => $nome,
        'email' => $email
    ];


   header("Location: ../index.php");
    exit;
}

?>