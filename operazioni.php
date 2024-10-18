<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio25</title>
</head>
<body>
    <?php
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        if ($n1 == "" || $n2 == "") {
            echo "<p style='background-color:red'>Errore, uno dei due numeri è vuoto</p>";

        }
        echo 
        "<ul>
            <li>$n1</li>
            <li>$n2</li>
        </ul>
        <table style='border:1px solid black';>
                <tr>
                    <th>Operazione</th>
                    <th>Risultato</th>
                </tr>
                <tr>
                    <td>Addizione</td>
                    <td>". intval($n1) + intval($n2) ."</td>
                </tr>
                <tr>
                    <td>Sottrazione</td>
                    <td>". intval($n1) - intval($n2) ."</td>
                </tr>
                <tr>
                    <td>Moltiplicazione</td>
                    <td>". intval($n1) * intval($n2) ."</td>
                </tr>
                <tr>
                    <td>Divisione</td>
                    <td>";
                    if ($n2 != 0) {
                        echo number_format(intval($n1) / intval($n2),2);
                    } else {
                        echo "<span style='color:red'>Impossibile</span>";
                    }
                    echo "</td>
                </tr>
        </table>;"
    ?>
</body>
</html>