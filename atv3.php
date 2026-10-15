<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atv3.php" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="date" name="data_nascimento" placeholder="Digite sua data de nascimento">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $data_nascimento = $_POST['data_nascimento'];
        $idade = date_diff(date_create($data_nascimento), date_create('now'))->y;
        if ($idade >= 18) {
            echo "Meu nome é $nome e tenho $idade anos. Sou maior de idade.";
        } else {
            echo "Meu nome é $nome e tenho $idade anos. Sou menor de idade.";
        }
    }
    ?>
</body>
</html>