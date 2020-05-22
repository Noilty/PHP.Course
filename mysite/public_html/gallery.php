<?php
require_once '../engine/core.php';

/**
 * Все изображения
 */
function routeAll() {
    echo render('gallery/all');
}

/**
 * Одно изоброжение
 */
function routeOne() {
    echo render('gallery/one');
}

/**
 * Страницы ошибки
 */
function routeError() {
    echo render('site/error');
}

route();