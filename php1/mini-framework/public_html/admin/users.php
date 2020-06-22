<?php
require '../../engine/core.php';

/**
 * Показываем всех пользователей
 */
function routeIndex()
{
    onlyAdmin(); //Только для админа

    $users = getItemArray('select * from users');

    echo render('admin/users/index', ['users' => $users], true, 'admin');
}

/**
 * Показать одного пользователя
 */
function routeView()
{
    onlyAdmin(); //Только для админа

    if (!isset($_GET['id'])) {
        echo render('site/error', ['text'=>'ID не указан']);
    }

    $userId = $_GET['id'];

    $user = getItem('select * from users where id='.$userId);
    if ($user) {
        echo render('admin/users/view', ['user' => $user], true, 'admin');
    } else {
        echo render('site/error', ['text' => 'Пользователь не найден']);
    }
}

route();