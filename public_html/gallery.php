<?php
require_once '../engine/core.php';

/**
 * Все изображения
 */
function routeIndex() {
    global $config;
    $images = scandir($config['app']['imagesPath']);

    foreach ($images as $num => $img) {
        if ($img == '.' || $img == '..') {
            unset($images[$num]);
        }
    }

    echo render('gallery/all', ['images' => $images]);
}

/**
 * Одно изоброжение
 */
function routeOne() {
    global $config;
    $filePath = $config['app']['imagesPath'] . '/' . $_GET['image'];

    if (file_exists($filePath)) {
        echo render('gallery/one', ['images' => $_GET['image']]);
    } else {
        echo render('site/error');
    }
}

/**
 * Страницы ошибки
 */
function routeError() {
    echo render('site/error');
}

route();