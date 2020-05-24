<?php
$items = [
    ['label' => 'Главная', 'url' => '/'],
    ['label' => 'Галерея', 'url' => '/gallery.php'],
    ['label' => 'Каталог', 'url' => '/shop/category.php'],
    ['label' => 'Админка', 'url' => '/admin', 'role' => 'admin'],
    ['label' => 'Личный кабинет', 'url' => '/user.php', 'role' => '@'],
    ['label' => 'Регистрация', 'url' => '/user.php?action=register', 'role' => '?'],
    ['label' => 'Вход', 'url' => '/user.php', 'role' => '?'],
    ['label' => 'Выход', 'url' => '/user.php?action=logout', 'role' => '@'],
    ['label' => '[Goods]', 'url' => '/goods.php'],
];

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="https://sun9-32.userapi.com/c622524/v622524033/29280/MgpMjXu2mWU.jpg" alt="<?= $config['name'] ?>" height="30" class="mr-2">
        <?= $config['name'] ?>
    </a>
    <div class="navbar-right" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <? foreach ($items as $link) { ?>
                <? if (isset($link['role'])) { ?>
                    <? if (userHasRole($link['role'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                        </li>
                    <? } ?>
                <? } else {  ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                    </li>
                <? } ?>
            <? } ?>
        </ul>
    </div>
</nav>