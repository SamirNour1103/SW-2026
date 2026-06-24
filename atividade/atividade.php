<?php

$alunos = [8.5, 6.0, 6.0, 9.0, 7.2, 5.5, 4.0, 10.0, 7.0, 5.0];

function classificarAluno($nota)
    {
        $aprovados = 0;
        $recuperacao = 0;
        $reprovados = 0;
        $somaNotas = 0;
        $resultado = '';
        foreach ($nota as $key => $value) {
                if ($value >= 7) {
                    $aprovados = $aprovados + 1;
                    $somaNotas = $somaNotas + $value;
                    $resultado =  $resultado .  "Aluno ". ($key +1).": Nota = $value Aprovado <br>";
                } elseif ($value >= 5) {
                    $recuperacao = $recuperacao +1;
                    $somaNotas = $somaNotas + $value;
                    $resultado =  $resultado . "Aluno ". ($key +1).": Nota = $value Recuperação <br>";
                } else {
                    $somaNotas = $somaNotas + $value;
                    $reprovados = $reprovados + 1;
                    $resultado =  $resultado .  "Aluno ". ($key +1).": Nota = $value Reprovado <br>";
                }
        }
        $notafinal = '';
        $notafinal = $notafinal."Alunos aprovados: $aprovados <br>";
        $notafinal = $notafinal. "Alunos de Recuperação: $recuperacao <br>";
        $notafinal = $notafinal. "Aluno Reprovados: $reprovados <br>";
        $totalalunos = count($nota);
        $media = $somaNotas / $totalalunos;
        $mediafinal = '';
        if ($media >= 7) {
            $mediafinal = "Turma com bom desempenho!";
        } else{
            $resultadomedia = "Turma precisa melhorar";

        }
        return ($resultado. $notafinal. $mediafinal);

    }

$resultado = classificarAluno($alunos);
echo $resultado

?>
