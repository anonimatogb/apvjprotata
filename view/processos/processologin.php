<?php

session_start();
require_once("../../db/database.php");
require_once("../../controller/UsuarioController.php");

$controller = new UsuarioController($pdo);

if($_SERVER["REQUEST_METHOD"] == "POST"){

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = $controller->login($email, $senha);

if($usuario){
    $_SESSION['usuario'] = [
        'id' => $usuario['id'],
        'nome' => $usuario['nome'],
        'email' => $usuario['email'],

    ];

     header("Location: ../index.php");
    exit;
}else{
        $_SESSION['erro'] = "Email ou senha inválidos";
        header("Location: ../login.php");
        exit;
}}