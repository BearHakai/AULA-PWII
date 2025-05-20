<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User e Senha</title>
</head>
<body>
    <form method="POST" action="exDois.php">
        <h2>Infrome o Nome e a Senha</h2>
        <br><br>
        <p>A senha Não Pode ser Igual o Nome do Usuario</p>
        <br><br>
        Nome: <input type="text" name="user">
        <br><br>
        Senha: <input type="password" name="senha">
        <br><br>
        <input type="submit" value="Verificar">
    </form>
</body>
<?php
    $user = $_POST["user"];
    $senha = $_POST["senha"];
    
    while ($user === $senha) {
        echo"Informe uma Nova senha ou Usuário!!";
        $senha = "";
        $user = null;
    }
    if ($user != $senha) {
        echo "Cadastro Realizado com Sucesso!";
    }
?>
</html>