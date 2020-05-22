<?php

/**
 * Функция для автоматического запуска нужного действия
 * через $_GET параметр action
 */
function route() {
    // Берем название функции из $_GET
    $action = (isset($_GET['action'])) ? $_GET['action'] : 'index';

    // Добавляем префикс route к Action => routAction()
    $action = 'route' . ucfirst($action);

    // Проверка существования функции в файлах
    if (function_exists($action)) {
        call_user_func($action);
    } else {
//        echo render('site/error');
        call_user_func('routeError');
    }
}