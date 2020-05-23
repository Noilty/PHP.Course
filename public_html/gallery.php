<?php
require_once '../engine/core.php';

/**
 * Все изображения
 */
function routeIndex() {
    // order by view
    $imagesSql = getItemArray('select name from gb.image');
    $images = [];
    foreach ($imagesSql as $item) {
        $images[] = $item['name'];
    }

    echo render('gallery/all', ['images' => $images]);
}

/**
 * Одно изоброжение
 */
function routeOne() {
    $image = getItem('select * from image where name="'.$_GET['image'].'"');

    if (!empty($image)) {
        // Увеличить $image['view'] на +1 -> execute()

        echo render('gallery/one', ['image' => $image]);
    } else {
        echo render('site/error');
    }
}

function routeFill() {
    fillDataBase();
    echo render('site/success');
}

/**
 * Страницы ошибки
 */
function routeError() {
    echo render('site/error');
}

route();