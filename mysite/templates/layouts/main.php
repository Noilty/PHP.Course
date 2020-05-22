<?php
/**
 * @var string $content - содержимое страницы на отрисовку
 */
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $config['name'] ?></title>
    <? foreach ($config['assets']['css'] as $file) { ?>
        <link rel="stylesheet" href="<?= $file ?>">
    <? } ?>
</head>
<body>
<?//= render('widgets/navbsr', [], false) ?>

<div class="container">
    <div class="py-3">
        <?= $content ?>
    </div>
</div>

<? foreach ($config['assets']['js'] as $file) { ?>
    <script src="<?= $file ?>"></script>
<? } ?>
</body>
</html>