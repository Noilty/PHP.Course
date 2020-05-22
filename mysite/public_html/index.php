<?php
require_once '../engine/core.php';

function routeIndex() {
//    systemLog('Подключаем логирование');
    echo render('site/home');
}

function routeError() {
//    systemLog('Подключаем логирование', 'error');
    echo render('site/error');
}

route();