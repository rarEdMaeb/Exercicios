<?php

$numerosMega = [];
$dataHoje = new DateTime('now');

for ($i = 0; $i < 6; $i++) {
    $num = rand(1, 60);
    if (!in_array($num, $numerosMega)) {
        $numerosMega[] = $num;
    } else {
        while (in_array($num, $numerosMega)) {
            $num = rand(1, 60);
        }
        $numerosMega[] = $num;
    }
}

echo "Números sorteados: " . implode(", ", $numerosMega);

/**
 * .
 *
 * @param string $filename 
 * @param string $content  
 */
function downloadTxtFile($filename, $content) {
    if (ob_get_length()) ob_clean();

    header('Content-Type: text/plain; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . strlen($content));
    header('Cache-Control: no-cache, must-revalidate');
    echo $content;
    exit;
}

function salvarArquivo() {
    global $numerosMega, $dataHoje;
    $arquivo = fopen("megasena.txt", "a");
    fwrite($arquivo, "Data: " . $dataHoje->format('d/m/Y H:i:s') . " - Números sorteados: " . implode(", ", $numerosMega) . "\n");
    fclose($arquivo);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['download_txt'])) {
    $text = "Data: " . $dataHoje->format('d/m/Y H:i:s') . " - Números sorteados: " . implode(", ", $numerosMega) . "\n";
    downloadTxtFile('document.txt', $text);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TXT</title>
</head>
<body>

    <form method="POST">
        <br><br>
        <button type="submit" name="download_txt">Salvar como .txt</button>
    </form>

</body>
</html>
