<?php
$H1 = 'Text H1';
$TITLE = 'Text title';
$YEAR = date('Y');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $TITLE ?></title>
</head>
<body>
<h1><?= $H1 ?></h1>
<p><?= $YEAR ?></p>
<p>
    <?
    $a = 1;
    $b = 2;
    echo "A: {$a}, B: {$b} <br />";

    $a = $a + $b;   //3 = 1 + 2
    $b = $a - $b;   //1 = 3 - 2
    $a = $a - $b;   //2 = 3 - 1
    echo "A: {$a}, B: {$b}";
    ?>
</p>
</body>
</html>