<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo02 - Tabela</title>
    <style>
        table, tr, td, th{
            border: 1px solid blue;
        }
    </style>
</head>
<body>
    <h1>Tabela</h1>
   <table>
        <tr>
            <th>Rm</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

        <?php
            for($i=1; $i <= 2; $i++) {
                    echo " <tr>";
                    echo "<td>Linha $i Coluna 1</td>";
                    echo "<td>Linha $i Coluna 2</td>";
                    echo "<td>Linha $i Coluna 3</td>";
                    echo "</tr>";
                }

        ?>
   </table>
</body>
</html>