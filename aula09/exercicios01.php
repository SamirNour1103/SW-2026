<?php
    $nomes = ["Vitor", "Pietro", "Pedro", "Fernando", "Samir"];

    foreach ($nomes as $chave => $valor) {
        echo"$chave => $valor <br>";
    }
    
    echo"<hr>";

    $nomes[] = "Lucas";

    foreach ($nomes as $chave => $valor) {
        echo"$chave => $valor <br>";
    }

    echo"<hr>";

?>