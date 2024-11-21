<?php
session_start();

if (!isset($_SESSION['frasi_massima_importanza'])) {
    $_SESSION['frasi_massima_importanza'] = [];
}
if (!isset($_SESSION['totale_parole'])) {
    $_SESSION['totale_parole'] = 0;
}
if (!isset($_SESSION['totale_caratteri'])) {
    $_SESSION['totale_caratteri'] = 0;
}

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
    <title>Riepilogo</title>
    <style>
        h1 {
            font-family: 'MedievalSharp', cursive;
            color: #8B4513;
        }

        body {
            font-family: 'MedievalSharp', cursive;
            margin: auto;
            text-align: center;
            background-color: bisque;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #8B4513;
        }

        th {
            background-color: #8B4513;
            color: white;
        }

        ul {
            text-align: left;
            list-style-type: disc;
            margin: 20px auto;
            padding: 0;
            width: 50%;
        }

        li {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h1>Riepilogo</h1>

    <h2>Frasi con Massima Importanza:</h2>
    <?php
    if (count($_SESSION['frasi_massima_importanza']) > 0) {
        echo "<ul>";
        foreach ($_SESSION['frasi_massima_importanza'] as $frase) {
            echo "<li>$frase</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Nessuna frase con importanza massima.</p>";
    }
    ?>

    <h2>Statistiche:</h2>
    <table>
        <tr>
            <th>Totale Parole</th>
            <th>Totale Caratteri</th>
        </tr>
        <tr>
            <td><?php echo $_SESSION['totale_parole']; ?></td>
            <td><?php echo $_SESSION['totale_caratteri']; ?></td>
        </tr>
    </table>

    <p><a href="frase.html">Torna alla pagina Frase</a></p>
</body>

</html>
