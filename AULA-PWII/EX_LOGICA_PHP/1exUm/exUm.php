<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero de 1 a 10</title>
</head>
<body>
    <form method="POST" action="exUm.php">
        <h2>Informe um Numero de 1 Até 10</h2>
        <br>
        Numero: <input type="number" name="number">
        <br><br>
        <input type="submit" value="Verificar">
    </form>
</body>
<?php
    $number = $_POST["number"];
    
    for ($i = $_POST["number"]; $i < 1 || $i > 10; $i = 1) {
        echo"Informe o Número novamente";
        $number = null;
    }
     if($number >= 1 && $number <= 10){
        echo "Número: $number <br> Número Válido!!";
    }
    else {
        echo "";
    }
?>
</html>