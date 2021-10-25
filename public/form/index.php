<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);

    //Super variavel responsavel pela apresentação de anexos enviados via POST|form
    var_dump($_FILES);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="nome">
        <input type="email" name="email">
        <input type="color" name="color">
        <input type="date" name="date">
        <input type="datetime" name="datetime">
        <input type="file" name="file">
        <input type="number" name="number">
        <input type="submit" value="enviar">
    </form>
</body>
</html>