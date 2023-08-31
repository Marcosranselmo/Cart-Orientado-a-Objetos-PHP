<?php

if (isset($_GET['id'])) {
    $id = strip_tags($_GET['id']);
    var_dump($di);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Geladeira <a href="?id=1"></a></li>
        <li>Geladeira <a href="?id=1"></a></li>
        <li>Geladeira <a href="?id=1"></a></li>
        <li>Geladeira <a href="?id=1"></a></li>
    </ul>
</body>
</html>