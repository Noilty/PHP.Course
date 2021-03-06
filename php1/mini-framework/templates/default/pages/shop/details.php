<?php
/**
 * @var array $item
 */
/**
 * @var int $sale
 */
?>
<h1><?= $item['name'] ?></h1>

<p>
    <?= $item['description'] ?>
</p>

<p>
    Цена: <?= $item['price'] ?>p
    <? if ($sale) { ?>
        (Со скидкой <?= $sale ?>%: <?= $item['price'] - ($item['price'] * ($sale / 100)) ?>р)
    <? } ?>
</p>

<p>
    Осталось: <?= $item['quantity'] ?>
</p>

<p>
    <button class="btn btn-info" id="add-product" data-id="<?= $item['id'] ?>">
        Добавить в корзину
    </button>
</p>