<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atv2.php" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="number" name="idade" placeholder="Digite sua idade">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        echo "Meu nome é $nome e tenho $idade anos";
    }
    ?>
</body>
</html>