<?php /** @var array $prods */?>
<h1>Товары в категории</h1>
<ul>
    <? foreach ($prods as $product) { ?>
        <li>
            <a href="/shop/product.php?id=<?= $product['id'] ?>">
                <?= $product['name'] ?>
            </a>
        </li>
    <? } ?>
</ul>