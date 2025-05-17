<?php
    $numberOne = $_POST["numberOne"];
    $numberTwo = $_POST["numberTwo"];

    if ($numberOne > $numberTwo){
        echo"O maior Número é o $numberOne e o meno número é o $numberTwo";
    }

    else if ($numberOne < $numberTwo){
        echo"O maior Número é o $numberTwo e o meno número é o $numberOne";
    }

    else if ($numberOne == $numberTwo){
        echo"Os dois números são inguais, sendo $numberOne";
    }

    else {
        echo "Valos inválido, tente novamente!!";
    }
?>