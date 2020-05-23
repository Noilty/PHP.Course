<?php
$items = [
    ['label' => 'Главная', 'url' => '/'],
    ['label' => 'Галерея', 'url' => 'gallery.php'],
    ['label' => 'Товары', 'url' => 'goods.php'],
];

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="/images/logo.jpg" alt="<?= $config['name'] ?>" height="30" class="mr-2">
        <?= $config['name'] ?>
    </a>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <?php foreach ($items as $link) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $link['url'] ?>"><?= $link['label'] ?></a>
                </li>
            <?php } ?>
        </ul>
        <span class="navbar-text">Welcome to home, <b>Noilty</b>!</span>
    </div>
</nav>