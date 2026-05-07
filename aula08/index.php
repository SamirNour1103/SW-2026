<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2 alig="center">Tabela com Cores Alternadas</h2>

    <table>

        <?php
        for($linha = 1; $linha <= 8; $linha++) {

            if($linha % 2 == 0) {
                $classe = "par";
            } else {
                $classe = "impar";
            }

            echo "<tr class='$classe'>";

            for($coluna = 1; $coluna <= 4; $coluna++) {
                echo "<td>L$linha C$coluna</td>";
            }

            echo "</tr>";
        }
        ?>
    
    </table>
        
    <h2>Gerar Tabela Dinâmica</h2>

    <form method="POST">
        Linhas:
        <input type="number" name="linhas" required>

        Colunas:
        <input type="number" name="colunas" required>

        <button type="submit">Gerar</button>
    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $linhas = $_POST["linhas"];
            $colunas = $_POST["colunas"];

            echo "<table>";

            $i = 1;

            while($i <= $linhas) {

                echo "<tr>";

                $j = 1;

                while($j <= $colunas) {

                    echo "<td>L$i C$j</td>";

                    $j++;
                }

                echo "</tr>";

                $i++;
            }

            echo "</table>";
        }

    ?>

        
    <h2 alig="center">Tabela de Produtos</h2>

    <?php

        $produtos = [
            [
                "nome" => "Iphone 17",
                "preco" => "11.249,00",
                "categoria" => "Eletrônico"
            ],

            [
                "nome" => "Cesta básica",
                "preco" => "77,22",
                "categoria" => "Alimento"
            ],

            [
                "nome" => "Camiseta do Brasil",
                "preco" => "449,99",
                "categoria" => "Roupa"
            ]
        ];

        echo "<table>";

        echo "
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
        ";

        foreach($produtos as $produto) {

            $classe = $produto["categoria"];

            echo "<tr class='$classe'>";

            echo "<td>" . $produto["nome"] . "</td>";
            echo "<td>R$ " . $produto["preco"] . "</td>";
            echo "<td>" . $produto["categoria"] . "</td>";

            echo "</tr>";
        }

        echo "</table>";

    ?>
</body>
</html>