<?php
/** @var array $cats */
?>
<h1>Категории</h1>
<ul>
    <? foreach ($cats as $category) { ?>
        <li>
            <a href="/shop/category.php?action=view&id=<?= $category['id'] ?>">
                <?= $category['name'] ?>
            </a>
        </li>
    <? } ?>
</ul>