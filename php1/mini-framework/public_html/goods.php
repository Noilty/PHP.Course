<?php
require_once '../engine/core.php';

function routeIndex()
{
    echo render('goods/index');
}

/**
 * Демонстрация одного товара
 */
function routeOne()
{
    $itemId = (string)htmlspecialchars(strip_tags($_GET['item']));
    $item = getItem('select * from gb.goods where id="'.$itemId.'"');

    echo render('goods/one', ['item' => $item]);
}

/**
 * Демонстрация всех товара
 */
function routeAll()
{
    $items = getItemArray('select * from gb.goods');

    echo render('goods/all', ['items' => $items]);
}

/**
 * Создание нового товара
 */
function routeCreate()
{
    if (!empty($_POST)) {
        // Создаем товар
        $price = (float)$_POST['price'];
        $name = $_POST['name'];
        $create_at = time();

        execute('insert into gb.goods 
                        (`price`, `created_at`, `name`) value 
                        ("'.$price.'", "'.$create_at.'", "'.$name.'")');
        header("Location: goods.php");
    }

    echo render('goods/create');
}

/**
 * Изменение товара
 */
function routeUpdate()
{
    echo render('goods/update');
}

/**
 * Удаление товара
 */
function routeDelete()
{
    if (!empty($_GET['id'])) {
        execute('delete from gb.goods where id=' . $_GET['id']);
        header("Location: goods.php");
    }

    echo render('goods/delete');
}

route();