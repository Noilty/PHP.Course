<?php
require_once '../engine/core.php';

/**
 * Главная страница
 */
function routeIndex() {
//    systemLog('Подключаем логирование');
    echo render('site/home');
}

/**
 * Страницы ошибки
 */
function routeError() {
//    systemLog('Подключаем логирование', 'error');
    echo render('site/error');
}

route();