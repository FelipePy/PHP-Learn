<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
</head>
<body>
    <?php echo "Hello World"; 
        mysqli_connect("db", "root", "secret_password_felipe") or die(mysqli_error());
        echo "\nConnected to MySQL";
        echo "\nVocẽ está conectado utilizando o navegador: ".$_SERVER['HTTP_USER_AGENT'];

        $name = "Felipe Sampaio da Mota";
        if (strpos(strtoupper($name), "MOTA") !== false) {
    ?>

    <h1>Olá, <?php echo $name; ?></h1>
    <?php
        } else {
    ?>
    <h1>Seu sobrenome não é Mota</h1>
    <?php
        }
    ?>
</body>
</html>
