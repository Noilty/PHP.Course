<?php
require_once '../engine/core.php';

/**
 * Все изображения
 */
function routeIndex() {
    fillDataBase();
    $images = getItemArray('select name, view from gb.image order by view desc');

    echo render('gallery/all', ['images' => $images]);
}

/**
 * Одно изоброжение
 */
function routeOne() {
    $image = getItem('select * from image where name="'.$_GET['image'].'"');

    if (!empty($image)) {
        // Увеличить $image['view'] на +1 -> execute()
        $view = $image['view'];
        execute('update gb.image set view=' . ($view + 1) . ' where id=' . $image['id']);
        $image = getItem('select * from image where name="' . $_GET['image'] . '"');

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