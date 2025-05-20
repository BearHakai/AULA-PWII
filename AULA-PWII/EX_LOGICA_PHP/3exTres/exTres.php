<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form de Dados</title>
</head>
<body>
    <form method="POST" action="exDois.php">
        <h2>Infrome os Dados Solicitados</h2>
        <br><br>
        <p>O Nome Tem que ter Mais do que 3 Letras</p>
        <br><br>
        Nome: <input type="text" name="nome">
        <br><br>
        <p>Precisar ser mais novo que 150 Anos</p>
        <br><br>
        Idade: <input type="number" name="idade">
        <br><br>
        <p>Não pode receber R$ 0,00</p>
        <br><br>
        Salario: <input type="number" name="salario">
        <br><br>
        <p>Sexo: "f" ou "m"</p>
        <br><br>
        Sexo: <input type="text" name="genero">
        <br><br>
        <p>Estado Civil ('s'/'c'/'v'/'d')</p>
        <br><br>
        Estado Civil: <input type="text" name="eCivil">
        <br><br>
        <input type="submit" value="Verificar">
    </form>
</body>
<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $salario = $_POST["salario"];
    $sexo = $_POST["genero"];
    $eCivil = $_POST["eCivil"];

    while (strlen($nome) <= 3){
        echo "Leia e Ponha o Nome Novamente";
        empty($nome);
    }

    while($idade < 0 || $idade > 150){
        echo "Leia e Ponha a Idade Novamente";
        empty($idade);
    }

    while($salario <= 0){
        echo "Leia e Ponha a Salario Novamente";
        empty($salario);
    }

    while($sexo != "f" || $sexo != "F" || $sexo != "Feminino" || $sexo != "feminino" || $sexo != "m" || $sexo != "M" || $sexo != "Masculino" || $sexo != "masculino"){
        echo "Leia e Ponha o Genero Novamente";
        empty($sexo);
    }

    while($eCivil != "s" || $eCivil != "S" || $eCivil != "c" || $eCivil != "C" || $eCivil != "v" || $eCivil != "V" || $eCivil != "d" || $eCivil != "D"){
        echo "Leia e Ponha o Estado Civil Novamente";
        empty($eCivil);
    }

    if(!empty($nome) && !empty($idade) && !empty($salario) && !empty($sexo) && !empty($eCivil)){
        echo "\nNOme: $nome\nIdade: $idade\nSalario: R$ $salario\nGenero: $sexo\nEstado Civil: $eCivil";
    }

?>
</html>