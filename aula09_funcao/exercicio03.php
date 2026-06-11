<?php
    function calcularAutonomia($capacidadeBateria, $consumoPorMinuto) {
        $resultado = $capacidadeBateria / $consumoPorMinuto;
        return "Tempo estimado de voo: $resultado minutos.";
    }

    $capacidadeBateria = 50;
    $consumoPorMinuto = 5;

    $retorno = calcularAutonomia($capacidadeBateria, $consumoPorMinuto); 
    echo $retorno;

?>