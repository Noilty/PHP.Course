<?php
/**
 * @var $categories
 */
?>
<h1>Каталог товаров</h1>
<hr>
<div class="row">
    <div class="col-6">
        <div class="row">
            <div class="col-6">
                <h2>Категории</h2>
            </div>
            <div class="col-6 text-right">
                <a href="/admin/catalog.php?action=addCategory" class="btn btn-info">Добавить</a>
            </div>
        </div>

        <ul class="mt-5">
            <? if (count($categories) > 0) { ?>
                <? foreach ($categories as $item) { ?>
                    <li><?= $item['name'] ?></li>
                <? } ?>
            <? } else { ?>
                <small>Пока ничего нет</small>
            <? } ?>
        </ul>
    </div>
    <div class="col-6">
        <div class="row">
            <div class="col-6">
                <h2>Товары</h2>
            </div>
            <div class="col-6 text-right">
                <a href="/admin/catalog.php?action=addProduct" class="btn btn-info">Добавить</a>
            </div>
        </div>

        <ul class="mt-5">
            <? if (count($products) > 0) { ?>
                <? foreach ($products as $item) { ?>
                    <li><?= $item['name'] ?></li>
                <? } ?>
            <? } else { ?>
                <small>Пока ничего нет</small>
            <? } ?>
        </ul>
    </div>
</div>