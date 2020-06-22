<?php
require_once '../engine/core.php';

/**
 * Главная страница
 */
function routeIndex()
{
//    systemLog('Подключаем логирование');
//    $image = getItemArray('select * from gb.image order by id desc');
//    var_dump($image);
    echo render('site/home');
}

/**
 * Страницы ошибки
 */
function routeError()
{
//    systemLog('Подключаем логирование', 'error');
    echo render('site/error');
}

route();