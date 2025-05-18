<?php
    $numberUm = $_POST["numberUm"];
    $numberDois = $_POST["numberDois"];
    $numberTres = $_POST["numberTres"];

    if($numberUm >  $numberDois && $numberUm > $numberTres && $numberDois <  $numberTres){
        echo "O $numberUm é o maior número e o menor é o $numeroDois";
    }

    else if($numberUm >  $numberDois && $numberUm > $numberTres && $numberDois >  $numberTres){
        echo "O $numberUm é o maior número e o menor é o $numeroTres";
    }

    else if($numberUm <  $numberDois && $numberDois > $numberTres && $numberUm > $numberTres){
        echo "O $numberDois é o maior número e o menor é o $numeroTres";
    }

    else if($numberUm <  $numberDois && $numberDois > $numberTres && $numberUm < $numberTres){
        echo "O $numberDois é o maior número e o menor é o $numeroUm";
    }

    else if($numberTres >  $numberDois && $numberTres > $numberUm && $numberDois > $numberUm){
        echo "O $numberTres é o maior número e o menor é o $numeroUm";
    }

    else if($numberTres >  $numberDois && $numberTres > $numberUm && $numberDois < $numberUm){
        echo "O $numberTres é o maior número e o menor é o $numeroDois";
    }

    else if($numberUm ==  $numberDois && $numberDois > $numberTres){
        echo "O $numberUm é o maior número e o menor é o $numeroTres";
    }

    else if($numberUm ==  $numberTres && $numberDois < $numberTres){
        echo "O $numberUm é o maior número e o menor é o $numeroDois";
    }

    else if($numberTres ==  $numberDois && $numberDois > $numberUm){
        echo "O $numberDois é o maior número e o menor é o $numeroUm";
    }

    else if($numberUm ==  $numberDois && $numberDois == $numberTres){
        echo "O $numberDois é o maior número e o menor é o $numeroTres";
    }

    else{
        echo "Valor Inválido, insira novamente!!";
    }
?>