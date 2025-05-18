<?php
    $letra = $_POST["char"];

    if ($letra == "a" || $letra == "A" || $letra == "e" || $letra == "E" || $letra == "i" || $letra == "I" || $letra == "o" || $letra == "O" || $letra == "u" || $letra == "U") {
        echo"A letra que você inseriu é $letra e está letra é uma VOGAL.";
    }

    else if ($letra >= 0 || $letra <= 0) {
        echo "Você não inseriu uma Letra.";
    }

    else {
        echo "A letra que você inseriu é $letra e está letra é uma CONSOANTE.";
    }
?>