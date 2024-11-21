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

    $frase = isset($_POST['frase']) ? $_POST['frase'] : '';
    $importanza = isset($_POST['importanza']) ? $_POST['importanza'] : '';

    if ($importanza == 4) {
        $_SESSION['frasi_massima_importanza'][] = $frase;
    }

    $_SESSION['totale_parole'] += str_word_count($frase);
    $_SESSION['totale_caratteri'] += strlen($frase);

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
    <title>Frase ricevuta</title>
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
    </style>
</head>

<body>
    <h1>Frase ricevuta:</h1>
    <p><strong>Frase:</strong> <?php echo $frase; ?></p>
    <p><strong>Importanza:</strong> <?php echo $importanza; ?></p>

    <p><a href="frase.html">Torna alla pagina Frase</a></p>
</body>

</html>
