<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atv4.php" method="post">
        <input type="number" name="num" placeholder="Digite um número">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];
        for ($i = 1; $i < $num; $i++) {
            if ($i % 2 == 0) {
                echo $i."<br>";
            }
        }
    }
    ?>
</body>
</html>