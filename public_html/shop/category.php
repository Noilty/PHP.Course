<?php
require '../../engine/core.php';

/**
 * Выводим список категорий
 */
function routeIndex() {
    $categories = getItemArray("
    SELECT c.id AS id_category, c.name AS name_category, count(*) AS count_item 
    FROM product AS p 
    INNER JOIN category c ON p.category_id = c.id 
    GROUP BY p.category_id
    ");

    echo render('shop/categories', [
        'categories' => $categories
    ]);
}

/**
 * Выводим список товаров в категории
 */
function routeView() {
    $id = $_GET['id'];

    $prods = getItemArray(
        "select * from product where category_id={$id}"
    );

    echo render('shop/products', [
        'prods' => $prods
    ]);
}

route();