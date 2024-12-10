<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula do dia 10 de dezembro</title>
</head>
<body>
    <?PHP
    $texto = "Christine Helena do Nascimento Cordeiro";
    echo 'CRC32:', crc32($texto), "<br>";
    echo 'MD5:', md5($texto), "<br>";
    echo 'SHA1:', sha1($texto), "<br>";
    ?>
</body>
</html>