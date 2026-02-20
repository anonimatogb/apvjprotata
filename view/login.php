
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>

    <form method="post" action="./processos/processologin.php">
        <label for="email">E-mail:</label>
        <input type="email" name="email" placeholder="ex.: exemplo@hotmail.com" required>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="ex.: 123" required>
        <input type="submit">
        <a href="cadastro.php">Não possuo uma conta</a>
    </form>

</body>

</html>

<?php
if (isset($_SESSION['erro'])) {
    echo "<p style='color:red'>".$_SESSION['erro']."</p>";
    unset($_SESSION['erro']);
}
?>
