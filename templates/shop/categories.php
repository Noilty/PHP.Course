<?php
/** @var array $categories */
?>
<h1>Категории</h1>
<ul>
    <? foreach ($categories as $item) { ?>
        <li>
            <a href="/shop/category.php?action=view&id=<?= $item['id_category'] ?>">
                <span><?= $item['name_category'] ?></span>
            </a>
            (<?= $item['count_item'] ?>)
        </li>
    <? } ?>
</ul>